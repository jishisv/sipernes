$(document).ready(function () {
    $(":submit").click(function () {
        if (!$('input:checkbox[name*="groups"]').is(':checked')) {
            $("body").append('<div id="dialog-message"></div>');
            $("#dialog-message").empty();
            $("#dialog-message").append('<p><span class="glyphicon glyphicon-exclamation-sign"></span> Debe de seleccionar un rol para el usuario</p>');
            $("#dialog-message").dialog({
                dialogClass: "dialog-error",
                modal: true,
                title: 'Grupo no seleccionado',
                width: 500,
                buttons: {
                    Aceptar: function () {
                        $(this).dialog("close");
                    }
                }
            });
            return false;
        }
//        validacion para entrada de datos opcion ingreso usuario
//        alert(vacio($('input:text[name*="lastname"]').val()));
        if ($('input:text[name*="firstname"]').val() === '' || vacioP($('input:text[name*="firstname"]').val())) {
            $("body").append('<div id="dialog-message"></div>');
            $("#dialog-message").empty();
            $("#dialog-message").append('<p><span class="glyphicon glyphicon-exclamation-sign"></span> Ingrese los nombres del usuario</br>No debe iniciar con espacion en blanco</p>');
            $("#dialog-message").dialog({
                dialogClass: "dialog-error",
                modal: true,
                title: 'Error',
                width: 500,
                buttons: {
                    Aceptar: function () {
                        $(this).dialog("close");
                    }
                }
            });
            return false;
        }

        if ($('input:text[name*="lastname"]').val() === '' || vacioP($('input:text[name*="lastname"]').val())) {
            $("body").append('<div id="dialog-message"></div>');
            $("#dialog-message").empty();
            $("#dialog-message").append('<p><span class="glyphicon glyphicon-exclamation-sign"></span> Ingrese los apellidos del usuario</br>No debe iniciar con espacio en blanco</p>');
            $("#dialog-message").dialog({
                dialogClass: "dialog-error",
                modal: true,
                title: 'Error',
                width: 500,
                buttons: {
                    Aceptar: function () {
                        $(this).dialog("close");
                    }
                }
            });
            return false;
        }

//        alert($('input:text[name*="username"]').val())
//        alert(validatePass($('input:text[name*="username"]').val()));
//        if (validatePass($('input:text[name*="username"]').val())) {
//            $("body").append('<div id="dialog-message"></div>');
//            $("#dialog-message").empty();
//            $("#dialog-message").append('<p><span class="glyphicon glyphicon-exclamation-sign"></span> Ingrese el nombre de usuario, puede tener por lo menos un digito y </br>un alfanumérico, y no  puede contener caracteres espaciales</p>');
//            $("#dialog-message").dialog({
//                dialogClass: "dialog-error",
//                modal: true,
//                title: 'Error',
//                width: 500,
//                buttons: {
//                    Aceptar: function () {
//                        $(this).dialog("close");
//                    }
//                }
//            });
//            return false;
//        }

//        if ($('input:text[name*="plainPassword"]').val() === ''){// || validatePass($('input:password[name*="plainPassword"]').length)) {
//            $("body").append('<div id="dialog-message"></div>');
//            $("#dialog-message").empty();
////            $("#dialog-message").append('<p><span class="glyphicon glyphicon-exclamation-sign"></span> Ingrese la contraseña, puede tener por lo menos un digito y </br>un alfanumérico, y no  puede contener caracteres espaciales</p>');
//            $("#dialog-message").append('<p><span class="glyphicon glyphicon-exclamation-sign"></span> Ingrese la contraseña, puede tener por lo menos un digito y </br>un alfanumérico</p>');
//            $("#dialog-message").dialog({
//                dialogClass: "dialog-error",
//                modal: true,
//                title: 'Error',
//                width: 500,
//                buttons: {
//                    Aceptar: function () {
//                        $(this).dialog("close");
//                    }
//                }
//            });
//            return false;
//        }else 
//alert(($('input:password[name*="plainPassword"]').val()));
//alert(($('input:password[name*="plainPassword"]').val()).length);
        if (($('input:password[name*="plainPassword"]').val()).length < 8 || ($('input:password[name*="plainPassword"]').val()).length > 16) {
//            alert(($('input:password[name*="plainPassword"]').val()).length);
            $("body").append('<div id="dialog-message"></div>');
            $("#dialog-message").empty();
            $("#dialog-message").append('<p><span class="glyphicon glyphicon-exclamation-sign"></span> La contrseña no puede ser menor de 8 caracteres ni mayor de 16 </p>');
            $("#dialog-message").dialog({
                dialogClass: "dialog-error",
                modal: true,
                title: 'Error',
                width: 500,
                buttons: {
                    Aceptar: function () {
                        $(this).dialog("close");
                    }
                }
            });
            return false;
        }

    });

//busca caracteres que no sean espacio en blanco en una cadena
    function espacioB(q) {
//        alert(q);
        for (i = 0; i < q.length; i++) {
            if (q.charAt(i) != " ") {
                return true
            }
        }
        return false
    }
    ;

    //busca espacio en blanco solo en la primera posicion de la cadena
    function vacioP(q) {
//        alert(q);
//        for (i = 0; i < q.length; i++) {
        if (q.charAt(0) === " ") {
            return true
        }
//        }
        return false
    }
    ;
//https://developer.mozilla.org/es/docs/Web/JavaScript/Guide/Regular_Expressions
    //funcion para validar el password
    function validatePass(campo) {
        alert(campo);
        var RegExPattern = /(?!^[0-9]*$)(?!^[a-zA-Z]*$)^([a-zA-Z0-9]{8,10})$/;
        var errorMessage = 'Password Incorrecta.';
//        if ((campo.value.match(RegExPattern)) && (campo.value != '')) {
        if ((campo)) {
//            alert('Password Correcta');
            return false;
        } else {
//            alert(errorMessage);
            return true;
        }
    }
    ;

    $('input[id$="_username"]').focusout(function () {
        $('input[id$="_email"]').val($('input[id$="_username"]').val() + '@salud.gob.sv');
        $('input[id$="_plainPassword_first"]').focus();
    });

    $('input[id$="_enabled"]').attr("checked", "checked");
    
//    ////validacion de usuario existente
//     $.getJSON(Routing.generate('get_usuario') + "/" + id, function (data) {
//            var id = $(this).val();
//            $(data.datosusuario).each(function () {
//                alert("entre");
//                usuario = this.username;
//                if (usuario != null){
//                    alert("el usuario ya exise");
//                    return true;
//                } 
//                     return false;
//                 
//                
//            })
//            
//        })
});

