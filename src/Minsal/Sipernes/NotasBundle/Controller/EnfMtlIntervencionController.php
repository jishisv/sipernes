<?php

namespace Minsal\Sipernes\NotasBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
//use Sonata\AdminBundle\Controller\CRUDController as Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Minsal\Metodos\Funciones;
use Minsal\SipernesBundle\Entity\EnfMtlActividadAdmin;
use Symfony\Component\HttpFoundation\Session\Session;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Response;
class EnfMtlIntervencionController extends Controller
{
   
   
    /**
     *@Route("/recibir/Protocolos/todos/", name="get_Protocolo", options={"expose"=true})
     */
    public function getProtocolosAction() {
        $em = $this->getDoctrine()->getManager();

        $dql = "SELECT o
                FROM MinsalSipernesBundle:EnfCtlProtocolo o
                ";
        $protocolo['protocolo'] = $em->createQuery($dql)
                ->getArrayResult();

        return new Response(json_encode($protocolo));
    }
   
   
   /**
     *@Route("/recibir/Subprotocolos/{id}", name="get_Subprotocolo", options={"expose"=true})
     */
    public function getSubprotocolosAction($id) {
        $em = $this->getDoctrine()->getManager();

        $dql = "SELECT o
                FROM MinsalSipernesBundle:EnfCtlSubprotocolo o
                 WHERE o.idProtocolo = :id";
        $subprotocolo['subprotocolo'] = $em->createQuery($dql)->setParameter('id', $id)->getArrayResult();
               
         
        return new Response(json_encode($subprotocolo));
        
        
    }
    
 
 
 
 /**
     *@Route("/recibir/intervenciones/{id}", name="get_Intervencion", options={"expose"=true})
     */
    public function getIntervencionesAction($id) {
        $em = $this->getDoctrine()->getManager();

        $dql = "SELECT o
                FROM MinsalSipernesBundle:EnfCtlIntervencion o
                 WHERE o.idSubprotocolo = :id";
        $intervencion['intervencion'] = $em->createQuery($dql)->setParameter('id', $id)->getArrayResult();
               
         
        return new Response(json_encode($intervencion));
        
        
    }
 
    
}

?>
