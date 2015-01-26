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
     *@Route("/rpt_micr_aplic/{report_name}/{report_format}/{fecha_inicio}/{fecha_fin}/{deptos}/{municipios}/{establecimientos}/{tipoestablecimientos}/{id_servicio}", name="rpt_micr_aplic", options={"expose"=true})
     */
    public function ReporteMicronutrientesAplicadosAction($report_name, $report_format, $fecha_inicio, $fecha_fin, $deptos, $municipios, $establecimientos, $tipoestablecimientos, $id_servicio = 0) {

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
        ));

        return $jasperReport->buildReport();
    }

    /**
     *@Route("/rpt_vac_aplic/{report_name}/{report_format}/{fecha_inicio}/{fecha_fin}/{deptos}/{municipios}/{establecimientos}/{tipoestablecimientos}/{id_servicio}", name="rpt_vac_aplic", options={"expose"=true})
     */
    public function ReporteVacunasAplicadasAction($report_name, $report_format, $fecha_inicio, $fecha_fin, $deptos, $municipios, $establecimientos, $tipoestablecimientos, $id_servicio = 0) {

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
        ));

        return $jasperReport->buildReport();
    }

    /**
     *@Route("/rpt_pac_dig_graf/{report_name}/{report_format}/{fecha_inicio}/{fecha_fin}/{deptos}/{municipios}/{establecimientos}/{tipoestablecimientos}/{tipodiagnostico}/{diagnostico}/{grafico}/{id_servicio}", name="rpt_pac_dig_graf", options={"expose"=true})
     */
    public function ReportePacienteDiagnosticosGrafAction($report_name, $report_format, $fecha_inicio, $fecha_fin, $deptos, $municipios, $establecimientos, $tipoestablecimientos, $tipodiagnostico, $diagnostico, $grafico, $id_servicio = 0) {

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
            'grafico' => $grafico,
        ));

        return $jasperReport->buildReport();
    }

    /**
     *@Route("/rpt_mens_prod/{report_name}/{report_format}/{fecha_inicio}/{fecha_fin}/{deptos}/{municipios}/{establecimientos}/{tipoestablecimientos}/{tipoproduccion}/{produccion}/{id_servicio}", name="rpt_mens_prod", options={"expose"=true})
     */
    public function ReporteMensualProduccionAction($report_name, $report_format, $fecha_inicio, $fecha_fin, $deptos, $municipios, $establecimientos, $tipoestablecimientos, $tipoproduccion, $produccion, $id_servicio = 0) {

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
            'tipo_produccion' => $tipoproduccion,
            'produccion' => $produccion,
        ));

        return $jasperReport->buildReport();
    }

    /**
     *@Route("/rpt_con_anot_sem/{report_name}/{report_format}/{fecha_inicio}/{fecha_fin}/{deptos}/{municipios}/{establecimientos}/{tipoestablecimientos}/{codigo_expediente}/{codigo_enfermera}/{id_servicio}", name="rpt_con_anot_sem", options={"expose"=true})
     */
    public function ReporteConsolidadoSemanalActividadesAction($report_name, $report_format, $fecha_inicio, $fecha_fin, $deptos, $municipios, $establecimientos, $tipoestablecimientos, $codigo_expediente, $codigo_enfermera, $id_servicio = 0) {

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
    
    /**
     *@Route("tipos/diag/all/diagnosticos/", name="get_tipos_diagnos", options={"expose"=true})
     */
      public function getTiposDiagnosticosAction() {
        $em = $this->getDoctrine()->getManager();

        $dql = "SELECT o
                FROM MinsalSipernesBundle:EnfClase o";
      $tipos_diagnosticos['tipos_diagnosticos'] = $em->createQuery($dql)
                ->getArrayResult();

        return new Response(json_encode($tipos_diagnosticos));
    }
    
    /**
     *@Route("diag/all/diagnosticos/{id}", name="get_diag", options={"expose"=true})
     */
public function getDiagnosticosbyTipoAction($id) {
        $em = $this->getDoctrine()->getManager();

        $dql = "SELECT o
                FROM MinsalSipernesBundle:EnfCtlDiagnostico o
                WHERE o.id = :id";
        $diagnosticos['diagnosticos'] = $em->createQuery($dql)->setParameter('id', $id)->getArrayResult();
                

        return new Response(json_encode($diagnosticos));
    }
    
    /**
     *@Route("bytipos/micro/all/", name="get_tipos_micro", options={"expose"=true})
     */
      public function getTiposMicronutrientesAction() {
        $em = $this->getDoctrine()->getManager();

        $dql = "SELECT o
                FROM MinsalSipernesBundle:EnfClase o";
      $tipos_diagnosticos['tipos_diagnosticos'] = $em->createQuery($dql)
                ->getArrayResult();

        return new Response(json_encode($tipos_diagnosticos));
    }
    
    /**
     *@Route("diag/all/diagnosticos/{id}", name="get_diag", options={"expose"=true})
     */
public function getMicronutrientesbyTipoAction($id) {
        $em = $this->getDoctrine()->getManager();

        $dql = "SELECT o
                FROM MinsalSipernesBundle:EnfCtlDiagnostico o
                WHERE o.id = :id";
        $diagnosticos['diagnosticos'] = $em->createQuery($dql)->setParameter('id', $id)->getArrayResult();
                

        return new Response(json_encode($diagnosticos));
    }
    
    /**
     *@Route("expedientes/codigo/all/", name="get_expedientes_enf", options={"expose"=true})
     */
      public function getNumExpedientePacienteAction() {
        $em = $this->getDoctrine()->getManager();

        $dql = "SELECT o
                FROM MinsalSipernesBundle:MntExpediente o";
      $pacientes['pacientes'] = $em->createQuery($dql)
                ->getArrayResult();

        return new Response(json_encode($pacientes));
    }
    
    /**
     *@Route("Num/Empleado/all/Empleados/", name="get_empleados_enf", options={"expose"=true})
     */
public function getNumEmpleadoEnfermeraAction() {
        $em = $this->getDoctrine()->getManager();

        $dql = "SELECT o
                FROM MinsalSipernesBundle:MntEmpleado o";
                
        $empleados['empleados'] = $em->createQuery($dql)
                  ->getArrayResult();             

        return new Response(json_encode($empleados));
}

 /**
     *@Route("protocolos/todos/", name="get_all_protocolos", options={"expose"=true})
     */
      public function getProtocolosAction() {
        $em = $this->getDoctrine()->getManager();

        $dql = "SELECT o
                FROM MinsalSipernesBundle:EnfCtlProtocolo o";
      $protocolos['protocolos'] = $em->createQuery($dql)
                ->getArrayResult();

        return new Response(json_encode($protocolos));
    }
    
    /**
     *@Route("todos/los/protocolos/por/{id}", name="get_sub_protocolos", options={"expose"=true})
     */
public function getSubProtocolosByProtocoloAction($id) {
        $em = $this->getDoctrine()->getManager();

        $dql = "SELECT o
                FROM MinsalSipernesBundle:EnfCtlSubprotocolo o
                WHERE o.id = :id";
        $subprotocolos['subprotocolos'] = $em->createQuery($dql)->setParameter('id', $id)->getArrayResult();
                

        return new Response(json_encode($subprotocolos));
    }
    
}

?>
