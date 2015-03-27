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
use Minsal\SipernesBundle\Entity\EnfBitacoraCapacitacion;
use Symfony\Component\HttpFoundation\Session\Session;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Response;

class ReporteMetodoController extends Controller {

    /**
     * @Route("/prueba2/{report_name}/{report_format}/{PRUEBA}/{id_servicio}", name="prueba2", options={"expose"=true})
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
     * @Route("/rpt_con_act/{report_name}/{report_format}/{fecha_inicio}/{fecha_fin}/{actividades}/{subactividades}/{deptos}/{municipios}/{establecimientos}/{tipoestablecimientos}/{codigo_expediente}/{codigo_enfermera}/{id_servicio}", name="rpt_con_act", options={"expose"=true})
     */
    public function ReporteConsolidadoActividadesAction($report_name, $report_format, $fecha_inicio, $fecha_fin, $actividades, $subactividades, $deptos, $municipios, $establecimientos, $tipoestablecimientos, $codigo_expediente, $codigo_enfermera, $id_servicio = 0) {

        $jasperReport = $this->container->get('jasper.build.reports');
        $jasperReport->setReportName($report_name);
        $jasperReport->setReportFormat($report_format);
        $jasperReport->setReportPath("/reports_siaps_seguimiento/siaps/seguimiento/");
        $jasperReport->setReportParams(array(
            'fpini' => $fecha_inicio,
            'fpfin' => $fecha_fin,
            'subactividad' => $subactividades,
            'municipio' => $municipios,
            'tipoEstable' => $tipoestablecimientos,
            'codigoExp' => $codigo_expediente,
            'codigoEmp' => $codigo_enfermera,
            'id_servicio' => 0
        ));


        return $jasperReport->buildReport();
    }

    /**
     * @Route("/rpt_pac_dig/{report_name}/{report_format}/{fecha_inicio}/{fecha_fin}/{deptos}/{municipios}/{establecimientos}/{tipoestablecimientos}/{tipo_diag}/{diagnostico}/{id_servicio}", name="rpt_pac_dig", options={"expose"=true})
     */
    public function ReportePacienteDiagnosticosAction($report_name, $report_format, $fecha_inicio, $fecha_fin, $deptos, $municipios, $establecimientos, $tipoestablecimientos, $tipo_diag, $diagnostico, $id_servicio = 0) {

        $jasperReport = $this->container->get('jasper.build.reports');
        $jasperReport->setReportName($report_name);
        $jasperReport->setReportFormat($report_format);
        $jasperReport->setReportPath("/reports_siaps_seguimiento/siaps/seguimiento/");
        $jasperReport->setReportParams(array(
            'fpini' => $fecha_inicio,
            'fpfin' => $fecha_fin,
            'tipoEstable' => $tipoestablecimientos,
            'codigoExp' => 'vacio',
            'codigoEmp' => 'vacio',
            'tipo_diag' => $tipo_diag,
            'diagnostico' => $diagnostico,
            'id_servicio' => 0
        ));

        return $jasperReport->buildReport();
    }

    /**
     * @Route("/rpt_micr_plan/{report_name}/{report_format}/{fecha_inicio}/{fecha_fin}/{deptos}/{municipios}/{establecimientos}/{tipoestablecimientos}/{tipomicronutriente}/{micronutriente}/{id_servicio}", name="rpt_micr_plan", options={"expose"=true})
     */
    public function ReporteMicronutrientesPlanificadosAction($report_name, $report_format, $fecha_inicio, $fecha_fin, $deptos, $municipios, $establecimientos, $tipoestablecimientos, $tipomicronutriente, $micronutriente, $id_servicio = 0) {

        $jasperReport = $this->container->get('jasper.build.reports');
        $jasperReport->setReportName($report_name);
        $jasperReport->setReportFormat($report_format);
        $jasperReport->setReportPath("/reports_siaps_seguimiento/siaps/seguimiento/");
        $jasperReport->setReportParams(array(
            'fpini' => $fecha_inicio,
            'fpfin' => $fecha_fin,
//            'deptos'=>  $deptos,
//            'municipios' => $municipios,
//            'establecimientos' => $establecimientos,
            'tipoEstable' => $tipoestablecimientos,
            'codigoEmp' => 'vacio',
            'codigoExp' => 'vacio',
            'id_servicio' => 0,
//            'tipo_micronutriente' => $tipomicronutriente,
//            'micronutriente' => $micronutriente,
        ));

        return $jasperReport->buildReport();
    }

    /**
     * @Route("/rpt_vac_plan/{report_name}/{report_format}/{fecha_inicio}/{fecha_fin}/{deptos}/{municipios}/{establecimientos}/{tipoestablecimientos}/{tipovacuna}/{presentacion}/{id_servicio}", name="rpt_vac_plan", options={"expose"=true})
     */
    public function ReporteVacunasPlanificadasAction($report_name, $report_format, $fecha_inicio, $fecha_fin, $deptos, $municipios, $establecimientos, $tipoestablecimientos, $tipovacuna, $presentacion, $id_servicio = 0) {

        $jasperReport = $this->container->get('jasper.build.reports');
        $jasperReport->setReportName($report_name);
        $jasperReport->setReportFormat($report_format);
        $jasperReport->setReportPath("/reports_siaps_seguimiento/siaps/seguimiento/");
        $jasperReport->setReportParams(array(
            'fecha_inicio' => $fecha_inicio,
            'fecha_fin' => $fecha_fin,
            'deptos' => $deptos,
            'municipios' => $municipios,
            'establecimientos' => $establecimientos,
            'tipoestablecimientos' => $tipoestablecimientos,
            'tipo_vacuna' => $tipovacuna,
            'presentacion' => $presentacion,
        ));

        return $jasperReport->buildReport();
    }

