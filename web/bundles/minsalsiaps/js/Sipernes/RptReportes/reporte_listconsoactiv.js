var FuncAfterClose = function () {
    $("#fecha_inicio").val('');
    $("#fecha_fin").val('');
    $("#fecha_inicio").focus();
};
var FuncAfterClose2 = function () {
    if ($("#fecha_inicio").val() === '')
        $("#fecha_inicio").focus();
    else
        $("#fecha_fin").focus();
};
var ValidPacientesAtendVSDiagnosticoEnferme = function () {
    
    var flag = true;
    //alert("entre");
    if ($("#fecha_inicio").val() === '' || $("#fecha_fin").val() === '') {
        ($('#error')) ? $('#error').remove() : '';
        Alerta("Debe de seleccionar ambas fechas para generar el reporte.", FuncAfterClose2);
        flag = false;
    } else if ($("#tipo_diag option:selected").val() == "0" || $("#diagnostico option:selected").val() == "0" ||
            $("#deptos option:selected").val() == "0" || $("#tipoestablecimientos option:selected").val() == "0") {
        ($('#error')) ? $('#error').remove() : '';
        Alerta("Debe de seleccionar todas las listas desplegables para continuar.", FuncAfterClose2);
        flag = false;
    }
    return flag;
};

var ValidGrafPacientesAtendVSDiagnosticoEnferme = function () {
    var flag = true;
    if ($("#fecha_inicio").val() === '' || $("#fecha_fin").val() === '') {
        ($('#error')) ? $('#error').remove() : '';
        Alerta("Debe de seleccionar ambas fechas para generar el reporte.", FuncAfterClose2);
        flag = false;
    } else if ($("#tipo_diag option:selected").val() == "0" || 
            $("#deptos option:selected").val() == "0" || $("#tipoestablecimientos option:selected").val() == "0") {
        ($('#error')) ? $('#error').remove() : '';
        Alerta("Debe de seleccionar todas las listas desplegables para continuar.", FuncAfterClose2);
        flag = false;
    }
    return flag;
};

var ValidConsoActivRea = function () {
    var flag = true;
    if ($("#fecha_inicio").val() === '' || $("#fecha_fin").val() === '') {
        ($('#error')) ? $('#error').remove() : '';
        Alerta("Debe de seleccionar ambas fechas para generar el reporte.", FuncAfterClose2);
        flag = false;
    } else if ($("#cod_exp option:selected").val() == "0" || $("#cod_enf option:selected").val() == "0" ||
            $("#actividades option:selected").val() == "0" || $("#subactividades option:selected").val() == "0" || 
            $("#deptos option:selected").val() == "0" || $("#municipios option:selected").val() == "0" ||
            $("#tipoestablecimientos option:selected").val() == "0" || $("#establecimientos option:selected").val() == "0") {
        ($('#error')) ? $('#error').remove() : '';
        Alerta("Debe de seleccionar todas las listas desplegables para continuar.", FuncAfterClose2);
        flag = false;
    }
    return flag;
};

var ValidCapEnf = function () {
    var flag = true;
    if ($("#fecha_inicio").val() === '' || $("#fecha_fin").val() === '') {
        ($('#error')) ? $('#error').remove() : '';
        Alerta("Debe de seleccionar ambas fechas para generar el reporte.", FuncAfterClose2);
        flag = false;
    } else if ($("#financiamiento option:selected").val() == "0" || $("#cod_enf option:selected").val() == "0" ||
            $("#deptos option:selected").val() == "0" || $("#municipios option:selected").val() == "0" ||
            $("#tipoestablecimientos option:selected").val() == "0" || $("#establecimientos option:selected").val() == "0") {
        ($('#error')) ? $('#error').remove() : '';
        Alerta("Debe de seleccionar todas las listas desplegables para continuar.", FuncAfterClose2);
        flag = false;
    }
    return flag;
};

var ValidAnotEnf = function () {
    var flag = true;
    if ($("#fecha_inicio").val() === '' || $("#fecha_fin").val() === '') {
        ($('#error')) ? $('#error').remove() : '';
        Alerta("Debe de seleccionar ambas fechas para generar el reporte.", FuncAfterClose2);
        flag = false;
    } else if ($("#cod_exp option:selected").val() == "0" || $("#cod_enf option:selected").val() == "0" ||
            $("#deptos option:selected").val() == "0" || $("#municipios option:selected").val() == "0" ||
            $("#tipoestablecimientos option:selected").val() == "0" || $("#establecimientos option:selected").val() == "0") {
        ($('#error')) ? $('#error').remove() : '';
        Alerta("Debe de seleccionar todas las listas desplegables para continuar.", FuncAfterClose2);
        flag = false;
    }
    return flag;
};

var ValidDiagEnf = function () {
    var flag = true;
    if ($("#fecha_inicio").val() === '' || $("#fecha_fin").val() === '') {
        ($('#error')) ? $('#error').remove() : '';
        Alerta("Debe de seleccionar ambas fechas para generar el reporte.", FuncAfterClose2);
        flag = false;
    } else if ($("#cod_exp option:selected").val() == "0" || $("#cod_enf option:selected").val() == "0" ||
            $("#deptos option:selected").val() == "0" || $("#municipios option:selected").val() == "0" ||
            $("#tipoestablecimientos option:selected").val() == "0" || $("#establecimientos option:selected").val() == "0") {
        ($('#error')) ? $('#error').remove() : '';
        Alerta("Debe de seleccionar todas las listas desplegables para continuar.", FuncAfterClose2);
        flag = false;
    }
    return flag;
};

var ValidDiagDiaEnf = function () {
    var flag = true;
    if ($("#fecha_inicio").val() === '' || $("#fecha_fin").val() === '') {
        ($('#error')) ? $('#error').remove() : '';
        Alerta("Debe de seleccionar ambas fechas para generar el reporte.", FuncAfterClose2);
        flag = false;
    } else if ($("#tipo_diag option:selected").val() == "0" || $("#cod_enf option:selected").val() == "0" ||
            $("#deptos option:selected").val() == "0" || $("#municipios option:selected").val() == "0" ||
            $("#tipoestablecimientos option:selected").val() == "0" || $("#establecimientos option:selected").val() == "0") {
        ($('#error')) ? $('#error').remove() : '';
        Alerta("Debe de seleccionar todas las listas desplegables para continuar.", FuncAfterClose2);
        flag = false;
    }
    return flag;
};

var ValidDiagDiaInfEnf = function () {
    var flag = true;
    if ($("#fecha_inicio").val() === '' ) {
        ($('#error')) ? $('#error').remove() : '';
        Alerta("Debe de seleccionar la fecha de inicio para generar el reporte.", FuncAfterClose2);
        flag = false;
    } else if ($("#cod_exp option:selected").val() == "0" || $("#cod_enf option:selected").val() == "0" ||
            $("#tipo_diag option:selected").val() == "0" || 
            $("#deptos option:selected").val() == "0" || $("#municipios option:selected").val() == "0" ||
            $("#tipoestablecimientos option:selected").val() == "0" || $("#establecimientos option:selected").val() == "0") {
        ($('#error')) ? $('#error').remove() : '';
        Alerta("Debe de seleccionar todas las listas desplegables para continuar.", FuncAfterClose2);
        flag = false;
    }
    return flag;
};

var ValidConsoDiarioMicro = function () {
    var flag = true;
    if ($("#fecha_inicio").val() === '' || $("#fecha_fin").val() === '') {
        ($('#error')) ? $('#error').remove() : '';
        Alerta("Debe de seleccionar ambas fechas para generar el reporte.", FuncAfterClose2);
        flag = false;
    } else if (
            $("#deptos option:selected").val() == "0" || $("#municipios option:selected").val() == "0" ||
            $("#tipoestablecimientos option:selected").val() == "0" || $("#establecimientos option:selected").val() == "0"
            || $("#tipo_micro option:selected").val() == "0" || $("#presentacion option:selected").val() == "0") { 
        ($('#error')) ? $('#error').remove() : '';
        Alerta("Debe de seleccionar todas las listas desplegables para continuar.", FuncAfterClose2);
        flag = false;
      
    }
    return flag;
};

var ValidConsoDiarioVac = function () {
    var flag = true;
    if ($("#fecha_inicio").val() === '' || $("#fecha_fin").val() === '') {
        ($('#error')) ? $('#error').remove() : '';
        Alerta("Debe de seleccionar la fecha de inicio para generar el reporte.", FuncAfterClose2);
        flag = false;
    } else if (
            $("#deptos option:selected").val() == "0" || $("#municipios option:selected").val() == "0" ||
            $("#tipoestablecimientos option:selected").val() == "0" || $("#establecimientos option:selected").val() == "0" ||
            $("#tipo_vacuna option:selected").val() == "0" || $("#presentacion option:selected").val() === "0") {
        ($('#error')) ? $('#error').remove() : '';
        Alerta("Debe de seleccionar todas las listas desplegables para continuar.", FuncAfterClose2);
        flag = false;
      
    }
    return flag;
};

var ValidMicroAplicados = function () {
    var flag = true;
    if ($("#fecha_inicio").val() === '' || $("#fecha_fin").val() === '') {
        ($('#error')) ? $('#error').remove() : '';
        Alerta("Debe de seleccionar ambas fechas para generar el reporte.", FuncAfterClose2);
        flag = false;
    } else if (
            $("#deptos option:selected").val() == "0" || $("#municipios option:selected").val() == "0" ||
            $("#tipoestablecimientos option:selected").val() == "0" || $("#establecimientos option:selected").val() == "0") {
        ($('#error')) ? $('#error').remove() : '';
        Alerta("Debe de seleccionar todas las listas desplegables para continuar.", FuncAfterClose2);
        flag = false;
      
    }
    return flag;
}; //

var ValidReporteRegistrosDosisVacApli = function () {
    var flag = true;
    if ($("#fecha_inicio").val() === '' || $("#fecha_fin").val() === '') {
        ($('#error')) ? $('#error').remove() : '';
        Alerta("Debe de seleccionar ambas fechas para generar el reporte.", FuncAfterClose2);
        flag = false;
    } else if (
            $("#deptos option:selected").val() == "0" || $("#municipios option:selected").val() == "0" ||
            $("#tipoestablecimientos option:selected").val() == "0" || $("#establecimientos option:selected").val() == "0" || $("#cod_enf option:selected").val() == "0") {
        ($('#error')) ? $('#error').remove() : '';
        Alerta("Debe de seleccionar todas las listas desplegables para continuar.", FuncAfterClose2);
        flag = false;
      
    }
    return flag;
}; 

var ValidConSemAnotEnfPac = function () {
    var flag = true;
    if ($("#fecha_inicio").val() === '' || $("#fecha_fin").val() === '') {
        ($('#error')) ? $('#error').remove() : '';
        Alerta("Debe de seleccionar ambas fechas para generar el reporte.", FuncAfterClose2);
        flag = false;
    } else if (
            $("#deptos option:selected").val() == "0" || $("#municipios option:selected").val() == "0" || $("#tipoestablecimientos option:selected").val() == "0" || $("#establecimientos option:selected").val() == "0" || $("#cod_enf option:selected").val() == "0" || $("#cod_exp option:selected").val() == "0") {
            
        ($('#error')) ? $('#error').remove() : '';
        Alerta("Debe de seleccionar todas las listas desplegables para continuar.", FuncAfterClose2);
        flag = false;
      
    }
    return flag;
}; //ValidListActUl7Dias();

