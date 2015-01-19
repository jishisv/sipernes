

$(document).ready(function() {
    

    $('#protocolo').prepend('<option/>').val(function() {
        return $('[selected]', this).val();
    });
    $('#protocolo').select2({
        placeholder: 'Seleccione Tipo de Protocolo... ',
        allowClear: true,
        width: '100%'
    });

    $('#subprotocolo').select2({
        placeholder: 'Seleccione Protocolo... ',
        allowClear: true,
        width: '100%'
    });

    $('select[id$="_idIntervencion"]').prepend('<option/>').val(function() {
        return $('[selected]', this).val();
    });
    $('select[id$="_idIntervencion"]').select2({
        placeholder: 'Seleccione Intervención... ',
        allowClear: true,
        width: '100%'
    });

   //$('select[id$="_idIntervencion"]').attr('disabled', 'disabled');
   
    /*CARGAR PROTOCOLOS*/
      $.getJSON(Routing.generate('get_Protocolo'),
            function (data) {
                $.each(data.protocolo, function (indice, aux) {
                    $('#protocolo').append('<option value="' + aux.id + '">' + aux.nombreProtocolo + '</option>');
                });
            });


    
    /*CARGAR SUBPROTOCOLOS*/
    $('#protocolo').change(function() {
        $('#subprotocolo').children().remove();
        $('#subprotocolo').append('<option></option>');
        $('#subprotocolo').select2({
            placeholder: 'Seleccione Protocolo...',
            allowClear: true,
            width: '100%'
        });
        $('select[id$="_idIntervencion"]').children().remove();
        $('select[id$="_idIntervencion"]').append('<option></option>');
        $('select[id$="_idIntervencion"]').select2({
            placeholder: 'Seleccione Intervención...',
            allowClear: true,
            width: '100%'
        });
        if ($('#protocolo').select2('val') == '') {
            $('#subprotocolo').attr('enabled', 'enabled');
        } else {
            $.getJSON(Routing.generate('get_Subprotocolo') + '/' + $('#protocolo').select2('val'),
                    function(data) {
                        $.each(data.subprotocolo, function(indice, aux) {
                            $('#subprotocolo').append($('<option>', {value: aux.id, text: aux.nombreSubprotocolo}));
                        });
                        $('#protocolo').removeAttr('enabled');
                        $('#subprotocolo').attr('enabled', 'enabled');
                    });

        }

    });

    if (($('#protocolo').select2('val') == 68 && $('#subprotocolo').select2('val') == "") || $('#protocolo').select2('val') == '') {
        $('#protocolo').select2('val', 68);
        $('#subprotocolo').children().remove();
        $('#subprotocolo').append('<option></option>');
        $('#subprotocolo').select2({
            placeholder: 'Seleccione Protocolo...',
            allowClear: true,
            width: '100%'
        });
        $.getJSON(Routing.generate('get_Subprotocolo') + '/' + $('#protocolo').select2('val'),
                function(data) {
                    $.each(data.subprotocolo, function(indice, aux) {
                        $('#subprotocolo').append($('<option>', {value: aux.id, text: aux.nombreSubprotocolo}));
                    });
                    $('#protocolo').removeAttr('disabled');
                });

    }
    

 

    /*CARGAR INTERVENCIONES*/
    $('#subprotocolo').on('change', function(e) {
        $('select[id$="_idIntervencion"]').children().remove();
        $('select[id$="_idIntervencion"]').append('<option></option>');
        $('select[id$="_idIntervencion"]').select2({
            placeholder: 'Seleccione Intervención...',
            allowClear: true,
            width: '100%'
        });
        if ($('#subprotocolo').select2('val') == '') {
            $('select[id$="_idIntervencion"]').attr('disabled', 'disabled');
        } else {
            $.getJSON(Routing.generate('get_Intervencion') + '/' + $('#subprotocolo').select2('val'),
                    function(data) {
                        $.each(data.intervencion, function(indice, aux) {
                            $('select[id$="_idIntervencion"]').append($('<option>', {value: aux.id, text: aux.descripcionInterven}));
                        });
                        $('select[id$="_idIntervencion"]').removeAttr('disabled');
                    });
        }

    }).focusout(function() {
        $('select[id$="_idIntervencion"]').focus();
    });

  

});


