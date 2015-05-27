

$(document).ready(function() {
    
    $('#actividad').select2({
        placeholder: 'Seleccione Tipo de Actividad... ',
        allowClear: true,
        width: '100%'
    });

    $('select[id$="_idSubactividad"]').prepend('<option/>').val(function() {
        return $('[selected]', this).val();
    });
    $('select[id$="_idSubactividad"]').select2({
        placeholder: 'Seleccione Actividad... ',
        allowClear: true,
        width: '100%'
    });
    if($('select[id$="_idSubactividad"]').val() != 0){
  /*CARGAR Actividad*/
  alert ("entre al if");
 
      $.getJSON(Routing.generate('get_actividad_padre') + '/' + $('select[id$="_idSubactividad"]').select2('val'),
            function (data) {
              
             var pac;   
               alert("entre");
                $.each(data.datosactividad, function (indice, aux) {
                
                $('#actividad').append('<option value="' + aux.id + '">' + aux.idSubactividad.idActividad.nombreActividad + '</option>');
                });
            });
        }else{

   //$('select[id$="_idIntervencion"]').attr('disabled', 'disabled');
   
    /*CARGAR PROTOCOLOS*/
      $.getJSON(Routing.generate('get_Act'),
            function (data) {
                $.each(data.actividad, function (indice, aux) {
                    $('#actividad').append('<option value="' + aux.id + '">' + aux.nombreActividad + '</option>');
                });
            });
        }

    
    /*CARGAR SUBPROTOCOLOS*/
    $('#actividad').change(function() {
        
        $('select[id$="_idSubactividad"]').children().remove();
        $('select[id$="_idSubactividad"]').append('<option></option>');
        $('select[id$="_idSubactividad"]').select2({
            placeholder: 'Seleccione Tipo de Actividad...',
            allowClear: true,
            width: '100%'
        });
        
        if ($('#actividad').select2('val') == '') {
            $('select[id$="_idSubactividad"]').attr('enabled', 'enabled');
        } else {
            $.getJSON(Routing.generate('get_Subact') + '/' + $('#actividad').select2('val'),
                    function(data) {
                        $.each(data.subactividad, function(indice, aux) {
                            $('select[id$="_idSubactividad"]').append($('<option>', {value: aux.id, text: aux.nombreSubactividad}));
                        });
                        $('#actividad').removeAttr('enabled');
                        $('select[id$="_idSubactividad"]').attr('enabled', 'enabled');
                    });

        }

    });

    if (($('#actividad').select2('val') == 68 && $('#subprotocolo').select2('val') == "") || $('#protocolo').select2('val') == '') {
        $('#actividad').select2('val', 68);
        $('select[id$="_idSubactividad"]').children().remove();
        $('select[id$="_idSubactividad"]').append('<option></option>');
        $('select[id$="_idSubactividad"]').select2({
            placeholder: 'Seleccione Actividad...',
            allowClear: true,
            width: '100%'
        });
        $.getJSON(Routing.generate('get_Subact') + '/' + $('#actividad').select2('val'),
                function(data) {
                    $.each(data.subactividad, function(indice, aux) {
                        $('select[id$="_idSubactividad"]').append($('<option>', {value: aux.id, text: aux.nombreSubactividad}));
                    });
                    $('#actividad').removeAttr('disabled');
                });

    }
   
    $('select[id$="_idSubactividad"]').change(function() {
         $(this).remove();
        $('select[id$="_idSubactividad"]').children().remove();
        $('select[id$="_idSubactividad"]').append('<option></option>');
        $('select[id$="_idSubactividad"]').select2({
            placeholder: 'Seleccione Tipo de Actividad...',
            allowClear: true,
            width: '100%'
        });
       /*CARGAR PROTOCOLOS*/
      $.getJSON(Routing.generate('get_Act'),
            function (data) {
                 $(this).remove();
                $.each(data.actividad, function (indice, aux) {
                    $('#actividad').append('<option value="' + aux.id + '">' + aux.nombreActividad + '</option>');
                });
            });
        
 
        
   });

    
  

});