var ValidListActUl7Dias = function () {
    var flag = true;
  if (
            $("#deptos option:selected").val() == "0" || $("#municipios option:selected").val() == "0" || 
            $("#tipoestablecimientos option:selected").val() == "0" || $("#establecimientos option:selected").val() == "0" || $("#cod_enf option:selected").val() == "0" || $("#tipo_actividad option:selected").val() == "0" || $("#actividad option:selected").val() == "0") {
        ($('#error')) ? $('#error').remove() : '';
        Alerta("Debe de seleccionar todas las listas desplegables para continuar.", FuncAfterClose2);
        flag = false;
            
    }else if ($("#fecha_inicio").val() === '') {
        ($('#error')) ? $('#error').remove() : '';
        Alerta("Debe de seleccionar la fecha inicial para generar el reporte.", FuncAfterClose2);
        flag = false;
    }
    return flag;
};

var ValidConDiarioEnfPacUlt7Dias = function () {
    var flag = true;
    if (
            $("#deptos option:selected").val() == "0" || $("#municipios option:selected").val() == "0" ||
            $("#tipoestablecimientos option:selected").val() == "0" || $("#establecimientos option:selected").val() == "0" || $("#cod_enf option:selected").val() == "0" 
            || $("#cod_exp option:selected").val() == "0" || $("#tipo_diag option:selected").val() == "0"|| $("#diagnostico option:selected").val() == "0") {
        ($('#error')) ? $('#error').remove() : '';
        Alerta("Debe de seleccionar todas las listas desplegables para continuar.", FuncAfterClose2);
        flag = false;
      
    }else if ($("#fecha_inicio").val() === '') {
        ($('#error')) ? $('#error').remove() : '';
        Alerta("Debe de seleccionar la fecha inicial para generar el reporte.", FuncAfterClose2);
        flag = false;
    }
    return flag;
};

var ValidConMicroUlt7Dias = function () {
    var flag = true;
    if (
            $("#deptos option:selected").val() == "0" || $("#municipios option:selected").val() == "0" ||
            $("#tipoestablecimientos option:selected").val() == "0" || $("#establecimientos option:selected").val() == "0" || $("#cod_enf option:selected").val() == "0" 
           ) {
        ($('#error')) ? $('#error').remove() : '';
        Alerta("Debe de seleccionar todas las listas desplegables para continuar.", FuncAfterClose2);
        flag = false;
      
    }
    return flag;
};
var ValidConVacunasUlt7Dias = function () {
    var flag = true;
    if (
            $("#deptos option:selected").val() == "0" || $("#municipios option:selected").val() == "0" ||
            $("#tipoestablecimientos option:selected").val() == "0" || $("#establecimientos option:selected").val() == "0" || $("#cod_enf option:selected").val() == "0" 
           ) {
        ($('#error')) ? $('#error').remove() : '';
        Alerta("Debe de seleccionar todas las listas desplegables para continuar.", FuncAfterClose2);
        flag = false;
      
    }
    return flag;
};

var ValidComVacAplica = function () {
    var flag = true;
    if ($("#fecha_inicio").val() === '' || $("#fecha_fin").val() === '') {
        ($('#error')) ? $('#error').remove() : '';
        Alerta("Debe de seleccionar ambas fechas para generar el reporte.", FuncAfterClose2);
        flag = false;
    } else if (
            $("#deptos option:selected").val() == "0" || $("#municipios option:selected").val() == "0" ||
            $("#tipoestablecimientos option:selected").val() == "0" || $("#establecimientos option:selected").val() == "0" ) {
        ($('#error')) ? $('#error').remove() : '';
        Alerta("Debe de seleccionar todas las listas desplegables para continuar.", FuncAfterClose2);
        flag = false;
      
    }
    return flag;
}; 

var ValidRegVacEntyRec = function () {
    var flag = true;
    if ($("#fecha_inicio").val() == '') {
        ($('#error')) ? $('#error').remove() : '';
        Alerta("Debe de seleccionar la fecha de inicio para generar el reporte.", FuncAfterClose2);
        flag = false;
    } else if (
            $("#deptos option:selected").val() == "0" || $("#municipios option:selected").val() == "0" ||
            $("#establecimientos option:selected").val() == "0" || $("#tipoestablecimientos option:selected").val() == "0" || 
            $("#tipo_vacuna option:selected").val() == "0" || $("#presentacion option:selected").val() == "0" ) {
        ($('#error')) ? $('#error').remove() : '';
        Alerta("Debe de seleccionar todas las listas desplegables para continuar.", FuncAfterClose2);
        flag = false;
      
    }
    return flag;
}; 

var ValidninosInmunGeo = function () {
    var flag = true;
    if ($("#fecha_inicio").val() === '' ) {
        ($('#error')) ? $('#error').remove() : '';
        Alerta("Debe de seleccionar la fecha de inicio para generar el reporte.", FuncAfterClose2);
        flag = false;
    } else if (
            $("#deptos option:selected").val() == "0" || $("#municipios option:selected").val() == "0" ||
            $("#tipoestablecimientos option:selected").val() == "0" || $("#establecimientos option:selected").val() == "0"
            || $("#deptos2 option:selected").val() == "0" || $("#municipios2 option:selected").val() == "0") {
        ($('#error')) ? $('#error').remove() : '';
        Alerta("Debe de seleccionar todas las listas desplegables para continuar.", FuncAfterClose2);
        flag = false;
      
    }
    return flag;
}; 

var ValidIntervEfecEnf = function () {
    var flag = true;
    if ($("#fecha_inicio").val() === '' ) {
        ($('#error')) ? $('#error').remove() : '';
        Alerta("Debe de seleccionar la fecha de inicio para generar el reporte.", FuncAfterClose2);
        flag = false;
    } else if (
            $("#deptos option:selected").val() == "0" || $("#municipios option:selected").val() == "0" ||
            $("#tipoestablecimientos option:selected").val() == "0" || $("#establecimientos option:selected").val() == "0"
            || $("#tipoprotocolo option:selected").val() == "0" || $("#protocolo option:selected").val() == "0"
          //  || $("#tipointervencion option:selected").val() == "0" || $("#intervencion option:selected").val() == "0"
            || $("#cod_enf option:selected").val() == "0" ) {
        ($('#error')) ? $('#error').remove() : '';
        Alerta("Debe de seleccionar todas las listas desplegables para continuar.", FuncAfterClose2);
        flag = false;
      
    }
    return flag;
}; 

var ValidRegDiariosProdVacunas = function () {
    var flag = true;
    if ($("#fecha_inicio").val() === '' ) {
        ($('#error')) ? $('#error').remove() : '';
        Alerta("Debe de seleccionar la fecha inicial para generar el reporte.", FuncAfterClose2);
        flag = false;
    } else if (
            $("#deptos option:selected").val() == "0" || $("#municipios option:selected").val() == "0" ||
            $("#establecimientos option:selected").val() == "0" || $("#tipoestablecimientos option:selected").val() == "0" ||
             $("#tipo_vacuna option:selected").val() == "0" || $("#presentacion option:selected").val() == "0") {
        ($('#error')) ? $('#error').remove() : '';
        Alerta("Debe de seleccionar todas las listas desplegables para continuar.", FuncAfterClose2);
        flag = false;
      
    }
    return flag;
};
var ValidReportDiarioProtocolos = function () {
    var flag = true;
    if ($("#fecha_inicio").val() === '' ) {
        ($('#error')) ? $('#error').remove() : '';
        Alerta("Debe de seleccionar la fecha de inicio para generar el reporte.", FuncAfterClose2);
        flag = false;
    } else if (
            $("#deptos option:selected").val() == "0" || $("#municipios option:selected").val() == "0" ||
            $("#tipoestablecimientos option:selected").val() == "0" || $("#establecimientos option:selected").val() == "0"
            || $("#tipoprotocolo option:selected").val() == "0" || $("#protocolo option:selected").val() == "0"
            || $("#cod_enf option:selected").val() == "0" ) {
        ($('#error')) ? $('#error').remove() : '';
        Alerta("Debe de seleccionar todas las listas desplegables para continuar.", FuncAfterClose2);
        flag = false;
      
    }
    return flag;
};

var ValidAnotEnfPaci = function () {
    var flag = true;
    if ($("#fecha_inicio").val() === '' || $("#fecha_fin").val() === '') {
        ($('#error')) ? $('#error').remove() : '';
        Alerta("Debe de seleccionar la fecha inicial para generar el reporte.", FuncAfterClose2);
        flag = false;
    } else if (
            $("#deptos option:selected").val() == "0" || $("#municipios option:selected").val() == "0" ||
            $("#tipoestablecimientos option:selected").val() == "0" || $("#establecimientos option:selected").val() == "0"
            || $("#cod_exp option:selected").val() == "0" || $("#cod_enf option:selected").val() == "0") {
        ($('#error')) ? $('#error').remove() : '';
        Alerta("Debe de seleccionar todas las listas desplegables para continuar.", FuncAfterClose2);
        flag = false;
      
    }
    return flag;
};
var ValidComVacVersusPlanif = function () {
    var flag = true;
    if ($("#fecha_inicio").val() === '' || $("#fecha_fin").val() === '') {
        ($('#error')) ? $('#error').remove() : '';
        Alerta("Debe de seleccionar ambas fechas para generar el reporte.", FuncAfterClose2);
        flag = false;
    } else if (
            $("#deptos option:selected").val() == "0" || $("#municipios option:selected").val() == "0" ||
            $("#tipoestablecimientos option:selected").val() == "0" || $("#establecimientos option:selected").val() == "0" ) {
        ($('#error')) ? $('#error').remove() : '';
        Alerta("Debe de seleccionar todas las listas desplegables para continuar.", FuncAfterClose2);
        flag = false;
      
    }
    return flag;
};

var ValidRegMenProd = function () {
    var flag = true;
    if ($("#fecha_inicio").val() === '' || $("#fecha_fin").val() === '') {
        ($('#error')) ? $('#error').remove() : '';
        Alerta("Debe de seleccionar ambas fechas para generar el reporte.", FuncAfterClose2);
        flag = false;
    } else if (
            $("#deptos option:selected").val() == "0" || $("#municipios option:selected").val() == "0" ||
            $("#tipoestablecimientos option:selected").val() == "0" || $("#establecimientos option:selected").val() == "0" ) {
        ($('#error')) ? $('#error').remove() : '';
        Alerta("Debe de seleccionar todas las listas desplegables para continuar.", FuncAfterClose2);
        flag = false;
      
    }
    return flag;
};
var ValidDiarioActivEnf = function () {
    var flag = true;
    if ($("#fecha_inicio").val() === '') {
        ($('#error')) ? $('#error').remove() : '';
        Alerta("Debe de seleccionar la fecha inicial para generar el reporte.", FuncAfterClose2);
        flag = false;
    } else if (
            $("#deptos option:selected").val() == "0" || $("#municipios option:selected").val() == "0" ||
            $("#tipoestablecimientos option:selected").val() == "0" || $("#establecimientos option:selected").val() == "0"
            || $("#actividades option:selected").val() == "0" || $("#subactividades option:selected").val() == "0" || $("#cod_enf option:selected").val() == "0") {
        ($('#error')) ? $('#error').remove() : '';
        Alerta("Debe de seleccionar todas las listas desplegables para continuar.", FuncAfterClose2);
        flag = false;
      
    }
    return flag;
};
var Alerta = function (text, funcAfter) {
    var elem = $("<div id='error' title='Mensaje de Error'><center>" +
            text
            + "</center></div>");
    elem.insertAfter($("body"));
    $("#error").dialog({
        close: function () {
            eval(funcAfter);
        }
    });
};