    /**
     * @Route("/rpt_con_anot/{report_name}/{report_format}/{fecha_inicio}/{fecha_fin}/{deptos}/{municipios}/{establecimientos}/{tipoestablecimientos}/{codigo_expediente}/{codigo_enfermera}/{id_servicio}", name="rpt_con_anot", options={"expose"=true})
     */
    public function ReporteConsolidadoAnotacionesAction($report_name, $report_format, $fecha_inicio, $fecha_fin, $deptos, $municipios, $establecimientos, $tipoestablecimientos, $codigo_expediente, $codigo_enfermera, $id_servicio = 0) {

        $jasperReport = $this->container->get('jasper.build.reports');
        $jasperReport->setReportName($report_name);
        $jasperReport->setReportFormat($report_format);
        $jasperReport->setReportPath("/reports_siaps_seguimiento/siaps/seguimiento/");
        if ($codigo_enfermera == 'Seleccione..' || $codigo_enfermera == 'Seleccione...') {
            $codigo_enfermera = null;
        }
        if ($codigo_expediente == 'Seleccione..' || $codigo_expediente == 'Seleccione...') {
            $codigo_expediente = null;
        }
        $jasperReport->setReportParams(array(
            'fpini' => $fecha_inicio,
            'fpfin' => $fecha_fin,
//            'deptos'=>  $deptos,
//            'municipios' => $municipios,
//            'establecimientos' => $establecimientos,
            'tipoEstable' => $tipoestablecimientos,
            'codigoExp' => $codigo_expediente,
            'codigoEmp' => $codigo_enfermera,
            'id_servicio' => 0,
        ));


        return $jasperReport->buildReport();
    }

    /**
     * @Route("/rpt_con_diag/{report_name}/{report_format}/{fecha_inicio}/{fecha_fin}/{deptos}/{municipios}/{establecimientos}/{tipoestablecimientos}/{codigo_expediente}/{codigo_enfermera}/{id_servicio}", name="rpt_con_diag", options={"expose"=true})
     */
    public function ReporteConsolidadoDiagnosticosAction($report_name, $report_format, $fecha_inicio, $fecha_fin, $deptos, $municipios, $establecimientos, $tipoestablecimientos, $codigo_expediente, $codigo_enfermera, $id_servicio = 0) {

        $jasperReport = $this->container->get('jasper.build.reports');
        $jasperReport->setReportName($report_name);
        $jasperReport->setReportFormat($report_format);
        $jasperReport->setReportPath("/reports_siaps_seguimiento/siaps/seguimiento/");
        $jasperReport->setReportParams(array(
            'fpini' => $fecha_inicio,
            'fpfin' => $fecha_fin,
            'municipio' => $municipios,
            'tipoEstable' => $tipoestablecimientos,
            'codigoExp' => $codigo_expediente,
            'codigoEmp' => $codigo_enfermera,
            'id_servicio' => 0,
        ));


        return $jasperReport->buildReport();
    }

    /**
     * @Route("/rpt_micr_aplic/{report_name}/{report_format}/{fecha_inicio}/{fecha_fin}/{deptos}/{municipios}/{establecimientos}/{tipoestablecimientos}/{id_servicio}", name="rpt_micr_aplic", options={"expose"=true})
     */
    public function ReporteMicronutrientesAplicadosAction($report_name, $report_format, $fecha_inicio, $fecha_fin, $deptos, $municipios, $establecimientos, $tipoestablecimientos, $id_servicio = 0) {

        $jasperReport = $this->container->get('jasper.build.reports');
        $jasperReport->setReportName($report_name);
        $jasperReport->setReportFormat($report_format);
        $jasperReport->setReportPath("/reports_siaps_seguimiento/siaps/seguimiento/");
        $jasperReport->setReportParams(array(
            'fecha_inicio' => $fecha_inicio,
            'fecha_fin' => $fecha_fin,
            'deptos' => $deptos,
            'municipios' => $municipios,
            'establecimientos' => $establecimientos,
            'tipoestablecimientos' => $tipoestablecimientos,
        ));

        return $jasperReport->buildReport();
    }

    /**
     * @Route("/rpt_vac_aplic/{report_name}/{report_format}/{fecha_inicio}/{fecha_fin}/{deptos}/{municipios}/{establecimientos}/{tipoestablecimientos}/{id_servicio}", name="rpt_vac_aplic", options={"expose"=true})
     */
    public function ReporteVacunasAplicadasAction($report_name, $report_format, $fecha_inicio, $fecha_fin, $deptos, $municipios, $establecimientos, $tipoestablecimientos, $id_servicio = 0) {

        $jasperReport = $this->container->get('jasper.build.reports');
        $jasperReport->setReportName($report_name);
        $jasperReport->setReportFormat($report_format);
        $jasperReport->setReportPath("/reports_siaps_seguimiento/siaps/seguimiento/");
        $jasperReport->setReportParams(array(
            'fpini' => $fecha_inicio,
            'fpfin' => $fecha_fin,
//            'deptos' => $deptos,
//            'municipios' => $municipios,
//            'establecimientos' => $establecimientos,
            'tipoEstable' => $tipoestablecimientos,
            'id_servicio' => 0,
        ));

        return $jasperReport->buildReport();
    }

    /**
     * @Route("/rpt_pac_dig_graf/{report_name}/{report_format}/{fecha_inicio}/{fecha_fin}/{deptos}/{municipios}/{establecimientos}/{tipoestablecimientos}/{tipodiagnostico}/{diagnostico}/{grafico}/{id_servicio}", name="rpt_pac_dig_graf", options={"expose"=true})
     */
    public function ReportePacienteDiagnosticosGrafAction($report_name, $report_format, $fecha_inicio, $fecha_fin, $deptos, $municipios, $establecimientos, $tipoestablecimientos, $tipodiagnostico, $diagnostico, $grafico, $id_servicio = 0) {

        $jasperReport = $this->container->get('jasper.build.reports');
        $jasperReport->setReportName($report_name);
        $jasperReport->setReportFormat($report_format);
        $jasperReport->setReportPath("/reports_siaps_seguimiento/siaps/seguimiento/");
        $jasperReport->setReportParams(array(
            'fpini' => $fecha_inicio,
            'fpfin' => $fecha_fin,
//            'deptos'=>  $deptos,
//            'municipios' => $municipios,
//            'establecimientos' => $establecimientos,
            'tipoEstable' => $tipoestablecimientos,
            'codigoExp' => 0,
            'codigoEmp' => 0,
            'id_servicio' => 0,
            'tipo_diag' => $tipodiagnostico,
            'diagnostico' => $diagnostico
//            'grafico' => $grafico,
        ));

        return $jasperReport->buildReport();
    }

