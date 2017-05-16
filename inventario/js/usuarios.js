$("#guardarUsuario").submit(function(event) {
    var parametros = $(this).serialize();
    $.ajax({
        type: "POST",
        url: "../modelo/guardar.php",
        data: parametros,
        beforeSend: function(objeto) {
            $("#mensaje_usuario").html('<img src="../imagen/ajax-loader.gif"> Cargando...');
        },
        success: function(datos) {
            var texto = "",
                color = "";
            if (datos == "no_iguales") {
                texto = "<strong>Error!</strong>, Las contraseñas ingresadas no coinciden.";
                color = "#C9302C";
            } else if (datos == "existe_identificacion") {
                texto = "<strong>Error!</strong>, El usuario ya se encuentra registrado.";
                color = "#C9302C";
            } else if (datos == "existe_usuario") {
                texto = "<strong>Error!</strong>, Usuario no disponible.";
                color = "#C9302C";
            } else if (datos == "registro") {
                texto = "<strong>Bien!</strong>, Se han guardado los datos.";
                color = "#04B431";
            } else if (datos == "error") {
                texto = "<strong>Error!</strong>, No han guardado los datos.";
                color = "#C9302C";
            } else if (datos == "vacio") {
                texto = "<strong>Error!</strong>, Opcion vacia.";
                color = "#C9302C";
            }
            $("#mensaje_usuario").html(texto).css({
                "color": color
            });
            $("#mensaje_usuario").fadeOut(1000, function() {
                $(this).html("");
                $(this).fadeIn(5000);
            });
            load(1);
        }
    });
    event.preventDefault();
});
$('#datosUpdateUsuario').on('show.bs.modal', function(event) {
    var button = $(event.relatedTarget) // Botón que activó el modal
    var ids = button.data('ids')
    var id = button.data('id') // Extraer la información de atributos de datos
    var nom = button.data('nom') // Extraer la información de atributos de datos
    var no = button.data('no') // Extraer la información de atributos de datos
    var ape = button.data('ape') // Extraer la información de atributos de datos
    var ap = button.data('ap')
    var correo = button.data('correo')
    var usuario = button.data('usuario')
    var modal = $(this)
    modal.find('.modal-title').text('Modificando el usuario: ' + nom + ' ' + ape)
    modal.find('.modal-body #ids').val(ids)
    modal.find('.modal-body #id').val(id)
    modal.find('.modal-body #pnom').val(nom)
    modal.find('.modal-body #snom').val(no)
    modal.find('.modal-body #piape').val(ape)
    modal.find('.modal-body #seape').val(ap)
    modal.find('.modal-body #correo').val(correo)
    modal.find('.modal-body #usuario').val(usuario)
    $('.alert').hide(); //Oculto alert
})
$("#actualizarDatosUsuario").submit(function(event) {
    var parametros = $(this).serialize();
    $.ajax({
        type: "POST",
        url: "../modelo/modificar.php",
        data: parametros,
        beforeSend: function(objeto) {
            $("#actualizar_datos_usuario").html('<img src="../imagen/ajax-loader.gif"> Cargando...');
        },
        success: function(datos) {
            var texto = "",
                color = "";
            if (datos == "no_iguales") {
                texto = "<strong>Error!</strong>, Las contraseñas ingresadas no coinciden.";
                color = "#C9302C";
            } else if (datos == "existe_identificacion") {
                texto = "<strong>Error!</strong>, La identificacion que desea cambiar ya existe.";
                color = "#C9302C";
            } else if (datos == "existe_usuario") {
                texto = "<strong>Error!</strong>, Usuario no disponible.";
                color = "#C9302C";
            } else if (datos == "modifico") {
                texto = "<strong>Bien!</strong>, Se han modificado los datos.";
                color = "#04B431";
            } else if (datos == "error") {
                texto = "<strong>Error!</strong>, No han guardado los datos.";
                color = "#C9302C";
            } else if (datos == "vacio") {
                texto = "<strong>Error!</strong>, Opcion vacia.";
                color = "#C9302C";
            }
            $("#actualizar_datos_usuario").html(texto).css({
                "color": color
            });
            $("#actualizar_datos_usuario").fadeOut(5000, function() {
                $(this).html("");
                $(this).fadeIn(5000);
            });
            load(1);
        }
    });
    event.preventDefault();
});
$('#datosDeleteUsuario').on('show.bs.modal', function(event) {
    var button = $(event.relatedTarget) // Botón que activó el modal
    var id = button.data('id') // Extraer la información de atributos de datos
    var modal = $(this)
    modal.find('#id').val(id)
})
$("#eliminarDatosUsuario").submit(function(event) {
    var parametros = $(this).serialize();
    $.ajax({
        type: "POST",
        url: "../modelo/eliminar.php",
        data: parametros,
        beforeSend: function(objeto) {
            $("#DeleteUsuario").html('<img src="../imagen/ajax-loader.gif"> Cargando...');
        },
        success: function(datos) {
            $(".confirmarUsuario").hide('fast');
            var texto = "",
                color = "";
            if (datos == "elimino") {
                texto = "<strong>Bien!</strong>, Se ha eliminado el usuario.";
                color = "#04B431";
            } else if (datos == "error") {
                texto = "<strong>Error!</strong>, No se ha eliminado el usuario.";
                color = "#C9302C";
            } else if (datos == "vacio") {
                texto = "<strong>Error!</strong>, Opcion vacia.";
                color = "#C9302C";
            }
            $("#DeleteUsuario").html(texto).fadeIn('slow').css({
                "color": color
            });
            $("#DeleteUsuario").fadeOut(5000, function() {
                $(this).html("");
                $(this).fadeIn(5000);
            });
            load(1);
        }
    });
    event.preventDefault();
});