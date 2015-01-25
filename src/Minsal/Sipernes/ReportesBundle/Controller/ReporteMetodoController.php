<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Minsal\Sipernes\ReportesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
//use Sonata\AdminBundle\Controller\CRUDController as Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Minsal\Metodos\Funciones;
use Minsal\SipernesBundle\Entity\EnfHistoricoCapacitacion;
use Symfony\Component\HttpFoundation\Session\Session;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Response;
class ReporteMetodoController extends Controller
{
 /**
     *@Route("/prueba2/{report_name}/{report_format}/{PRUEBA}/{id_servicio}", name="prueba2", options={"expose"=true})
     */
    public function reportepruebaAction($report_name, $report_format, $PRUEBA, $id_servicio = 0) {

        $jasperReport = $this->container->get('jasper.build.reports');
        $jasperReport->setReportName("prueba2");
        $jasperReport->setReportFormat("PDF");
        $jasperReport->setReportPath("/reports_siaps_seguimiento/siaps/seguimiento/");
       $jasperReport->setReportParams(array(
            'PRUEBA' => 'HOLA',
            'id_servicio' => 0
        ));
       
   
        return $jasperReport->buildReport();
    }
    
    /**
     *@Route("/rpt_con_act/{report_name}/{report_format}/{fecha_inicio}/{fecha_fin}/{actividades}/{subactividades}/{deptos}/{municipios}/{establecimientos}/{tipoestablecimientos}/{codigo_expediente}/{codigo_enfermera}/{id_servicio}", name="rpt_con_act", options={"expose"=true})
     */
    public function ReporteConsolidadoActividadesAction($report_name, $report_format, $fecha_inicio, $fecha_fin, $actividades, $subactividades, $deptos, $municipios, $establecimientos, $tipoestablecimientos, $codigo_expediente, $codigo_enfermera, $id_servicio = 0) {

        $jasperReport = $this->container->get('jasper.build.reports');
        $jasperReport->setReportName($report_name);
        $jasperReport->setReportFormat($report_format);
        $jasperReport->setReportPath("/reports_siaps_seguimiento/siaps/seguimiento/");
       $jasperReport->setReportParams(array(
            'fecha_inicio' => $fecha_inicio,
            'fecha_fin' => $fecha_fin,
            'actividades'=>  $actividades,
            'subactividades'=>  $subactividades,
            'deptos'=>  $deptos,
            'municipios' => $municipios,
            'establecimientos' => $establecimientos,
            'tipoestablecimientos' => $tipoestablecimientos,
            'codigo_expediente' => $codigo_expediente,
            'codigo_enfermera' => $codigo_enfermera,
        ));
       
   
        return $jasperReport->buildReport();
    }

    /**
     *@Route("/rpt_pac_dig/{report_name}/{report_format}/{fecha_inicio}/{fecha_fin}/{deptos}/{municipios}/{establecimientos}/{tipoestablecimientos}/{tipodiagnostico}/{diagnostico}/{id_servicio}", name="rpt_pac_dig", options={"expose"=true})
     */
    public function ReportePacienteDiagnosticosAction($report_name, $report_format, $fecha_inicio, $fecha_fin, $deptos, $municipios, $establecimientos, $tipoestablecimientos, $tipodiagnostico, $diagnostico, $id_servicio = 0) {

        $jasperReport = $this->container->get('jasper.build.reports');
        $jasperReport->setReportName($report_name);
        $jasperReport->setReportFormat($report_format);
        $jasperReport->setReportPath("/reports_siaps_seguimiento/siaps/seguimiento/");
        $jasperReport->setReportParams(array(
            'fecha_inicio' => $fecha_inicio,
            'fecha_fin' => $fecha_fin,
            'deptos'=>  $deptos,
            'municipios' => $municipios,
            'establecimientos' => $establecimientos,
            'tipoestablecimientos' => $tipoestablecimientos,
            'tipo_diagnostico' => $tipodiagnostico,
            'diagnostico' => $diagnostico,
        ));

        return $jasperReport->buildReport();
    }
    
    /**
     *@Route("/rpt_micr_plan/{report_name}/{report_format}/{fecha_inicio}/{fecha_fin}/{deptos}/{municipios}/{establecimientos}/{tipoestablecimientos}/{tipomicronutriente}/{micronutriente}/{id_servicio}", name="rpt_micr_plan", options={"expose"=true})
     */
    public function ReporteMicronutrientesPlanificadosAction($report_name, $report_format, $fecha_inicio, $fecha_fin, $deptos, $municipios, $establecimientos, $tipoestablecimientos, $tipomicronutriente, $micronutriente, $id_servicio = 0) {

        $jasperReport = $this->container->get('jasper.build.reports');
        $jasperReport->setReportName($report_name);
        $jasperReport->setReportFormat($report_format);
        $jasperReport->setReportPath("/reports_siaps_seguimiento/siaps/seguimiento/");
        $jasperReport->setReportParams(array(
            'fecha_inicio' => $fecha_inicio,
            'fecha_fin' => $fecha_fin,
            'deptos'=>  $deptos,
            'municipios' => $municipios,
            'establecimientos' => $establecimientos,
            'tipoestablecimientos' => $tipoestablecimientos,
            'tipo_micronutriente' => $tipomicronutriente,
            'micronutriente' => $micronutriente,
        ));

        return $jasperReport->buildReport();
    }

