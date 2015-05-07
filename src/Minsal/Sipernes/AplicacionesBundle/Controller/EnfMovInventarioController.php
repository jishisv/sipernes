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
class EnfMovInventarioController extends Controller
{
   
  /**
     * @Route("obtener/el/nombrecomponente/by/idcomponente/", name="get_nombre_componente", options={"expose"=true})
     */
    public function getNombreComponentebyIdAction() {
        $em = $this->getDoctrine()->getManager();

        $dql = "SELECT o,comp
                FROM MinsalSipernesBundle:EnfInventario o inner join o.idComponente comp";
               
               
        $datoscomponente['datoscomponente'] = $em->createQuery($dql)->getArrayResult();


        return new Response(json_encode($datoscomponente));
    }
    


    
}

?>
