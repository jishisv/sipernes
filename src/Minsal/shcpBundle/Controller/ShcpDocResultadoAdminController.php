<?php
namespace Minsal\shcpBundle\Controller;
use Sonata\AdminBundle\Controller\CRUDController as Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Minsal\Metodos\Funciones;
use Minsal\shcpBundle\Entity\MntPaciente;
use Symfony\Component\HttpFoundation\Session\Session;

class ShcpDocResultadoAdminController extends Controller
{
   
    public function createAction()
    {
        $object = $this->admin->getNewInstance();
        $request = $this->getRequest();
        $session = $this->get('session');
        $form = $this->admin->getForm();
        $em = $this->getDoctrine()->getManager();
        $conn = $this->get('database_connection');
        //setear session
        $this->setearsession();
        //recuperando variable de session
        $tipo=$session->get('tipo');
        $tipo_empleado=$session->get('tipo_empleado');
        $id_expmaterno=$session->get('id_expmaterno');
        //LLAMADA A FUNCION PARA VERIFICAR EL ULTIMO REGISTRO INGRESADO PARA EL PACIENTE
        $cant_tamizaje=$this->verficarRegistro($id_expmaterno,1);
        //SI EXISTE DATO REDIRIGIR A SHOW EXPMATERNO, SINO CONTINUAR CON FILTRO PARA ESE REGISTRO
        if($cant_tamizaje['contador']==0){
            $this->addFlash(
                     'sonata_flash_error',
                     'Tiene una hoja filtro abierta, llene el tamizaje correspondiente antes de ingresar una nueva'
                    );
            return $this->redirectTo($id_expmaterno);
        } 
        //ESTABLECIENDO SECCION DE PREGUNTAS SEGUN TIPO EMPLEADO
        if($tipo_empleado==2){
            $seccion=1;
            $cuestionario1='E';
        }
        else
        {
            $seccion=2;
            $cuestionario1='M';
        }
        $q="SELECT id, preg_detalle, preg_tipo, preg_estado, preg_seccion
            FROM shcp_doc_ctl_pregunta where preg_tipo='$tipo' and preg_seccion='$seccion'";
        
        $resultado = $conn->query($q); 
        $npregunta=$resultado->rowCount();
        $datos_paciente="select c.*,e.numero from shcp_exp_materno c, mnt_expediente e
                            where c.id_mnt_expediente=e.id and c.id=$id_expmaterno";
        $paciente=$conn->query($datos_paciente);
        $ncontrolsqle="select count(resul_num_control) as numero from shcp_doc_resultado where resul_hoja_filtro ilike '%e%' and id_exp_materno=$id_expmaterno";
        $ncontrolresult = $conn->query($ncontrolsqle);
        $ncontrol=$ncontrolresult->fetch();
        $control_e=$ncontrol['numero']+1;
        //numero de control del medico
        $ncontrolsqlm="select count(resul_num_control) as numero from shcp_doc_resultado where resul_hoja_filtro ilike '%m%' and id_exp_materno=$id_expmaterno";
        $ncontrolresultm = $conn->query($ncontrolsqlm);
        $ncontrolm=$ncontrolresultm->fetch();
        $control_m=$ncontrolm['numero']+1;
        if($tipo_empleado==2 and $control_e!=1){
            $this->addFlash(
                        'sonata_flash_error',
                     'Su Usuario solo puede ingresar una hoja filtro'
                    );
            return $this->redirectTo($id_expmaterno);
        }
        if($tipo_empleado==2){
            $control=$control_e;
        }
        else{
            $control=$control_m;
        }
            
        //SETEANDO EL NUMERO DE CONTROL
        $object->setresulNumControl($control);
        
        if($tipo==2){
            $sql="select id from shcp_doc_resultado where id_exp_materno=$id_expmaterno ORDER BY id DESC LIMIT 1";
            $respuesta = $conn->query($sql);
            $id_docresultado=$respuesta->fetch();
            $id=$id_docresultado['id'];
            //var_dump($id_docresultado);
            $object = $this->admin->getObject($id);
        }
        $this->admin->setSubject($object);
        $form->setData($object);
        $view = $form->createView();
        /**********************************************
        * TOMADO DEL CRUDCONTROLLER
        */
        if ($this->getRestMethod()== 'POST') {
            
            //OBTENIENDO EL RESULTADO DEL FORMULARIO 
            $cuestionario='';
            for($i=0;$i<$npregunta;$i++){
                $cuestionario .= $request->get('pregunta'.$i);
             }         
             $cuestionario.=$cuestionario1;
             //OBTENIENDO EL OBJETO EXPMATERNO
            $expmaterno = $em->getRepository('MinsalshcpBundle:ShcpExpmaterno')->find($id_expmaterno);
            //RECOPILANDO INFORMACION DEL FORMULARIO DOCRESULTADO
            $form->submit($this->get('request'));
            //EVALUANDO EN QUE CAMPO INSERTAR, 1=FILTRO, 2=TAMIZAJE
            //SETANDO EL ID DE EXPMATERNO   
             $object->setIdExpMaterno($expmaterno);
            if($tipo==1){         
                $object->setresulHojaFiltro($cuestionario);
                }
           
             
             //INGRESANDO LA DATA
            try {
                $object = $this->admin->create($object);
                if ($this->isXmlHttpRequest()) {
                return $this->renderJson(array(
                'result' => 'ok',
                'objectId' => $this->admin->getNormalizedIdentifier($object)
                ));
                $session->remove('tipo'); 
                $session->remove('id_expmaterno'); 
                }
                $this->addFlash(
                'sonata_flash_success',
                $this->admin->trans(
                'flash_create_success',
                array('%name%' => $this->admin->toString($object)),
                'SonataAdminBundle'
                )
                );
            // redirect to edit mode
            return $this->redirectTo($id_expmaterno);
            } catch (ModelManagerException $e) {
            $this->handleModelManagerException($e);
            $isFormValid = false;
            }
        }
        $view = $form->createView();
        // set the theme for the current Admin Form
        $this->get('twig')->getExtension('form')->renderer->setTheme($view, $this->admin->getFormTheme());
        /****************************
        *
        */
        return $this->render($this->admin->getTemplate('create'), array(
        'action' => 'create',
        'form' => $view,
        'object' => $object,
        'ctlpregunta'=>$resultado,
        'paciente'=>$paciente,
        'tipo'=>$tipo    
        ));
}

public function editAction($id = null)
    {
        // the key used to lookup the template
        $templateKey = 'create';
        //*****************************************************
        $request = $this->getRequest();
         $session = $this->get('session');
       
        
        $em = $this->getDoctrine()->getManager();
        $conn = $this->get('database_connection');
        //setear session
        $this->setearsession();
        //recuperando variable de session
        $tipo=$session->get('tipo');
        $id_expmaterno=$session->get('id_expmaterno');
         $tipo_empleado=$session->get('tipo_empleado');
        //ESTABLECER PREGUNTAS SEGUN EMPLEADO
        if($tipo_empleado==2){
            $seccion=1;
            $cuestionario1='E';
        }
        else
        {
            $seccion=2;
            $cuestionario1='M';
        }
       
        $q="SELECT id, preg_detalle, preg_tipo, preg_estado, preg_seccion
            FROM shcp_doc_ctl_pregunta where preg_tipo='$tipo' and preg_seccion='$seccion'";
            $resultado = $conn->query($q);
        $npregunta=$resultado->rowCount();
        //var_dump($npregunta);
        $datos_paciente="select c.*,e.numero from shcp_exp_materno c, mnt_expediente e
                            where c.id_mnt_expediente=e.id and c.id=$id_expmaterno";
        $paciente=$conn->query($datos_paciente);
        if($tipo==2){
            $sql="select id from shcp_doc_resultado where id_exp_materno=$id_expmaterno ORDER BY id DESC LIMIT 1";
            $respuesta = $conn->query($sql);           
            $id_docresultado=$respuesta->fetch();
            $id=$id_docresultado['id'];
            //var_dump($id_docresultado);
            $object = $this->admin->getObject($id);
        }
        //*****************************************************
       // $id = $this->get('request')->get($this->admin->getIdParameter());
        //$object = $this->admin->getObject($id);

        if (!$object) {
            $this->addFlash(
                        'sonata_flash_error',
                     'Debe ingresar Hoja Filtro primero'
                    );
            return $this->redirectTo($id_expmaterno);
        }
        //LLAMADA A FUNCION PARA VERIFICAR EL ULTIMO REGISTRO INGRESADO PARA EL PACIENTE
        $cant_tamizaje=$this->verficarRegistro($id_expmaterno,2);
        //SI EXISTE DATO REDIRIGIR A SHOW EXPMATERNO, SINO INGRESAR TAMIZAJE PARA ESE REGISTRO
        if($cant_tamizaje['contador']!=0){
            $this->addFlash(
                        'sonata_flash_error',
                     'Debe ingresar Hoja Filtro primero'
                    );
            return $this->redirectTo($id_expmaterno);
        }
        if (false === $this->admin->isGranted('EDIT', $object)) {
            throw new AccessDeniedException();
        }

        $this->admin->setSubject($object);

        /** @var $form \Symfony\Component\Form\Form */
        $form = $this->admin->getForm();
        $form->setData($object);

        if ($this->getRestMethod() == 'POST') {
            
            //OBTENIENDO EL RESULTADO DEL FORMULARIO 
            $cuestionario='';
            for($i=0;$i<$npregunta;$i++){              
                $cuestionario .= $request->get('pregunta'.$i);
             }         
             $cuestionario.=$cuestionario1;
             //OBTENIENDO EL OBJETO EXPMATERNO
            $expmaterno = $em->getRepository('MinsalshcpBundle:ShcpExpmaterno')->find($id_expmaterno);
            //RECOPILANDO INFORMACION DEL FORMULARIO DOCRESULTADO
            $form->submit($this->get('request'));
            $object->setresulTamizaje($cuestionario);
         
            
            $isFormValid = $form->isValid();

            // persist if the form was valid and if in preview mode the preview was approved
            if ($isFormValid && (!$this->isInPreviewMode() || $this->isPreviewApproved())) {

                try {
                    $session->remove('tipo'); 
                    $session->remove('id_expmaterno'); 
                    $object = $this->admin->update($object);

                    if ($this->isXmlHttpRequest()) {
                        
                        return $this->renderJson(array(
                            'result'    => 'ok',
                            'objectId'  => $this->admin->getNormalizedIdentifier($object)
                        ));
                    }

                    $this->addFlash(
                        'sonata_flash_success',
                        $this->admin->trans(
                            'flash_edit_success',
                            array('%name%' => $this->admin->toString($object)),
                            'SonataAdminBundle'
                        )
                    );

                    // redirect to edit mode
                    return $this->redirectTo($id_expmaterno);

                } catch (ModelManagerException $e) {
                    $this->handleModelManagerException($e);

                    $isFormValid = false;
                }
            }

            // show an error message if the form failed validation
            if (!$isFormValid) {
                if (!$this->isXmlHttpRequest()) {
                    $this->addFlash(
                        'sonata_flash_error',
                        $this->admin->trans(
                            'flash_edit_error',
                            array('%name%' => $this->admin->toString($object)),
                            'SonataAdminBundle'
                        )
                    );
                }
            } elseif ($this->isPreviewRequested()) {
                // enable the preview template if the form was valid and preview was requested
                $templateKey = 'preview';
                $this->admin->getShow();
            }
        }

        $view = $form->createView();

        // set the theme for the current Admin Form
        $this->get('twig')->getExtension('form')->renderer->setTheme($view, $this->admin->getFormTheme());

        return $this->render($this->admin->getTemplate($templateKey), array(
            'action' => 'edit',
            'form'   => $view,
            'object' => $object,
            'ctlpregunta'=>$resultado,
            'paciente'=>$paciente,
            'tipo'=>$tipo    
        ));
    }
    
