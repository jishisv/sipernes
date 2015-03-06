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
     *@Route("/recibir/vacunas/{id}", name="get_Vac", options={"expose"=true})
     */
    public function getVacunasAction($id) {
        $em = $this->getDoctrine()->getManager();

        $dql = "SELECT o
                FROM MinsalSipernesBundle:EnfTipoEsquemaVac o
                 WHERE o.idEsquemaVac = :id AND o.estadoTipoVac = true";
        $vacuna['vacuna'] = $em->createQuery($dql)->setParameter('id', $id)->getArrayResult();
               
         
        return new Response(json_encode($vacuna));
        
        
    }
    
   
   /**
     *@Route("/recibir/tipovacunas/todos/", name="get_TipoVac", options={"expose"=true})
     */
    public function getTipovacunasAction() {
        $em = $this->getDoctrine()->getManager();

        $dql = "SELECT o
                FROM MinsalSipernesBundle:EnfEsquemaVac o
                WHERE o.estadoVac = true
                ";
        $tipovacuna['tipovacuna'] = $em->createQuery($dql)
                ->getArrayResult();

        return new Response(json_encode($tipovacuna));
    }
    


    
}

?>
