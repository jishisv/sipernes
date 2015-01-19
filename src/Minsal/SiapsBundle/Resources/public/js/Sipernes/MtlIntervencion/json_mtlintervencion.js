$(document).ready(function () {
    $('#protocolo').select2({
        width: '60%',
        placeholder: 'Seleccione Tipo de Protocolo ',
        allowClear: true
    });



    $('#subprotocolo').prepend('<option/>').val(function() {
        return $('[selected]', this).val();
    });
    $('#subprotocolo').select2({
        placeholder: 'Seleccione Protocolo',
        allowClear: true,
        width: '100%'
    });

 
    
     $('select[id$="_idIntervencion"]').prepend('<option/>').val(function() {
        return $('[selected]', this).val();
    });
    $('select[id$="_idIntervencion"]').select2({
        placeholder: 'Seleccione Intervención',
        allowClear: true,
        width: '100%'
    });
    

    $.getJSON(Routing.generate('get_Protocolo'),
            function (data) {
//                alert("entre a deptos de shcp");
//                alert(Routing.generate('get_Act'));
                $.each(data.protocolo, function (indice, aux) {
                    $('#protocolo').append('<option value="' + aux.id + '">' + aux.nombreProtocolo + '</option>');
                });
            });


    $("#protocolo").on('change', function (event) { // aqui el JSON });
        $('#subprotocolo option').each(function (index, val) {
            $(this).remove();
            /// $('#municipios').append('<option value="0" selected="true">Seleccione...</option>'); 
//            $('select2-drop-mask').select2({
//                selected: 'true',
//                width: '60%',
//                placeholder: 'Seleccione...'
////                allowClear: true
//            });

        });
        $.getJSON(Routing.generate('get_Subprotocolo') + '/' + $('#protocolo').val(),
                function (data) {
                    $('#subprotocolo').append('<option value="0" selected="true">Seleccione...</option>');
//                    alert("entre a municipios de shcp");
                    $.each(data.subprotocolo, function (indice, aux) {
                        $('#subprotocolo').append('<option value="' + aux.id + '">' + aux.nombreSubprotocolo + '</option>');
                    });

                });
    });


    
    
     $("#subprotocolo").on('change', function (event) { // aqui el JSON });
        $('select[id$="_idIntervencion"] option').each(function (index, val) {
            $(this).remove();
            /// $('#municipios').append('<option value="0" selected="true">Seleccione...</option>'); 
//            $('select2-drop-mask').select2({
//                selected: 'true',
//                width: '60%',
//                placeholder: 'Seleccione...'
////                allowClear: true
//            });

        });
        $.getJSON(Routing.generate('get_Intervencion') + '/' + $('#subprotocolo').val(),
                function (data) {
                    $('select[id$="_idIntervencion"]').append('<option value="0" selected="true">Seleccione...</option>');
//                    alert("entre a municipios de shcp");
                    $.each(data.intervencion, function (indice, aux) {
                        $('select[id$="_idIntervencion"]').append('<option value="' + aux.id + '">' + aux.descripcionInterven + '</option>');
                    });

                });
    });

});

//url = Routing.generate('total_ingresos') + '/rpt_resumen_ingresos/XLS/' + $('#fecha_inicio').val() + '/' + $('#fecha_fin').val();