$("#guardarTorre").submit(function(event) {
    var parametros = $(this).serialize();
    $.ajax({
        type: "POST",
        url: "../modelo/guardar.php",
        data: parametros,
        beforeSend: function(objeto) {
            $("#mensaje_torre").html('<img src="../imagen/ajax-loader.gif"> Cargando...');
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
                texto = "<strong>Error!</strong>, No se han guardado los datos.";
                color = "#C9302C";
            } else if (datos == "vacio") {
                texto = "<strong>Error!</strong>, Opcion vacia.";
                color = "#C9302C";
            }
            $("#mensaje_torre").html(texto).css({
                "color": color
            });
            $("#mensaje_torre").fadeOut(5000, function() {
                $(this).html("");
                $(this).fadeIn(5000);
            });
            load(1);
        }
    });
    event.preventDefault();
});
$('#datosUpdateTorre').on('show.bs.modal', function(event) {
    var button = $(event.relatedTarget) // Botón que activó el modal
    var ids = button.data('ids')
    var id = button.data('id') // Extraer la información de atributos de datos
    var serial = button.data('serial') // Extraer la información de atributos de datos
    var placa = button.data('placa') // Extraer la información de atributos de datos
    var marca = button.data('marca')
    var modelo = button.data('modelo')
    var ubicacion = button.data('ubicacion')
    var ma = button.data('ma') // Extraer la información de atributos de datos
    var mac = button.data('mac') // Extraer la información de atributos de datos
    var mon = button.data('mon') // Extraer la información de atributos de datos
    var mou = button.data('mou') // Extraer la información de atributos de datos
    var tec = button.data('tec') // Extraer la información de atributos de datos
    var est = button.data('est') // Extraer la información de atributos de datos
    var modal = $(this)
    modal.find('.modal-title').text('Modificando Id: ' + id)
    modal.find('.modal-body #ids').val(ids)
    modal.find('.modal-body #id').val(id)
    modal.find('.modal-body #serial').val(serial)
    modal.find('.modal-body #placa').val(placa)
    modal.find('.modal-body #marca').val(marca)
    modal.find('.modal-body #modelo').val(modelo)
    modal.find('.modal-body #ubicacion').val(ubicacion)
    modal.find('.modal-body #ma').val(ma)
    modal.find('.modal-body #mac').val(mac)
    modal.find('.modal-body #mon').val(mon)
    modal.find('.modal-body #mou').val(mou)
    modal.find('.modal-body #tec').val(tec)
    modal.find('.modal-body #est option[value ="'+est+'"] ').attr('selected', 'selected')
    $('.alert').hide(); //Oculto alert
})
$("#actualizarDatosTorre").submit(function(event) {
    var parametros = $(this).serialize();
    $.ajax({
        type: "POST",
        url: "../modelo/modificar.php",
        data: parametros,
        beforeSend: function(objeto) {
            $("#actualizar_datos_torre").html('<img src="../imagen/ajax-loader.gif"> Cargando...');
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
            $("#actualizar_datos_torre").html(texto).css({
                "color": color
            });
            $("#actualizar_datos_torre").fadeOut(5000, function() {
                $(this).html("");
                $(this).fadeIn(5000);
            });
            load(1);
        }
    });
    event.preventDefault();
});
$('#datosDeleteTorre').on('show.bs.modal', function(event) {
    var button = $(event.relatedTarget) // Botón que activó el modal
    var ids = button.data('ids')
    var id = button.data('id') // Extraer la información de atributos de datos
    var serial = button.data('serial')
    var placa = button.data('placa')
    var marca = button.data('marca')
    var modelo = button.data('modelo')
    var ubicacion = button.data('ubicacion')
    var ma = button.data('ma')
    var mac = button.data('mac')
    var mon = button.data('mon')
    var mou = button.data('mou')
    var tec = button.data('tec')
    var modal = $(this)
    modal.find('#ids').val(ids)
    modal.find('#id_t').val(id)
    modal.find('#ser').val(serial)
    modal.find('#pla').val(placa)
    modal.find('#mar_torr').val(marca)
    modal.find('#mod_torr').val(modelo)
    modal.find('#ubi').val(ubicacion)
    modal.find('#mac_e').val(ma)
    modal.find('#mac_w').val(mac)
    modal.find('#moni').val(mon)
    modal.find('#mous').val(mou)
    modal.find('#tecl').val(tec)
})
$("#eliminarDatosTorre").submit(function(event) {
    var parametros = $(this).serialize();
    $.ajax({
        type: "POST",
        url: "../modelo/eliminar.php",
        data: parametros,
        beforeSend: function(objeto) {
            $("#DeleteTorre").html('<img src="../imagen/ajax-loader.gif"> Cargando...');
        },
        success: function(datos) {
            $(".confirmarTorre").hide('fast');
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
            $("#DeleteTorre").html(texto).fadeIn('slow').css({
                "color": color
            });
            $("#DeleteTorre").fadeOut(5000, function() {
                $(this).html("");
                $(this).fadeIn(5000);
            });
            load(1);
        }
    });
    event.preventDefault();
});