        /**
     * Show action
     *
     * @param int|string|null $id
     *
     * @return Response
     *
     * @throws NotFoundHttpException If the object does not exist
     * @throws AccessDeniedException If access is not granted
     */
    public function showAction($id = null)
    {
        //****************************************************************
        $request = $this->getRequest();
         $session = $this->get('session');
        /** @var $form \Symfony\Component\Form\Form */
        //$form = $this->admin->getForm();
        $em = $this->getDoctrine()->getManager();
        $conn = $this->get('database_connection');
        $usuario = $this->get('security.context')->getToken()->getUser(); 
        //obtenemos el tipo de empleado del usuario logueado
        $tipo_empleado=$usuario->getIdEmpleado()->getIdTipoEmpleado()->getId();   
        //ESTABLECER PREGUNTAS SEGUN EMPLEADO
        if($tipo_empleado==2){
            $seccion=1;
        }
        else
        {
            $seccion=2;
        }      
        $filtro="SELECT id, preg_detalle, preg_tipo, preg_estado, preg_seccion
            FROM shcp_doc_ctl_pregunta where preg_tipo='1' and preg_seccion='$seccion'";
        $tamizaje="SELECT id, preg_detalle, preg_tipo, preg_estado, preg_seccion
            FROM shcp_doc_ctl_pregunta where preg_tipo='2'  and preg_seccion='$seccion'";
        $result_filtro = $conn->query($filtro);
        $result_tamizaje=$conn->query($tamizaje);
        
       
        //****************************************************************
        $id = $this->get('request')->get($this->admin->getIdParameter());

        $object = $this->admin->getObject($id);
        $expmaterno=$object->getIdExpmaterno();
        $id_expmaterno=$expmaterno->getId();
         $datos_paciente="select c.*,e.numero from shcp_exp_materno c, mnt_expediente e
                            where c.id_mnt_expediente=e.id and c.id=$id_expmaterno";
        $paciente=$conn->query($datos_paciente);        

        if (!$object) {
            throw new NotFoundHttpException(sprintf('unable to find the object with id : %s', $id));
        }

        if (false === $this->admin->isGranted('VIEW', $object)) {
            throw new AccessDeniedException();
        }

        $this->admin->setSubject($object);

        return $this->render($this->admin->getTemplate('show'), array(
            'action'   => 'show',
            'object'   => $object,
            'elements' => $this->admin->getShow(),
            'ctlpreguntafiltro'=>$result_filtro,
            'ctlpreguntatamizaje'=>$result_tamizaje,
            'paciente'=>$paciente,
            'empleado'=>$tipo_empleado
        ));
    }
    