    /**
     * @Route("/rpt_mens_prod/{report_name}/{report_format}/{fecha_inicio}/{fecha_fin}/{deptos}/{municipios}/{establecimientos}/{tipoestablecimientos}/{tipoproduccion}/{produccion}/{id_servicio}", name="rpt_mens_prod", options={"expose"=true})
     */
    public function ReporteMensualProduccionAction($report_name, $report_format, $fecha_inicio, $fecha_fin, $deptos, $municipios, $establecimientos, $tipoestablecimientos, $tipoproduccion, $produccion, $id_servicio = 0) {

        $jasperReport = $this->container->get('jasper.build.reports');
        $jasperReport->setReportName($report_name);
        $jasperReport->setReportFormat($report_format);
        $jasperReport->setReportPath("/reports_siaps_seguimiento/siaps/seguimiento/");
        $jasperReport->setReportParams(array(
            'fecha_inicio' => $fecha_inicio,
            'fecha_fin' => $fecha_fin,
            'deptos' => $deptos,
            'municipios' => $municipios,
            'establecimientos' => $establecimientos,
            'tipoestablecimientos' => $tipoestablecimientos,
            'tipo_produccion' => $tipoproduccion,
            'produccion' => $produccion,
        ));

        return $jasperReport->buildReport();
    }

    /**
     * @Route("/rpt_con_anot_sem/{report_name}/{report_format}/{fecha_inicio}/{fecha_fin}/{deptos}/{municipios}/{establecimientos}/{tipoestablecimientos}/{codigo_expediente}/{codigo_enfermera}/{id_servicio}", name="rpt_con_anot_sem", options={"expose"=true})
     */
    public function ReporteConsolidadoSemanalActividadesAction($report_name, $report_format, $fecha_inicio, $fecha_fin, $deptos, $municipios, $establecimientos, $tipoestablecimientos, $codigo_expediente, $codigo_enfermera, $id_servicio = 0) {

        $jasperReport = $this->container->get('jasper.build.reports');
        $jasperReport->setReportName($report_name);
        $jasperReport->setReportFormat($report_format);
        $jasperReport->setReportPath("/reports_siaps_seguimiento/siaps/seguimiento/");
        $jasperReport->setReportParams(array(
            'fecha_inicio' => $fecha_inicio,
            'fecha_fin' => $fecha_fin,
            'deptos' => $deptos,
            'municipios' => $municipios,
            'establecimientos' => $establecimientos,
            'tipoestablecimientos' => $tipoestablecimientos,
            'codigo_expediente' => $codigo_expediente,
            'codigo_enfermera' => $codigo_enfermera,
        ));

        return $jasperReport->buildReport();
    }

    /**
     * @Route("/rpt_con_diag_siete/{report_name}/{report_format}/{deptos}/{municipios}/{establecimientos}/{tipoestablecimientos}/{tipodiag}/{diagnostico}/{codigo_enfermera}/{fecha_inicio}/{id_servicio}", name="rpt_con_diag_siete", options={"expose"=true})
     */
    public function ReporteConsolidadoSieteDiagnosticoAction($report_name, $report_format, $deptos, $municipios, $establecimientos, $tipoestablecimientos, $tipodiag, $diagnostico, $codigo_enfermera, $fecha_inicio, $id_servicio = 0) {

        $jasperReport = $this->container->get('jasper.build.reports');
        $jasperReport->setReportName($report_name);
        $jasperReport->setReportFormat($report_format);
        $jasperReport->setReportPath("/reports_siaps_seguimiento/siaps/seguimiento/");
        $jasperReport->setReportParams(array(
//            'deptos'=>  $deptos,
//            'municipios' => $municipios,
//            'establecimientos' => $establecimientos,
            'tipoEstable' => $tipoestablecimientos,
            'fpini' => $fecha_inicio,
            'codigoEmp' => $codigo_enfermera,
            'id_servicio' => 0,
        ));

        return $jasperReport->buildReport();
    }

    /**
     * @Route("/rpt_con_micro_siete/{report_name}/{report_format}/{deptos}/{municipios}/{establecimientos}/{tipoestablecimientos}/{tipomicro}/{micro}/{codigo_enfermera}/{id_servicio}", name="rpt_con_micro_siete", options={"expose"=true})
     */
    public function ReporteConsolidadoSieteMicronutrienteAction($report_name, $report_format, $deptos, $municipios, $establecimientos, $tipoestablecimientos, $tipomicro, $micro, $codigo_enfermera, $id_servicio = 0) {

        $jasperReport = $this->container->get('jasper.build.reports');
        $jasperReport->setReportName($report_name);
        $jasperReport->setReportFormat($report_format);
        $jasperReport->setReportPath("/reports_siaps_seguimiento/siaps/seguimiento/");
        $jasperReport->setReportParams(array(
            'deptos' => $deptos,
            'municipios' => $municipios,
            'establecimientos' => $establecimientos,
            'tipoestablecimientos' => $tipoestablecimientos,
            'tipomicro' => $tipomicro,
            'micro' => $micro,
            'codigo_enfermera' => $codigo_enfermera,
        ));

        return $jasperReport->buildReport();
    }

