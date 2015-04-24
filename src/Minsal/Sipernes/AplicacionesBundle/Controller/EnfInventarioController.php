<?php

namespace Minsal\Sipernes\AplicacionesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
//use Sonata\AdminBundle\Controller\CRUDController as Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Minsal\Metodos\Funciones;
use Minsal\SipernesBundle\Entity\EnfTipoEsquemaVac;
use Symfony\Component\HttpFoundation\Session\Session;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Response;
class EnfInventarioController extends Controller
{
   
   /**
     *@Route("/recibir/componente/{id}", name="get_Compon", options={"expose"=true})
     */
    public function getComponentesAction($id) {
        $em = $this->getDoctrine()->getManager();

        $dql = "SELECT o
                FROM MinsalSipernesBundle:EnfComponente o
                 WHERE o.idTipoComponente = :id AND o.estadoComponente = true";
        $componente['componente'] = $em->createQuery($dql)->setParameter('id', $id)->getArrayResult();
               
         
        return new Response(json_encode($componente));
        
        
    }
    
   
   /**
     *@Route("/recibir/tipoaplicacion/todos/", name="get_TipoAplic", options={"expose"=true})
     */
    public function getTipoaplicacionAction() {
        $em = $this->getDoctrine()->getManager();

        $dql = "SELECT o
                FROM MinsalSipernesBundle:EnfCtlTipoComponente o
                WHERE o.estadoTclTComp = true
                ";
        $tipoaplicacion['tipoaplicacion'] = $em->createQuery($dql)
                ->getArrayResult();

        return new Response(json_encode($tipoaplicacion));
    }
    


    
}

?>