    protected function redirectTo($object)
    {
        return $this->redirect($this->generateUrl('admin_minsal_shcp_shcpexpmaterno_show', array('id' => $object)));
    } 
    
    protected  function verficarRegistro($id_expmaterno,$tipo){
        $em = $this->getDoctrine()->getManager();
        $conn = $this->get('database_connection');
        //ENCONTRAR ULTIMO FILTRO INGRESADO APRA EL PACIENTE
        $hayfiltrosql="select id from shcp_doc_resultado where id_exp_materno=$id_expmaterno and resul_hoja_filtro!='' ORDER BY id DESC LIMIT 1";
        $existefiltro=$conn->query($hayfiltrosql);
        $nregistro=$existefiltro->rowCount();
        $id_resultado=$existefiltro->fetch();
        if($nregistro==0 && $tipo==1){
            $cant_tamizaje['contador']=1;
            return $cant_tamizaje;
        }
        //VERIFICAR SI EXISTE DATO PARA TAMIZAJE EN ESE REGISTRO
        $haytamizajesql="select count(resul_tamizaje) as contador from shcp_doc_resultado where id=".$id_resultado['id'];
        $existetamizaje=$conn->query($haytamizajesql);
        //var_dump($haytamizajesql);
        $cant_tamizaje=$existetamizaje->fetch();
        return $cant_tamizaje;
    }
    
    protected function setearsession(){
        $request = $this->getRequest();
        $session = $this->get('session');
        $tipo1=$request->get('tipo_cuestionario');
        $id_expmaterno1=$request->get('id_expmaterno');
        $tipo_empleado1=$request->get('tipo_empleado');
        //seteando variable de sesion
        if($tipo1!=''){
            $session->set('tipo', $tipo1);
        }
        if($id_expmaterno1!=''){
            $session->set('id_expmaterno', $id_expmaterno1);
        }
        if($tipo_empleado1!=''){
            $session->set('tipo_empleado', $tipo_empleado1);
        }
        return;
    }                  

}

