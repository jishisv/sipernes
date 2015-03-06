<?php

namespace Minsal\Sipernes\AplicacionesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
//use Sonata\AdminBundle\Controller\CRUDController as Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Minsal\Metodos\Funciones;
use Minsal\SipernesBundle\Entity\EnfDosisEsquemaMicAdmin;
use Symfony\Component\HttpFoundation\Session\Session;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Response;
class EnfDosisEsquemaMicController extends Controller
{
   
   /**
     *@Route("/recibir/micronutrientes/{id}", name="get_Mic", options={"expose"=true})
     */
    public function getMicronutrientesAction($id) {
        $em = $this->getDoctrine()->getManager();

        $dql = "SELECT o
                FROM MinsalSipernesBundle:EnfTipoEsquemaMic o
                 WHERE o.idEsquemaMic = :id AND o.estadoTipoMic = true";
        $micronutriente['micronutriente'] = $em->createQuery($dql)->setParameter('id', $id)->getArrayResult();
               
         
        return new Response(json_encode($micronutriente));
        
        
    }
    
   
   /**
     *@Route("/recibir/tipomicronutrientes/todos/", name="get_TipoMic", options={"expose"=true})
     */
    public function getTipomicronutrientesAction() {
        $em = $this->getDoctrine()->getManager();

        $dql = "SELECT o
                FROM MinsalSipernesBundle:EnfEsquemaMic o
                WHERE o.estadoMic = true
                ";
        $tipomicronutriente['tipomicronutriente'] = $em->createQuery($dql)
                ->getArrayResult();

        return new Response(json_encode($tipomicronutriente));
    }
    


    
}

?>
