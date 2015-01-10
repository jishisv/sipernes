<?php

namespace Minsal\Sipernes\ActividadBundle\Controller;

//use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sonata\AdminBundle\Controller\CRUDController as Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Minsal\Metodos\Funciones;
use Minsal\SipernesBundle\Entity\EnfMtlActividad;
use Symfony\Component\HttpFoundation\Session\Session;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Response;
class EnfMtlActividadAdminController extends Controller
{
 
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

           
            
               //seteando el objeto shcpsxpmaterno
            //$object->setFechaModificacionAct('fecha_modificacion_act');
            //$object->setIdEmpCorr('id_emp_corr');
            //$object->setIdExpediente('id_expediente');
            //$object->setIdSubactividad('id_subactividad');
            $object->setEstadoMtlAct(true);
            $object->setCantidadActEnf(1);
            //$object->setTiempoActEnf('tiempo_act_enf');
            $object->setUsuarioIngresoAct('usuario_ingreso_act');
            $object->setFechaIngresoAct(new \DateTime());
            
            
            
        
        
        
            $this->admin->setSubject($object);
        //var_dump($pacienteid); //creo q hay q borrar esta linea
        $form->setData($object);
        $view = $form->createView();
//            
//            
             $view = $form->createView();
        // set the theme for the current Admin Form
        $this->get('twig')->getExtension('form')->renderer->setTheme($view, $this->admin->getFormTheme());
            
            return $this->render($this->admin->getTemplate('edit'), array(
        'action' => 'edit',
        'form' => $view,
        'object' => $object,
        //'paciente'=>$pacienteid 
                    ));
     }
   
 }
 
?>
