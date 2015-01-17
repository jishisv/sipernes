$(document).ready(function () {
    $('#actividad').select2({
        width: '60%',
        placeholder: 'Seleccione Tipo de Actividad ',
        allowClear: true
    });



    $('select[id$="_idSubactividad"]').prepend('<option/>').val(function() {
        return $('[selected]', this).val();
    });
    $('select[id$="_idSubactividad"]').select2({
        placeholder: 'Seleccione Actividad Realizada',
        allowClear: true,
        width: '100%'
    });

    

    $.getJSON(Routing.generate('get_Act'),
            function (data) {
//                alert("entre a deptos de shcp");
//                alert(Routing.generate('get_Act'));
                $.each(data.actividad, function (indice, aux) {
                    $('#actividad').append('<option value="' + aux.id + '">' + aux.nombreActividad + '</option>');
                });
            });


    $("#actividad").on('change', function (event) { // aqui el JSON });
        $('select[id$="_idSubactividad"] option').each(function (index, val) {
            $(this).remove();
            /// $('#municipios').append('<option value="0" selected="true">Seleccione...</option>'); 
//            $('select2-drop-mask').select2({
//                selected: 'true',
//                width: '60%',
//                placeholder: 'Seleccione...'
////                allowClear: true
//            });

        });
        $.getJSON(Routing.generate('get_Subact') + '/' + $('#actividad').val(),
                function (data) {
                    $('select[id$="_idSubactividad"]').append('<option value="0" selected="true">Seleccione...</option>');
//                    alert("entre a municipios de shcp");
                    $.each(data.subactividad, function (indice, aux) {
                        $('select[id$="_idSubactividad"]').append('<option value="' + aux.id + '">' + aux.nombreSubactividad + '</option>');
                    });

                });
    });



});

//url = Routing.generate('total_ingresos') + '/rpt_resumen_ingresos/XLS/' + $('#fecha_inicio').val() + '/' + $('#fecha_fin').val();