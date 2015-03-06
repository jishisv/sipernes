

$(document).ready(function() {
    
    $('#dominio').select2({
        placeholder: 'Seleccione Dominio... ',
        allowClear: true,
        width: '100%'
    });

    $('select[id$="_idClase"]').prepend('<option/>').val(function() {
        return $('[selected]', this).val();
    });
    $('select[id$="_idClase"]').select2({
        placeholder: 'Seleccione Clase... ',
        allowClear: true,
        width: '100%'
    });

 

   //$('select[id$="_idIntervencion"]').attr('disabled', 'disabled');
   
    /*CARGAR CTLDOMINIOS*/
      $.getJSON(Routing.generate('get_CtlDominio'),
            function (data) {
                $.each(data.dominio, function (indice, aux) {
                    $('#dominio').append('<option value="' + aux.id + '">' + aux.nombreDominio + '</option>');
                });
            });


    
    /*CARGAR CTLCLASE*/
    $('#dominio').change(function() {
        $('select[id$="_idClase"]').children().remove();
        $('select[id$="_idClase"]').append('<option></option>');
        $('select[id$="_idClase"]').select2({
            placeholder: 'Seleccione Dominio...',
            allowClear: true,
            width: '100%'
        });
        
        if ($('#dominio').select2('val') == '') {
            $('select[id$="_idClase"]').attr('enabled', 'enabled');
        } else {
            $.getJSON(Routing.generate('get_CtlClase') + '/' + $('#dominio').select2('val'),
                    function(data) {
                        $.each(data.clase, function(indice, aux) {
                            $('select[id$="_idClase"]').append($('<option>', {value: aux.id, text: aux.nombreClase}));
                        });
                        $('#dominio').removeAttr('enabled');
                        $('select[id$="_idClase"]').attr('enabled', 'enabled');
                    });

        }

    });

    if (($('#dominio').select2('val') == 68 && $('#subprotocolo').select2('val') == "") || $('#protocolo').select2('val') == '') {
        $('#dominio').select2('val', 68);
        $('select[id$="_idClase"]').children().remove();
        $('select[id$="_idClase"]').append('<option></option>');
        $('select[id$="_idClase"]').select2({
            placeholder: 'Seleccione Clase...',
            allowClear: true,
            width: '100%'
        });
        $.getJSON(Routing.generate('get_CtlClase') + '/' + $('#dominio').select2('val'),
                function(data) {
                    $.each(data.clase, function(indice, aux) {
                        $('select[id$="_idClase"]').append($('<option>', {value: aux.id, text: aux.nombreClase}));
                    });
                    $('#dominio').removeAttr('disabled');
                });

    }
    

  

});


