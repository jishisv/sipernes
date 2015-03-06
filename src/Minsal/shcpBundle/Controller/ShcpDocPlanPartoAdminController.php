<?php

namespace Minsal\shcpBundle\Controller;

use Sonata\AdminBundle\Controller\CRUDController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Minsal\Metodos\Funciones;
use Minsal\shcpBundle\Entity\MntPaciente;
use Minsal\shcpBundle\Entity\ShcpExpMaterno;
use Symfony\Component\HttpFoundation\Session\Session;

class ShcpDocPlanPartoAdminController extends CRUDController
{
   public function createAction()

    {
        $object = $this->admin->getNewInstance();
        $request = $this->getRequest();
       
        $session = $this->get('session');
        /** @var $form \Symfony\Component\Form\Form */
        $form = $this->admin->getForm();
        $em = $this->getDoctrine()->getManager();
        $conn = $this->get('database_connection');
   
       // $this->setearsession();
        $id_expmaterno1 = chop(ltrim($request->get('id_expmaterno')));
        
         if($id_expmaterno1!=''){
            $session->set('idexpmaterno', $id_expmaterno1);
        }
        $id_expmaterno=$session->get('idexpmaterno');
        $existe_query="select count(id) as total from shcp_doc_plan_parto where id_exp_materno=".$id_expmaterno;
        $existe_result=$conn->query($existe_query);
        $existe=$existe_result->fetch();
        if($existe['total']!=0){
             $this->addFlash(
                        'sonata_flash_error',
                     'La paciente ya posee un plan de parto registrado'
                    );
            return $this->redirect($this->generateUrl('admin_minsal_shcp_shcpexpmaterno_show', array('id' => $id_expmaterno)));
        }
       //var_dump($id_expmaterno); 
         $datos_paciente="select c.*,e.numero from shcp_exp_materno c, mnt_expediente e
                            where c.id_mnt_expediente=e.id and c.id=$id_expmaterno";
         
        $paciente=$conn->query($datos_paciente);
           
        
            // foreach ($paciente ->fetchAll() as $aux) {
      
            //    $clap = $em->getRepository('MinsalshcpBundle:ShcpExpMaterno')->find($aux['id_exp_materno']);
           
               //$object->setIdExpMaterno($clap);
                    
           // }
         
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
                 //OBTENIENDO EL OBJETO EXPMATERNO
            $expmaterno = $em->getRepository('MinsalshcpBundle:ShcpExpmaterno')->find($id_expmaterno); 
             $object->setIdExpMaterno($expmaterno);
                
            try {
                //$session->remove('$id_expmaterno'); // agregado para borrar el valor de la variable de sesion

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
    
        ///fin del post
        
         $view = $form->createView();
        // set the theme for the current Admin Form

        return $this->render($this->admin->getTemplate('create'), array(
         'action' => 'create',
        'form' => $view,
        'object' => $object,
        'paciente'=>$paciente,
        'id_expmaterno'=>$id_expmaterno    
        ));
        
    }
 
    /**
     * Redirect the user depend on this choice
     *
     * @param object $object
     *
     * @return RedirectResponse
     */
       protected function redirectTo($object)
    {
  
        if (null !== $this->get('request')->get('btn_create_and_list')) {
            return $this->redirect($this->generateUrl('admin_minsal_shcp_shcpexpmaterno_show', array('id' => $object->getId())));
     
        }
    } 

}
