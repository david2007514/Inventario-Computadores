$("#guardarTeclado").submit(function(event) {
    var parametros = $(this).serialize();
    $.ajax({
        type: "POST",
        url: "../modelo/guardar.php",
        data: parametros,
        beforeSend: function(objeto) {
            $("#mensaje_teclado").html('<img src="../imagen/ajax-loader.gif"> Cargando...');
        },
        success: function(datos) {
            var texto = "",
                color = "";
            if (datos == "existe_id") {
                texto = "<strong>Error!</strong>, El id ya existe en la base de datos.";
                color = "#C9302C";
            } else if (datos == "existe_serial") {
                texto = "<strong>Error!</strong>, El serial ya existe en la base de datos.";
                color = "#C9302C";
            } else if (datos == "existe_placa") {
                texto = "<strong>Error!</strong>, La placa ya existe en la base de datos.";
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
            $("#mensaje_teclado").html(texto).css({
                "color": color
            });
            $("#mensaje_teclado").fadeOut(1000, function() {
                $(this).html("");
                $(this).fadeIn(5000);
            });
            load(1);
        }
    });
    event.preventDefault();
});
$('#datosUpdateTeclado').on('show.bs.modal', function(event) {
    var button = $(event.relatedTarget), // Botón que activó el modal
     ids = button.data('ids'),
     id = button.data('id'), // Extraer la información de atributos de datos
     serial = button.data('serial'), // Extraer la información de atributos de datos
     marca = button.data('marca'), // Extraer la información de atributos de datos
     placa = button.data('placa'), // Extraer la información de atributos de datos
     ubicacion = button.data('ubicacion'),
     estado = button.data('estado'),
     modal = $(this);
    modal.find('.modal-title').text('Modificando Id: ' + id);
    modal.find('.modal-body #ids').val(ids);
    modal.find('.modal-body #id').val(id);
    modal.find('.modal-body #serial').val(serial);
    modal.find('.modal-body #marca').val(marca);
    modal.find('.modal-body #placa').val(placa);
    modal.find('.modal-body #ubicacion').val(ubicacion);
    modal.find('.modal-body #estado option[value="'+estado+'"] ').attr('selected', 'selected');
    $('.alert').hide(); //Oculto alert
})
$("#actualizarDatosTeclado").submit(function(event) {
    var parametros = $(this).serialize();
    $.ajax({
        type: "POST",
        url: "../modelo/modificar.php",
        data: parametros,
        beforeSend: function(objeto) {
            $("#actualizar_datos_teclado").html('<img src="../imagen/ajax-loader.gif"> Cargando...');
        },
        success: function(datos) {
            var texto = "",
                color = "";
            if (datos == "modifico") {
                texto = "<strong>Bien!</strong>, Se han modificado los datos.";
                color = "#04B431";
            } else if (datos == "error") {
                texto = "<strong>Error!</strong>, No han guardado los datos.";
                color = "#C9302C";
            } else if (datos == "vacio") {
                texto = "<strong>Error!</strong>, Opcion vacia.";
                color = "#C9302C";
            }
            $("#actualizar_datos_teclado").html(texto).css({
                "color": color
            });
            $("#actualizar_datos_teclado").fadeOut(5000, function() {
                $(this).html("");
                $(this).fadeIn(5000);
            });
            load(1);
        }
    });
    event.preventDefault();
});
$('#datosDeleteTeclado').on('show.bs.modal', function(event) {
    var button = $(event.relatedTarget) // Botón que activó el modal
    var ids = button.data('ids')
    var id = button.data('id') // Extraer la información de atributos de datos
    var serial = button.data('serial')
    var marca = button.data('marca')
    var placa = button.data('placa')
    var ubicacion = button.data('ubicacion')
    var modal = $(this)
    modal.find('#ids').val(ids)
    modal.find('#id_tec').val(id)
    modal.find('#ser_tec').val(serial)
    modal.find('#mar_tec').val(marca)
    modal.find('#pla_tec').val(placa)
    modal.find('#ubi_tec').val(ubicacion)
})
$("#eliminarDatosTeclado").submit(function(event) {
    var parametros = $(this).serialize();
    $.ajax({
        type: "POST",
        url: "../modelo/eliminar.php",
        data: parametros,
        beforeSend: function(objeto) {
            $("#DeleteTeclado").html('<img src="../imagen/ajax-loader.gif"> Cargando...');
        },
        success: function(datos) {
            $(".confirmarTeclado").hide('fast');
            var texto = "",
                color = "";
            if (datos == "eliminoelimino") {
                texto = "<strong>Bien!</strong>, Se han eliminado los datos.";
                color = "#04B431";
            } else if (datos == "error") {
                texto = "<strong>Error!</strong>, No se han eliminado los datos.";
                color = "#C9302C";
            } else if (datos == "vacio") {
                texto = "<strong>Error!</strong>, Opcion vacia.";
                color = "#C9302C";
            }
            $("#DeleteTeclado").html(texto).fadeIn('slow').css({
                "color": color
            });
            $("#DeleteTeclado").fadeOut(5000, function() {
                $(this).html("");
                $(this).fadeIn(5000);
            });
            load(1);
        }
    });
    event.preventDefault();
});