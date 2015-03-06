/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$(document).ready(function () {
//para exportar reportes
    $('#exportar_hoja_calculo').click(function () {
        alert('hola');
        if ($('.ui-paging-info').text() != 'Sin registros que mostrar') {
            if ($('#servicio_ingreso').val() == '')
                url = Routing.generate('total_ingresos') + '/rpt_resumen_ingresos/XLS/' + $('#fecha_inicio').val() + '/' + $('#fecha_fin').val();
            else
                url = Routing.generate('total_ingresos') + '/rpt_resumen_ingresos/XLS/' + $('#fecha_inicio').val() + '/' + $('#fecha_fin').val() + '/' + $('#servicio_ingreso').val();
            window.open(url, '_blank');
            return false;
        }
        else {
            return false;
        }

    });
    $('#exportar_pdf').click(function () {
        if ($('.ui-paging-info').text() != 'Sin registros que mostrar') {
            if ($('#servicio_ingreso').val() == '')
                url = Routing.generate('rpt_prueba1') + '/reporteprueba/PDF/' + $('#PRUEBA').val();
            else
                url = Routing.generate('rpt_prueba1') + '/reporteprueba/PDF/' + $('#PRUEBA').val() + '/' +'Pantalla de reporte';
            window.open(url, '_blank');
            return false;
        }
        else {
            return false;
        }
    });
});