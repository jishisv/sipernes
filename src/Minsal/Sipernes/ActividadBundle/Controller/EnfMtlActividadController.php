<?php

namespace Minsal\Sipernes\ActividadBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
//use Sonata\AdminBundle\Controller\CRUDController as Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Minsal\Metodos\Funciones;
use Minsal\SipernesBundle\Entity\EnfMtlActividadAdmin;
use Symfony\Component\HttpFoundation\Session\Session;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Response;
class EnfMtlActividadController extends Controller
{
   
   /**
     *@Route("/recibir/subactividades/{id}", name="get_Subact", options={"expose"=true})
     */
    public function getSubactividadesAction($id) {
        $em = $this->getDoctrine()->getManager();

        $dql = "SELECT o
                FROM MinsalSipernesBundle:EnfCtlSubactividad o
                 WHERE o.idActividad = :id";
        $subactividad['subactividad'] = $em->createQuery($dql)->setParameter('id', $id)->getArrayResult();
               
         
        return new Response(json_encode($subactividad));
        
        
    }
    /**
     *@Route("/recibir/actividad/padre/{id}", name="get_actividad_padre", options={"expose"=true})
     */
     public function getActividadPadreAction($id) {
        $em = $this->getDoctrine()->getManager();
        $limit = 1;

        $dql = "SELECT o,subact,act
                FROM MinsalSipernesBundle:EnfMtlActividad o inner join o.idSubactividad subact 
                inner join subact.idActividad act
                WHERE o.id = :id
                ";
               
               // WHERE o.id = :id";
        $datosactividad['datosactividad'] = $em->createQuery($dql)->setMaxResults($limit)->setParameter('id', $id)->getArrayResult();
         return new Response(json_encode( $datosactividad));
     }
  
   
   /**
     *@Route("/recibir/actividades/todos/", name="get_Act", options={"expose"=true})
     */
    public function getActividadesAction() {
        $em = $this->getDoctrine()->getManager();

        $dql = "SELECT o
                FROM MinsalSipernesBundle:EnfCtlActividad o
                WHERE o.estadoAct = true
                ";
        $actividad['actividad'] = $em->createQuery($dql)
                ->getArrayResult();

        return new Response(json_encode($actividad));
    }
    /**
     * @Route("nombre/numero/empleado/actividad/", name="get_empleados_enf_act", options={"expose"=true})
     */
    public function getNumEmpleadoEnfermeraAction() {
        $em = $this->getDoctrine()->getManager();

        $dql = "SELECT o
                FROM MinsalSipernesBundle:MntEmpleado o";

        $empleados['empleados'] = $em->createQuery($dql)
                ->getArrayResult();

        return new Response(json_encode($empleados));
    }
    


    
}

?>
