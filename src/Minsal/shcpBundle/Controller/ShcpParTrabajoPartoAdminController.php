<?php

namespace Minsal\shcpBundle\Controller;

use Sonata\AdminBundle\Controller\CRUDController;

class ShcpParTrabajoPartoAdminController extends CRUDController
{

	/**
     * return the Response object associated to the create action
     *
     * @throws \Symfony\Component\Security\Core\Exception\AccessDeniedException
     * @return Response
     */
    public function createAction()
    {
        // the key used to lookup the template
        
        
        
        $templateKey = 'edit';

        if (false === $this->admin->isGranted('CREATE')) {
            throw new AccessDeniedException();
        }

        $object = $this->admin->getNewInstance();

        $this->admin->setSubject($object);

        /** @var $form \Symfony\Component\Form\Form */
        $form = $this->admin->getForm();
        $form->setData($object);
        
        if ($this->getRestMethod()== 'POST') {
            $form->submit($this->get('request'));

            $isFormValid = $form->isValid();

            // persist if the form was valid and if in preview mode the preview was approved
            if ($isFormValid && (!$this->isInPreviewMode() || $this->isPreviewApproved())) {

                if (false === $this->admin->isGranted('CREATE', $object)) {
                    throw new AccessDeniedException();
                }

                $this->admin->create($object);

                if ($this->isXmlHttpRequest()) {
                    
                    return $this->renderJson(array(
                        'result' => 'ok',
                        'objectId' => $this->admin->getNormalizedIdentifier($object)
                    ));
                }

                $this->addFlash('sonata_flash_success', $this->admin->trans('flash_create_success', array('%name%' => $this->admin->toString($object)), 'SonataAdminBundle'));

                // redirect to edit mode
                return $this->redirectTo($object);
            }

            // show an error message if the form failed validation
            if (!$isFormValid) {
                if (!$this->isXmlHttpRequest()) {
                    $this->addFlash('sonata_flash_error', $this->admin->trans('flash_create_error', array('%name%' => $this->admin->toString($object)), 'SonataAdminBundle'));
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

        return $this->render($this->admin->getTemplate($templateKey), array(
            'action' => 'create',
            'form'   => $view,
            'object' => $object,
        ));
    }

    public function ListAction()
    {

        

        $em = $this->getDoctrine()->getManager();
        // $this->username=$login;

        // $entities = $em->getRepository('hnrsircimBundle:Area')->findAll();
        $query = $em->createQuery('SELECT a FROM MinsalshcpBundle:ShcpParTrabajoParto a');
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

}