    /**
     * @Route("/rpt_con_vac_siete/{report_name}/{report_format}/{deptos}/{municipios}/{establecimientos}/{tipoestablecimientos}/{tipovacuna}/{presentacion}/{codigo_enfermera}/{id_servicio}", name="rpt_con_vac_siete", options={"expose"=true})
     */
    public function ReporteConsolidadoSieteVacunaAction($report_name, $report_format, $deptos, $municipios, $establecimientos, $tipoestablecimientos, $tipovacuna, $presentacion, $codigo_enfermera, $id_servicio = 0) {

        $jasperReport = $this->container->get('jasper.build.reports');
        $jasperReport->setReportName($report_name);
        $jasperReport->setReportFormat($report_format);
        $jasperReport->setReportPath("/reports_siaps_seguimiento/siaps/seguimiento/");
        $jasperReport->setReportParams(array(
            'deptos' => $deptos,
            'municipios' => $municipios,
            'establecimientos' => $establecimientos,
            'tipoestablecimientos' => $tipoestablecimientos,
            'tipovacuna' => $tipovacuna,
            'presentacion' => $presentacion,
            'codigo_enfermera' => $codigo_enfermera,
        ));

        return $jasperReport->buildReport();
    }

    /**
     * @Route("/rpt_con_activ_siete/{report_name}/{report_format}/{deptos}/{municipios}/{establecimientos}/{tipoestablecimientos}/{fecha_inicio}/{codigo_enfermera}/{subactividades}/{id_servicio}", name="rpt_con_activ_siete", options={"expose"=true})
     */
    public function ReporteConsolidadoSieteActivAction($report_name, $report_format, $deptos, $municipios, $establecimientos, $tipoestablecimientos, $fecha_inicio, $codigo_enfermera, $subactividades, $id_servicio = 0) {

        $jasperReport = $this->container->get('jasper.build.reports');
        $jasperReport->setReportName($report_name);
        $jasperReport->setReportFormat($report_format);
        $jasperReport->setReportPath("/reports_siaps_seguimiento/siaps/seguimiento/");
        $jasperReport->setReportParams(array(
            'fpini' => $fecha_inicio,
            'municipio' => $municipios,
            'tipoEstable' => $tipoestablecimientos,
            'codigoEmp' => $codigo_enfermera,
            'subactividad' => $subactividades,
            'id_servicio' => 0,
        ));

        return $jasperReport->buildReport();
    }

    /**
     * @Route("/rpt_con_vacuna_semanal/{report_name}/{report_format}/{fecha_inicio}/{fecha_fin}/{deptos}/{municipios}/{establecimientos}/{tipoestablecimientos}/{tipovacuna}/{presentacion}/{codigo_enfermera}/{id_servicio}", name="rpt_con_vacuna_semanal", options={"expose"=true})
     */
    public function ReporteConsolidadoSemanalVacunasAction($report_name, $report_format, $fecha_inicio, $fecha_fin, $deptos, $municipios, $establecimientos, $tipoestablecimientos, $tipovacuna, $presentacion, $codigo_enfermera, $id_servicio = 0) {

        $jasperReport = $this->container->get('jasper.build.reports');
        $jasperReport->setReportName($report_name);
        $jasperReport->setReportFormat($report_format);
        $jasperReport->setReportPath("/reports_siaps_seguimiento/siaps/seguimiento/");
        $jasperReport->setReportParams(array(
            'fpini' => $fecha_inicio,
            'fpfin' => $fecha_fin,
//            'deptos' => $deptos,
//            'municipios' => $municipios,
//            'establecimientos' => $establecimientos,
            'tipoEstable' => $tipoestablecimientos,
//            'tipovacuna' => $tipovacuna,
//            'presentacion' => $presentacion,
            'codigoEmp' => $codigo_enfermera,
            'id_servicio' => 0,
        ));

        return $jasperReport->buildReport();
    }

    /**
     * @Route("/rpt_con_diag_diario/{report_name}/{report_format}/{fecha_inicio}/{fecha_fin}/{deptos}/{municipios}/{establecimientos}/{tipoestablecimientos}/{tipodiag}/{diagnostico}/{codigo_enfermera}/{id_servicio}", name="rpt_con_diag_diario", options={"expose"=true})
     */
    public function ReporteConsolidadoDiarioDiagnosticoAction($report_name, $report_format, $fecha_inicio, $fecha_fin, $deptos, $municipios, $establecimientos, $tipoestablecimientos, $tipodiag, $diagnostico, $codigo_enfermera, $id_servicio = 0) {

        $jasperReport = $this->container->get('jasper.build.reports');
        $jasperReport->setReportName($report_name);
        $jasperReport->setReportFormat($report_format);
        $jasperReport->setReportPath("/reports_siaps_seguimiento/siaps/seguimiento/");
        $jasperReport->setReportParams(array(
            'fpini' => $fecha_inicio,
            'fpfin' => $fecha_fin,
//            'deptos'=>  $deptos,
//            'municipios' => $municipios,
//            'establecimientos' => $establecimientos,
            'tipoEstable' => $tipoestablecimientos,
            'tipo_diag' => $tipodiag,
            'diagnostico' => $diagnostico,
            'codigoEmp' => $codigo_enfermera,
        ));

        return $jasperReport->buildReport();
    }

    /**
     * @Route("/rpt_con_micro_diario/{report_name}/{report_format}/{fecha_inicio}/{fecha_fin}/{deptos}/{municipios}/{establecimientos}/{tipoestablecimientos}/{tipomicro}/{micro}/{id_servicio}", name="rpt_con_micro_diario", options={"expose"=true})
     */
    public function ReporteConsolidadoDiarioMicrosAction($report_name, $report_format, $fecha_inicio, $fecha_fin, $deptos, $municipios, $establecimientos, $tipoestablecimientos, $tipomicro, $micro, $id_servicio = 0) {

        $jasperReport = $this->container->get('jasper.build.reports');
        $jasperReport->setReportName($report_name);
        $jasperReport->setReportFormat($report_format);
        $jasperReport->setReportPath("/reports_siaps_seguimiento/siaps/seguimiento/");
        $jasperReport->setReportParams(array(
            'fecha_inicio' => $fecha_inicio,
            'fecha_fin' => $fecha_fin,
            'deptos' => $deptos,
            'municipios' => $municipios,
            'establecimientos' => $establecimientos,
            'tipoestablecimientos' => $tipoestablecimientos,
            'tipomicro' => $tipomicro,
            'micro' => $micro,
        ));

        return $jasperReport->buildReport();
    }

