

$(document).ready(function() {
    
    $('#tipomicronutriente').select2({
        placeholder: 'Seleccione Fase de Micronutriente... ',
        allowClear: true,
        width: '100%'
    });

    $('select[id$="_idTipoEsqMic"]').prepend('<option/>').val(function() {
        return $('[selected]', this).val();
    });
    $('select[id$="_idTipoEsqMic"]').select2({
        placeholder: 'Seleccione Micronutriente Aplicado... ',
        allowClear: true,
        width: '100%'
    });

 

   //$('select[id$="_idIntervencion"]').attr('disabled', 'disabled');
   
    /*CARGAR PROTOCOLOS*/
      $.getJSON(Routing.generate('get_TipoMic'),
            function (data) {
                $.each(data.tipomicronutriente, function (indice, aux) {
                    $('#tipomicronutriente').append('<option value="' + aux.id + '">' + aux.nombreEsquemaMic + '</option>');
                });
            });


    
    /*CARGAR SUBPROTOCOLOS*/
    $('#tipomicronutriente').change(function() {
        $('select[id$="_idTipoEsqMic"]').children().remove();
        $('select[id$="_idTipoEsqMic"]').append('<option></option>');
        $('select[id$="_idTipoEsqMic"]').select2({
            placeholder: 'Seleccione Micronutriente Aplicado...',
            allowClear: true,
            width: '100%'
        });
        
        if ($('#tipomicronutriente').select2('val') == '') {
            $('select[id$="_idTipoEsqMic"]').attr('enabled', 'enabled');
        } else {
            $.getJSON(Routing.generate('get_Mic') + '/' + $('#tipomicronutriente').select2('val'),
                    function(data) {
                        $.each(data.micronutriente, function(indice, aux) {
                            $('select[id$="_idTipoEsqMic"]').append($('<option>', {value: aux.id, text: aux.nombreTipoEsqMic}));
                        });
                        $('#tipomicronutriente').removeAttr('enabled');
                        $('select[id$="_idTipoEsqMic"]').attr('enabled', 'enabled');
                    });

        }

    });

    if (($('#tipomicronutriente').select2('val') == 68 && $('#subprotocolo').select2('val') == "") || $('#protocolo').select2('val') == '') {
        $('#actividad').select2('val', 68);
        $('select[id$="_idTipoEsqMic"]').children().remove();
        $('select[id$="_idTipoEsqMic"]').append('<option></option>');
        $('select[id$="_idTipoEsqMic"]').select2({
            placeholder: 'Seleccione Micronutriente Aplicado...',
            allowClear: true,
            width: '100%'
        });
        $.getJSON(Routing.generate('get_Mic') + '/' + $('#tipomicronutriente').select2('val'),
                function(data) {
                    $.each(data.micronutriente, function(indice, aux) {
                        $('select[id$="_idTipoEsqMic"]').append($('<option>', {value: aux.id, text: aux.nombreTipoEsqMic}));
                    });
                    $('#tipomicronutriente').removeAttr('disabled');
                });

    }
    

  

});


