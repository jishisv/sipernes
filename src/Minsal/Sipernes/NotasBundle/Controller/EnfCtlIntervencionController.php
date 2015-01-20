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
class EnfCtlIntervencionController extends Controller
{
   
   
    /**
     *@Route("/recibir/CtlProtocolos/todos/", name="get_CtlProtocolo", options={"expose"=true})
     */
    public function getCtlProtocolosAction() {
        $em = $this->getDoctrine()->getManager();

        $dql = "SELECT o
                FROM MinsalSipernesBundle:EnfCtlProtocolo o
                WHERE o.estadoProt = true";
        $protocolo['protocolo'] = $em->createQuery($dql)
                ->getArrayResult();

        return new Response(json_encode($protocolo));
    }
   
   
   /**
     *@Route("/recibir/CtlSubprotocolos/{id}", name="get_CtlSubprotocolo", options={"expose"=true})
     */
    public function getCtlSubprotocolosAction($id) {
        $em = $this->getDoctrine()->getManager();

        $dql = "SELECT o
                FROM MinsalSipernesBundle:EnfCtlSubprotocolo o
                 WHERE o.idProtocolo = :id AND o.estadoSubpro = true";
        $subprotocolo['subprotocolo'] = $em->createQuery($dql)->setParameter('id', $id)->getArrayResult();
               
         
        return new Response(json_encode($subprotocolo));
        
        
    }
    
 
    
}

?>
