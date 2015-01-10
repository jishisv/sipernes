$(document).ready(function () {
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

    $("#id_reporte_prueba").click(function () {
        alert('entro aqui 2');
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
                alert('entro aqui 5');
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


            alert('entro aqui 7');
            alert(Routing.generate('prueba2') + '/prueba2/PDF/' + "Hola" + '/' + "Reporte_Nuevo");
//            if ($('#municipios').val() == 'Seleccione..')
//                alert('Debe seleccionar un municipio');
//
//            // url = Routing.generate('total_ingresos') + '/rpt_resumen_ingresos/PDF/' + $('#fecha_inicio').val() + '/' + $('#fecha_fin').val();
//            // url = Routing.generate('infor_abortos') + '/rpt_inf_abortos/PDF/' + $('#fecha_inicio').val() + '/' + $('#fecha_fin').val() + '/' + $('#municipios').val() + '/' + "Informe de abortos";
//            else
            var url = Routing.generate('prueba2') + '/prueba2/PDF/' + "Hola" + '/' + "Reporte_Nuevo";
            alert('Entro saqui 8');
            window.open(url, '_blank');
            return false;
        }
        else {
            return false;
        }
    });

    $.getJSON(Routing.generate('get_Act'),
            function (data) {
//                alert("entre a deptos de shcp");
//                alert(Routing.generate('get_Act'));
                $.each(data.deptos, function (indice, aux) {
                    $('#deptos').append('<option value="' + aux.id + '">' + aux.nombreActividad + '</option>');
                });
            });


    $("#deptos").on('change', function (event) { // aqui el JSON });
        $('.select2-drop-mask option').each(function (index, val) {
            $(this).remove();
            /// $('#municipios').append('<option value="0" selected="true">Seleccione...</option>'); 
//            $('select2-drop-mask').select2({
//                selected: 'true',
//                width: '60%',
//                placeholder: 'Seleccione...'
////                allowClear: true
//            });

        });
        $.getJSON(Routing.generate('get_Subact') + '/' + $('#deptos').val(),
                function (data) {
                    $('.select2-drop-mask').append('<option value="0" selected="true">Seleccione...</option>');
//                    alert("entre a municipios de shcp");
                    $.each(data.municipios, function (indice, aux) {
                        $('.select2-drop-mask').append('<option value="' + aux.id + '">' + aux.nombreSubactividad + '</option>');
                    });

                });
    });



});

//url = Routing.generate('total_ingresos') + '/rpt_resumen_ingresos/XLS/' + $('#fecha_inicio').val() + '/' + $('#fecha_fin').val();