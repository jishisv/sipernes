<?php

namespace Minsal\Sipernes\ReportesBundle\Controller;

//use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sonata\AdminBundle\Controller\CRUDController as Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Minsal\Metodos\Funciones;
use Minsal\SipernesBundle\Entity\EnfHistoricoCapacitacion;
use Symfony\Component\HttpFoundation\Session\Session;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Response;
class ReportePrueba1Controller extends Controller
{    
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
}

?>
