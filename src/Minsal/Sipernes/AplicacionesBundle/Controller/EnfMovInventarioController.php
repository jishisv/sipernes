<?php

namespace Minsal\Sipernes\AplicacionesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
//use Sonata\AdminBundle\Controller\CRUDController as Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
class EnfMovInventarioController extends Controller
{
   
  /**
     * @Route("obtener/el/nombrecomponente/by/inventario/", name="get_nombre_componente_inv", options={"expose"=true})
     */
    public function getNombreComponentebyIdAction() {
        $em = $this->getDoctrine()->getManager();

        $dql = "SELECT o,comp
                FROM MinsalSipernesBundle:EnfInventario o inner join o.idComponente comp";
               
               
        $datoscomponente['datoscomponente'] = $em->createQuery($dql)->getArrayResult();


        return new Response(json_encode($datoscomponente));
    }
    
    /**
     * @Route("Num/Empleado/all/Empleados/envio/recibido", name="get_empleados_env_rec", options={"expose"=true})
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
