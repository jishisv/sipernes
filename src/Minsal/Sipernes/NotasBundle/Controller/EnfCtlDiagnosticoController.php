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
class EnfCtlDiagnosticoController extends Controller
{
   
   
    /**
     *@Route("/recibir/CtlDominios/todos/", name="get_CtlDominio", options={"expose"=true})
     */
    public function getCtlDominiosAction() {
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
     *@Route("/recibir/CtlClases/{id}", name="get_CtlClase", options={"expose"=true})
     */
    public function getCtlClasesAction($id) {
        $em = $this->getDoctrine()->getManager();

        $dql = "SELECT o
                FROM MinsalSipernesBundle:EnfClase o
                 WHERE o.idDominio = :id AND o.estadoClase = true";
        $clase['clase'] = $em->createQuery($dql)->setParameter('id', $id)->getArrayResult();
               
         
        return new Response(json_encode($clase));
        
        
    }
    
 
 
 

    
}

?>
