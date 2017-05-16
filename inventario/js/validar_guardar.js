function validacion_equipo(campo) {
    var a = 0;
    if (campo === 'id_equipo') {
        id_equipo = document.getElementById(campo).value;
        if (id_equipo == null || id_equipo.length == 0 || /^\s+$/.test(id_equipo)) {
            $("#glypcn" + campo).remove();
            $('#' + campo).parent().parent().attr("class", "form-group has-error has-feedback");
            $('#' + campo).parent().children('span').text("Ingrese un ID").show();
            $('#' + campo).parent().append("<span id='glypcn" + campo + "' class='glyphicon glyphicon-remove form-control-feedback'></span>");
            return false;
        } else {
            $.ajax({
                type: "POST",
                url: "../modelo/existencias/equipo_existente.php",
                data: "id_equipo=" + $("#id_equipo").val(),
                success: function(respuesta) {
                    if (respuesta == "si") {
                        $("#glypcn" + campo).remove();
                        $('#' + campo).parent().parent().attr("class", "form-group has-success has-feedback");
                        $('#' + campo).parent().children('span').hide();
                        $('#' + campo).parent().append("<span id='glypcn" + campo + "' class='glyphicon glyphicon-ok form-control-feedback'></span>");
                        resul = respuesta;
                    } else {
                        $("#glypcn" + campo).remove();
                        $('#' + campo).parent().parent().attr("class", "form-group has-error has-feedback");
                        $('#' + campo).parent().children('span').text("El id ya se encuentra registrado").show();
                        $('#' + campo).parent().append("<span id='glypcn" + campo + "' class='glyphicon glyphicon-remove form-control-feedback'></span>");
                        resul = respuesta;
                    }
                }
            });
            return resul;
        }
    }
}
var v = true;
$("span.help-block").hide();

function verificar_equipo() {
    var v1 = 0;
    v1 = validacion('id_equipo');
    if (v1 === false) {
        $("#exito1").hide();
        $("#error1").show();
    } else {
        $("#error1").hide();
        $("#exito1").show();
    }
}

