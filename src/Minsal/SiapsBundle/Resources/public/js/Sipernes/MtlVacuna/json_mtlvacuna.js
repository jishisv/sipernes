

$(document).ready(function() {
    
    $('#tipovacuna').select2({
        placeholder: 'Seleccione Fase de Vacunación... ',
        allowClear: true,
        width: '100%'
    });

    $('select[id$="_idTipoEsq"]').prepend('<option/>').val(function() {
        return $('[selected]', this).val();
    });
    $('select[id$="_idTipoEsq"]').select2({
        placeholder: 'Seleccione Vacuna Aplicada... ',
        allowClear: true,
        width: '100%'
    });

 

   //$('select[id$="_idIntervencion"]').attr('disabled', 'disabled');
   
    /*CARGAR PROTOCOLOS*/
      $.getJSON(Routing.generate('get_TipoVac'),
            function (data) {
                $.each(data.tipovacuna, function (indice, aux) {
                    $('#tipovacuna').append('<option value="' + aux.id + '">' + aux.nombreEsquemaVac + '</option>');
                });
            });


    
    /*CARGAR SUBPROTOCOLOS*/
    $('#tipovacuna').change(function() {
        $('select[id$="_idTipoEsq"]').children().remove();
        $('select[id$="_idTipoEsq"]').append('<option></option>');
        $('select[id$="_idTipoEsq"]').select2({
            placeholder: 'Seleccione Vacuna Aplicada...',
            allowClear: true,
            width: '100%'
        });
        
        if ($('#tipovacuna').select2('val') == '') {
            $('select[id$="_idTipoEsq"]').attr('enabled', 'enabled');
        } else {
            $.getJSON(Routing.generate('get_Vac') + '/' + $('#tipovacuna').select2('val'),
                    function(data) {
                        $.each(data.vacuna, function(indice, aux) {
                            $('select[id$="_idTipoEsq"]').append($('<option>', {value: aux.id, text: aux.nombreTipoEsq}));
                        });
                        $('#tipovacuna').removeAttr('enabled');
                        $('select[id$="_idTipoEsq"]').attr('enabled', 'enabled');
                    });

        }

    });

    if (($('#tipovacuna').select2('val') == 68 && $('#subprotocolo').select2('val') == "") || $('#protocolo').select2('val') == '') {
        $('#actividad').select2('val', 68);
        $('select[id$="_idTipoEsq"]').children().remove();
        $('select[id$="_idTipoEsq"]').append('<option></option>');
        $('select[id$="_idTipoEsq"]').select2({
            placeholder: 'Seleccione Vacuna Aplicada...',
            allowClear: true,
            width: '100%'
        });
        $.getJSON(Routing.generate('get_Vac') + '/' + $('#tipovacuna').select2('val'),
                function(data) {
                    $.each(data.vacuna, function(indice, aux) {
                        $('select[id$="_idTipoEsq"]').append($('<option>', {value: aux.id, text: aux.nombreTipoEsq}));
                    });
                    $('#tipovacuna').removeAttr('disabled');
                });

    }
    

  

});