    /**
     * @Route("/rpt_con_vac_diario/{report_name}/{report_format}/{fecha_inicio}/{fecha_fin}/{deptos}/{municipios}/{establecimientos}/{tipoestablecimientos}/{tipovacuna}/{presentacion}/{id_servicio}", name="rpt_con_vac_diario", options={"expose"=true})
     */
    public function ReporteConsolidadoDiarioVacAction($report_name, $report_format, $fecha_inicio, $fecha_fin, $deptos, $municipios, $establecimientos, $tipoestablecimientos, $tipovacuna, $presentacion, $id_servicio = 0) {

        $jasperReport = $this->container->get('jasper.build.reports');
        $jasperReport->setReportName($report_name);
        $jasperReport->setReportFormat($report_format);
        $jasperReport->setReportPath("/reports_siaps_seguimiento/siaps/seguimiento/");
        $jasperReport->setReportParams(array(
            'fecha_inicio' => $fecha_inicio,
            'fecha_fin' => $fecha_fin,
            'deptos' => $deptos,
            'municipios' => $municipios,
            'establecimientos' => $establecimientos,
            'tipoestablecimientos' => $tipoestablecimientos,
            'tipovacuna' => $tipovacuna,
            'presentacion' => $presentacion,
        ));

        return $jasperReport->buildReport();
    }

    /**
     * @Route("/rpt_con_anot_diario/{report_name}/{report_format}/{fecha_inicio}/{fecha_fin}/{deptos}/{municipios}/{establecimientos}/{tipoestablecimientos}/{tipoanotacion}/{anotacion}/{codigo_expediente}/{codigo_enfermera}/{id_servicio}", name="rpt_con_anot_diario", options={"expose"=true})
     */
    public function ReporteConsolidadoDiarioAnotacAction($report_name, $report_format, $fecha_inicio, $fecha_fin, $deptos, $municipios, $establecimientos, $tipoestablecimientos, $tipoanotacion, $anotacion, $codigo_expediente, $codigo_enfermera, $id_servicio = 0) {

        $jasperReport = $this->container->get('jasper.build.reports');
        $jasperReport->setReportName($report_name);
        $jasperReport->setReportFormat($report_format);
        $jasperReport->setReportPath("/reports_siaps_seguimiento/siaps/seguimiento/");
        $jasperReport->setReportParams(array(
            'fpini' => $fecha_inicio,
            'fpfin' => $fecha_fin,
//            'deptos' => $deptos,
//            'municipios' => $municipios,
//            'establecimientos' => $establecimientos,
            'tipoEstable' => $tipoestablecimientos,
//            'tipoanotacion' => $tipoanotacion,
//            'anotacion' => $anotacion,
            'codigoExp' => $codigo_expediente,
            'codigoEmp' => $codigo_enfermera,
            'id_servicio' => 0,
        ));

        return $jasperReport->buildReport();
    }

    /**
     * @Route("/rpt_con_enfer_diario/{report_name}/{report_format}/{fecha_inicio}/{fecha_fin}/{deptos}/{municipios}/{establecimientos}/{tipoestablecimientos}/{tipodiag}/{diagnostico}/{codigo_expediente}/{codigo_enfermera}/{id_servicio}", name="rpt_con_enfer_diario", options={"expose"=true})
     */
    public function ReporteConsolidadoDiarioEnferAction($report_name, $report_format, $fecha_inicio, $fecha_fin, $deptos, $municipios, $establecimientos, $tipoestablecimientos, $tipodiag, $diagnostico, $codigo_expediente, $codigo_enfermera, $id_servicio = 0) {

        $jasperReport = $this->container->get('jasper.build.reports');
        $jasperReport->setReportName($report_name);
        $jasperReport->setReportFormat($report_format);
        $jasperReport->setReportPath("/reports_siaps_seguimiento/siaps/seguimiento/");
        $jasperReport->setReportParams(array(
            'fpini' => $fecha_inicio,
            'fpini' => $fecha_fin,
//            'deptos'=>  $deptos,
//            'municipios' => $municipios,
//            'establecimientos' => $establecimientos,
            'tipoEstable' => $tipoestablecimientos,
            'tipo_diag' => $tipodiag,
            'diagnostico' => $diagnostico,
            'codigoExp' => $codigo_expediente,
            'codigoEmp' => $codigo_enfermera,
        ));

        return $jasperReport->buildReport();
    }

    /**
     * @Route("/rpt_con_activ_diario/{report_name}/{report_format}/{fecha_inicio}/{fecha_fin}/{deptos}/{municipios}/{establecimientos}/{tipoestablecimientos}/{actividades}/{subactividades}/{codigo_enfermera}/{id_servicio}", name="rpt_con_activ_diario", options={"expose"=true})
     */
    public function ReporteConsolidadoDiarioActivAction($report_name, $report_format, $fecha_inicio, $fecha_fin, $deptos, $municipios, $establecimientos, $tipoestablecimientos, $actividades, $subactividades, $codigo_enfermera, $id_servicio = 0) {

        $jasperReport = $this->container->get('jasper.build.reports');
        $jasperReport->setReportName($report_name);
        $jasperReport->setReportFormat($report_format);
        $jasperReport->setReportPath("/reports_siaps_seguimiento/siaps/seguimiento/");
        $jasperReport->setReportParams(array(
            'fecha_inicio' => $fecha_inicio,
            'fecha_inicio' => $fecha_fin,
            'deptos' => $deptos,
            'municipios' => $municipios,
            'establecimientos' => $establecimientos,
            'tipoestablecimientos' => $tipoestablecimientos,
            'actividades' => $actividades,
            'subactividades' => $subactividades,
            'codigo_enfermera' => $codigo_enfermera,
        ));

        return $jasperReport->buildReport();
    }