    /**
     *@Route("/rpt_vac_plan/{report_name}/{report_format}/{fecha_inicio}/{fecha_fin}/{deptos}/{municipios}/{establecimientos}/{tipoestablecimientos}/{tipovacuna}/{presentacion}/{id_servicio}", name="rpt_vac_plan", options={"expose"=true})
     * 
     * 
     */
    public function ReporteVacunasPlanificadasAction($report_name, $report_format, $fecha_inicio, $fecha_fin, $deptos, $municipios, $establecimientos, $tipoestablecimientos, $tipovacuna, $presentacion, $id_servicio = 0) {

        $jasperReport = $this->container->get('jasper.build.reports');
        $jasperReport->setReportName($report_name);
        $jasperReport->setReportFormat($report_format);
        $jasperReport->setReportPath("/reports_siaps_seguimiento/siaps/seguimiento/");
        $jasperReport->setReportParams(array(
            'fecha_inicio' => $fecha_inicio,
            'fecha_fin' => $fecha_fin,
            'deptos'=>  $deptos,
            'municipios' => $municipios,
            'establecimientos' => $establecimientos,
            'tipoestablecimientos' => $tipoestablecimientos,
            'tipo_vacuna' => $tipovacuna,
            'presentacion' => $presentacion,
        ));

        return $jasperReport->buildReport();
    }

    /**
     *@Route("/rpt_con_anot/{report_name}/{report_format}/{fecha_inicio}/{fecha_fin}/{deptos}/{municipios}/{establecimientos}/{tipoestablecimientos}/{codigo_expediente}/{codigo_enfermera}/{id_servicio}", name="rpt_con_anot", options={"expose"=true})
     */
    public function ReporteConsolidadoAnotacionesAction($report_name, $report_format, $fecha_inicio, $fecha_fin, $deptos, $municipios, $establecimientos, $tipoestablecimientos, $codigo_expediente, $codigo_enfermera, $id_servicio = 0) {

        $jasperReport = $this->container->get('jasper.build.reports');
        $jasperReport->setReportName($report_name);
        $jasperReport->setReportFormat($report_format);
        $jasperReport->setReportPath("/reports_siaps_seguimiento/siaps/seguimiento/");
       $jasperReport->setReportParams(array(
            'fecha_inicio' => $fecha_inicio,
            'fecha_fin' => $fecha_fin,
            'deptos'=>  $deptos,
            'municipios' => $municipios,
            'establecimientos' => $establecimientos,
            'tipoestablecimientos' => $tipoestablecimientos,
            'codigo_expediente' => $codigo_expediente,
            'codigo_enfermera' => $codigo_enfermera,
        ));
       
   
        return $jasperReport->buildReport();
    }

    /**
     *@Route("/rpt_con_diag/{report_name}/{report_format}/{fecha_inicio}/{fecha_fin}/{deptos}/{municipios}/{establecimientos}/{tipoestablecimientos}/{codigo_expediente}/{codigo_enfermera}/{id_servicio}", name="rpt_con_diag", options={"expose"=true})
     */
    public function ReporteConsolidadoDiagnosticosAction($report_name, $report_format, $fecha_inicio, $fecha_fin, $deptos, $municipios, $establecimientos, $tipoestablecimientos, $codigo_expediente, $codigo_enfermera, $id_servicio = 0) {

        $jasperReport = $this->container->get('jasper.build.reports');
        $jasperReport->setReportName($report_name);
        $jasperReport->setReportFormat($report_format);
        $jasperReport->setReportPath("/reports_siaps_seguimiento/siaps/seguimiento/");
       $jasperReport->setReportParams(array(
            'fecha_inicio' => $fecha_inicio,
            'fecha_fin' => $fecha_fin,
            'deptos'=>  $deptos,
            'municipios' => $municipios,
            'establecimientos' => $establecimientos,
            'tipoestablecimientos' => $tipoestablecimientos,
            'codigo_expediente' => $codigo_expediente,
            'codigo_enfermera' => $codigo_enfermera,
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
    /**
     *@Route("/all/obtener/actividades/todos/", name="get_all_actividades", options={"expose"=true})
     */
      public function getActividadesdAction() {
        $em = $this->getDoctrine()->getManager();

        $dql = "SELECT o
                FROM MinsalSipernesBundle:EnfCtlActividad o
                ";
        $actividades['actividades'] = $em->createQuery($dql)
                ->getArrayResult();

        return new Response(json_encode($actividades));
    }
    
    /**
     *@Route("/all/obtener/sub/actividades/todos/{id}", name="get_all_sub_actividades", options={"expose"=true})
     */
      public function getSubActividadesdAction($id) {
        $em = $this->getDoctrine()->getManager();

        $dql = "SELECT o
                FROM MinsalSipernesBundle:EnfCtlSubactividad o
                WHERE o.idActividad = :id";
        $subactividades['subactividades'] = $em->createQuery($dql)->setParameter('id', $id)->getArrayResult();
                

        return new Response(json_encode($subactividades));
    }
    
    /**
     *@Route("/all/obtener/establecimientos/", name="get_all_establecimientos", options={"expose"=true})
     */
      public function getEstablecimientoAction() {
        $em = $this->getDoctrine()->getManager();

        $dql = "SELECT o
                FROM MinsalSipernesBundle:CtlEstablecimiento o
                WHERE o.idEstablecimientoPadre is null";
        $establecimientos['establecimientos'] = $em->createQuery($dql)
                ->getArrayResult();

        return new Response(json_encode($establecimientos));
    }
    
    /**
     *@Route("/all/obtener/establecimientos/todos/{id}", name="get_all_sub_establecimientos", options={"expose"=true})
     */
      public function getTipoEstablecimientos($id) {
        $em = $this->getDoctrine()->getManager();

        $dql = "SELECT o
                FROM MinsalSipernesBundle:CtlEstablecimiento o
                WHERE o.idEstablecimientoPadre = :id";
        $subestablecimientos['subestablecimientos'] = $em->createQuery($dql)->setParameter('id', $id)->getArrayResult();
                

        return new Response(json_encode($subestablecimientos));
    }
    
}

?>
