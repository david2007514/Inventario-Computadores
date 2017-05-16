///////////////////////////////
///////////////////////////////
///Inicio del codigo de menu///
///////////////////////////////
//////////////////////////////
jQuery(document).ready(function() {
    //Inicio de codigo de ocultar y mostrar las tablas    
    $(".info").click(function() {
        var nodo = $(this).attr("href");
        if ($(nodo).is(":visible")) {
            $(nodo).show();
            return false;
        } else {
            $(".oculto").hide("slow");
            $(nodo).fadeToggle("fast");
            return false;
        }
    });
    //fin de codigo ocultar y mostrar las tablas
    ////
    ///
    ///
    /////////////////////
    //codigo para llenar el select del formulariuo registro usuarios
    $.ajax({
        url: '../modelo/cargos.php',
        success: function(resp) {
            $('#cargo').html(resp)
        }
    });
    $.ajax({
        url: '../modelo/cargoss.php',
        success: function(resp) {
            $('#cargoo').html(resp)
        }
    });
    $.ajax({
        url: '../modelo/campos_monitor.php',
        success: function(resp) {
            $('#torre_monitor').html(resp)
        }
    });
    $.ajax({
        url: '../modelo/campos_mouse.php',
        success: function(resp) {
            $('#torre_mouse').html(resp)
        }
    });
    $.ajax({
        url: '../modelo/campos_teclado.php',
        success: function(resp) {
            $('#torre_teclado').html(resp)
        }
    });
    //find de codigo select formularios
    ///////////////
    //////////
    /////////
    ///////
    ///////////
});
//Fin funcion de todo el menu
//
//
//
/////////////////////////
//
//
//
//
//
//
//
//codigo para cambiar logo y nombre de la pagina
$("#enviarimagenes").on("submit", function(e) {
    e.preventDefault();
    var formData = new FormData(document.getElementById("enviarimagenes"));
    $.ajax({
        url: "../modelo/modificar_nombre-logo.php",
        type: "POST",
        dataType: "HTML",
        data: formData,
        cache: false,
        contentType: false,
        processData: false
    }).done(function(echo) {
        //location.reload(true);
        $("#mensaje").html(echo);
        //setTimeout("location.reload()", 3000);
    });
    $('#enviarimagenes').on('hidden.bs.modal', function() {
        location.reload('fast');
    });
});
//fin codigo cambiar imagen y logo