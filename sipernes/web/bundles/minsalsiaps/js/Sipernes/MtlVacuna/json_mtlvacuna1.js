
$(document).ready(function() {
    
    $('#tipoaplicacion').select2({
        placeholder: 'Seleccione tipo de aplicacion... ',
        allowClear: true,
        width: '100%'
    });

    $('select[id$="_idEsquemaVac"]').prepend('<option/>').val(function() {
        return $('[selected]', this).val();
    });
    $('select[id$="_idEsquemaVac"]').select2({
        placeholder: 'Seleccione fase de aplicación... ',
        allowClear: true,
        width: '100%'
    });

 

   //$('select[id$="_idIntervencion"]').attr('disabled', 'disabled');
   
    /*CARGAR TIPO DE APLICACION*/
      $.getJSON(Routing.generate('get_TipoAplic'),
            function (data) {
                $.each(data.tipoaplicacion, function (indice, aux) {
                    $('#tipoaplicacion').append('<option value="' + aux.id + '">' + aux.nombreComponente1 + '</option>');
                });
            });


    
    /*CARGAR APLICACION*/
    $('#tipoaplicacion').change(function() {
        $('select[id$="_idEsquemaVac"]').children().remove();
        $('select[id$="_idEsquemaVac"]').append('<option></option>');
        $('select[id$="_idEsquemaVac"]').select2({
            placeholder: 'Seleccione fase de aplicacion...',
            allowClear: true,
            width: '100%'
        });
        
        if ($('#tipoaplicacion').select2('val') == '') {
            $('select[id$="_idEsquemaVac"]').attr('enabled', 'enabled');
        } else {
            $.getJSON(Routing.generate('get_Aplic') + '/' + $('#tipoaplicacion').select2('val'),
                    function(data) {
                        $.each(data.fases, function(indice, aux) {
                            $('select[id$="_idEsquemaVac"]').append($('<option>', {value: aux.id, text: aux.nombreEsquemaVac}));
                        });
                        $('#tipoaplicacion').removeAttr('enabled');
                        $('select[id$="_idEsquemaVac"]').attr('enabled', 'enabled');
                    });

        }

    });

    if (($('#tipoaplicacion').select2('val') == 68 && $('#subprotocolo').select2('val') == "") || $('#protocolo').select2('val') == '') {
        $('#actividad').select2('val', 68);
        $('select[id$="_idEsquemaVac"]').children().remove();
        $('select[id$="_idEsquemaVac"]').append('<option></option>');
        $('select[id$="_idEsquemaVac"]').select2({
            placeholder: 'Seleccione fase de aplicacion...',
            allowClear: true,
            width: '100%'
        });
        $.getJSON(Routing.generate('get_Aplic') + '/' + $('#tipoaplicacion').select2('val'),
                function(data) {
                    $.each(data.fases, function(indice, aux) {
                        $('select[id$="_idEsquemaVac"]').append($('<option>', {value: aux.id, text: aux.nombreEsquemaVac}));
                    });
                    $('#tipoaplicacion').removeAttr('disabled');
                });

    }
    

  

});