function validacion_torre(campo) {
    var a = 0;
    if (campo === 'id_torre') {
        id_torre = document.getElementById(campo).value;
        if (id_torre == null || id_torre.length == 0 || /^\s+$/.test(id_torre)) {
            $("#glypcn" + campo).remove();
            $('#' + campo).parent().parent().attr("class", "form-group has-error has-feedback");
            $('#' + campo).parent().children('span').text("Ingrese Id").show();
            $('#' + campo).parent().append("<span id='glypcn" + campo + "' class='glyphicon glyphicon-remove form-control-feedback'></span>");
            return false;
        } else {
            $.ajax({
                type: "POST",
                url: "../modelo/existencias/id_torre_existente.php",
                data: "id_torre=" + $("#id_torre").val(),
                success: function(respuesta) {
                    if (respuesta == "si") {
                        $("#glypcn" + campo).remove();
                        $('#' + campo).parent().parent().attr("class", "form-group has-success has-feedback");
                        $('#' + campo).parent().children('span').hide();
                        $('#' + campo).parent().append("<span id='glypcn" + campo + "' class='glyphicon glyphicon-ok form-control-feedback'></span>");
                        resul = respuesta;
                    } else {
                        $("#glypcn" + campo).remove();
                        $('#' + campo).parent().parent().attr("class", "form-group has-error has-feedback");
                        $('#' + campo).parent().children('span').text("El id ya se encuentra registrado").show();
                        $('#' + campo).parent().append("<span id='glypcn" + campo + "' class='glyphicon glyphicon-remove form-control-feedback'></span>");
                        resul = respuesta;
                    }
                }
            });
            return resul;
        }
    }
    if (campo === 'serial_torre') {
        serial_torre = document.getElementById(campo).value;
        if (serial_torre == null || serial_torre.length == 0 || /^\s+$/.test(serial_torre)) {
            $("#glypcn" + campo).remove();
            $('#' + campo).parent().parent().attr("class", "form-group has-error has-feedback");
            $('#' + campo).parent().children('span').text("Ingrese un serial").show();
            $('#' + campo).parent().append("<span id='glypcn" + campo + "' class='glyphicon glyphicon-remove form-control-feedback'></span>");
            return false;
        } else {
            $.ajax({
                type: "POST",
                url: "../modelo/existencias/serial_torre_existente.php",
                data: "serial_torre=" + $("#serial_torre").val(),
                success: function(respuesta) {
                    if (respuesta == "si") {
                        $("#glypcn" + campo).remove();
                        $('#' + campo).parent().parent().attr("class", "form-group has-success has-feedback");
                        $('#' + campo).parent().children('span').hide();
                        $('#' + campo).parent().append("<span id='glypcn" + campo + "' class='glyphicon glyphicon-ok form-control-feedback'></span>");
                        resul = respuesta;
                    } else {
                        $("#glypcn" + campo).remove();
                        $('#' + campo).parent().parent().attr("class", "form-group has-error has-feedback");
                        $('#' + campo).parent().children('span').text("El serial ya se encuentra registrado").show();
                        $('#' + campo).parent().append("<span id='glypcn" + campo + "' class='glyphicon glyphicon-remove form-control-feedback'></span>");
                        resul = respuesta;
                    }
                }
            });
            return resul;
        }
    }
    if (campo === 'placa_sena') {
        placa_sena = document.getElementById(campo).value;
        if (placa_sena == null || placa_sena.length == 0 || /^\s+$/.test(placa_sena)) {
            $("#glypcn" + campo).remove();
            $('#' + campo).parent().parent().attr("class", "form-group has-error has-feedback");
            $('#' + campo).parent().children('span').text("Ingrese una placa sena").show();
            $('#' + campo).parent().append("<span id='glypcn" + campo + "' class='glyphicon glyphicon-remove form-control-feedback'></span>");
            return false;
        } else {
            $.ajax({
                type: "POST",
                url: "../modelo/existencias/placa_sena_existente.php",
                data: "placa_sena=" + $("#placa_sena").val(),
                success: function(respuesta) {
                    if (respuesta == "si") {
                        $("#glypcn" + campo).remove();
                        $('#' + campo).parent().parent().attr("class", "form-group has-success has-feedback");
                        $('#' + campo).parent().children('span').hide();
                        $('#' + campo).parent().append("<span id='glypcn" + campo + "' class='glyphicon glyphicon-ok form-control-feedback'></span>");
                        resul = respuesta;
                    } else {
                        $("#glypcn" + campo).remove();
                        $('#' + campo).parent().parent().attr("class", "form-group has-error has-feedback");
                        $('#' + campo).parent().children('span').text("La placa sena ya se encuentra registrada").show();
                        $('#' + campo).parent().append("<span id='glypcn" + campo + "' class='glyphicon glyphicon-remove form-control-feedback'></span>");
                        resul = respuesta;
                    }
                }
            });
            return resul;
        }
    }
    if (campo === 'monitor') {
        $.ajax({
            type: "POST",
            url: "../modelo/existencias/torre_monitor.php",
            data: "monitor=" + $("#monitor").val(),
            success: function(respuesta) {
                if (respuesta == "no") {
                    $("#glypcn" + campo).remove();
                    $('#' + campo).parent().parent().attr("class", "form-group has-success has-feedback");
                    $('#' + campo).parent().children('span').hide();
                    $('#' + campo).parent().append("<span id='glypcn" + campo + "' class='glyphicon glyphicon-ok form-control-feedback'></span>");
                    resul = respuesta;
                } else {
                    $("#glypcn" + campo).remove();
                    $('#' + campo).parent().parent().attr("class", "form-group has-error has-feedback");
                    $('#' + campo).parent().children('span').text("El monitor que desea asociar no se encuentra en la base de datos").show();
                    $('#' + campo).parent().append("<span id='glypcn" + campo + "' class='glyphicon glyphicon-remove form-control-feedback'></span>");
                    resul = respuesta;
                }
            }
        });
        return resul;
    }
    if (campo === 'mouse') {
        $.ajax({
            type: "POST",
            url: "../modelo/existencias/torre_mouse.php",
            data: "mouse=" + $("#mouse").val(),
            success: function(respuesta) {
                if (respuesta == "no") {
                    $("#glypcn" + campo).remove();
                    $('#' + campo).parent().parent().attr("class", "form-group has-success has-feedback");
                    $('#' + campo).parent().children('span').hide();
                    $('#' + campo).parent().append("<span id='glypcn" + campo + "' class='glyphicon glyphicon-ok form-control-feedback'></span>");
                    resul = respuesta;
                } else {
                    $("#glypcn" + campo).remove();
                    $('#' + campo).parent().parent().attr("class", "form-group has-error has-feedback");
                    $('#' + campo).parent().children('span').text("El mouse que desea asociar no se encuentra en la base de datos").show();
                    $('#' + campo).parent().append("<span id='glypcn" + campo + "' class='glyphicon glyphicon-remove form-control-feedback'></span>");
                    resul = respuesta;
                }
            }
        });
        return resul;
    }
    if (campo === 'teclado') {
        $.ajax({
            type: "POST",
            url: "../modelo/existencias/torre_teclado.php",
            data: "teclado=" + $("#teclado").val(),
            success: function(respuesta) {
                if (respuesta == "no") {
                    $("#glypcn" + campo).remove();
                    $('#' + campo).parent().parent().attr("class", "form-group has-success has-feedback");
                    $('#' + campo).parent().children('span').hide();
                    $('#' + campo).parent().append("<span id='glypcn" + campo + "' class='glyphicon glyphicon-ok form-control-feedback'></span>");
                    resul = respuesta;
                } else {
                    $("#glypcn" + campo).remove();
                    $('#' + campo).parent().parent().attr("class", "form-group has-error has-feedback");
                    $('#' + campo).parent().children('span').text("El teclado que desea asociar no se encuentra en la base de datos").show();
                    $('#' + campo).parent().append("<span id='glypcn" + campo + "' class='glyphicon glyphicon-remove form-control-feedback'></span>");
                    resul = respuesta;
                }
            }
        });
        return resul;
    }
}
var v = true;
$("span.help-block").hide();

