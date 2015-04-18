<?php

namespace Minsal\Sipernes\AplicacionesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
//use Sonata\AdminBundle\Controller\CRUDController as Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Minsal\Metodos\Funciones;
use Minsal\SipernesBundle\Entity\EnfDosisEsquemaVacAdmin;
use Symfony\Component\HttpFoundation\Session\Session;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Response;
class EnfDosisEsquemaVacController extends Controller
{
  
    /**
     *@Route("/recibir/tipoaplicaciones/todos/", name="get_TipoAplicacion", options={"expose"=true})
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
    
   
   /**
     *@Route("/recibir/fasess/{id}", name="get_Aplicacion", options={"expose"=true})
     */
    public function getAplicacionesAction($id) {
        $em = $this->getDoctrine()->getManager();

        $dql = "SELECT o
                FROM MinsalSipernesBundle:EnfEsquemaVac o
                 WHERE o.idTipoAplicacion = :id AND o.estadoVac = true";
        $fases['fases'] = $em->createQuery($dql)->setParameter('id', $id)->getArrayResult();
               
         
        return new Response(json_encode($fases));
        
        
    }
    
  
      
    /**
     *@Route("/recibir/tipocomponentes/{id}", name="get_TipoComponente", options={"expose"=true})
     */
    public function getTipocomponentesAction($id) {
        $em = $this->getDoctrine()->getManager();

        $dql = "SELECT o
                FROM MinsalSipernesBundle:EnfTipoEsquemaVac o
                WHERE o.idEsquemaVac= :id AND o.estadoTipoVac = true
                ";
         $tipocomponente['tipocomponente'] = $em->createQuery($dql)->setParameter('id', $id)->getArrayResult();
                

        return new Response(json_encode($tipocomponente));
    }

    
}

?>