    /**
     * @Route("/rpt_con_capac_diario/{report_name}/{report_format}/{fecha_inicio}/{fecha_fin}/{deptos}/{municipios}/{establecimientos}/{tipoestablecimientos}/{financiado}/{codigo_enfermera}/{id_servicio}", name="rpt_con_capac_diario", options={"expose"=true})
     */
    public function ReporteConsolidadoDiarioCapacAction($report_name, $report_format, $fecha_inicio, $fecha_fin, $deptos, $municipios, $establecimientos, $tipoestablecimientos, $financiado, $codigo_enfermera, $id_servicio = 0) {

        $jasperReport = $this->container->get('jasper.build.reports');
        $jasperReport->setReportName($report_name);
        $jasperReport->setReportFormat($report_format);
        $jasperReport->setReportPath("/reports_siaps_seguimiento/siaps/seguimiento/");
        $jasperReport->setReportParams(array(
            'fpini' => $fecha_inicio,
            'fpini' => $fecha_fin,
            'municipios' => $municipios,
            'tipoEstable' => $tipoestablecimientos,
            'financiado' => $financiado,
            'codigoEmp' => $codigo_enfermera,
            'id_servicio' => 0,
        ));

        return $jasperReport->buildReport();
    }

    /**
     * @Route("/rpt_con_control_vac/{report_name}/{report_format}/{fecha_inicio}/{fecha_fin}/{deptos}/{municipios}/{establecimientos}/{tipoestablecimientos}/{id_servicio}", name="rpt_con_control_vac", options={"expose"=true})
     */
    public function ReporteConsolidadoControlVacAction($report_name, $report_format, $fecha_inicio, $fecha_fin, $deptos, $municipios, $establecimientos, $tipoestablecimientos, $id_servicio = 0) {

        $jasperReport = $this->container->get('jasper.build.reports');
        $jasperReport->setReportName($report_name);
        $jasperReport->setReportFormat($report_format);
        $jasperReport->setReportPath("/reports_siaps_seguimiento/siaps/seguimiento/");
        $jasperReport->setReportParams(array(
            'fecha_inicio' => $fecha_inicio,
            'fecha_fin' => $fecha_fin,
            'deptos' => $deptos,
            'municipios' => $municipios,
            'establecimientos' => $establecimientos,
            'tipoestablecimientos' => $tipoestablecimientos,
        ));

        return $jasperReport->buildReport();
    }

    /**
     * @Route("/rpt_con_inmun_diario/{report_name}/{report_format}/{fecha_inicio}/{fecha_fin}/{deptos}/{municipios}/{establecimientos}/{tipoestablecimientos}/{deptos2}/{municipios2}/{sector}/{id_servicio}", name="rpt_con_inmun_diario", options={"expose"=true})
     */
    public function ReporteConsolidadoInmunizAction($report_name, $report_format, $fecha_inicio, $fecha_fin, $deptos, $municipios, $establecimientos, $tipoestablecimientos, $deptos2, $municipios2, $sector, $id_servicio = 0) {

        $jasperReport = $this->container->get('jasper.build.reports');
        $jasperReport->setReportName($report_name);
        $jasperReport->setReportFormat($report_format);
        $jasperReport->setReportPath("/reports_siaps_seguimiento/siaps/seguimiento/");
        $jasperReport->setReportParams(array(
            'fecha_inicio' => $fecha_inicio,
            'fecha_inicio' => $fecha_fin,
            'deptos' => $deptos,
            'municipios' => $municipios,
            'establecimientos' => $establecimientos,
            'tipoestablecimientos' => $tipoestablecimientos,
            'deptos2' => $deptos2,
            'municipios2' => $municipios2,
            'sector' => $sector,
        ));

        return $jasperReport->buildReport();
    }

    /**
     * @Route("/rpt_con_interv_diario/{report_name}/{report_format}/{fecha_inicio}/{fecha_fin}/{deptos}/{municipios}/{establecimientos}/{tipoestablecimientos}/{tipoprotocolo}/{protocolo}/{tipointervencion}/{intervencion}/{codigo_enfermera}/{id_servicio}", name="rpt_con_interv_diario", options={"expose"=true})
     */
    public function ReporteConsolidadoIntervAction($report_name, $report_format, $fecha_inicio, $fecha_fin, $deptos, $municipios, $establecimientos, $tipoestablecimientos, $tipoprotocolo, $protocolo, $tipointervencion, $intervencion, $codigo_enfermera, $id_servicio = 0) {

        $jasperReport = $this->container->get('jasper.build.reports');
        $jasperReport->setReportName($report_name);
        $jasperReport->setReportFormat($report_format);
        $jasperReport->setReportPath("/reports_siaps_seguimiento/siaps/seguimiento/");
        $jasperReport->setReportParams(array(
            'fecha_inicio' => $fecha_inicio,
            'fecha_fin' => $fecha_fin,
            'deptos' => $deptos,
            'municipios' => $municipios,
            'establecimientos' => $establecimientos,
            'tipoestablecimientos' => $tipoestablecimientos,
            'tipoprotocolo' => $tipoprotocolo,
            'protocolo' => $protocolo,
            'tipointervencion' => $tipointervencion,
            'intervencion' => $intervencion,
            'codigo_enfermera' => $codigo_enfermera,
        ));

        return $jasperReport->buildReport();
    }