function verificar_torre() {
    var v1 = 0,
        v2 = 0,
        v3 = 0,
        v4 = 0,
        v5 = 0;
    v1 = validacion('id_torre');
    v2 = validacion('serial_torre');
    v3 = validacion('placa_sena');
    v4 = validacion('marca');
    v5 = validacion('modelo');
    v6 = validacion('ubicacion');
    if (v1 === false || v2 === false || v3 === false || v4 === false || v5 === false || v6 === false) {
        $("#exito2").hide();
        $("#error2").show();
    } else {
        $("#error2").hide();
        $("#exito2").show();
    }
}

function validacion_monitor(campo) {
    var a = 0;
    if (campo === 'id_monitor') {
        id_monitor = document.getElementById(campo).value;
        if (id_monitor == null || id_monitor.length == 0 || /^\s+$/.test(id_monitor)) {
            $("#glypcn" + campo).remove();
            $('#' + campo).parent().parent().attr("class", "form-group has-error has-feedback");
            $('#' + campo).parent().children('span').text("Ingrese un Id").show();
            $('#' + campo).parent().append("<span id='glypcn" + campo + "' class='glyphicon glyphicon-remove form-control-feedback'></span>");
            return false;
        } else {
            $.ajax({
                type: "POST",
                url: "../modelo/existencias/id_monitor_existente.php",
                data: "id_monitor=" + $("#id_monitor").val(),
                success: function(respuesta) {
                    if (respuesta == "si") {
                        $("#glypcn" + campo).remove();
                        $('#' + campo).parent().parent().attr("class", "form-group has-success has-feedback");
                        $('#' + campo).parent().children('span').hide();
                        $('#' + campo).parent().append("<span id='glypcn" + campo + "' class='glyphicon glyphicon-ok form-control-feedback'></span>");
                        resul = respuesta;
                    } else {
                        $("#glypcn" + campo).remove();
                        $('#' + campo).parent().parent().attr("class", "form-group has-error has-feedback");
                        $('#' + campo).parent().children('span').text("El id ya se encuentra registrado").show();
                        $('#' + campo).parent().append("<span id='glypcn" + campo + "' class='glyphicon glyphicon-remove form-control-feedback'></span>");
                        resul = respuesta;
                    }
                }
            });
            return resul;
        }
    }
    if (campo === 'serial_monitor') {
        serial_monitor = document.getElementById(campo).value;
        if (serial_monitor == null || serial_monitor.length == 0 || /^\s+$/.test(serial_monitor)) {
            $("#glypcn" + campo).remove();
            $('#' + campo).parent().parent().attr("class", "form-group has-error has-feedback");
            $('#' + campo).parent().children('span').text("Ingrese un serial").show();
            $('#' + campo).parent().append("<span id='glypcn" + campo + "' class='glyphicon glyphicon-remove form-control-feedback'></span>");
            return false;
        } else {
            $.ajax({
                type: "POST",
                url: "../modelo/existencias/serial_monitor_existente.php",
                data: "serial_monitor=" + $("#serial_monitor").val(),
                success: function(respuesta) {
                    if (respuesta == "si") {
                        $("#glypcn" + campo).remove();
                        $('#' + campo).parent().parent().attr("class", "form-group has-success has-feedback");
                        $('#' + campo).parent().children('span').hide();
                        $('#' + campo).parent().append("<span id='glypcn" + campo + "' class='glyphicon glyphicon-ok form-control-feedback'></span>");
                        resul = respuesta;
                    } else {
                        $("#glypcn" + campo).remove();
                        $('#' + campo).parent().parent().attr("class", "form-group has-error has-feedback");
                        $('#' + campo).parent().children('span').text("El serial ya se encuentra registrado").show();
                        $('#' + campo).parent().append("<span id='glypcn" + campo + "' class='glyphicon glyphicon-remove form-control-feedback'></span>");
                        resul = respuesta;
                    }
                }
            });
            return resul;
        }
    }
    if (campo === 'placa_sena_monitor') {
        placa_sena_monitor = document.getElementById(campo).value;
        if (placa_sena_monitor == null || placa_sena_monitor.length == 0 || /^\s+$/.test(placa_sena_monitor)) {
            $("#glypcn" + campo).remove();
            $('#' + campo).parent().parent().attr("class", "form-group has-error has-feedback");
            $('#' + campo).parent().children('span').text("Ingrese una placa").show();
            $('#' + campo).parent().append("<span id='glypcn" + campo + "' class='glyphicon glyphicon-remove form-control-feedback'></span>");
            return false;
        } else {
            $.ajax({
                type: "POST",
                url: "../modelo/existencias/placa_monitor_existente.php",
                data: "placa_sena_monitor=" + $("#placa_sena_monitor").val(),
                success: function(respuesta) {
                    if (respuesta == "si") {
                        $("#glypcn" + campo).remove();
                        $('#' + campo).parent().parent().attr("class", "form-group has-success has-feedback");
                        $('#' + campo).parent().children('span').hide();
                        $('#' + campo).parent().append("<span id='glypcn" + campo + "' class='glyphicon glyphicon-ok form-control-feedback'></span>");
                        resul = respuesta;
                    } else {
                        $("#glypcn" + campo).remove();
                        $('#' + campo).parent().parent().attr("class", "form-group has-error has-feedback");
                        $('#' + campo).parent().children('span').text("La placa ya se encuentra registrada").show();
                        $('#' + campo).parent().append("<span id='glypcn" + campo + "' class='glyphicon glyphicon-remove form-control-feedback'></span>");
                        resul = respuesta;
                    }
                }
            });
            return resul;
        }
    }
}
var v = true;
$("span.help-block").hide();