var ValidDescargo = function () {
    var flag = true;
    if ($("#fecha_inicio").val() == '') {
        ($('#error')) ? $('#error').remove() : '';
        Alerta("Debe de seleccionar la fecha de inicio para generar el reporte.", FuncAfterClose2);
        flag = false;
    } else if (
            $("#deptos option:selected").val() == "0" || $("#municipios option:selected").val() == "0" ||
            $("#establecimientos option:selected").val() == "0" || $("#tipoestablecimientos option:selected").val() == "0" ) {
        ($('#error')) ? $('#error').remove() : '';
        Alerta("Debe de seleccionar todas las listas desplegables para continuar.", FuncAfterClose2);
        flag = false;
      
    }
    return flag;
}; 
$(document).ready(function () {
    $('#actividades').select2({
        width: '100%',
        placeholder: 'Seleccione...',
        allowClear: true
    });

    $('#subactividades').select2({
        width: '100%',
        placeholder: 'Seleccione...',
        allowClear: true
    });

    $('#deptos').select2({
        width: '100%',
        placeholder: 'Seleccione...',
        allowClear: true
    });



    $('#municipios').select2({
        width: '100%',
        placeholder: 'Seleccione...',
        allowClear: true
    });

    $('#tipoestablecimientos').select2({
        width: '100%',
        placeholder: 'Seleccione...',
        allowClear: true
    });



    $('#establecimientos').select2({
        width: '100%',
        placeholder: 'Seleccione...',
        allowClear: true
    });

    $('#tipo_diag').select2({
        width: '100%',
        placeholder: 'Seleccione...',
        allowClear: true
    });



    $('#diagnostico').select2({
        width: '100%',
        placeholder: 'Seleccione...',
        allowClear: true
    });

    $('#tipo_micro').select2({
        width: '100%',
        placeholder: 'Seleccione...',
        allowClear: true
    });



    $('#micro').select2({
        width: '100%',
        placeholder: 'Seleccione...',
        allowClear: true
    });

    $('#protocolo').select2({
        width: '100%',
        placeholder: 'Seleccione...',
        allowClear: true
    });



    $('#subprotocolo').select2({
        width: '100%',
        placeholder: 'Seleccione...',
        allowClear: true
    });

    $('#capacitacion').select2({
        width: '100%',
        placeholder: 'Seleccione...',
        allowClear: true
    });
    $('#financiamiento').select2({
        width: '100%',
        placeholder: 'Seleccione...',
        allowClear: true
    });

    $("#fecha_inicio").datepicker().mask("99-99-9999");
    $("#fecha_fin").datepicker().mask("99-99-9999");

    $("#emitir_informe").click(function () {
        if ($("#fecha_inicio").val() == '' || $("#fecha_fin").val() == '') {
            ($('#error')) ? $('#error').remove() : '';
            Alerta("Debe de seleccionar ambas fechas para generar el reporte.", FuncAfterClose2);
            return false;
        } else if ($("#fecha_inicio").datepicker("getDate") > $("#fecha_fin").datepicker("getDate")) {
            ($('#error')) ? $('#error').remove() : '';
            Alerta("La fecha de inicio debe de ser menor que la fecha fin.", FuncAfterClose);
//            var elem = $("<div id='error' title='Error de llenado'><center>" +
//                    "La fecha de inicio debe de ser menor que la fecha fin."
//                    + "</center></div>");
//            elem.insertAfter($("#pacientesIngresados"));
//            $("#error").dialog({
//                close: function () {
//                    $("#fecha_inicio").val('');
//                    $("#fecha_fin").val('');
//                    $("#fecha_inicio").focus();
//                }
//            });
        } else {
            $('#resultado').load(Routing.generate('get_municipios'), {'datos': $('#pacientesIngresados').serialize()});
        }
        return false;
    });

    // 54. pacientes vs diagnosticos
    $("#id_reporte_paciente_diagnostico").click(function () {

        if ($('.ui-paging-info').text() !== 'Sin registros que mostrar') {
            var resp = ValidPacientesAtendVSDiagnosticoEnferme();
            if (resp == false) {
                return false;
            } else if ($("#fecha_inicio").datepicker("getDate") > $("#fecha_fin").datepicker("getDate")) {
                ($('#error')) ? $('#error').remove() : '';
                var elem = $("<div id='error' title='Error de llenado'><center>" +
                        "La fecha de inicio debe de ser menor que la fecha fin."
                        + "</center></div>");
                elem.insertAfter($("#pacientesDiagnosticos"));
                $("#error").dialog({
                    close: function () {
                        $("#fecha_inicio").val('');
                        $("#fecha_fin").val('');
                        $("#fecha_inicio").focus();
                    }
                });
                return false;
            }
//            if ($('#tipo_diagnostico').val() === '' || $('#diagnostico').val() === '') {
//                ($('#error')) ? $('#error').remove() : '';
//                var elem = $("<div id='error' title='Error de llenado'><center>" +
//                        "Debe llenar ambos datos para generar el reporte."
//                        + "</center></div>");
//                elem.insertAfter($("#pacientesDiagnosticos"));
//                $("#error").dialog({
//                    close: function () {
//                        if ($("#tipo_diagnostico").val() === '')
//                            $("#tipo_diagnostico").focus();
//                        else
//                            $("#diagnostico").focus();
//                    }
//                });
//                return false;
//            }
//alert('jpuerga');
            var formato = $("input[name='formato_rpt']:checked").val();
            var url = Routing.generate('rpt_pac_dig') + '/rpt_com_pa_diag/' + formato + '/' + $('#fecha_inicio').val() + '/' + $('#fecha_fin').val() + '/' + $('#deptos').val() + '/' + $('#municipios').val() + '/' + $('#establecimientos').val() + '/' + $('#tipoestablecimientos').val() + '/' + $('#tipo_diag').val() + '/' + $('#diagnostico').val() + '/' + "Reporte_Nuevo";
//            alert(url);
            window.open(url, '_blank');
            return false;
        }
        else {
            return false;
        }
    });

    // 55. micronutrientes aplicados vs planificados
    $("#id_reporte_micronutrientes_planificados").click(function () {
        if ($('.ui-paging-info').text() !== 'Sin registros que mostrar') {
            if ($("#fecha_inicio").val() === '' || $("#fecha_fin").val() === '') {
                ($('#error')) ? $('#error').remove() : '';
                var elem = $("<div id='error' title='Error de llenado'><center>" +
                        "Debe de seleccionar ambas fechas para generar el reporte."
                        + "</center></div>");
                elem.insertAfter($("#micronutrientesPlanficiados"));
                $("#error").dialog({
                    close: function () {
                        if ($("#fecha_inicio").val() === '')
                            $("#fecha_inicio").focus();
                        else
                            $("#fecha_fin").focus();
                    }
                });
                return false;
            } else if ($("#fecha_inicio").datepicker("getDate") > $("#fecha_fin").datepicker("getDate")) {
                ($('#error')) ? $('#error').remove() : '';
                var elem = $("<div id='error' title='Error de llenado'><center>" +
                        "La fecha de inicio debe de ser menor que la fecha fin."
                        + "</center></div>");
                elem.insertAfter($("#micronutrientesPlanficiados"));
                $("#error").dialog({
                    close: function () {
                        $("#fecha_inicio").val('');
                        $("#fecha_fin").val('');
                        $("#fecha_inicio").focus();
                    }
                });
                return false;
            }
            if ($('#tipo_micronutriente').val() === '' || $('#micronutriente').val() === '') {
                ($('#error')) ? $('#error').remove() : '';
                var elem = $("<div id='error' title='Error de llenado'><center>" +
                        "Debe llenar ambos datos para generar el reporte."
                        + "</center></div>");
                elem.insertAfter($("#micronutrientesPlanficiados"));
                $("#error").dialog({
                    close: function () {
                        if ($("#tipo_micronutriente").val() === '')
                            $("#tipo_micronutriente").focus();
                        else
                            $("#tipo_micronutriente").focus();
                    }
                });
                return false;
            }
            var formato = $("input[name='formato_rpt']:checked").val();
            var url = Routing.generate('rpt_micr_plan') + '/rpt_com_mic_pla/' + formato + '/' + $('#fecha_inicio').val() + '/' + $('#fecha_fin').val() + '/' + $('#deptos').val() + '/' + $('#municipios').val() + '/' + $('#establecimientos').val() + '/' + $('#tipoestablecimientos').val() + '/' + $('#tipo_micronutriente').val() + '/' + $('#micronutriente').val() + '/' + "Reporte_Nuevo";
//            alert(url);
            window.open(url, '_blank');
            return false;
        }
        else {
            return false;
        }
    });

    // 56. vacunacion vs planificadas
    $("#id_reporte_vacuna_planificadas").click(function () {
        if ($('.ui-paging-info').text() !== 'Sin registros que mostrar') {
           var resp = ValidComVacVersusPlanif();
            if (resp == false) {
                return false;
            } else if ($("#fecha_inicio").datepicker("getDate") > $("#fecha_fin").datepicker("getDate")) {
                ($('#error')) ? $('#error').remove() : '';
                var elem = $("<div id='error' title='Error de llenado'><center>" +
                        "La fecha de inicio debe de ser menor que la fecha fin."
                        + "</center></div>");
                elem.insertAfter($("#vacunasPlanficiados"));
                $("#error").dialog({
                    close: function () {
                        $("#fecha_inicio").val('');
                        $("#fecha_fin").val('');
                        $("#fecha_inicio").focus();
                    }
                });
                return false;
            }
            if ($('#tipo_vacuna').val() === '' || $('#presentacion').val() === '') {
                ($('#error')) ? $('#error').remove() : '';
                var elem = $("<div id='error' title='Error de llenado'><center>" +
                        "Debe llenar ambos datos para generar el reporte."
                        + "</center></div>");
                elem.insertAfter($("#vacunasPlanficiados"));
                $("#error").dialog({
                    close: function () {
                        if ($("#tipo_vacuna").val() === '')
                            $("#tipo_vacuna").focus();
                        else
                            $("#presentacion").focus();
                    }
                });
                return false;
            }
            var formato = $("input[name='formato_rpt']:checked").val();
            var url = Routing.generate('rpt_vac_plan') + '/rpt_com_vac_pla/' + formato + '/' + $('#fecha_inicio').val() + '/' + $('#fecha_fin').val() + '/' + $('#deptos').val() + '/' + $('#municipios').val() + '/' + $('#establecimientos').val() + '/' + $('#tipoestablecimientos').val() + '/' + $('#tipo_vacuna').val() + '/' + $('#presentacion').val() + '/' + "Reporte_Nuevo";
//            alert(url);
            window.open(url, '_blank');
            return false;
        }
        else {
            return false;
        }
    });

    // 58. consolidado de anotaciones realizadas
    $("#id_reporte_cons_anot").click(function () {
        if ($('.ui-paging-info').text() !== 'Sin registros que mostrar') {
            var resp = ValidAnotEnf();
            if (resp == false) {
                return false;
            }  else if ($("#fecha_inicio").datepicker("getDate") > $("#fecha_fin").datepicker("getDate")) {
                ($('#error')) ? $('#error').remove() : '';
                var elem = $("<div id='error' title='Error de llenado'><center>" +
                        "La fecha de inicio debe de ser menor que la fecha fin."
                        + "</center></div>");
                elem.insertAfter($("#consolidadoAnotaciones"));
                $("#error").dialog({
                    close: function () {
                        $("#fecha_inicio").val('');
                        $("#fecha_fin").val('');
                        $("#fecha_inicio").focus();
                    }
                });
                return false;
            }

            var formato = $("input[name='formato_rpt']:checked").val();
            var tipoNota = $("input[name='tipo_nota']:checked").val();
            if (tipoNota == 'Anotacion') {
                var tipoNota = 'rpt_con_anot_1';
            } else {
                if (tipoNota == 'Signo') {
                    var tipoNota = 'rpt_con_anot_2';
                }
                else {
                    if (tipoNota == '') {
                        var tipoNota = 'rpt_con_anot_3';
                    } else {
                        var tipoNota = 'rpt_con_anot';
                    }
                }
            }

            var url = Routing.generate('rpt_con_anot') + '/' + tipoNota + '/' + formato + '/' + $('#fecha_inicio').val() + '/' + $('#fecha_fin').val() + '/' + $('#deptos').val() + '/' + $('#municipios').val() + '/' + $('#establecimientos').val() + '/' + $('#tipoestablecimientos').val() + '/' + $('#cod_exp').val() + '/' + $('#cod_enf').val() + '/' + "Reporte_Nuevo";
//            var url = Routing.generate('rpt_con_anot') + '/rpt_con_anot/' + formato + '/' + $('#fecha_inicio').val() + '/' + $('#fecha_fin').val() + '/' + $('#deptos').val() + '/' + $('#municipios').val() + '/' + $('#establecimientos').val() + '/' + $('#tipoestablecimientos').val() + '/' + $('#cod_exp').val() + '/' + $('#cod_enf').val() + '/' + "Reporte_Nuevo";
//            alert(url);
            window.open(url, '_blank');
            return false;
        }
        else {
            return false;
        }
    });

    //59. consolidado de diagnostico a pacientes
    $("#id_reporte_cons_diag").click(function () {
        if ($('.ui-paging-info').text() !== 'Sin registros que mostrar') {
            var resp = ValidDiagEnf();
            if (resp == false) {
                return false;
            }
            else if ($("#fecha_inicio").datepicker("getDate") > $("#fecha_fin").datepicker("getDate")) {
                ($('#error')) ? $('#error').remove() : '';
                var elem = $("<div id='error' title='Error de llenado'><center>" +
                        "La fecha de inicio debe de ser menor que la fecha fin."
                        + "</center></div>");
                elem.insertAfter($("#consolidadoDiagnosticos"));
                $("#error").dialog({
                    close: function () {
                        $("#fecha_inicio").val('');
                        $("#fecha_fin").val('');
                        $("#fecha_inicio").focus();
                    }
                });
                return false;
            }

            var formato = $("input[name='formato_rpt']:checked").val();
            var url = Routing.generate('rpt_con_diag') + '/rpt_con_dia_diag_pac/' + formato + '/' + $('#fecha_inicio').val() + '/' + $('#fecha_fin').val() + '/' + $('#deptos').val() + '/' + $('#municipios').val() + '/' + $('#establecimientos').val() + '/' + $('#tipoestablecimientos').val() + '/' + $('#cod_exp').val() + '/' + $('#cod_enf').val() + '/' + "Reporte_Nuevo";
//            alert(url);
            window.open(url, '_blank');
            return false;
        }
        else {
            return false;
        }
    });


    //60. micronutrientes aplicados
    $("#id_reporte_micronutrientes_aplicados").click(function () {
        if ($('.ui-paging-info').text() !== 'Sin registros que mostrar') {
            var resp = ValidMicroAplicados();
            if (resp == false) {
                
                return false;
            } else if ($("#fecha_inicio").datepicker("getDate") > $("#fecha_fin").datepicker("getDate")) {
                ($('#error')) ? $('#error').remove() : '';
                var elem = $("<div id='error' title='Error de llenado'><center>" +
                        "La fecha de inicio debe de ser menor que la fecha fin."
                        + "</center></div>");
                elem.insertAfter($("#micronutrientesAplicados"));
                $("#error").dialog({
                    close: function () {
                        $("#fecha_inicio").val('');
                        $("#fecha_fin").val('');
                        $("#fecha_inicio").focus();
                    }
                });
                return false;
            }

            var formato = $("input[name='formato_rpt']:checked").val();
            var url = Routing.generate('rpt_micr_aplic') + '/rpt_con_mic_apl/' + formato + '/' + $('#fecha_inicio').val() + '/' + $('#fecha_fin').val() + '/' + $('#deptos').val() + '/' + $('#municipios').val() + '/' + $('#establecimientos').val() + '/' + $('#tipoestablecimientos').val() + '/' + "Reporte_Nuevo";
//            alert(url);
            window.open(url, '_blank');
            return false;
        }
        else {
            return false;
        }
    });

    //61. Comparativo de vacunas aplicadas (id_reporte_vacuna_aplicadas)
    $("#id_reporte_vacuna_aplicadas").click(function () {
        if ($('.ui-paging-info').text() !== 'Sin registros que mostrar') {
              var resp = ValidMicroAplicados();
            if (resp == false) {
                
                return false;
            }
            else if ($("#fecha_inicio").datepicker("getDate") > $("#fecha_fin").datepicker("getDate")) {
                ($('#error')) ? $('#error').remove() : '';
                var elem = $("<div id='error' title='Error de llenado'><center>" +
                        "La fecha de inicio debe de ser menor que la fecha fin."
                        + "</center></div>");
                elem.insertAfter($("#vacunasAplicadas"));
                $("#error").dialog({
                    close: function () {
                        $("#fecha_inicio").val('');
                        $("#fecha_fin").val('');
                        $("#fecha_inicio").focus();
                    }
                });
                return false;
            }
            var formato = $("input[name='formato_rpt']:checked").val();
            var url = Routing.generate('rpt_vac_aplic') + '/rpt_con_vac_apl/' + formato + '/' + $('#fecha_inicio').val() + '/' + $('#fecha_fin').val() + '/' + $('#deptos').val() + '/' + $('#municipios').val() + '/' + $('#establecimientos').val() + '/' + $('#tipoestablecimientos').val() + '/' + "Reporte_Nuevo";
//            alert(url);
            window.open(url, '_blank');
            return false;
        }
        else {
            return false;
        }
    });

    //62. pacientes y diagnosticos grafica
    $("#id_reporte_paciente_diagnostico_grafica").click(function () {
        if ($('.ui-paging-info').text() !== 'Sin registros que mostrar') {
             var resp = ValidGrafPacientesAtendVSDiagnosticoEnferme();
            if (resp == false) {
                return false;
            }else if ($("#fecha_inicio").datepicker("getDate") > $("#fecha_fin").datepicker("getDate")) {
                ($('#error')) ? $('#error').remove() : '';
                var elem = $("<div id='error' title='Error de llenado'><center>" +
                        "La fecha de inicio debe de ser menor que la fecha fin."
                        + "</center></div>");
                elem.insertAfter($("#pacientesDiagnosticosGrafica"));
                $("#error").dialog({
                    close: function () {
                        $("#fecha_inicio").val('');
                        $("#fecha_fin").val('');
                        $("#fecha_inicio").focus();
                    }
                });
                return false;
            }
            if ($('#tipo_diagnostico').val() === '' || $('#diagnostico').val() === '') {
                ($('#error')) ? $('#error').remove() : '';
                var elem = $("<div id='error' title='Error de llenado'><center>" +
                        "Debe llenar ambos datos para generar el reporte."
                        + "</center></div>");
                elem.insertAfter($("#pacientesDiagnosticosGrafica"));
                $("#error").dialog({
                    close: function () {
                        if ($("#tipo_diagnostico").val() === '')
                            $("#tipo_diagnostico").focus();
                        else
                            $("#diagnostico").focus();
                    }
                });
                return false;
            }

//            var grafico = $("input[name='grafica']:checked").val();

            var formato = $("input[name='formato_rpt']:checked").val();
            if ($("input[name='grafica']:checked").val() == 'barra') {
                var url = Routing.generate('rpt_pac_dig_graf') + '/rpt_est_pac_dia_1/' + formato + '/' + $('#fecha_inicio').val() + '/' + $('#fecha_fin').val() + '/' + $('#deptos').val() + '/' + $('#municipios').val() + '/' + $('#establecimientos').val() + '/' + $('#tipoestablecimientos').val() + '/' + $('#tipo_diag').val() + '/' + $('#diagnostico').val() + '/' + $("input[name='grafica']:checked").val() + '/' + "Reporte_Nuevo";
            } else {
                var url = Routing.generate('rpt_pac_dig_graf') + '/rpt_est_pac_dia/' + formato + '/' + $('#fecha_inicio').val() + '/' + $('#fecha_fin').val() + '/' + $('#deptos').val() + '/' + $('#municipios').val() + '/' + $('#establecimientos').val() + '/' + $('#tipoestablecimientos').val() + '/' + $('#tipo_diag').val() + '/' + $('#diagnostico').val() + '/' + $("input[name='grafica']:checked").val() + '/' + "Reporte_Nuevo";
            }
//            alert(url);
            window.open(url, '_blank');
            return false;
        }
        else {
            return false;
        }
    });

    // 63. mensuales de produccion
    $("#id_reporte_mensual_produccion").click(function () {
        if ($('.ui-paging-info').text() !== 'Sin registros que mostrar') {
            var resp = ValidRegMenProd();
            if (resp == false) {
                return false;
            } else if ($("#fecha_inicio").datepicker("getDate") > $("#fecha_fin").datepicker("getDate")) {
                ($('#error')) ? $('#error').remove() : '';
                var elem = $("<div id='error' title='Error de llenado'><center>" +
                        "La fecha de inicio debe de ser menor que la fecha fin."
                        + "</center></div>");
                elem.insertAfter($("#mensualesProduccion"));
                $("#error").dialog({
                    close: function () {
                        $("#fecha_inicio").val('');
                        $("#fecha_fin").val('');
                        $("#fecha_inicio").focus();
                    }
                });
                return false;
            }
            if ($('#tipo_produccion').val() === '' || $('#produccion').val() === '') {
                ($('#error')) ? $('#error').remove() : '';
                var elem = $("<div id='error' title='Error de llenado'><center>" +
                        "Debe llenar ambos datos para generar el reporte."
                        + "</center></div>");
                elem.insertAfter($("#mensualesProduccion"));
                $("#error").dialog({
                    close: function () {
                        if ($("#tipo_produccion").val() === '')
                            $("#tipo_produccion").focus();
                        else
                            $("#produccion").focus();
                    }
                });
                return false;
            }
            var formato = $("input[name='formato_rpt']:checked").val();
            var url = Routing.generate('rpt_mens_prod') + '/rpt_prod_vac/' + formato + '/' + $('#fecha_inicio').val() + '/' + $('#fecha_fin').val() + '/' + $('#deptos').val() + '/' + $('#municipios').val() + '/' + $('#establecimientos').val() + '/' + $('#tipoestablecimientos').val() + '/' + $('#tipo_produccion').val() + '/' + $('#produccion').val() + '/' + "Reporte_Nuevo";
//            alert(url);
            window.open(url, '_blank');
            return false;
        }
        else {
            return false;
        }
    });

    //64. consolidado semanal de anotaciones
    $("#id_reporte_cons_anot_semanal").click(function () {
        if ($('.ui-paging-info').text() !== 'Sin registros que mostrar') {
            var resp = ValidConSemAnotEnfPac();
            if (resp == false) {
                return false;
            } else if ($("#fecha_inicio").datepicker("getDate") > $("#fecha_fin").datepicker("getDate")) {
                ($('#error')) ? $('#error').remove() : '';
                var elem = $("<div id='error' title='Error de llenado'><center>" +
                        "La fecha de inicio debe de ser menor que la fecha fin."
                        + "</center></div>");
                elem.insertAfter($("#consolidadoAnotaciones"));
                $("#error").dialog({
                    close: function () {
                        $("#fecha_inicio").val('');
                        $("#fecha_fin").val('');
                        $("#fecha_inicio").focus();
                    }
                });
                return false;
            }
            var formato = $("input[name='formato_rpt']:checked").val();
            var url = Routing.generate('rpt_con_anot_sem') + '/rpt_con_sem_anot/' + formato + '/' + $('#fecha_inicio').val() + '/' + $('#fecha_fin').val() + '/' + $('#deptos').val() + '/' + $('#municipios').val() + '/' + $('#establecimientos').val() + '/' + $('#tipoestablecimientos').val() + '/' + $('#cod_exp').val() + '/' + $('#cod_enf').val() + '/' + "Reporte_Nuevo";
//            alert(url);
            window.open(url, '_blank');
            return false;
        }
        else {
            return false;
        }
    });

    //65. consolidado de diagnósticos de enfermería a paciente hospitalario de los últimos 7 días
    $("#id_reporte_cons_diag_siete").click(function () {
        if ($('.ui-paging-info').text() !== 'Sin registros que mostrar') {
            var formato = $("input[name='formato_rpt']:checked").val();
             var resp = ValidConDiarioEnfPacUlt7Dias();
            if (resp == false) {
                return false;
            } 
            var url = Routing.generate('rpt_con_diag_siete') + '/rpt_con_dia_diag_ult/' + formato + '/' + $('#deptos').val() + '/' + $('#municipios').val() + '/' + $('#establecimientos').val() + '/' + $('#tipoestablecimientos').val() + '/' + $('#tipo_diag').val() + '/' + $('#diagnostico').val() + '/' + $('#cod_enf').val() + '/' + $('#fecha_inicio').val() + '/' + "Reporte_Nuevo";
            //alert(url);
            window.open(url, '_blank');
            return false;
        }
        else {
            return false;
        }
    });

    //66. Consolidado de micronutrientes aplicados en los últimos 7 días
    $("#id_reporte_cons_micro_siete").click(function () {
        if ($('.ui-paging-info').text() !== 'Sin registros que mostrar') {
            var formato = $("input[name='formato_rpt']:checked").val();
             var resp = ValidConMicroUlt7Dias();
            if (resp == false) {
                return false;
            } 
            var url = Routing.generate('rpt_con_micro_siete') + '/rpt_con_mic_apl_ult/' + formato + '/' + $('#deptos').val() + '/' + $('#municipios').val() + '/' + $('#establecimientos').val() + '/' + $('#tipoestablecimientos').val() + '/' + $('#tipo_micro').val() + '/' + $('#micro').val() + '/' + $('#cod_enf').val() + '/' + "Reporte_Nuevo";
//            alert(url);
            window.open(url, '_blank');
            return false;
        }
        else {
            return false;
        }
    });

    //67. consolidado de vacunas aplicadas en los últimos 7 días
    $("#id_reporte_cons_vac_siete").click(function () {
        if ($('.ui-paging-info').text() !== 'Sin registros que mostrar') {
            var formato = $("input[name='formato_rpt']:checked").val();
            var resp = ValidConVacunasUlt7Dias();
            if (resp == false) {
                return false;
            } 
            var url = Routing.generate('rpt_con_vac_siete') + '/rpt_con_vac_apl_ult/' + formato + '/' + $('#deptos').val() + '/' + $('#municipios').val() + '/' + $('#establecimientos').val() + '/' + $('#tipoestablecimientos').val() + '/' + $('#tipo_vacuna').val() + '/' + $('#presentacion').val() + '/' + $('#cod_enf').val() + '/' + "Reporte_Nuevo";
//            alert(url);
            window.open(url, '_blank');
            return false;
        }
        else {
            return false;
        }
    });

    //68. listado de actividades realizadas por el personal de enfermería de los últimos 7 días 
    $("#id_reporte_cons_activ_siete").click(function () {
        if ($('.ui-paging-info').text() !== 'Sin registros que mostrar') {
            var resp = ValidListActUl7Dias();
            if (resp == false) {
                return false;
            } 
            var formato = $("input[name='formato_rpt']:checked").val();
            var url = Routing.generate('rpt_con_activ_siete') + '/rpt_con_act_ult_7/' + formato + '/' + $('#deptos').val() + '/' + $('#municipios').val() + '/' + $('#establecimientos').val() + '/' + $('#tipoestablecimientos').val() + '/' + $('#fecha_inicio').val() + '/' + $('#cod_enf').val() + '/' + $('#subactividades').val() + '/' + "Reporte_Nuevo";
//            alert(url);
            window.open(url, '_blank');
            return false;
        }
        else {
            return false;
        }
    });

    //69. Reporte de registros semanales de dosis de vacunas aplicadas
    $("#id_reporte_cons_vacuna_semanal").click(function () {
        if ($('.ui-paging-info').text() !== 'Sin registros que mostrar') {
             var resp = ValidReporteRegistrosDosisVacApli();
            if (resp == false) {
                return false;
            } else if ($("#fecha_inicio").datepicker("getDate") > $("#fecha_fin").datepicker("getDate")) {
                ($('#error')) ? $('#error').remove() : '';
                var elem = $("<div id='error' title='Error de llenado'><center>" +
                        "La fecha de inicio debe de ser menor que la fecha fin."
                        + "</center></div>");
                elem.insertAfter($("#consolidadoSemanalVacunaciones"));
                $("#error").dialog({
                    close: function () {
                        $("#fecha_inicio").val('');
                        $("#fecha_fin").val('');
                        $("#fecha_inicio").focus();
                    }
                });
                return false;
            }

            var formato = $("input[name='formato_rpt']:checked").val();
            var url = Routing.generate('rpt_con_vacuna_semanal') + '/rpt_con_sem_vac/' + formato + '/' + $('#fecha_inicio').val() + '/' + $('#fecha_fin').val() + '/' + $('#deptos').val() + '/' + $('#municipios').val() + '/' + $('#establecimientos').val() + '/' + $('#tipoestablecimientos').val() + '/' + $('#tipo_vacuna').val() + '/' + $('#presentacion').val() + '/' + $('#cod_enf').val() + '/' + "Reporte_Nuevo";
//            alert(url);
            window.open(url, '_blank');
            return false;
        }
        else {
            return false;
        }
    });

    //70. Consolidado diario de diagnósticos realizados por el personal de enfermería
    $("#id_reporte_diario_diag").click(function () {
        if ($('.ui-paging-info').text() !== 'Sin registros que mostrar') {
            var resp = ValidDiagDiaEnf();
            if (resp == false) {
                return false;
            } else if ($("#fecha_inicio").datepicker("getDate") > $("#fecha_fin").datepicker("getDate")) {
                ($('#error')) ? $('#error').remove() : '';
                var elem = $("<div id='error' title='Error de llenado'><center>" +
                        "La fecha de inicio debe de ser menor que la fecha fin."
                        + "</center></div>");
                elem.insertAfter($("#consolidadoDiarioDiagnosticos"));
                $("#error").dialog({
                    close: function () {
                        $("#fecha_inicio").val('');
                        $("#fecha_fin").val('');
                        $("#fecha_inicio").focus();
                    }
                });
                return false;
            }

            var formato = $("input[name='formato_rpt']:checked").val();
            var url = Routing.generate('rpt_con_diag_diario') + '/rpt_con_dia_diag/' + formato + '/' + $('#fecha_inicio').val() + '/' + $('#deptos').val() + '/' + $('#municipios').val() + '/' + $('#establecimientos').val() + '/' + $('#tipoestablecimientos').val() + '/' + $('#tipo_diag').val() + '/' + $('#diagnostico').val() + '/' + $('#cod_enf').val() + '/' + "Reporte_Nuevo";
//            alert(url);
            window.open(url, '_blank');
            return false;
        }
        else {
            return false;
        }
    });

    //71. Consolidado diario de aplicación de micronutrientes
    $("#id_reporte_diario_micro").click(function () {
        if ($('.ui-paging-info').text() !== 'Sin registros que mostrar') {
            var resp = ValidConsoDiarioMicro();
            if (resp == false) {
                
                return false;
            } else if ($("#fecha_inicio").datepicker("getDate") > $("#fecha_fin").datepicker("getDate")) {
                ($('#error')) ? $('#error').remove() : '';
                var elem = $("<div id='error' title='Error de llenado'><center>" +
                        "La fecha de inicio debe de ser menor que la fecha fin."
                        + "</center></div>");
                elem.insertAfter($("#consolidadoDiarioMicronu"));
                $("#error").dialog({
                    close: function () {
                        $("#fecha_inicio").val('');
                        $("#fecha_fin").val('');
                        $("#fecha_inicio").focus();
                    }
                });
                return false;
            }
            var formato = $("input[name='formato_rpt']:checked").val();

            var url = Routing.generate('rpt_con_micro_diario') + '/rpt_con_micro/' + formato + '/' + $('#fecha_inicio').val() + '/' + $('#fecha_inicio').val() + '/' + $('#deptos').val() + '/' + $('#municipios').val() + '/' + $('#establecimientos').val() + '/' + $('#tipoestablecimientos').val() + '/' + $('#tipo_micro').val() + '/' + $('#presentacion').val() + '/' + "Reporte_Nuevo";
//            alert(url);
            window.open(url, '_blank');
            return false;
        }
        else {
            return false;
        }
    });

    //72. Consolidado diario de vacunación
    $("#id_reporte_diario_vac").click(function () {
        if ($('.ui-paging-info').text() !== 'Sin registros que mostrar') {
           var resp = ValidConsoDiarioVac();
            if (resp == false) {
                
                return false;
            }
//            else if ($("#fecha_inicio").datepicker("getDate") > $("#fecha_fin").datepicker("getDate")) {
//                ($('#error')) ? $('#error').remove() : '';
//                var elem = $("<div id='error' title='Error de llenado'><center>" +
//                        "La fecha de inicio debe de ser menor que la fecha fin."
//                        + "</center></div>");
//                elem.insertAfter($("#consolidadoDiarioAnotac"));
//                $("#error").dialog({
//                    close: function () {
//                        $("#fecha_inicio").val('');
////                        $("#fecha_fin").val('');
//                        $("#fecha_inicio").focus();
//                    }
//                });
//                return false;
//            }
            var formato = $("input[name='formato_rpt']:checked").val();
            var url = Routing.generate('rpt_con_vac_diario') + '/rpt_con_vac/' + formato + '/' + $('#fecha_inicio').val() + '/' + $('#fecha_inicio').val() + '/' + $('#deptos').val() + '/' + $('#municipios').val() + '/' + $('#establecimientos').val() + '/' + $('#tipoestablecimientos').val() + '/' + $('#tipo_vacuna').val() + '/' + $('#presentacion').val() + '/' + "Reporte_Nuevo";
//            alert(url);
            window.open(url, '_blank');
            return false;
        }
        else {
            return false;
        }
    });

    //73. Informe diario de anotaciones de enfermería por paciente
    $("#id_reporte_diario_anot").click(function () {
        if ($('.ui-paging-info').text() !== 'Sin registros que mostrar') {
             var resp = ValidAnotEnfPaci();
            if (resp == false) {
                return false;
            } else if ($("#fecha_inicio").datepicker("getDate") > $("#fecha_fin").datepicker("getDate")) {
                ($('#error')) ? $('#error').remove() : '';
                var elem = $("<div id='error' title='Error de llenado'><center>" +
                        "La fecha de inicio debe de ser menor que la fecha fin."
                        + "</center></div>");
                elem.insertAfter($("#consolidadoDiarioAnotac"));
                $("#error").dialog({
                    close: function () {
                        $("#fecha_inicio").val('');
                        $("#fecha_fin").val('');
                        $("#fecha_inicio").focus();
                    }
                });
                return false;
            }
            var formato = $("input[name='formato_rpt']:checked").val();
            var url = Routing.generate('rpt_con_anot_diario') + '/rpt_anot_diario/' + formato + '/' + $('#fecha_inicio').val() + '/' + $('#fecha_inicio').val() + '/' + $('#deptos').val() + '/' + $('#municipios').val() + '/' + $('#establecimientos').val() + '/' + $('#tipoestablecimientos').val() + '/' + $('#anotacion').val() + '/' + $('#cod_exp').val() + '/' + $('#cod_enf').val() + '/' + "Reporte_Nuevo";
//            alert(url);
            window.open(url, '_blank');
            return false;
        }
        else {
            return false;
        }
    });

    //74. Informe diario de diagnósticos de enfermería a paciente hospitalario
    $("#id_reporte_diario_enfer").click(function () {
        if ($('.ui-paging-info').text() !== 'Sin registros que mostrar') {
            var resp = ValidDiagDiaInfEnf();
            if (resp == false) {
                return false;
            }else if ($("#fecha_inicio").datepicker("getDate") > $("#fecha_fin").datepicker("getDate")) {
                ($('#error')) ? $('#error').remove() : '';
                var elem = $("<div id='error' title='Error de llenado'><center>" +
                        "La fecha de inicio debe de ser menor que la fecha fin."
                        + "</center></div>");
                elem.insertAfter($("#consolidadoDiarioEnferm"));
                $("#error").dialog({
                    close: function () {
                        $("#fecha_inicio").val('');
                        $("#fecha_fin").val('');
                        $("#fecha_inicio").focus();
                    }
                });
                return false;
            }
            var formato = $("input[name='formato_rpt']:checked").val();
            var url = Routing.generate('rpt_con_enfer_diario') + '/rpt_inf_dia_diag/' + formato + '/' + $('#fecha_inicio').val() + '/' + $('#fecha_inicio').val() + '/' + $('#deptos').val() + '/' + $('#municipios').val() + '/' + $('#establecimientos').val() + '/' + $('#tipoestablecimientos').val() + '/' + $('#tipo_diag').val() + '/' + $('#diagnostico').val() + '/' + $('#cod_exp').val() + '/' + $('#cod_enf').val() + '/' + "Reporte_Nuevo";
//            alert(url);
            window.open(url, '_blank');
            return false;
        }
        else {
            return false;
        }
    });

    //75. Reporte diario de actividades realizadas por el personal de enfermería
    $("#id_reporte_diario_activ").click(function () {
        if ($('.ui-paging-info').text() !== 'Sin registros que mostrar') {
             var resp = ValidDiarioActivEnf();
            if (resp == false) {
                return false;
                elem.insertAfter($("#consolidadoDiarioActividad"));
                $("#error").dialog({
                    close: function () {
                        if ($("#fecha_inicio").val() === '')
                            $("#fecha_inicio").focus();
                        //else
                            //$("#fecha_fin").focus();
                    }
                });
                return false;
            } else if ($("#fecha_inicio").datepicker("getDate") > $("#fecha_fin").datepicker("getDate")) {
                ($('#error')) ? $('#error').remove() : '';
                var elem = $("<div id='error' title='Error de llenado'><center>" +
                        "La fecha de inicio debe de ser menor que la fecha fin."
                        + "</center></div>");
                elem.insertAfter($("#consolidadoDiarioActividad"));
                $("#error").dialog({
                    close: function () {
                        $("#fecha_inicio").val('');
                        $("#fecha_fin").val('');
                        $("#fecha_inicio").focus();
                    }
                });
                return false;
            }
            var formato = $("input[name='formato_rpt']:checked").val();
            var url = Routing.generate('rpt_con_activ_diario') + '/rpt_diario_act/' + formato + '/' + $('#fecha_inicio').val() + '/' + $('#fecha_inicio').val() + '/' + $('#deptos').val() + '/' + $('#municipios').val() + '/' + $('#establecimientos').val() + '/' + $('#tipoestablecimientos').val() + '/' + $('#actividades').val() + '/' + $('#subactividades').val() + '/' + $('#cod_enf').val() + '/' + "Reporte_Nuevo";
//            alert(url);
            window.open(url, '_blank');
            return false;
        }
        else {
            return false;
        }
    });

    //76. Reporte diario de capacitaciones realizadas por enfermera
    $("#id_reporte_diario_capacit").click(function () {
        if ($('.ui-paging-info').text() !== 'Sin registros que mostrar') {
            var resp = ValidCapEnf();
            if (resp == false) {
                return false;
            } else if ($("#fecha_inicio").datepicker("getDate") > $("#fecha_fin").datepicker("getDate")) {
                ($('#error')) ? $('#error').remove() : '';
                var elem = $("<div id='error' title='Error de llenado'><center>" +
                        "La fecha de inicio debe de ser menor que la fecha fin."
                        + "</center></div>");
                elem.insertAfter($("#consolidadoDiarioCapacitacion"));
                $("#error").dialog({
                    close: function () {
                        $("#fecha_inicio").val('');
                        $("#fecha_fin").val('');
                        $("#fecha_inicio").focus();
                    }
                });
                return false;
            }
            var formato = $("input[name='formato_rpt']:checked").val();
            var url = Routing.generate('rpt_con_capac_diario') + '/rpt_dia_cap/' + formato + '/' + $('#fecha_inicio').val() + '/' + $('#fecha_inicio').val() + '/' + $('#deptos').val() + '/' + $('#municipios').val() + '/' + $('#establecimientos').val() + '/' + $('#tipoestablecimientos').val() + '/' + $('#financiamiento').val() + '/' + $('#cod_enf').val() + '/' + "Reporte_Nuevo";
//            alert(url);
            window.open(url, '_blank');
            return false;
        }
        else {
            return false;
        }
    });

    //77. Reporte de control de existencias y descargo de vacunas por día
    $("#id_reporte_control_vac").click(function () {
        if ($('.ui-paging-info').text() !== 'Sin registros que mostrar') {
           var resp = ValidDescargo();
            if (resp == false) {
                return false;
            
            } else if ($("#fecha_inicio").datepicker("getDate") > $("#fecha_fin").datepicker("getDate")) {
                ($('#error')) ? $('#error').remove() : '';
                var elem = $("<div id='error' title='Error de llenado'><center>" +
                        "La fecha de inicio debe de ser menor que la fecha fin."
                        + "</center></div>");
                elem.insertAfter($("#consolidadoControlVacun"));
                $("#error").dialog({
                    close: function () {
                        $("#fecha_inicio").val('');
                        $("#fecha_fin").val('');
                        $("#fecha_inicio").focus();
                    }
                });
                return false;
            }
            var formato = $("input[name='formato_rpt']:checked").val();
            var url = Routing.generate('rpt_con_control_vac') + '/rpt_diario_vac_ent_y_rec/' + formato + '/' + $('#fecha_inicio').val() + '/' + $('#fecha_fin').val() + '/' + $('#deptos').val() + '/' + $('#municipios').val() + '/' + $('#establecimientos').val() + '/' + $('#tipoestablecimientos').val() + '/' + "Reporte_Nuevo";
//            alert(url);
            window.open(url, '_blank');
            return false;
        }
        else {
            return false;
        }
    });

    //78. Reporte diario de niños inmunizados en un área geográfica
    $("#id_reporte_diario_inmun").click(function () {
        if ($('.ui-paging-info').text() !== 'Sin registros que mostrar') {
            var resp = ValidninosInmunGeo();
            if (resp == false) {
                return false;
            }  else if ($("#fecha_inicio").datepicker("getDate") > $("#fecha_fin").datepicker("getDate")) {
                ($('#error')) ? $('#error').remove() : '';
                var elem = $("<div id='error' title='Error de llenado'><center>" +
                        "La fecha de inicio debe de ser menor que la fecha fin."
                        + "</center></div>");
                elem.insertAfter($("#consolidadoInmunizadosGeo"));
                $("#error").dialog({
                    close: function () {
                        $("#fecha_inicio").val('');
                        $("#fecha_fin").val('');
                        $("#fecha_inicio").focus();
                    }
                });
                return false;
            }
            var formato = $("input[name='formato_rpt']:checked").val();
            var url = Routing.generate('rpt_con_inmun_diario') + '/rpt_diario_niños_inmun/' + formato + '/' + $('#fecha_inicio').val() + '/' + $('#fecha_inicio').val() + '/' + $('#deptos').val() + '/' + $('#municipios').val() + '/' + $('#establecimientos').val() + '/' + $('#tipoestablecimientos').val() + '/' + $('#deptos2').val() + '/' + $('#municipios2').val() + '/' + $('#sector').val() + '/' + "Reporte_Nuevo";
//            alert(url);
            window.open(url, '_blank');
            return false;
        }
        else {
            return false;
        }
    });

    //79. Reporte diario de intervenciones efectuadas por el personal de enfermería
    $("#id_reporte_diario_interv").click(function () {
        if ($('.ui-paging-info').text() !== 'Sin registros que mostrar') {
             var resp = ValidIntervEfecEnf();
            if (resp == false) {
                return false;
            }  else if ($("#fecha_inicio").datepicker("getDate") > $("#fecha_fin").datepicker("getDate")) {
                ($('#error')) ? $('#error').remove() : '';
                var elem = $("<div id='error' title='Error de llenado'><center>" +
                        "La fecha de inicio debe de ser menor que la fecha fin."
                        + "</center></div>");
                elem.insertAfter($("#consolidadoDiarioIntervenc"));
                $("#error").dialog({
                    close: function () {
                        $("#fecha_inicio").val('');
                        $("#fecha_fin").val('');
                        $("#fecha_inicio").focus();
                    }
                });
                return false;
            }
            var formato = $("input[name='formato_rpt']:checked").val();
            var url = Routing.generate('rpt_con_interv_diario') + '/rpt_dia_inter/' + formato + '/' + $('#fecha_inicio').val() + '/' + $('#fecha_inicio').val() + '/' + $('#deptos').val() + '/' + $('#municipios').val() + '/' + $('#establecimientos').val() + '/' + $('#tipoestablecimientos').val() + '/' + $('#protocolo').val() + '/' + $('#subprotocolo').val() + '/' + $('#tipointervencion').val() + '/' + $('#intervencion').val() + '/' + $('#cod_enf').val() + '/' + "Reporte_Nuevo";
//            alert(url);
            window.open(url, '_blank');
            return false;
        }
        else {
            return false;
        }
    });

    //80. Reporte de registros diarios de producción de vacunas
    $("#id_reporte_diario_prod_vac").click(function () {
        if ($('.ui-paging-info').text() !== 'Sin registros que mostrar') {
           var resp = ValidRegDiariosProdVacunas();
            if (resp == false) {
                return false;
            } else if ($("#fecha_inicio").datepicker("getDate") > $("#fecha_fin").datepicker("getDate")) {
                ($('#error')) ? $('#error').remove() : '';
                var elem = $("<div id='error' title='Error de llenado'><center>" +
                        "La fecha de inicio debe de ser menor que la fecha fin."
                        + "</center></div>");
                elem.insertAfter($("#consolidadoDiarioProdVacun"));
                $("#error").dialog({
                    close: function () {
                        $("#fecha_inicio").val('');
                        $("#fecha_fin").val('');
                        $("#fecha_inicio").focus();
                    }
                });
                return false;
            }
            var formato = $("input[name='formato_rpt']:checked").val();
            var url = Routing.generate('rpt_con_produc_vac_diario') + '/rpt_dia_prod_vac/' + formato + '/' + $('#fecha_inicio').val() + '/' + $('#fecha_inicio').val() + '/' + $('#deptos').val() + '/' + $('#municipios').val() + '/' + $('#establecimientos').val() + '/' + $('#tipoestablecimientos').val() + '/' + $('#tipo_vacuna').val() + '/' + $('#presentacion').val() + '/' + "Reporte_Nuevo";
//            alert(url);
            window.open(url, '_blank');
            return false;
        }
        else {
            return false;
        }
    });

    //81. Reporte diario de protocolos efectuados por el personal de enfermería consolidadoDiarioProtocol
    $("#id_reporte_diario_protocol").click(function () {
        if ($('.ui-paging-info').text() !== 'Sin registros que mostrar') {
            var resp = ValidReportDiarioProtocolos();
            if (resp == false) {
                return false;
            } else if ($("#fecha_inicio").datepicker("getDate") > $("#fecha_fin").datepicker("getDate")) {
                ($('#error')) ? $('#error').remove() : '';
                var elem = $("<div id='error' title='Error de llenado'><center>" +
                        "La fecha de inicio debe de ser menor que la fecha fin."
                        + "</center></div>");
                elem.insertAfter($("#consolidadoDiarioProtocol"));
                $("#error").dialog({
                    close: function () {
                        $("#fecha_inicio").val('');
                        $("#fecha_fin").val('');
                        $("#fecha_inicio").focus();
                    }
                });
                return false;
            }
            var formato = $("input[name='formato_rpt']:checked").val();
            var url = Routing.generate('rpt_con_protoc_diario') + '/rpt_dia_pro/' + formato + '/' + $('#fecha_inicio').val() + '/' + $('#fecha_inicio').val() + '/' + $('#deptos').val() + '/' + $('#municipios').val() + '/' + $('#establecimientos').val() + '/' + $('#tipoestablecimientos').val() + '/' + $('#protocolo').val() + '/' + $('#subprotocolo').val() + '/' + $('#cod_enf').val() + '/' + "Reporte_Nuevo";
//            alert(url);
            window.open(url, '_blank');
            return false;
        }
        else {
            return false;
        }
    });

    //82. Reporte diario del registro de vacunas entregadas y recibidas por el personal de las distintas disciplinas
    $("#id_reporte_diario_disc_vac").click(function () {
        if ($('.ui-paging-info').text() !== 'Sin registros que mostrar') {
              var resp = ValidRegVacEntyRec();
            if (resp == false) {
                return false;
            } else if ($("#fecha_inicio").datepicker("getDate") > $("#fecha_fin").datepicker("getDate")) {
                ($('#error')) ? $('#error').remove() : '';
                var elem = $("<div id='error' title='Error de llenado'><center>" +
                        "La fecha de inicio debe de ser menor que la fecha fin."
                        + "</center></div>");
                elem.insertAfter($("#consolidadoDiarioDiscVacun"));
                $("#error").dialog({
                    close: function () {
                        $("#fecha_inicio").val('');
                        $("#fecha_fin").val('');
                        $("#fecha_inicio").focus();
                    }
                });
                return false;
            }
            var formato = $("input[name='formato_rpt']:checked").val();
            var url = Routing.generate('rpt_con_disc_vac_diario') + '/rpt_diario_vac_ent_y_rec/' + formato + '/' + $('#fecha_inicio').val() + '/' + $('#fecha_fin').val() + '/' + $('#deptos').val() + '/' + $('#municipios').val() + '/' + $('#establecimientos').val() + '/' + $('#tipoestablecimientos').val() + '/' + $('#tipo_vacuna').val() + '/' + $('#presentacion').val() + '/' + $('#disciplina').val() + '/' + "Reporte_Nuevo";
//            alert(url);
            window.open(url, '_blank');
            return false;
        }
        else {
            return false;
        }
    });







//Consolidado de actividades realizadas

    $("#id_consolidado_actividad").click(function () {
//        alert('entro aqui 2');
        if ($('.ui-paging-info').text() != 'Sin registros que mostrar') {
            var resp = ValidConsoActivRea();
            if (resp == false) {
                return false;
            } else if ($("#fecha_inicio").datepicker("getDate") > $("#fecha_fin").datepicker("getDate")) {
                ($('#error')) ? $('#error').remove() : '';
                var elem = $("<div id='error' title='Error de llenado'><center>" +
                        "La fecha de inicio debe de ser menor que la fecha fin."
                        + "</center></div>");
                elem.insertAfter($("#pacientesIngresados"));
                $("#error").dialog({
                    close: function () {
                        $("#fecha_inicio").val('');
                        $("#fecha_fin").val('');
                        $("#fecha_inicio").focus();
                    }
                });
                return false;
            }

//            if ($('#actividades').val() === 'Seleccione..' || $('#subactividades').val() === ''
//                    || $('#deptos').val() === 'Seleccione..' || $('#municipios').val() === ''
//                    || $('#establecimientos').val() === 'Seleccione..' || $('#tipoestablecimientos').val() === '' 
//                    || $('#cod_exp').val() === 'Seleccione..' || $('#cod_enf').val() === 'Seleccione..') {
//                ($('#error')) ? $('#error').remove() : '';
//                var elem = $("<div id='error' title='Error de llenado'><center>" +
//                        "Debe seleccionar todos lo combos."
//                        + "</center></div>");
//                elem.insertAfter($("#pacientesIngresados"));
//                $("#error").dialog({
//                    close: function () {
//                        if ($("#actividades").val() === '')
//                            $("#actividades").focus();
//                        else
//                            $("#subactividades").focus();
//                    }
//                });
//                return false;
//            }
            
            var formato = $("input[name='formato_rpt']:checked").val();
            var url = Routing.generate('rpt_con_act') + '/rpt_con_act/' + formato + '/' + $('#fecha_inicio').val() + '/' + $('#fecha_fin').val() + '/' + $('#actividades').val() + '/' + $('#subactividades').val() + '/' + $('#deptos').val() + '/' + $('#municipios').val() + '/' + $('#establecimientos').val() + '/' + $('#tipoestablecimientos').val() + '/' + $('#cod_exp').val() + '/' + $('#cod_enf').val() + '/' + "Reporte_Nuevo";
//            alert('Entro saqui 8');{fecha_inicio}/{fecha_fin}/{actividades}/{subactividades}/{deptos}/{municipios}/{establecimientos}/{tipoestablecimientos}/{codigo_expediente}/{codigo_enfermera}/{id_servicio}", name="rpt_con_act"
            window.open(url, '_blank');
            return false;
        }
        else {
            return false;
        }
    });

    $.getJSON(Routing.generate('get_all_deptos'),
            function (data) {
//                alert("entre a deptos de shcp");
                $.each(data.deptos, function (indice, aux) {
                    $('#deptos, #deptos2').append('<option value="' + aux.id + '">' + aux.nombre + '</option>');
                });
            });


    $("#deptos").on('change', function (event) { // aqui el JSON });
        $('#municipios option').each(function (index, val) {
            $(this).remove();
            /// $('#municipios').append('<option value="0" selected="true">Seleccione...</option>'); 
            $('#municipios').select2({
                selected: 'true',
                width: '100%',
                placeholder: 'Seleccione...'
//                allowClear: true
            });

        });
        $.getJSON(Routing.generate('get_all_munic') + '/' + $('#deptos').val(),
                function (data) {
                    $('#municipios').append('<option value="0" selected="true">Seleccione...</option>');
//                    alert("entre a municipios de shcp");
                    $.each(data.municipios, function (indice, aux) {
                        $('#municipios').append('<option value="' + aux.id + '">' + aux.nombre + '</option>');
                    });

                });
    });

    $("#deptos2").on('change', function (event) { // aqui el JSON });
        $('#municipios2 option').each(function (index, val) {
            $(this).remove();
            /// $('#municipios').append('<option value="0" selected="true">Seleccione...</option>'); 
            $('#municipios2').select2({
                selected: 'true',
                width: '100%',
                placeholder: 'Seleccione...'
//                allowClear: true
            });

        });
        $.getJSON(Routing.generate('get_all_munic') + '/' + $('#deptos2').val(),
                function (data) {
                    $('#municipios2').append('<option value="0" selected="true">Seleccione...</option>');
//                    alert("entre a municipios de shcp");
                    $.each(data.municipios, function (indice, aux) {
                        $('#municipios2').append('<option value="' + aux.id + '">' + aux.nombre + '</option>');
                    });

                });
    });

////////////////////llenado de combos de actividades//////////////////////
    $.getJSON(Routing.generate('get_all_actividades'),
            function (data) {
//               alert("entre a deptos de shcp");
                $.each(data.actividades, function (indice, aux) {
                    $('#actividades').append('<option value="' + aux.id + '">' + aux.nombreActividad + '</option>');
                });
            });

    $("#actividades").on('change', function (event) { // aqui el JSON });
        $('#subactividades option').each(function (index, val) {
            $(this).remove();
            /// $('#municipios').append('<option value="0" selected="true">Seleccione...</option>'); 
            $('#subactividades').select2({
                selected: 'true',
                width: '100%',
                placeholder: 'Seleccione...'
//                allowClear: true
            });

        });
        $.getJSON(Routing.generate('get_all_sub_actividades') + '/' + $('#actividades').val(),
                function (data) {
                    $('#subactividades').append('<option value="0" selected="true">Seleccione...</option>');
//                    alert("entre a municipios de shcp");
                    $.each(data.subactividades, function (indice, aux) {
                        $('#subactividades').append('<option value="' + aux.id + '">' + aux.nombreSubactividad + '</option>');
                    });

                });
    });


////////////////////llenado de combos de Diagnostico//////////////////////
    $.getJSON(Routing.generate('get_tipos_diagnos'),
            function (data) {
//               alert("entre a deptos de shcp");
                $.each(data.tipos_diagnosticos, function (indice, aux) {
                    $('#tipo_diag').append('<option value="' + aux.id + '">' + aux.nombreClase + '</option>');
                });
            });

    $("#tipo_diag").on('change', function (event) { // aqui el JSON });
        $('#diagnostico option').each(function (index, val) {
            $(this).remove();
          $('#diagnostico').append('<option value="0" selected="true">Seleccione...</option>'); 
            $('#diagnostico').select2({
                selected: 'true',
                width: '100%',
                placeholder: 'Seleccione...'
//                allowClear: true
            });

        });
        $.getJSON(Routing.generate('get_diag') + '/' + $('#tipo_diag').val(),
                function (data) {
                    $('diagnosticos').append('<option value="0" selected="true">Seleccione...</option>');
//                    alert("entre a municipios de shcp");
                    $.each(data.diagnosticos, function (indice, aux) {
                        $('#diagnostico').append('<option value="' + aux.id + '">' + aux.nombreDiagnostico + '</option>');
                    });

                });
    });


////////////////////llenado de combos de Establecimiento//////////////////////
    $.getJSON(Routing.generate('get_all_establecimientos'),
            function (data) {
            //    $('#establecimientos').append('<option value="1">Hospitales</option>');
                $.each(data.establecimientos, function (indice, aux) {
                    $('#establecimientos').append('<option value="' + aux.id + '">' + aux.nombre + '</option>');
                });
            });
      // $('#tipoestablecimientos').val());
    $("#establecimientos").on('change', function (event) { // aqui el JSON });
        $('#tipoestablecimientos option').each(function (index, val) {
            $(this).remove();
            /// $('#municipios').append('<option value="0" selected="true">Seleccione...</option>'); 
            $('#tipoestablecimientos').select2({
                selected: 'true',
                width: '100%',
              
                placeholder: 'Seleccione...'
                
//                allowClear: true
            });
             // $('#tipoestablecimientos').val());
        });
        $('#tipoestablecimientos').append('<option value="0">Seleccione..</option>');
        $.getJSON(Routing.generate('get_all_sub_establecimientos') + '/' + $('#establecimientos').val()+ '/' + $('#municipios').val(),
               function (data) {
                  
                    $.each(data.subestablecimientos, function (indice, aux) {
                        $('#tipoestablecimientos').append('<option value="' + aux.id + '">' + aux.nombre + '</option>');
                        
                    });
//$('#tipoestablecimientos').append('<option value="9">Hospital Nacional Antiguo Cuzcatlan</option>');
                });
    });

////////////////////llenado de combos de Paciente //////////////////////
    $.getJSON(Routing.generate('get_expedientes_enf'),
            function (data) {
//               alert("entre a deptos de shcp");
                $.each(data.pacientes, function (indice, aux) {
                    $('#cod_exp').append('<option value="' + aux.id + '">' + aux.numero + '</option>');
                });
            });

//    $("#establecimientos").on('change', function (event) { // aqui el JSON });
//        $('#tipoestablecimientos option').each(function (index, val) {
//            $(this).remove();
//            /// $('#municipios').append('<option value="0" selected="true">Seleccione...</option>'); 
//            $('#tipoestablecimientos').select2({
//                selected: 'true',
//                width: '60%',
//                placeholder: 'Seleccione...'
////                allowClear: true
//            });
//
//        });
//        $.getJSON(Routing.generate('get_all_sub_establecimientos') + '/' + $('#establecimientos').val(),
//                function (data) {
//                    $('subestablecimientos').append('<option value="0" selected="true">Seleccione...</option>');
////                    alert("entre a municipios de shcp");
//                    $.each(data.subestablecimientos, function (indice, aux) {
//                        $('#tipoestablecimientos').append('<option value="' + aux.id + '">' + aux.nombre + '</option>');
//                    });
//
//                });
//    });


///////////////////llenado de combos de Enfermera//////////////////////
    $.getJSON(Routing.generate('get_empleados_enf'),
            function (data) {
//               alert("entre a deptos de shcp");
                $.each(data.empleados, function (indice, aux) {
                    $('#cod_enf').append('<option value="' + aux.id + '">' + aux.idempleado + '</option>');
                });
            });


///funcion para mostrar el nombre del empleado
    $("#cod_enf").on("change", function () {
        var id = $(this).val();
        $.getJSON(Routing.generate('get_nombre_empleado') + "/" + id, function (data) {
            var emp
            $(data.datosempleado).each(function () {
                emp = this.nombreempleado
            })
            $("#enfermera").val(emp);
        })

    })

///funcion para mostrar el nombre del paciente
    $("#cod_exp").on("change", function () {
        var id = $(this).val();
        $.getJSON(Routing.generate('get_nombre_paciente') + "/" + id, function (data) {
            var pac
            $(data.datospaciente).each(function () {
                pac = this.idPaciente.primerNombre +" "+ this.idPaciente.segundoNombre +" "+ this.idPaciente.primerApellido +" "+ this.idPaciente.segundoApellido;
            })
            $("#nombre_paciente").val(pac);
        })

    })
//    $("#establecimientos").on('change', function (event) { // aqui el JSON });
//        $('#tipoestablecimientos option').each(function (index, val) {
//            $(this).remove();
//            /// $('#municipios').append('<option value="0" selected="true">Seleccione...</option>'); 
//            $('#tipoestablecimientos').select2({
//                selected: 'true',
//                width: '60%',
//                placeholder: 'Seleccione...'
////                allowClear: true
//            });
//
//        });
//        $.getJSON(Routing.generate('get_all_sub_establecimientos') + '/' + $('#establecimientos').val(),
//                function (data) {
//                    $('subestablecimientos').append('<option value="0" selected="true">Seleccione...</option>');
////                    alert("entre a municipios de shcp");
//                    $.each(data.subestablecimientos, function (indice, aux) {
//                        $('#tipoestablecimientos').append('<option value="' + aux.id + '">' + aux.nombre + '</option>');
//                    });
//
//                });
//    });



////////////////////llenado de combos de Tipo de Componente y Componente//////////////////////
    $.getJSON(Routing.generate('get_all_tipo_componente'),
            function (data) {

                $.each(data.tipocomponente, function (indice, aux) {
                    $('#tipo_vacuna').append('<option value="' + aux.id + '">' + aux.nombreComponente1 + '</option>');
                });
            });
//////////////////////////////////////////////////////////////////////////////////////////////////////////////
$.getJSON(Routing.generate('get_all_micronutrientes'),
            function (data) {

                $.each(data.tipocomponente, function (indice, aux) {
                    $('#tipo_micro').append('<option value="' + aux.id + '">' + aux.nombreComponente1 + '</option>');
                });
            });
 $("#tipo_micro").on('change', function (event) { // aqui el JSON });
        $('#presentacion option').each(function (index, val) {
            $(this).remove();
             $('#presentacion').append('<option value="0" selected="true">Seleccione...</option>'); 
            $('#presentacion').select2({
                selected: 'true',
                width: '100%',
                placeholder: 'Seleccione...'
//                allowClear: true
            });

        });
        $.getJSON(Routing.generate('get_componente') + '/' + $('#tipo_micro').val(),
                function (data) {
                    $('presentacion').append('<option value="0" selected="true">Seleccione...</option>');
//                    alert("entre a municipios de shcp");
                    $.each(data.componente, function (indice, aux) {
                        $('#presentacion').append('<option value="' + aux.id + '">' + aux.presentacion + '</option>');
                    });

                });
    });
///////////////////////////////////////////////////////////////////////////////////////////////////////////////
    $("#tipo_vacuna").on('change', function (event) { // aqui el JSON });
        $('#presentacion option').each(function (index, val) {
            $(this).remove();
             $('#presentacion').append('<option value="0" selected="true">Seleccione...</option>'); 
            $('#presentacion').select2({
                selected: 'true',
                width: '100%',
                placeholder: 'Seleccione...'
//                allowClear: true
            });

        });
        $.getJSON(Routing.generate('get_componente') + '/' + $('#tipo_vacuna').val(),
                function (data) {
                    $('presentacion').append('<option value="0" selected="true">Seleccione...</option>');
//                    alert("entre a municipios de shcp");
                    $.each(data.componente, function (indice, aux) {
                        $('#presentacion').append('<option value="' + aux.id + '">' + aux.presentacion + '</option>');
                    });

                });
    });

////////////////////llenado de combos de Protocolo y SubProtocolo//////////////////////
    $.getJSON(Routing.generate('get_all_protocolos'),
            function (data) {
//               alert("entre a deptos de shcp");
                $.each(data.protocolos, function (indice, aux) {
                    $('#protocolo').append('<option value="' + aux.id + '">' + aux.nombreProtocolo + '</option>');
                });
            });

    $("#protocolo").on('change', function (event) { // aqui el JSON });
        $('#subprotocolo option').each(function (index, val) {
            $(this).remove();
             $('#subprotocolo').append('<option value="0" selected="true">Seleccione...</option>'); 
            $('#subprotocolo').select2({
                selected: 'true',
                width: '60%',
                placeholder: 'Seleccione...'
//                allowClear: true
            });

        });
        $.getJSON(Routing.generate('get_sub_protocolos') + '/' + $('#protocolo').val(),
                function (data) {
                    $('subprotocolos').append('<option value="0" selected="true">Seleccione...</option>');
//                    alert("entre a municipios de shcp");
                    $.each(data.subprotocolos, function (indice, aux) {
                        $('#subprotocolo').append('<option value="' + aux.id + '">' + aux.nombreSubprotocolo + '</option>');
                    });

                });
    });

////////////////////llenado de combo de capacitacion//////////////////////
    $.getJSON(Routing.generate('get_all_capacitaciones'),
            function (data) {
//               alert("entre a deptos de shcp");
                $.each(data.capacitaciones, function (indice, aux) {
                    $('#capacitacion').append('<option value="' + aux.id + '">' + aux.temaCapacitacion + '</option>');
                });
            });

////////////////////llenado de combo de capacitacion//////////////////////
    $.getJSON(Routing.generate('get_all_financiamiento'),
            function (data) {
//               alert("entre a deptos de shcp");
                $.each(data.financiamiento, function (indice, aux) {
                    $('#financiamiento').append('<option value="' + aux.id + '">' + aux.nombreFinanciamiento + '</option>');
                });
            });

////////////////////llenado de combo de anotaciones//////////////////////
    $.getJSON(Routing.generate('get_todos_anotaciones'),
            function (data) {
//               alert("entre a deptos de shcp");
                $.each(data.tiponota, function (indice, aux) {
                    $('#anotacion').append('<option value="' + aux.id + '">' + aux.nombreNota + '</option>');
                });
            });
/////////////////////////////////////////////////////////////////////////////////////////////////////////////
    $("#municipios").on('change', function (event) { // aqui el JSON });
       //alert("entre");
        $('#establecimientos option').each(function (index, val) {
            $(this).remove();
            /// $('#municipios').append('<option value="0" selected="true">Seleccione...</option>'); 
            $('#establecimientos').select2({
                selected: 'true',
                width: '100%',
                placeholder: 'Seleccione...'
//                allowClear: true
            });

        });
        $.getJSON(Routing.generate('get_all_establecimientos_by_munic') + '/' + $('#municipios').val(),
                function (data) {
                    $('#establecimientos').append('<option value="0" selected="true">Seleccione...</option>');
                   // alert("entre a municipios de shcp");
                    $.each(data.establecimientos, function (indice, aux) {
                        $('#establecimientos').append('<option value="' + aux.id + '">' + aux.nombre + '</option>');
                    });

                });
    });
   //////////////////////////////////////////////////////////////////////////////////////////////////////////////


});


//url = Routing.generate('total_ingresos') + '/rpt_resumen_ingresos/XLS/' + $('#fecha_inicio').val() + '/' + $('#fecha_fin').val();