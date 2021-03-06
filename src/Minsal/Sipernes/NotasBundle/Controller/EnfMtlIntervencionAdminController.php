<?php

namespace Minsal\Sipernes\NotasBundle\Controller;

//use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sonata\AdminBundle\Controller\CRUDController as Controller;

class EnfMtlIntervencionAdminController extends Controller
{
  public function createAction() {
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

        if ($this->getRestMethod() == 'POST') {
            $form->submit($this->get('request'));

            $isFormValid = $form->isValid();

            // persist if the form was valid and if in preview mode the preview was approved
            if ($isFormValid && (!$this->isInPreviewMode() || $this->isPreviewApproved())) {

                if (false === $this->admin->isGranted('CREATE', $object)) {
                    throw new AccessDeniedException();
                }

                $this->admin->create($object);
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////
                $em = $this->getDoctrine()->getManager();
                $conn = $this->get('database_connection');
                $request = $this->getRequest();
                $fechaingreso = $object->getFechaIngresoInterv()->format('Y-m-d H:i:s');
                //$fechaingreso
                $id = $object->getId();
                $subact = $object->getIdIntervencion()->getId();
                $empcor = $object->getIdEmpCorr()->getId();
                $exp = $object->getIdExpediente()->getId();
                $sql_query = "select count(date_trunc('minute',fecha_ingreso_interv)) as total from enf_mtl_intervencion where id_intervencion=$subact and id_emp_corr=$empcor and id_expediente=$exp and
 date_trunc('minute', fecha_ingreso_interv) = date_trunc('minute', TIMESTAMP '$fechaingreso')";

//                tema1 = $session->get('clap');
                $consulta = $conn->query($sql_query);
                $existe = $consulta->fetch();
                if ($existe['total'] > 1) {
                    $this->addFlash(
                            'sonata_flash_error', 'Ya existe un registro con esta información'
                    );
                    $sql_querybitacora = "delete from enf_bitacora_intervencion where fecha_ingreso_hist_inter = '$fechaingreso'";
                    $consultabit = $conn->query($sql_querybitacora);
                    $sql_querytraza= "delete from enf_traza_intervencion where fecha_ingreso_tra_interven = '$fechaingreso'";
                    $consultatraza = $conn->query($sql_querytraza);
                    $sql_query2 = "delete from enf_mtl_intervencion where id_intervencion=$subact and id_emp_corr=$empcor and id_expediente=$exp and
 date_trunc('minute', fecha_ingreso_interv) = date_trunc('minute', TIMESTAMP '$fechaingreso') and id=$id ";
                    $consulta2 = $conn->query($sql_query2);
                    return $this->redirect($this->generateUrl('admin_minsal_sipernes_enfmtlintervencion_create'));
                } else {
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////
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
                    'form' => $view,
                    'object' => $object,
        ));
    }

   
 }
 
?>