function verificar_monitor() {
    var v1 = 0,
        v2 = 0,
        v3 = 0,
        v4 = 0,
        v5 = 0;
    v1 = validacion('id_monitor');
    v2 = validacion('serial');
    v3 = validacion('marca');
    v4 = validacion('placa_sena_monitor');
    v5 = validacion('ubicacion');
    if (v1 === false || v2 === false || v3 === false || v4 === false || v5 === false) {
        $("#exito3").hide();
        $("#error3").show();
    } else {
        $("#error3").hide();
        $("#exito3").show();
    }
}

function validacion_mouse(campo) {
    var a = 0;
    if (campo === 'id_mouse') {
        id_mouse = document.getElementById(campo).value;
        if (id_mouse == null || id_mouse.length == 0 || /^\s+$/.test(id_mouse)) {
            $("#glypcn" + campo).remove();
            $('#' + campo).parent().parent().attr("class", "form-group has-error has-feedback");
            $('#' + campo).parent().children('span').text("Ingrese un Id").show();
            $('#' + campo).parent().append("<span id='glypcn" + campo + "' class='glyphicon glyphicon-remove form-control-feedback'></span>");
            return false;
        } else {
            $.ajax({
                type: "POST",
                url: "../modelo/existencias/id_mouse_existente.php",
                data: "id_mouse=" + $("#id_mouse").val(),
                success: function(respuesta) {
                    if (respuesta == "si") {
                        $("#glypcn" + campo).remove();
                        $('#' + campo).parent().parent().attr("class", "form-group has-success has-feedback");
                        $('#' + campo).parent().children('span').hide();
                        $('#' + campo).parent().append("<span id='glypcn" + campo + "' class='glyphicon glyphicon-ok form-control-feedback'></span>");
                        resul = respuesta;
                    } else {
                        $("#glypcn" + campo).remove();
                        $('#' + campo).parent().parent().attr("class", "form-group has-error has-feedback");
                        $('#' + campo).parent().children('span').text("El id ya se encuentra registrado").show();
                        $('#' + campo).parent().append("<span id='glypcn" + campo + "' class='glyphicon glyphicon-remove form-control-feedback'></span>");
                        resul = respuesta;
                    }
                }
            });
            return resul;
        }
    }
    if (campo === 'serial_mouse') {
        serial_mouse = document.getElementById(campo).value;
        if (serial_mouse == null || serial_mouse.length == 0 || /^\s+$/.test(serial_mouse)) {
            $("#glypcn" + campo).remove();
            $('#' + campo).parent().parent().attr("class", "form-group has-error has-feedback");
            $('#' + campo).parent().children('span').text("Ingrese un serial").show();
            $('#' + campo).parent().append("<span id='glypcn" + campo + "' class='glyphicon glyphicon-remove form-control-feedback'></span>");
            return false;
        } else {
            $.ajax({
                type: "POST",
                url: "../modelo/existencias/serial_mouse_existente.php",
                data: "serial_mouse=" + $("#serial_mouse").val(),
                success: function(respuesta) {
                    if (respuesta == "si") {
                        $("#glypcn" + campo).remove();
                        $('#' + campo).parent().parent().attr("class", "form-group has-success has-feedback");
                        $('#' + campo).parent().children('span').hide();
                        $('#' + campo).parent().append("<span id='glypcn" + campo + "' class='glyphicon glyphicon-ok form-control-feedback'></span>");
                        resul = respuesta;
                    } else {
                        $("#glypcn" + campo).remove();
                        $('#' + campo).parent().parent().attr("class", "form-group has-error has-feedback");
                        $('#' + campo).parent().children('span').text("El serial ya se encuentra registrado").show();
                        $('#' + campo).parent().append("<span id='glypcn" + campo + "' class='glyphicon glyphicon-remove form-control-feedback'></span>");
                        resul = respuesta;
                    }
                }
            });
            return resul;
        }
    }
    if (campo === 'placa_sena_mouse') {
        placa_sena_mouse = document.getElementById(campo).value;
        if (placa_sena_mouse == null || placa_sena_mouse.length == 0 || /^\s+$/.test(placa_sena_mouse)) {
            $("#glypcn" + campo).remove();
            $('#' + campo).parent().parent().attr("class", "form-group has-error has-feedback");
            $('#' + campo).parent().children('span').text("Ingrese una placa sena").show();
            $('#' + campo).parent().append("<span id='glypcn" + campo + "' class='glyphicon glyphicon-remove form-control-feedback'></span>");
            return false;
        } else {
            $.ajax({
                type: "POST",
                url: "../modelo/existencias/placa_mouse_existente.php",
                data: "placa_sena_mouse=" + $("#placa_sena_mouse").val(),
                success: function(respuesta) {
                    if (respuesta == "si") {
                        $("#glypcn" + campo).remove();
                        $('#' + campo).parent().parent().attr("class", "form-group has-success has-feedback");
                        $('#' + campo).parent().children('span').hide();
                        $('#' + campo).parent().append("<span id='glypcn" + campo + "' class='glyphicon glyphicon-ok form-control-feedback'></span>");
                        resul = respuesta;
                    } else {
                        $("#glypcn" + campo).remove();
                        $('#' + campo).parent().parent().attr("class", "form-group has-error has-feedback");
                        $('#' + campo).parent().children('span').text("La placa ya se encuentra registrada").show();
                        $('#' + campo).parent().append("<span id='glypcn" + campo + "' class='glyphicon glyphicon-remove form-control-feedback'></span>");
                        resul = respuesta;
                    }
                }
            });
            return resul;
        }
    }
}
var v = true;
$("span.help-block").hide();

