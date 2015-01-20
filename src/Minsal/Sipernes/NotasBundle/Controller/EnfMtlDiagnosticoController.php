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
class EnfMtlDiagnosticoController extends Controller
{
   
   
    /**
     *@Route("/recibir/Dominios/todos/", name="get_Dominio", options={"expose"=true})
     */
    public function getDominiosAction() {
        $em = $this->getDoctrine()->getManager();

        $dql = "SELECT o
                FROM MinsalSipernesBundle:EnfDominio o
                WHERE o.estadoDominio = true
                ";
        $dominio['dominio'] = $em->createQuery($dql)
                ->getArrayResult();

        return new Response(json_encode($dominio));
    }
   
   
   /**
     *@Route("/recibir/clases/{id}", name="get_Clase", options={"expose"=true})
     */
    public function getClasesAction($id) {
        $em = $this->getDoctrine()->getManager();

        $dql = "SELECT o
                FROM MinsalSipernesBundle:EnfClase o
                 WHERE o.idDominio = :id AND o.estadoClase = true";
        $clase['clase'] = $em->createQuery($dql)->setParameter('id', $id)->getArrayResult();
               
         
        return new Response(json_encode($clase));
        
        
    }
    
 
 
 
 /**
     *@Route("/recibir/diagnostico/{id}", name="get_Diagnostico", options={"expose"=true})
     */
    public function getDiagnosticoAction($id) {
        $em = $this->getDoctrine()->getManager();

        $dql = "SELECT o
                FROM MinsalSipernesBundle:EnfCtlDiagnostico o
                 WHERE o.idClase = :id AND o.estadoCtlDiag = true";
        $diagnostico['diagnostico'] = $em->createQuery($dql)->setParameter('id', $id)->getArrayResult();
               
         
        return new Response(json_encode($diagnostico));
        
        
    }
 
    
}

?>
