<?php

namespace Minsal\Sipernes\ActividadBundle\Controller;

//use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sonata\AdminBundle\Controller\CRUDController as Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Minsal\Metodos\Funciones;
use Minsal\SipernesBundle\Entity\EnfHistoricoActividad;
use Symfony\Component\HttpFoundation\Session\Session;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Response;
class ReportePrueba1Controller extends Controller
{
 /**
     *@Route("/rptabortos/{report_name}/{report_format}/{fecha_inicio}/{fecha_fin}/{id_servicio}", name="infor_abortos", options={"expose"=true})
     */
    public function informeAbortosAction($report_name, $report_format, $fecha_inicio, $fecha_fin, $id_servicio = 0) {

        $jasperReport = $this->container->get('jasper.build.reports');
        $jasperReport->setReportName($report_name);
        $jasperReport->setReportFormat($report_format);
        $jasperReport->setReportPath("/reports/siaps/seguimiento/");
       $jasperReport->setReportParams(array(
            'fecha_inicio' => $fecha_inicio,
            'fecha_fin' => $fecha_fin,
            'id_servicio' => $id_servicio
        ));
       
   
        return $jasperReport->buildReport();
    }
    
    /**
     *@Route("/rptnacmuertos/{report_name}/{report_format}/{fecha_inicio}/{fecha_fin}/{id_servicio}", name="infor_nac_muertos", options={"expose"=true})
     */
    public function informeNacMuertosAction($report_name, $report_format, $fecha_inicio, $fecha_fin, $id_servicio = 0) {

        $jasperReport = $this->container->get('jasper.build.reports');
        $jasperReport->setReportName($report_name);
        $jasperReport->setReportFormat($report_format);
        $jasperReport->setReportPath("/reports/siaps/seguimiento/");
       $jasperReport->setReportParams(array(
            'fecha_inicio' => $fecha_inicio,
            'fecha_fin' => $fecha_fin,
            'id_servicio' => $id_servicio
        ));
        return $jasperReport->buildReport();
    }
   
   /**
     *@Route("/obtener/municipios/hospitalarios/todos/{id}", name="get_all_munic", options={"expose"=true})
     */
    public function getMunicipiosAction($id) {
        $em = $this->getDoctrine()->getManager();

        $dql = "SELECT o
                FROM MinsalSipernesBundle:CtlMunicipio o
                 WHERE o.idDepartamento = :id";
        $municipios['municipios'] = $em->createQuery($dql)->setParameter('id', $id)->getArrayResult();
               
         
        return new Response(json_encode($municipios));
    }
    
   
   /**
     *@Route("/obtener/deptos/todos/", name="get_all_deptos", options={"expose"=true})
     */
    public function getDeptosAction() {
        $em = $this->getDoctrine()->getManager();

        $dql = "SELECT o
                FROM MinsalSipernesBundle:CtlDepartamento o
                ";
        $deptos['deptos'] = $em->createQuery($dql)
                ->getArrayResult();

        return new Response(json_encode($deptos));
    }
    


    
}

?>