function verificar_mouse() {
    var v1 = 0,
        v2 = 0,
        v3 = 0,
        v4 = 0,
        v5 = 0;
    v1 = validacion('id_mouse');
    v2 = validacion('serial');
    v3 = validacion('marca');
    v4 = validacion('placa_sena_mouse');
    v5 = validacion('ubicacion');
    if (v1 === false || v2 === false || v3 === false || v4 === false || v5 === false) {
        $("#exito4").hide();
        $("#error4").show();
    } else {
        $("#error4").hide();
        $("#exito4").show();
    }
}

function validacion_teclado(campo) {
    var a = 0;
    if (campo === 'id_teclado') {
        id_teclado = document.getElementById(campo).value;
        if (id_teclado == null || id_teclado.length == 0 || /^\s+$/.test(id_teclado)) {
            $("#glypcn" + campo).remove();
            $('#' + campo).parent().parent().attr("class", "form-group has-error has-feedback");
            $('#' + campo).parent().children('span').text("Ingrese un Id").show();
            $('#' + campo).parent().append("<span id='glypcn" + campo + "' class='glyphicon glyphicon-remove form-control-feedback'></span>");
            return false;
        } else {
            $.ajax({
                type: "POST",
                url: "../modelo/existencias/id_teclado_existente.php",
                data: "id_teclado=" + $("#id_teclado").val(),
                success: function(respuesta) {
                    if (respuesta == "si") {
                        $("#glypcn" + campo).remove();
                        $('#' + campo).parent().parent().attr("class", "form-group has-success has-feedback");
                        $('#' + campo).parent().children('span').hide();
                        $('#' + campo).parent().append("<span id='glypcn" + campo + "' class='glyphicon glyphicon-ok form-control-feedback'></span>");
                        resul = respuesta;
                    } else {
                        $("#glypcn" + campo).remove();
                        $('#' + campo).parent().parent().attr("class", "form-group has-error has-feedback");
                        $('#' + campo).parent().children('span').text("El id ya se encuentra registrado").show();
                        $('#' + campo).parent().append("<span id='glypcn" + campo + "' class='glyphicon glyphicon-remove form-control-feedback'></span>");
                        resul = respuesta;
                    }
                }
            });
            return resul;
        }
    }
    if (campo === 'serial_teclado') {
        serial_teclado = document.getElementById(campo).value;
        if (serial_teclado == null || serial_teclado.length == 0 || /^\s+$/.test(serial_teclado)) {
            $("#glypcn" + campo).remove();
            $('#' + campo).parent().parent().attr("class", "form-group has-error has-feedback");
            $('#' + campo).parent().children('span').text("Ingrese un serial").show();
            $('#' + campo).parent().append("<span id='glypcn" + campo + "' class='glyphicon glyphicon-remove form-control-feedback'></span>");
            return false;
        } else {
            $.ajax({
                type: "POST",
                url: "../modelo/existencias/serial_teclado_existente.php",
                data: "serial_teclado=" + $("#serial_teclado").val(),
                success: function(respuesta) {
                    if (respuesta == "si") {
                        $("#glypcn" + campo).remove();
                        $('#' + campo).parent().parent().attr("class", "form-group has-success has-feedback");
                        $('#' + campo).parent().children('span').hide();
                        $('#' + campo).parent().append("<span id='glypcn" + campo + "' class='glyphicon glyphicon-ok form-control-feedback'></span>");
                        resul = respuesta;
                    } else {
                        $("#glypcn" + campo).remove();
                        $('#' + campo).parent().parent().attr("class", "form-group has-error has-feedback");
                        $('#' + campo).parent().children('span').text("El serial ya se encuentra registrado").show();
                        $('#' + campo).parent().append("<span id='glypcn" + campo + "' class='glyphicon glyphicon-remove form-control-feedback'></span>");
                        resul = respuesta;
                    }
                }
            });
            return resul;
        }
    }
    if (campo === 'placa_sena_teclado') {
        placa_sena_teclado = document.getElementById(campo).value;
        if (placa_sena_teclado == null || placa_sena_teclado.length == 0 || /^\s+$/.test(placa_sena_teclado)) {
            $("#glypcn" + campo).remove();
            $('#' + campo).parent().parent().attr("class", "form-group has-error has-feedback");
            $('#' + campo).parent().children('span').text("Ingrese una placa").show();
            $('#' + campo).parent().append("<span id='glypcn" + campo + "' class='glyphicon glyphicon-remove form-control-feedback'></span>");
            return false;
        } else {
            $.ajax({
                type: "POST",
                url: "../modelo/existencias/placa_teclado_existente.php",
                data: "placa_sena_teclado=" + $("#placa_sena_teclado").val(),
                success: function(respuesta) {
                    if (respuesta == "si") {
                        $("#glypcn" + campo).remove();
                        $('#' + campo).parent().parent().attr("class", "form-group has-success has-feedback");
                        $('#' + campo).parent().children('span').hide();
                        $('#' + campo).parent().append("<span id='glypcn" + campo + "' class='glyphicon glyphicon-ok form-control-feedback'></span>");
                        resul = respuesta;
                    } else {
                        $("#glypcn" + campo).remove();
                        $('#' + campo).parent().parent().attr("class", "form-group has-error has-feedback");
                        $('#' + campo).parent().children('span').text("La placa ya se encuentra registrada").show();
                        $('#' + campo).parent().append("<span id='glypcn" + campo + "' class='glyphicon glyphicon-remove form-control-feedback'></span>");
                        resul = respuesta;
                    }
                }
            });
            return resul;
        }
    }
}
var v = true;
$("span.help-block").hide();

