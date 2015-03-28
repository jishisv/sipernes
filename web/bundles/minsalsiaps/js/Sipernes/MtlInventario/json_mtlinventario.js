

$(document).ready(function() {
    
    $('#componente').select2({
        placeholder: 'Seleccione tipo de aplicacion... ',
        allowClear: true,
        width: '100%'
    });

    $('select[id$="_idComponente"]').prepend('<option/>').val(function() {
        return $('[selected]', this).val();
    });
    $('select[id$="_idComponente"]').select2({
        placeholder: 'Seleccione componente... ',
        allowClear: true,
        width: '100%'
    });

 

   //$('select[id$="_idIntervencion"]').attr('disabled', 'disabled');
   
    /*CARGAR TIPO DE APLICACION*/
      $.getJSON(Routing.generate('get_TipoAplic'),
            function (data) {
                $.each(data.tipoaplicacion, function (indice, aux) {
                    $('#componente').append('<option value="' + aux.id + '">' + aux.nombreComponente1 + '</option>');
                });
            });


    
    /*CARGAR COMPONENTE*/
    $('#componente').change(function() {
        $('select[id$="_idComponente"]').children().remove();
        $('select[id$="_idComponente"]').append('<option></option>');
        $('select[id$="_idComponente"]').select2({
            placeholder: 'Seleccione componente...',
            allowClear: true,
            width: '100%'
        });
        
        if ($('#componente').select2('val') == '') {
            $('select[id$="_idComponente"]').attr('enabled', 'enabled');
        } else {
            $.getJSON(Routing.generate('get_Compon') + '/' + $('#componente').select2('val'),
                    function(data) {
                        $.each(data.componente, function(indice, aux) {
                            $('select[id$="_idComponente"]').append($('<option>', {value: aux.id, text: aux.nombreComponente}));
                        });
                        $('#componente').removeAttr('enabled');
                        $('select[id$="_idComponente"]').attr('enabled', 'enabled');
                    });

        }

    });

    if (($('#componente').select2('val') == 68 && $('#subprotocolo').select2('val') == "") || $('#protocolo').select2('val') == '') {
        $('#actividad').select2('val', 68);
        $('select[id$="_idComponente"]').children().remove();
        $('select[id$="_idComponente"]').append('<option></option>');
        $('select[id$="_idComponente"]').select2({
            placeholder: 'Seleccione componente...',
            allowClear: true,
            width: '100%'
        });
        $.getJSON(Routing.generate('get_Compon') + '/' + $('#componente').select2('val'),
                function(data) {
                    $.each(data.componente, function(indice, aux) {
                        $('select[id$="_idComponente"]').append($('<option>', {value: aux.id, text: aux.nombreComponente}));
                    });
                    $('#tipoaplicacion').removeAttr('disabled');
                });

    }
    

  

});


