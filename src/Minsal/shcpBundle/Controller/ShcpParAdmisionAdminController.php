<?php

namespace Minsal\shcpBundle\Controller;

use Sonata\AdminBundle\Controller\CRUDController;

class ShcpParAdmisionAdminController extends CRUDController
{

	/**
     * return the Response object associated to the create action
     *
     * @throws \Symfony\Component\Security\Core\Exception\AccessDeniedException
     * @return Response
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
        $pacienteid1 = chop(ltrim($request->get('id_paradmision')));
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
    
        //fin del post
        
         $view = $form->createView();
        // set the theme for the current Admin Form
        $this->get('twig')->getExtension('form')->renderer->setTheme($view, $this->admin->getFormTheme());
        
        return $this->render($this->admin->getTemplate('create'), array(
        'action' => 'create',
        'form' => $view,
        'object' => $object,
        'id_paradmision'=>$pacienteid,
        'entities'=>null,
        ));
        
    }


    /**
     * return the Response object associated to the edit action
     *
     *
     * @param mixed $id
     *
     * @throws \Symfony\Component\Security\Core\Exception\AccessDeniedException
     * @throws \Symfony\Component\HttpKernel\Exception\NotFoundHttpException
     *
     * @return Response
     */
    public function editAction($id = null)
    {
        // the key used to lookup the template
        $templateKey = 'edit';

        $id = $this->get('request')->get($this->admin->getIdParameter());
        $object = $this->admin->getObject($id);
        $em = $this->getDoctrine()->getManager();

        // $entities = $em->getRepository('hnrsircimBundle:Usuario')->findAll();
        $dql = "SELECT p FROM MinsalshcpBundle:ShcpParAdmision pa, MinsalshcpBundle:ShcpExpMaterno u,
                 MinsalshcpBundle:ShcpPrePaciente p WHERE u.id=p.idExpMaterno AND pa.idExpMaterno=u.id AND pa.id=:id";
        
        $nombre = $em->createQuery($dql)
                ->setParameter('id', $id)
                ->getResult();
        //$entities = $query->getResult(); // 
        
        /*var_dump($nombre);*/
        
        if (!$object) {
            throw new NotFoundHttpException(sprintf('unable to find the object with id : %s', $id));
        }

        if (false === $this->admin->isGranted('EDIT', $object)) {
            throw new AccessDeniedException();
        }

        
        $this->admin->setSubject($object);

        /** @var $form \Symfony\Component\Form\Form */
        $form = $this->admin->getForm();
        $form->setData($object);

        if ($this->getRestMethod() == 'POST') {
            $form->submit($this->get('request'));

            $isFormValid = $form->isValid();

            // persist if the form was valid and if in preview mode the preview was approved
            if ($isFormValid && (!$this->isInPreviewMode() || $this->isPreviewApproved())) {
                $this->admin->update($object);

                if ($this->isXmlHttpRequest()) {
                    return $this->renderJson(array(
                        'result'    => 'ok',
                        'objectId'  => $this->admin->getNormalizedIdentifier($object)
                    ));
                }

                $this->addFlash('sonata_flash_success', $this->admin->trans('flash_edit_success', array('%name%' => $this->admin->toString($object)), 'SonataAdminBundle'));

                // redirect to edit mode
                return $this->redirectTo($object);
            }

            // show an error message if the form failed validation
            if (!$isFormValid) {
                if (!$this->isXmlHttpRequest()) {
                    $this->addFlash('sonata_flash_error', $this->admin->trans('flash_edit_error', array('%name%' => $this->admin->toString($object)), 'SonataAdminBundle'));
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
            'entities' =>$nombre,
        ));
    }


   public function ListAction()
    {

        

        $em = $this->getDoctrine()->getManager();
        // $this->username=$login;

        // $entities = $em->getRepository('hnrsircimBundle:Area')->findAll();
        $query = $em->createQuery('SELECT a FROM MinsalshcpBundle:ShcpParAdmision a');
        $entities = $query->getResult(); // 
        
        	/*return $this->render($this->admin->getTemplate('list'), array(	            
	             'entities' => $entities,                  
        	));*/
        	if (false === $this->admin->isGranted('LIST')) {
            	throw new AccessDeniedException();
        	}

	        $datagrid = $this->admin->getDatagrid();
	        $formView = $datagrid->getForm()->createView();

	        // set the theme for the current Admin Form
	        $this->get('twig')->getExtension('form')->renderer->setTheme($formView, $this->admin->getFilterTheme());

	        return $this->render($this->admin->getTemplate('list'), array(
	            'action'     => 'list',
	            'form'       => $formView,
	            'datagrid'   => $datagrid,
	            'csrf_token' => $this->getCsrfToken('sonata.batch'),
	            'entities' => $entities,   
	        ));
            
        // }
        // else
        // {
        //     return $this->redirect($this->generateUrl('login' ));
        //     // return array(

        //     //    'usuario' => $usuario,
        //     // );
        // }
    }
    

    public function partrabajoAction() {
        $id = $this ->get('request')->get($this->admin->getIdParameter());
        $object = $this->admin->getObject($id);
        return $this->redirect($this->generateUrl('shcp_partrabajo_create', array ('id_clap' => $id)));         
    }

    

}
