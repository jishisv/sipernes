<?php
namespace Minsal\shcpBundle\Controller;
use Sonata\AdminBundle\Controller\CRUDController as Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Minsal\Metodos\Funciones;
use Minsal\shcpBundle\Entity\MntPaciente;
use Symfony\Component\HttpFoundation\Session\Session;

class ShcpAboAdmisionProcedenAdminController extends Controller {
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
        $pacienteid1 = chop(ltrim($request->get('id_prep')));
        //var_dump($pacienteid1); 
        if($pacienteid1!=''){
            $session->set('pacienteid', $pacienteid1);
        }
        $pacienteid=$session->get('pacienteid');
       // var_dump("hola mundo1"); 
        
        if($pacienteid!=''){
            $conn = $this->get('database_connection');
            $q="select p.* from shcp_pre_paciente p where p.id=$pacienteid";
            $resultado = $conn->query($q);
            
             //var_dump($pacienteid); 
            //seteando los datos
           foreach ($resultado ->fetchAll() as $aux) {
            
            //seteando el objeto shcpsxpmaterno
                $clap = $em->getRepository('MinsalshcpBundle:ShcpExpMaterno')->find($aux['id_exp_materno']);
           
               $object->setIdExpMaterno($clap);
               //$object->setIdEstablecimiento($establecimiento);
                    
            }
        }
        //$resultado = $conn->fetchAll($q);
        $this->admin->setSubject($object);
        //var_dump($pacienteid); //creo q hay q borrar esta linea
        $form->setData($object);
        $view = $form->createView();
        
       //*******************aca va  el post***************************
   
          if ($this->getRestMethod()== 'POST') {
            $form->submit($this->get('request'));
            $isFormValid = $form->isValid();
        // persist if the form was valid and if in preview mode the preview was approved
            if ($isFormValid && (!$this->isInPreviewMode() || $this->isPreviewApproved())) {
                if (false === $this->admin->isGranted('CREATE', $object)) {
                    throw new AccessDeniedException();
                }
            try {
                //$session->remove('pacienteid'); // agregado para borrar el valor de la variable de sesion
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
    
        //fin del post
        
         $view = $form->createView();
        // set the theme for the current Admin Form
        $this->get('twig')->getExtension('form')->renderer->setTheme($view, $this->admin->getFormTheme());
        
        return $this->render($this->admin->getTemplate('create'), array(
        'action' => 'create',
        'form' => $view,
        'object' => $object,
        'id_prep'=>$pacienteid
        ));
        
    }
    
}
?>