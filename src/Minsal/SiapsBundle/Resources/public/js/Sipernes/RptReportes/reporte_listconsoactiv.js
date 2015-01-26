$(document).ready(function () {
    $('#actividades').select2({
        width: '60%',
        placeholder: 'Seleccione...',
        allowClear: true
    });

    $('#subactividades').select2({
        width: '60%',
        placeholder: 'Seleccione...',
        allowClear: true
    });

    $('#deptos').select2({
        width: '60%',
        placeholder: 'Seleccione...',
        allowClear: true
    });



    $('#municipios').select2({
        width: '60%',
        placeholder: 'Seleccione...',
        allowClear: true
    });

    $('#tipoestablecimientos').select2({
        width: '60%',
        placeholder: 'Seleccione...',
        allowClear: true
    });



    $('#establecimientos').select2({
        width: '60%',
        placeholder: 'Seleccione...',
        allowClear: true
    });
    
     $('#tipo_diag').select2({
        width: '60%',
        placeholder: 'Seleccione...',
        allowClear: true
    });



    $('#diagnostico').select2({
        width: '60%',
        placeholder: 'Seleccione...',
        allowClear: true
    });
    
     $('#tipo_micro').select2({
        width: '60%',
        placeholder: 'Seleccione...',
        allowClear: true
    });



    $('#micro').select2({
        width: '60%',
        placeholder: 'Seleccione...',
        allowClear: true
    });

    $("#fecha_inicio").datepicker().mask("99-99-9999");
    $("#fecha_fin").datepicker().mask("99-99-9999");

    $("#emitir_informe").click(function () {
        if ($("#fecha_inicio").val() == '' || $("#fecha_fin").val() == '') {
            ($('#error')) ? $('#error').remove() : '';
            var elem = $("<div id='error' title='Error de llenado'><center>" +
                    "Debe de seleccionar ambas fechas para generar el reporte."
                    + "</center></div>");
            elem.insertAfter($("#pacientesIngresados"));
            $("#error").dialog({
                close: function () {
                    if ($("#fecha_inicio").val() == '')
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
            elem.insertAfter($("#pacientesIngresados"));
            $("#error").dialog({
                close: function () {
                    $("#fecha_inicio").val('');
                    $("#fecha_fin").val('');
                    $("#fecha_inicio").focus();
                }
            });
        } else {
            $('#resultado').load(Routing.generate('get_municipios'), {'datos': $('#pacientesIngresados').serialize()});
        }
        return false;
    });

    // 54. pacientes vs diagnosticos
    $("#id_reporte_paciente_diagnostico").click(function () {
        if ($('.ui-paging-info').text() !== 'Sin registros que mostrar') {
            if ($("#fecha_inicio").val() === '' || $("#fecha_fin").val() === '') {
                ($('#error')) ? $('#error').remove() : '';
                var elem = $("<div id='error' title='Error de llenado'><center>" +
                        "Debe de seleccionar ambas fechas para generar el reporte."
                        + "</center></div>");
                elem.insertAfter($("#pacientesDiagnosticos"));
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
            if ($('#tipo_diagnostico').val() === '' || $('#diagnostico').val() === '') {
                ($('#error')) ? $('#error').remove() : '';
                var elem = $("<div id='error' title='Error de llenado'><center>" +
                        "Debe llenar ambos datos para generar el reporte."
                        + "</center></div>");
                elem.insertAfter($("#pacientesDiagnosticos"));
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

            var url = Routing.generate('rpt_pac_dig') + '/rpt_actividad/PDF/' + $('#fecha_inicio').val() + '/' + $('#fecha_fin').val() + '/' + $('#deptos').val() + '/' + $('#municipios').val() + '/' + $('#establecimientos').val() + '/' + $('#tipoestablecimientos').val() + '/' + $('#tipo_diagnostico').val() + '/' + $('#diagnostico').val() + '/' + "Reporte_Nuevo";
            alert(url);
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

            var url = Routing.generate('rpt_micr_plan') + '/rpt_actividad/PDF/' + $('#fecha_inicio').val() + '/' + $('#fecha_fin').val() + '/' + $('#deptos').val() + '/' + $('#municipios').val() + '/' + $('#establecimientos').val() + '/' + $('#tipoestablecimientos').val() + '/' + $('#tipo_micronutriente').val() + '/' + $('#micronutriente').val() + '/' + "Reporte_Nuevo";
            alert(url);
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
            if ($("#fecha_inicio").val() === '' || $("#fecha_fin").val() === '') {
                ($('#error')) ? $('#error').remove() : '';
                var elem = $("<div id='error' title='Error de llenado'><center>" +
                        "Debe de seleccionar ambas fechas para generar el reporte."
                        + "</center></div>");
                elem.insertAfter($("#vacunasPlanficiados"));
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

            var url = Routing.generate('rpt_vac_plan') + '/rpt_actividad/PDF/' + $('#fecha_inicio').val() + '/' + $('#fecha_fin').val() + '/' + $('#deptos').val() + '/' + $('#municipios').val() + '/' + $('#establecimientos').val() + '/' + $('#tipoestablecimientos').val() + '/' + $('#tipo_vacuna').val() + '/' + $('#presentacion').val() + '/' + "Reporte_Nuevo";
            alert(url);
            window.open(url, '_blank');
            return false;
        }
        else {
            return false;
        }
    });

    // 58. vacunacion vs planificadas
    $("#id_reporte_cons_anot").click(function () {
        if ($('.ui-paging-info').text() !== 'Sin registros que mostrar') {
            if ($("#fecha_inicio").val() === '' || $("#fecha_fin").val() === '') {
                ($('#error')) ? $('#error').remove() : '';
                var elem = $("<div id='error' title='Error de llenado'><center>" +
                        "Debe de seleccionar ambas fechas para generar el reporte."
                        + "</center></div>");
                elem.insertAfter($("#consolidadoAnotaciones"));
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

            var url = Routing.generate('rpt_con_anot') + '/rpt_actividad/PDF/' + $('#fecha_inicio').val() + '/' + $('#fecha_fin').val() + '/' + $('#deptos').val() + '/' + $('#municipios').val() + '/' + $('#establecimientos').val() + '/' + $('#tipoestablecimientos').val() + '/' + $('#codigo_expediente').val() + '/' + $('#codigo_enfermera').val() + '/' + "Reporte_Nuevo";
            alert(url);
            window.open(url, '_blank');
            return false;
        }
        else {
            return false;
        }
    });    

    //59
    $("#id_reporte_cons_diag").click(function () {
        if ($('.ui-paging-info').text() !== 'Sin registros que mostrar') {
            if ($("#fecha_inicio").val() === '' || $("#fecha_fin").val() === '') {
                ($('#error')) ? $('#error').remove() : '';
                var elem = $("<div id='error' title='Error de llenado'><center>" +
                        "Debe de seleccionar ambas fechas para generar el reporte."
                        + "</center></div>");
                elem.insertAfter($("#consolidadoDiagnosticos"));
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

            var url = Routing.generate('rpt_con_diag') + '/rpt_actividad/PDF/' + $('#fecha_inicio').val() + '/' + $('#fecha_fin').val() + '/' + $('#deptos').val() + '/' + $('#municipios').val() + '/' + $('#establecimientos').val() + '/' + $('#tipoestablecimientos').val() + '/' + $('#codigo_expediente').val() + '/' + $('#codigo_enfermera').val() + '/' + "Reporte_Nuevo";
            alert(url);
            window.open(url, '_blank');
            return false;
        }
        else {
            return false;
        }
    });    


    //60
    


    $("#id_reporte_prueba").click(function () {
//        alert('entro aqui 2');
        if ($('.ui-paging-info').text() != 'Sin registros que mostrar') {
//            alert('entro aqui 3');
            if ($("#fecha_inicio").val() == '' || $("#fecha_fin").val() == '') {
//                alert('entro aqui 4');
                ($('#error')) ? $('#error').remove() : '';
                var elem = $("<div id='error' title='Error de llenado'><center>" +
                        "Debe de seleccionar ambas fechas para generar el reporte."
                        + "</center></div>");
                elem.insertAfter($("#pacientesIngresados"));
                $("#error").dialog({
                    close: function () {
                        if ($("#fecha_inicio").val() == '')
                            $("#fecha_inicio").focus();
                        else
                            $("#fecha_fin").focus();
                    }
                });
//                alert('entro aqui 5');
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


//            alert('entro aqui 7');
            alert(Routing.generate('rpt_con_act') + '/rpt_actividad/PDF/' + $('#fecha_inicio').val() + '/' + $('#fecha_fin').val() + '/' + $('#actividades').val() + '/' + $('#subactividades').val() + '/' + $('#deptos').val() + '/' + $('#municipios').val() + '/' + $('#establecimientos').val() + '/' + $('#tipoestablecimientos').val() + '/' + $('#codigo_expediente').val() + '/' + $('#codigo_enfermera').val() + '/' + "Reporte_Nuevo");
//            if ($('#municipios').val() == 'Seleccione..')
//                alert('Debe seleccionar un municipio');
//
//            // url = Routing.generate('total_ingresos') + '/rpt_resumen_ingresos/PDF/' + $('#fecha_inicio').val() + '/' + $('#fecha_fin').val();
//            // url = Routing.generate('infor_abortos') + '/rpt_inf_abortos/PDF/' + $('#fecha_inicio').val() + '/' + $('#fecha_fin').val() + '/' + $('#municipios').val() + '/' + "Informe de abortos";
//            else
            var url = Routing.generate('rpt_con_act') + '/rpt_actividad/PDF/' + $('#fecha_inicio').val() + '/' + $('#fecha_fin').val() + '/' + $('#actividades').val() + '/' + $('#subactividades').val() + '/' + $('#deptos').val() + '/' + $('#municipios').val() + '/' + $('#establecimientos').val() + '/' + $('#tipoestablecimientos').val() + '/' + $('#codigo_expediente').val() + '/' + $('#codigo_enfermera').val() + '/' + "Reporte_Nuevo";
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
                    $('#deptos').append('<option value="' + aux.id + '">' + aux.nombre + '</option>');
                });
            });


    $("#deptos").on('change', function (event) { // aqui el JSON });
        $('#municipios option').each(function (index, val) {
            $(this).remove();
            /// $('#municipios').append('<option value="0" selected="true">Seleccione...</option>'); 
            $('#municipios').select2({
                selected: 'true',
                width: '60%',
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
                width: '60%',
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
                width: '60%',
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
            /// $('#municipios').append('<option value="0" selected="true">Seleccione...</option>'); 
            $('#diagnostico').select2({
                selected: 'true',
                width: '60%',
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
//               alert("entre a deptos de shcp");
                $.each(data.establecimientos, function (indice, aux) {
                    $('#establecimientos').append('<option value="' + aux.id + '">' + aux.nombre + '</option>');
                });
            });

    $("#establecimientos").on('change', function (event) { // aqui el JSON });
        $('#tipoestablecimientos option').each(function (index, val) {
            $(this).remove();
            /// $('#municipios').append('<option value="0" selected="true">Seleccione...</option>'); 
            $('#tipoestablecimientos').select2({
                selected: 'true',
                width: '60%',
                placeholder: 'Seleccione...'
//                allowClear: true
            });

        });
        $.getJSON(Routing.generate('get_all_sub_establecimientos') + '/' + $('#establecimientos').val(),
                function (data) {
                    $('subestablecimientos').append('<option value="0" selected="true">Seleccione...</option>');
//                    alert("entre a municipios de shcp");
                    $.each(data.subestablecimientos, function (indice, aux) {
                        $('#tipoestablecimientos').append('<option value="' + aux.id + '">' + aux.nombre + '</option>');
                    });

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



////////////////////llenado de combos de Micronutrientes//////////////////////
//    $.getJSON(Routing.generate('get_all_establecimientos'),
//            function (data) {
////               alert("entre a deptos de shcp");
//                $.each(data.establecimientos, function (indice, aux) {
//                    $('#establecimientos').append('<option value="' + aux.id + '">' + aux.nombre + '</option>');
//                });
//            });
//
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
//        $.getJSON(Routing.generate('get_all_sub_establecimientos') + '/' + $('#tipo_diag').val(),
//                function (data) {
//                    $('subestablecimientos').append('<option value="0" selected="true">Seleccione...</option>');
////                    alert("entre a municipios de shcp");
//                    $.each(data.subestablecimientos, function (indice, aux) {
//                        $('#tipoestablecimientos').append('<option value="' + aux.id + '">' + aux.nombre + '</option>');
//                    });
//
//                });
//    });





});

//url = Routing.generate('total_ingresos') + '/rpt_resumen_ingresos/XLS/' + $('#fecha_inicio').val() + '/' + $('#fecha_fin').val();