function verificar_teclado() {
    var v1 = 0,
        v2 = 0,
        v3 = 0,
        v4 = 0,
        v5 = 0;
    v1 = validacion('id_teclado');
    v2 = validacion('serial');
    v3 = validacion('marca');
    v4 = validacion('placa_sena_teclado');
    v5 = validacion('ubicacion');
    if (v1 === false || v2 === false || v3 === false || v4 === false || v5 === false) {
        $("#exito5").hide();
        $("#error5").show();
    } else {
        $("#error5").hide();
        $("#exito5").show();
    }
}

function validacion_usuario(campo) {
    var a = 0;
    if (campo === 'identificacion') {
        identificacion = document.getElementById(campo).value;
        if (identificacion == null || identificacion.length == 0 || /^\s+$/.test(identificacion)) {
            $("#glypcn" + campo).remove();
            $('#' + campo).parent().parent().attr("class", "form-group has-error has-feedback");
            $('#' + campo).parent().children('span').text("Ingrese la identificacion").show();
            $('#' + campo).parent().append("<span id='glypcn" + campo + "' class='glyphicon glyphicon-remove form-control-feedback'></span>");
            return false;
        } else {
            $.ajax({
                type: "POST",
                url: "../modelo/existencias/identificacion_usuario_existente.php",
                data: "identificacion=" + $("#identificacion").val(),
                success: function(respuesta) {
                    if (respuesta == "si") {
                        $("#glypcn" + campo).remove();
                        $('#' + campo).parent().parent().attr("class", "form-group has-success has-feedback");
                        $('#' + campo).parent().children('span').hide();
                        $('#' + campo).parent().append("<span id='glypcn" + campo + "' class='glyphicon glyphicon-ok form-control-feedback'></span>");
                        resul = respuesta;
                    } else {
                        $("#glypcn" + campo).remove();
                        $('#' + campo).parent().parent().attr("class", "form-group has-error has-feedback");
                        $('#' + campo).parent().children('span').text("El usuario ya se encuentra registrado").show();
                        $('#' + campo).parent().append("<span id='glypcn" + campo + "' class='glyphicon glyphicon-remove form-control-feedback'></span>");
                        resul = respuesta;
                    }
                }
            });
            return resul;
        }
    }
    if (campo === 'usuario') {
        usuario = document.getElementById(campo).value;
        if (usuario == null || usuario.length == 0 || /^\s+$/.test(usuario)) {
            $("#glypcn" + campo).remove();
            $('#' + campo).parent().parent().attr("class", "form-group has-error has-feedback");
            $('#' + campo).parent().children('span').text("Ingrese un usuario").show();
            $('#' + campo).parent().append("<span id='glypcn" + campo + "' class='glyphicon glyphicon-remove form-control-feedback'></span>");
            return false;
        } else {
            $.ajax({
                type: "POST",
                url: "../modelo/existencias/user_usuario_existente.php",
                data: "usuario=" + $("#usuario").val(),
                success: function(respuesta) {
                    if (respuesta == "si") {
                        $("#glypcn" + campo).remove();
                        $('#' + campo).parent().parent().attr("class", "form-group has-success has-feedback");
                        $('#' + campo).parent().children('span').hide();
                        $('#' + campo).parent().append("<span id='glypcn" + campo + "' class='glyphicon glyphicon-ok form-control-feedback'></span>");
                        resul = respuesta;
                    } else {
                        $("#glypcn" + campo).remove();
                        $('#' + campo).parent().parent().attr("class", "form-group has-error has-feedback");
                        $('#' + campo).parent().children('span').text("Usuario no disponible").show();
                        $('#' + campo).parent().append("<span id='glypcn" + campo + "' class='glyphicon glyphicon-remove form-control-feedback'></span>");
                        resul = respuesta;
                    }
                }
            });
            return resul;
        }
    }
}
var v = true;
$("span.help-block").hide();

