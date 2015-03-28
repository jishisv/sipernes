

$(document).ready(function() {
    
    $('#protocolo').select2({
        placeholder: 'Seleccione Tipo de protocolo... ',
        allowClear: true,
        width: '100%'
    });

    $('select[id$="_idSubprotocolo"]').prepend('<option/>').val(function() {
        return $('[selected]', this).val();
    });
    $('select[id$="_idSubprotocolo"]').select2({
        placeholder: 'Seleccione Protocolo... ',
        allowClear: true,
        width: '100%'
    });

 

   //$('select[id$="_idIntervencion"]').attr('disabled', 'disabled');
   
    /*CARGAR CTLDOMINIOS*/
      $.getJSON(Routing.generate('get_CtlProtocolo'),
            function (data) {
                $.each(data.protocolo, function (indice, aux) {
                    $('#protocolo').append('<option value="' + aux.id + '">' + aux.nombreProtocolo + '</option>');
                });
            });


    
    /*CARGAR CTLCLASE*/
    $('#protocolo').change(function() {
        $('select[id$="_idSubprotocolo"]').children().remove();
        $('select[id$="_idSubprotocolo"]').append('<option></option>');
        $('select[id$="_idSubprotocolo"]').select2({
            placeholder: 'Seleccione Tipo de protocolo...',
            allowClear: true,
            width: '100%'
        });
        
        if ($('#protocolo').select2('val') == '') {
            $('select[id$="_idSubprotocolo"]').attr('enabled', 'enabled');
        } else {
            $.getJSON(Routing.generate('get_CtlSubprotocolo') + '/' + $('#protocolo').select2('val'),
                    function(data) {
                        $.each(data.subprotocolo, function(indice, aux) {
                            $('select[id$="_idSubprotocolo"]').append($('<option>', {value: aux.id, text: aux.nombreSubprotocolo}));
                        });
                        $('#protocolo').removeAttr('enabled');
                        $('select[id$="_idSubprotocolo"]').attr('enabled', 'enabled');
                    });

        }

    });

    if (($('#protocolo').select2('val') == 68 && $('#subprotocolo').select2('val') == "") || $('#protocolo').select2('val') == '') {
        $('#protocolo').select2('val', 68);
        $('select[id$="_idSubprotocolo"]').children().remove();
        $('select[id$="_idSubprotocolo"]').append('<option></option>');
        $('select[id$="_idSubprotocolo"]').select2({
            placeholder: 'Seleccione Protocolo...',
            allowClear: true,
            width: '100%'
        });
        $.getJSON(Routing.generate('get_CtlSubprotocolo') + '/' + $('#protocolo').select2('val'),
                function(data) {
                    $.each(data.subprotocolo, function(indice, aux) {
                        $('select[id$="_idSubprotocolo"]').append($('<option>', {value: aux.id, text: aux.nombreSubprotocolo}));
                    });
                    $('#protocolo').removeAttr('disabled');
                });

    }
    

  

});


