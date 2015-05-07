

$(document).ready(function() {
    
    $('select[id$="_idInventario"]').select2({
        placeholder: 'Seleccione Componente... ',
        allowClear: true,
        width: '100%'
    });

    
   
   
      $.getJSON(Routing.generate('get_nombre_componente'),
            function (data) {
                $.each(data.datoscomponente, function (indice, aux) {
                    $('select[id$="_idInventario"]').append('<option value="' + aux.id + '">' + aux.idComponente.nombreComponente + '</option>');
                });
            });


      

});


