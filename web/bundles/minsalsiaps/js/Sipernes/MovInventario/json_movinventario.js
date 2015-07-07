

$(document).ready(function () {

    $('select[id$="_idInventario"]').select2({
        placeholder: 'Seleccione Componente... ',
        allowClear: true,
        width: '100%'
    });



    $('select[id$="_empleadoEnvio"]').select2({
        placeholder: 'Seleccione Empleado... ',
        allowClear: true,
        width: '100%'
    });

    $('select[id$="_empleadoRecivio"]').select2({
        placeholder: 'Seleccione Empleado... ',
        allowClear: true,
        width: '100%'
    });

    $.getJSON(Routing.generate('get_nombre_componente_inv'),
            function (data) {
                $('select[id$="_idInventario"]').empty();
                $.each(data.datoscomponente, function (indice, aux) {
                    $('select[id$="_idInventario"]').append('<option value="' + aux.id + '">' + aux.idComponente.nombreComponente + '</option>');
                });
            });

    ///////////////////llenado de combos de Empleado//////////////////////
    $.getJSON(Routing.generate('get_empleados_env_rec'),
            function (data) {
//              alert("entre a deptos de shcp");
                $.each(data.empleados, function (indice, aux) {
                    $('select[id$="_empleadoEnvio"]').append('<option value="' + aux.id + '">' + aux.idempleado + '</option>');
                });
                $.each(data.empleados, function (indice, aux) {
                    $('select[id$="_empleadoRecivio"]').append('<option value="' + aux.id + '">' + aux.idempleado + '</option>');
                });
            });




});