    /**
     * @Route("/rpt_con_produc_vac_diario/{report_name}/{report_format}/{fecha_inicio}/{fecha_fin}/{deptos}/{municipios}/{establecimientos}/{tipoestablecimientos}/{tipovac}/{presentacion}/{id_servicio}", name="rpt_con_produc_vac_diario", options={"expose"=true})
     */
    public function ReporteConsolidadoProducVacAction($report_name, $report_format, $fecha_inicio, $fecha_fin, $deptos, $municipios, $establecimientos, $tipoestablecimientos, $tipovac, $presentacion, $id_servicio = 0) {

        $jasperReport = $this->container->get('jasper.build.reports');
        $jasperReport->setReportName($report_name);
        $jasperReport->setReportFormat($report_format);
        $jasperReport->setReportPath("/reports_siaps_seguimiento/siaps/seguimiento/");
        $jasperReport->setReportParams(array(
            'fpini' => $fecha_inicio,
//            'fpfin' => $fecha_fin,
//            'deptos' => $deptos,
//            'municipios' => $municipios,
//            'establecimientos' => $establecimientos,
            'tipoEstable' => $tipoestablecimientos,
//            'tipovac' => $tipovac,
//            'presentacion' => $presentacion,
            'id:__servicio' => 0,
        ));

        return $jasperReport->buildReport();
    }

    /**
     * @Route("/rpt_con_protoc_diario/{report_name}/{report_format}/{fecha_inicio}/{fecha_fin}/{deptos}/{municipios}/{establecimientos}/{tipoestablecimientos}/{tipoprotocolo}/{protocolo}/{codigo_enfermera}/{id_servicio}", name="rpt_con_protoc_diario", options={"expose"=true})
     */
    public function ReporteConsolidadoDiarioProtocAction($report_name, $report_format, $fecha_inicio, $fecha_fin, $deptos, $municipios, $establecimientos, $tipoestablecimientos, $tipoprotocolo, $protocolo, $codigo_enfermera, $id_servicio = 0) {

        $jasperReport = $this->container->get('jasper.build.reports');
        $jasperReport->setReportName($report_name);
        $jasperReport->setReportFormat($report_format);
        $jasperReport->setReportPath("/reports_siaps_seguimiento/siaps/seguimiento/");
        $jasperReport->setReportParams(array(
            'fecha_inicio' => $fecha_inicio,
            'fecha_fin' => $fecha_fin,
            'deptos' => $deptos,
            'municipios' => $municipios,
            'establecimientos' => $establecimientos,
            'tipoestablecimientos' => $tipoestablecimientos,
            'tipoprotocolo' => $tipoprotocolo,
            'protocolo' => $protocolo,
            'codigo_enfermera' => $codigo_enfermera,
        ));

        return $jasperReport->buildReport();
    }

    /**
     * @Route("/rpt_con_disc_vac_diario/{report_name}/{report_format}/{fecha_inicio}/{fecha_fin}/{deptos}/{municipios}/{establecimientos}/{tipoestablecimientos}/{tipovac}/{presentacion}/{disciplina}/{id_servicio}", name="rpt_con_disc_vac_diario", options={"expose"=true})
     */
    public function ReporteConsolidadoDiarioDiscVacAction($report_name, $report_format, $fecha_inicio, $fecha_fin, $deptos, $municipios, $establecimientos, $tipoestablecimientos, $tipovac, $presentacion, $disciplina, $id_servicio = 0) {

        $jasperReport = $this->container->get('jasper.build.reports');
        $jasperReport->setReportName($report_name);
        $jasperReport->setReportFormat($report_format);
        $jasperReport->setReportPath("/reports_siaps_seguimiento/siaps/seguimiento/");
        $jasperReport->setReportParams(array(
            'fecha_inicio' => $fecha_inicio,
            'fecha_inicio' => $fecha_fin,
            'deptos' => $deptos,
            'municipios' => $municipios,
            'establecimientos' => $establecimientos,
            'tipoestablecimientos' => $tipoestablecimientos,
            'tipovac' => $tipovac,
            'presentacion' => $presentacion,
            'disciplina' => $disciplina,
        ));

        return $jasperReport->buildReport();
    }

    /**
     * @Route("/obtener/municipios/hospitalarios/todos/{id}", name="get_all_munic", options={"expose"=true})
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
     * @Route("/obtener/deptos/todos/", name="get_all_deptos", options={"expose"=true})
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
     * @Route("/all/obtener/actividades/todos/", name="get_all_actividades", options={"expose"=true})
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
     * @Route("/all/obtener/sub/actividades/todos/{id}", name="get_all_sub_actividades", options={"expose"=true})
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
     * @Route("/all/obtener/establecimientos/", name="get_all_establecimientos", options={"expose"=true})
     */
    public function getEstablecimientoAction() {
        $em = $this->getDoctrine()->getManager();

        $dql = "SELECT o
                FROM MinsalSipernesBundle:CtlTipoEstablecimiento o";
        //WHERE o.idEstablecimientoPadre is null";
        $establecimientos['establecimientos'] = $em->createQuery($dql)
                ->getArrayResult();

        return new Response(json_encode($establecimientos));
    }

    /**
     * @Route("/all/obtener/establecimientos/todos/{id}", name="get_all_sub_establecimientos", options={"expose"=true})
     */
    public function getTipoEstablecimientos($id) {
        $em = $this->getDoctrine()->getManager();

        $dql = "SELECT o
                FROM MinsalSipernesBundle:CtlEstablecimiento o
                WHERE o.idTipoEstablecimiento= :id ORDER BY o.id ASC";
        $subestablecimientos['subestablecimientos'] = $em->createQuery($dql)->setParameter('id', $id)->getArrayResult();


        return new Response(json_encode($subestablecimientos));
    }

