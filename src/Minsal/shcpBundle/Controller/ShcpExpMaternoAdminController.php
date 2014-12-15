<?php
namespace Minsal\shcpBundle\Controller;
use Sonata\AdminBundle\Controller\CRUDController as Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Minsal\Metodos\Funciones;
use Minsal\shcpBundle\Entity\MntPaciente;
use Symfony\Component\HttpFoundation\Session\Session;

class ShcpExpMaternoAdminController extends Controller {
/**
* List action
*
* @return Response
*
* @throws AccessDeniedException If access is not granted
*/
public function createAction()
{
        $object = $this->admin->getNewInstance();
        $request = $this->getRequest();
        //$session = new Session();
        // $session->start();
        $session = $this->get('session');
        /** @var $form \Symfony\Component\Form\Form */
        $form = $this->admin->getForm();
        $em = $this->getDoctrine()->getManager();
        $pacienteid1 = chop(ltrim($request->get('paciente')));
        if($pacienteid1!=''){
            $session->set('pacienteid', $pacienteid1);
        }
        $pacienteid=$session->get('pacienteid');
        if($pacienteid!=''){
            $conn = $this->get('database_connection');
            $q="select p.*,age(fecha_nacimiento) as edad,e.id as idexpediente,e.id_establecimiento as idestablecimiento from mnt_paciente p ,mnt_expediente e
                where p.id=$pacienteid and p.id=e.id_paciente";
            $resultado = $conn->query($q);
            //OBTENIENDO EL CORRELATIVO PARA GENRAR EL NUMERO CLAP
            $correlativo="select count(id) as correlativo from shcp_exp_materno WHERE exp_fecha_creacion='".date("Y-m-d")."'";
            $num=$conn->query($correlativo);
            $num=$num->fetch();
            $corr=$num['correlativo']+1;
            //seteando los datos
            foreach ($resultado ->fetchAll() as $aux) {
            //tranformaciones
            $edad=trim(substr($aux['edad'],0,2));
            switch(true){
                case $edad<15 || $edad>35:
                    $rango=1;
                default:
                   $rango=0;
            }
            //seteando el objeto shcpsxpmaterno
            $object->setexpNombre($aux['primer_nombre'].' '.$aux['segundo_nombre']);
            $object->setexpApellido($aux['primer_apellido'].' '.$aux['segundo_apellido']);
            $object->setexpDireccion($aux['direccion']);
            $object->setexpTelefono($aux['telefono_casa']);
            // $object->setexpFechaCreacion($aux['direccion']);
            $object->setexpEdad($edad);
            $object->setexpEdadRgo($rango);
            //$object->setexpEtnia($aux['direccion']);
            //$object->setexpAlfabeta($aux['direccion']);
            //$object->setexpEstudios($aux['direccion']);
            //$object->setexpAniosNivelStudio($aux['direccion']);
            // $object->setexpViveSola($aux['direccion']);
            $establecimiento = $em->getRepository('MinsalshcpBundle:CtlEstablecimiento')->find($aux['idestablecimiento']);
            $expediente = $em->getRepository('MinsalshcpBundle:MntExpediente')->find($aux['idexpediente']);
            //var_dump($expediente->getId());
           // $muni = $em->getRepository('MinsalshcpBundle:CtlMunicipio')->find($aux['id_municipio_domicilio']);
            //ESTABLECIENDO EL CODIGO CLAP ESTABLECIMEINTO-FECHA ACTUAL-CORRELATIO (1230-YYYYMMDD-000)
            $nclap=$establecimiento->getId();
            $nclap.="-".date("ymd")."-".$corr;
            
           // $object->setexpMuni($muni);
            $depto = $em->getRepository('MinsalshcpBundle:CtlDepartamento')->find($aux['id_departamento_domicilio']);
            
            $object->setExpDepto($depto);
            
            $object->setexpMuni($aux['id_municipio_domicilio']);
           // $object->setexpDepto($aux['id_departamento_domicilio']);
            $object->setexpDocIdent($aux['numero_doc_ide_paciente']);
            $object->setIdMntExpediente($expediente);
            $object->setIdEstablecimiento($establecimiento);
            //$object->setexpEstado($aux['direccion']);
            //$object->setexpTipoControl($aux['direccion']);
            $object->setexpClap($nclap);
            //var_dump($object);
            }
        }
        //$resultado = $conn->fetchAll($q);
        $this->admin->setSubject($object);
        //var_dump($pacienteid); //creo q hay q borrar esta linea
        $form->setData($object);
        $view = $form->createView();
        /**********************************************
        * TOMADO DEL CRUDCONTROLLER
        */
        if ($this->getRestMethod()== 'POST') {
            $form->submit($this->get('request'));
            $isFormValid = $form->isValid();
        // persist if the form was valid and if in preview mode the preview was approved
            if ($isFormValid && (!$this->isInPreviewMode() || $this->isPreviewApproved())) {
                if (false === $this->admin->isGranted('CREATE', $object)) {
                    throw new AccessDeniedException();
                }
            try {
                $session->remove('pacienteid'); // agregado para borrar el valor de la variable de sesion
                $object = $this->admin->create($object);
                if ($this->isXmlHttpRequest()) {
                return $this->renderJson(array(
                'result' => 'ok',
                'objectId' => $this->admin->getNormalizedIdentifier($object)
                ));
                //$session->set('pacienteid', '');
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
            return $this->redirectTo($object);
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
                'flash_create_error',
                array('%name%' => $this->admin->toString($object)),
                'SonataAdminBundle'
                )
                );
            }
            } elseif ($this->isPreviewRequested()) {
            // pick the preview template if the form was valid and preview was requested
                $templateKey = 'preview';
                $this->admin->getShow();
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
        'paciente'=>$pacienteid
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
        $id = $this->get('request')->get($this->admin->getIdParameter());
        //obtenemos el tipo de usuario logueado
        $usuario = $this->get('security.context')->getToken()->getUser(); 
        //obtenemos el tipo de empleado del usuario logueado
        $tipo_empleado=$usuario->getIdEmpleado()->getIdTipoEmpleado()->getId();
        $object = $this->admin->getObject($id);

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
            'empleado' => $tipo_empleado,
            'elements' => $this->admin->getShow(),
        ));
    }
    // aca va la funcion prepararAction
                   public function prepararAction() {
                    $id = $this ->get('request')->get($this->admin->getIdParameter());
                    $object = $this->admin->getObject($id);
                    return $this->redirect($this->generateUrl('shcp_preparacion_create', array ('id_clap' => $id)));         
                    }

}
?>

