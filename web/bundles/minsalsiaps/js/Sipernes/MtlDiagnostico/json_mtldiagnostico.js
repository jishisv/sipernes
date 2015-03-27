

$(document).ready(function() {
    

    $('#dominio').prepend('<option/>').val(function() {
        return $('[selected]', this).val();
    });
    $('#dominio').select2({
        placeholder: 'Seleccione Dominio... ',
        allowClear: true,
        width: '100%'
    });

    $('#clase').select2({
        placeholder: 'Seleccione Clase... ',
        allowClear: true,
        width: '100%'
    });

    $('select[id$="_idCtlDiag"]').prepend('<option/>').val(function() {
        return $('[selected]', this).val();
    });
    $('select[id$="_idCtlDiag"]').select2({
        placeholder: 'Seleccione Diagnostico... ',
        allowClear: true,
        width: '100%'
    });

   //$('select[id$="_idIntervencion"]').attr('disabled', 'disabled');
   
    /*CARGAR DOMINIOS*/
      $.getJSON(Routing.generate('get_Dominio'),
            function (data) {
                $.each(data.dominio, function (indice, aux) {
                    $('#dominio').append('<option value="' + aux.id + '">' + aux.nombreDominio + '</option>');
                });
            });


    
    /*CARGAR CLASES*/
    $('#dominio').change(function() {
        $('#clase').children().remove();
        $('#clase').append('<option></option>');
        $('#clase').select2({
            placeholder: 'Seleccione Dominio...',
            allowClear: true,
            width: '100%'
        });
        $('select[id$="_idCtlDiag"]').children().remove();
        $('select[id$="_idCtlDiag"]').append('<option></option>');
        $('select[id$="_idCtlDiag"]').select2({
            placeholder: 'Seleccione Diagnostico...',
            allowClear: true,
            width: '100%'
        });
        if ($('#dominio').select2('val') == '') {
            $('#clase').attr('enabled', 'enabled');
        } else {
            $.getJSON(Routing.generate('get_Clase') + '/' + $('#dominio').select2('val'),
                    function(data) {
                        $.each(data.clase, function(indice, aux) {
                            $('#clase').append($('<option>', {value: aux.id, text: aux.nombreClase}));
                        });
                        $('#dominio').removeAttr('enabled');
                        $('#clase').attr('enabled', 'enabled');
                    });

        }

    });

    if (($('#dominio').select2('val') == 68 && $('#subprotocolo').select2('val') == "") || $('#protocolo').select2('val') == '') {
        $('#dominio').select2('val', 68);
        $('#clase').children().remove();
        $('#clase').append('<option></option>');
        $('#clase').select2({
            placeholder: 'Seleccione Clase...',
            allowClear: true,
            width: '100%'
        });
        $.getJSON(Routing.generate('get_Clase') + '/' + $('#dominio').select2('val'),
                function(data) {
                    $.each(data.clase, function(indice, aux) {
                        $('#clase').append($('<option>', {value: aux.id, text: aux.nombreClase}));
                    });
                    $('#dominio').removeAttr('disabled');
                });

    }
    

 

    /*CARGAR DIAGNOSTICOS*/
    $('#clase').on('change', function(e) {
        $('select[id$="_idCtlDiag"]').children().remove();
        $('select[id$="_idCtlDiag"]').append('<option></option>');
        $('select[id$="_idCtlDiag"]').select2({
            placeholder: 'Seleccione Intervención...',
            allowClear: true,
            width: '100%'
        });
        if ($('#clase').select2('val') == '') {
            $('select[id$="_idCtlDiag"]').attr('disabled', 'disabled');
        } else {
            $.getJSON(Routing.generate('get_Diagnostico') + '/' + $('#clase').select2('val'),
                    function(data) {
                        $.each(data.diagnostico, function(indice, aux) {
                            $('select[id$="_idCtlDiag"]').append($('<option>', {value: aux.id, text: aux.nombreDiagnostico}));
                        });
                        $('select[id$="_idCtlDiag"]').removeAttr('disabled');
                    });
        }

    }).focusout(function() {
        $('select[id$="_idCtlDiag"]').focus();
    });

  

});