    /**
     * @Route("tipos/diag/all/diagnosticos/", name="get_tipos_diagnos", options={"expose"=true})
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
     * @Route("diag/all/diagnosticos/{id}", name="get_diag", options={"expose"=true})
     */
    public function getDiagnosticosbyTipoAction($id) {
        $em = $this->getDoctrine()->getManager();

        $dql = "SELECT o
                FROM MinsalSipernesBundle:EnfCtlDiagnostico o
                WHERE o.idClase = :id";
        $diagnosticos['diagnosticos'] = $em->createQuery($dql)->setParameter('id', $id)->getArrayResult();


        return new Response(json_encode($diagnosticos));
    }

    /**
     * @Route("bytipos/micro/all/", name="get_tipos_micro", options={"expose"=true})
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
     * @Route("diag/all/diagnosticos/{id}", name="get_diag", options={"expose"=true})
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
     * @Route("expedientes/codigo/all/", name="get_expedientes_enf", options={"expose"=true})
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
     * @Route("Num/Empleado/all/Empleados/", name="get_empleados_enf", options={"expose"=true})
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
     * @Route("protocolos/todos/", name="get_all_protocolos", options={"expose"=true})
     */
    public function getProtocolosAction() {
        $em = $this->getDoctrine()->getManager();

        $dql = "SELECT o
                FROM MinsalSipernesBundle:EnfCtlProtocolo o 
                WHERE o.estadoProt = true";
        $protocolos['protocolos'] = $em->createQuery($dql)
                ->getArrayResult();

        return new Response(json_encode($protocolos));
    }

    /**
     * @Route("todos/los/protocolos/por/{id}", name="get_sub_protocolos", options={"expose"=true})
     */
    public function getSubProtocolosByProtocoloAction($id) {
        $em = $this->getDoctrine()->getManager();

        $dql = "SELECT o
                FROM MinsalSipernesBundle:EnfCtlSubprotocolo o
                WHERE o.id = :id
                and o.estadoSubpro = true";
        $subprotocolos['subprotocolos'] = $em->createQuery($dql)->setParameter('id', $id)->getArrayResult();


        return new Response(json_encode($subprotocolos));
    }

    /**
     * @Route("tipos/cap/capacitaciones/", name="get_all_capacitaciones", options={"expose"=true})
     */
    public function getCapacitacionesAction() {
        $em = $this->getDoctrine()->getManager();

        $dql = "SELECT o
                FROM MinsalSipernesBundle:EnfMtlCapacitacion o";
        $capacitaciones['capacitaciones'] = $em->createQuery($dql)
                ->getArrayResult();

        return new Response(json_encode($capacitaciones));
    }

    /**
     * @Route("tipos/cap/financiamiento/", name="get_all_financiamiento", options={"expose"=true})
     */
    public function getFinanciamientoAction() {
        $em = $this->getDoctrine()->getManager();

        $dql = "SELECT o
                FROM MinsalSipernesBundle:EnfCtlFinanciamiento o";
        $financiamiento['financiamiento'] = $em->createQuery($dql)
                ->getArrayResult();

        return new Response(json_encode($financiamiento));
    }

    /**
     * @Route("obtener/nombreempleado/por/{id}", name="get_nombre_empleado", options={"expose"=true})
     */
    public function getNombreEmpleadobyNitAction($id) {
        $em = $this->getDoctrine()->getManager();

        $dql = "SELECT o
                FROM MinsalSipernesBundle:MntEmpleado o
                WHERE o.id = :id";
        $datosempleado['datosempleado'] = $em->createQuery($dql)->setParameter('id', $id)->getArrayResult();


        return new Response(json_encode($datosempleado));
    }

    /**
     * @Route("obtener/nombrepaciente/por/expediente/{id}", name="get_nombre_paciente", options={"expose"=true})
     */
    public function getNombrePacientebIdAction($id) {
        $em = $this->getDoctrine()->getManager();

        $dql = "SELECT o,pac
                FROM MinsalSipernesBundle:MntExpediente o inner join o.idPaciente pac
               
                WHERE o.id = :id";
        $datospaciente['datospaciente'] = $em->createQuery($dql)->setParameter('id', $id)->getArrayResult();

//        $conexion = $em->getRepository('MinsalSiapsBundle:MntConexion');
//        $conn = $em->getRepository('MinsalSiapsBundle:MntConexion')->getConexionGenerica($conexion);
//        
//        $sql = "select * from mnt_expediente exp inner join mnt_paciente pac
//        on(exp.id = pac.id) where exp.id = :id";
//        $datospaciente['datospaciente'] = $conn->query($sql)->setParameter('id', $id)->getArrayResult();
//$em = $this->getDoctrine()->getManager();
//
//$sql = "select * from mnt_expediente exp inner join mnt_paciente pac
//on exp.id_paciente=pac.id where exp.id=?";
//        
//
//$query = $this->getDoctrine()->getEntityManager();
//        
//$datospaciente = $query->createNativeQuery($sql)
//                  ->setParameter(1, $id->getId()->getId())
//                 
//                  ->getResult();
        return new Response(json_encode($datospaciente));
    }

    /**
     * @Route("tipos/componente/todos", name="get_all_tipo_componente", options={"expose"=true})
     */
    public function getTipoComponenteAction() {
        $em = $this->getDoctrine()->getManager();

        $dql = "SELECT o
                FROM MinsalSipernesBundle:EnfCtlTipoComponente o";
        $tipocomponente['tipocomponente'] = $em->createQuery($dql)
                ->getArrayResult();

        return new Response(json_encode($tipocomponente));
    }

    /**
     * @Route("obtener/componentes/por/identificador/{id}", name="get_componente", options={"expose"=true})
     */
    public function getComponentebyIdAction($id) {
        $em = $this->getDoctrine()->getManager();

        $dql = "SELECT o
                FROM MinsalSipernesBundle:EnfComponente o
                WHERE o.idTipoComponente = :id";
        $componente['componente'] = $em->createQuery($dql)->setParameter('id', $id)->getArrayResult();


        return new Response(json_encode($componente));
    }

}

?>
