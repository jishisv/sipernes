
$(document).ready(function() {
  
   $('#tipoaplicacion').prepend('<option/>').val(function() {
        return $('[selected]', this).val();
    });
    $('#tipoaplicacion').select2({
        placeholder: 'Seleccione tipo de aplicación... ',
        allowClear: true,
        width: '100%'
    });
    
    $('#tipoesquema').select2({
        placeholder: 'Seleccione fase de aplicación... ',
        allowClear: true,
        width: '100%'
    });

    $('select[id$="_idTipoEsq"]').prepend('<option/>').val(function() {
        return $('[selected]', this).val();
    });
    $('select[id$="_idTipoEsq"]').select2({
        placeholder: 'Seleccione aplicación... ',
        allowClear: true,
        width: '100%'
    });

 

   //$('select[id$="_idIntervencion"]').attr('disabled', 'disabled');
   
    /*CARGAR TIPO DE APLICACION*/
      $.getJSON(Routing.generate('get_TipoAplicacion'),
            function (data) {
                $.each(data.tipoaplicacion, function (indice, aux) {
                    $('#tipoaplicacion').append('<option value="' + aux.id + '">' + aux.nombreComponente1 + '</option>');
                });
            });


    
    /*CARGAR APLICACION*/
    $('#tipoaplicacion').change(function() {
        $('#tipoesquema').children().remove();
        $('#tipoesquema').append('<option></option>');
        $('#tipoesquema').select2({
            placeholder: 'Seleccione fase de aplicación...',
            allowClear: true,
            width: '100%'
        });
        $('select[id$="_idTipoEsq"]').children().remove();
        $('select[id$="_idTipoEsq"]').append('<option></option>');
        $('select[id$="_idTipoEsq"]').select2({
            placeholder: 'Seleccione aplicación...',
            allowClear: true,
            width: '100%'
        });
        if ($('#tipoaplicacion').select2('val') == '') {
            $('#tipoesquema').attr('enabled', 'enabled');
        } else {
            $.getJSON(Routing.generate('get_Aplicacion') + '/' + $('#tipoaplicacion').select2('val'),
                    function(data) {
                        $.each(data.fases, function(indice, aux) {
                            $('#tipoesquema').append($('<option>', {value: aux.id, text: aux.nombreEsquemaVac}));
                        });
                        $('#tipoaplicacion').removeAttr('enabled');
                        $('#tipoesquema').attr('enabled', 'enabled');
                    });

        }

    });

    if (($('#tipoaplicacion').select2('val') == 68 && $('#subprotocolo').select2('val') == "") || $('#protocolo').select2('val') == '') {
        $('#actividad').select2('val', 68);
        $('#tipoesquema').children().remove();
        $('#tipoesquema').append('<option></option>');
        $('#tipoesquema').select2({
            placeholder: 'Seleccione fase de aplicación...',
            allowClear: true,
            width: '100%'
        });
        $.getJSON(Routing.generate('get_Aplicacion') + '/' + $('#tipoaplicacion').select2('val'),
                function(data) {
                    $.each(data.fases, function(indice, aux) {
                        $('#tipoesquema').append($('<option>', {value: aux.id, text: aux.nombreEsquemaVac}));
                    });
                    $('#tipoaplicacion').removeAttr('disabled');
                });

    }
    

    /*CARGAR COMPONENTE*/
    $('#tipoesquema').on('change', function(e) {
        $('select[id$="_idTipoEsq"]').children().remove();
        $('select[id$="_idTipoEsq"]').append('<option></option>');
        $('select[id$="_idTipoEsq"]').select2({
            placeholder: 'Seleccione aplicación...',
            allowClear: true,
            width: '100%'
        });
        if ($('#tipoesquema').select2('val') == '') {
            $('select[id$="_idTipoEsq"]').attr('enabled', 'enabled');
        } else {
            $.getJSON(Routing.generate('get_TipoComponente') + '/' + $('#tipoesquema').select2('val'),
                    function(data) {
                        $.each(data.tipocomponente, function(indice, aux) {
                            $('select[id$="_idTipoEsq"]').append($('<option>', {value: aux.id, text: aux.nombreTipoEsq}));
                        });
                        $('select[id$="_idTipoEsq"]').removeAttr('disabled');
			
                    });
        }

    }).focusout(function() {
        $('select[id$="_idTipoEsq"]').focus();
    });
  

});