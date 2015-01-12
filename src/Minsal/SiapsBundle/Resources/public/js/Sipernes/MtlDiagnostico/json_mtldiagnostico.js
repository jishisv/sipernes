$(document).ready(function () {
    $('#dominio').select2({
        width: '60%',
        placeholder: 'Seleccione Dominio ',
        allowClear: true
    });



    $('#clase').prepend('<option/>').val(function() {
        return $('[selected]', this).val();
    });
    $('#clase').select2({
        placeholder: 'Seleccione Clase',
        allowClear: true,
        width: '100%'
    });

 
    
     $('select[id$="_idCtlDiag"]').prepend('<option/>').val(function() {
        return $('[selected]', this).val();
    });
    $('select[id$="_idCtlDiag"]').select2({
        placeholder: 'Seleccione Diagnóstico',
        allowClear: true,
        width: '100%'
    });
    

    $.getJSON(Routing.generate('get_Dominio'),
            function (data) {
//                alert("entre a deptos de shcp");
//                alert(Routing.generate('get_Act'));
                $.each(data.dominio, function (indice, aux) {
                    $('#dominio').append('<option value="' + aux.id + '">' + aux.nombreDominio + '</option>');
                });
            });


    $("#dominio").on('change', function (event) { // aqui el JSON });
        $('#clase option').each(function (index, val) {
            $(this).remove();
            /// $('#municipios').append('<option value="0" selected="true">Seleccione...</option>'); 
//            $('select2-drop-mask').select2({
//                selected: 'true',
//                width: '60%',
//                placeholder: 'Seleccione...'
////                allowClear: true
//            });

        });
        $.getJSON(Routing.generate('get_Clase') + '/' + $('#dominio').val(),
                function (data) {
                    $('#clase').append('<option value="0" selected="true">Seleccione...</option>');
//                    alert("entre a municipios de shcp");
                    $.each(data.clase, function (indice, aux) {
                        $('#clase').append('<option value="' + aux.id + '">' + aux.nombreClase + '</option>');
                    });

                });
    });


    
    
     $("#clase").on('change', function (event) { // aqui el JSON });
        $('select[id$="_idCtlDiag"] option').each(function (index, val) {
            $(this).remove();
            /// $('#municipios').append('<option value="0" selected="true">Seleccione...</option>'); 
//            $('select2-drop-mask').select2({
//                selected: 'true',
//                width: '60%',
//                placeholder: 'Seleccione...'
////                allowClear: true
//            });

        });
        $.getJSON(Routing.generate('get_Diagnostico') + '/' + $('#clase').val(),
                function (data) {
                    $('select[id$="_idCtlDiag"]').append('<option value="0" selected="true">Seleccione...</option>');
//                    alert("entre a municipios de shcp");
                    $.each(data.diagnostico, function (indice, aux) {
                        $('select[id$="_idCtlDiag"]').append('<option value="' + aux.id + '">' + aux.nombreDiagnostico + '</option>');
                    });

                });
    });

});

//url = Routing.generate('total_ingresos') + '/rpt_resumen_ingresos/XLS/' + $('#fecha_inicio').val() + '/' + $('#fecha_fin').val();