function verificar_usuario() {
    var v1 = 0,
        v2 = 0,
        v3 = 0,
        v4 = 0,
        v5 = 0;
    v1 = validacion('identificacion');
    v2 = validacion('primer_nombre');
    v3 = validacion('primer_apellido');
    v4 = validacion('correo');
    v5 = validacion('usuario');
    v6 = validacion('password');
    v7 = validacion('repassword');
    if (v1 === false || v2 === false || v3 === false || v4 === false || v5 === false || v6 === false || v7 === false) {
        $("#exito6").hide();
        $("#error6").show();
    } else {
        $("#error6").hide();
        $("#exito6").show();
    }
}

function validacion_asociacion(campo) {
    var a = 0;
    if (campo === 'mon') {
        mon = document.getElementById(campo).value;
        $.ajax({
            type: "POST",
            url: "../modelo/existencias/campo_monitor_existente.php",
            data: "mon=" + $("#mon").val(),
            success: function(respuesta) {
                if (respuesta == "no") {
                    $("#glypcn" + campo).remove();
                    $('#' + campo).parent().parent().attr("class", "form-group has-success has-feedback");
                    $('#' + campo).parent().children('span').hide();
                    $('#' + campo).parent().append("<span id='glypcn" + campo + "' class='glyphicon glyphicon-ok form-control-feedback'></span>");
                    resul = respuesta;
                } else {
                    $("#glypcn" + campo).remove();
                    $('#' + campo).parent().parent().attr("class", "form-group has-error has-feedback");
                    $('#' + campo).parent().children('span').text("El monitor que desea asociar no se encuentra en la base de datos").show();
                    $('#' + campo).parent().append("<span id='glypcn" + campo + "' class='glyphicon glyphicon-remove form-control-feedback'></span>");
                    resul = respuesta;
                }
            }
        });
        return resul;
    }
    if (campo === 'mou') {
        mou = document.getElementById(campo).value;
        $.ajax({
            type: "POST",
            url: "../modelo/existencias/campo_mouse_existente.php",
            data: "mou=" + $("#mou").val(),
            success: function(respuesta) {
                if (respuesta == "no") {
                    $("#glypcn" + campo).remove();
                    $('#' + campo).parent().parent().attr("class", "form-group has-success has-feedback");
                    $('#' + campo).parent().children('span').hide();
                    $('#' + campo).parent().append("<span id='glypcn" + campo + "' class='glyphicon glyphicon-ok form-control-feedback'></span>");
                    resul = respuesta;
                } else {
                    $("#glypcn" + campo).remove();
                    $('#' + campo).parent().parent().attr("class", "form-group has-error has-feedback");
                    $('#' + campo).parent().children('span').text("El mouse que desea asociar no se encuentra en la base de datos").show();
                    $('#' + campo).parent().append("<span id='glypcn" + campo + "' class='glyphicon glyphicon-remove form-control-feedback'></span>");
                    resul = respuesta;
                }
            }
        });
        return resul;
    }
    if (campo === 'tec') {
        tec = document.getElementById(campo).value;
        $.ajax({
            type: "POST",
            url: "../modelo/existencias/campo_teclado_existente.php",
            data: "tec=" + $("#tec").val(),
            success: function(respuesta) {
                if (respuesta == "no") {
                    $("#glypcn" + campo).remove();
                    $('#' + campo).parent().parent().attr("class", "form-group has-success has-feedback");
                    $('#' + campo).parent().children('span').hide();
                    $('#' + campo).parent().append("<span id='glypcn" + campo + "' class='glyphicon glyphicon-ok form-control-feedback'></span>");
                    resul = respuesta;
                } else {
                    $("#glypcn" + campo).remove();
                    $('#' + campo).parent().parent().attr("class", "form-group has-error has-feedback");
                    $('#' + campo).parent().children('span').text("El teclado que desea asociar no se encuentra en la base de datos").show();
                    $('#' + campo).parent().append("<span id='glypcn" + campo + "' class='glyphicon glyphicon-remove form-control-feedback'></span>");
                    resul = respuesta;
                }
            }
        });
        return resul;
    }
}