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
     *@Route("/obtener/municipios/hospitalarios/todos/{id}", name="get_all_munic", options={"expose"=true})
     */
    public function getMunicipiosAction($id) {
        $em = $this->getDoctrine()->getManager();

        $dql = "SELECT o
                FROM MinsalSipernesBundle:EnfCtlSubactividad o
                 WHERE o.idActividad = :id";
        $municipios['municipios'] = $em->createQuery($dql)->setParameter('id', $id)->getArrayResult();
               
         
        return new Response(json_encode($municipios));
    }
    
   
   /**
     *@Route("/obtener/deptos/todos/", name="get_all_deptos", options={"expose"=true})
     */
    public function getDeptosAction() {
        $em = $this->getDoctrine()->getManager();

        $dql = "SELECT o
                FROM MinsalSipernesBundle:EnfCtlActividad o
                ";
        $deptos['deptos'] = $em->createQuery($dql)
                ->getArrayResult();

        return new Response(json_encode($deptos));
    }
    


    
}

?>
