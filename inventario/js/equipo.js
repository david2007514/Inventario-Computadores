   $(document).ready(function() {
       load(1);
   });
   $("#guardarEquipo").submit(function(event) {
       var parametros = $(this).serialize();
       $.ajax({
           type: "POST",
           url: "../modelo/guardar.php",
           data: parametros,
           beforeSend: function(objeto) {
               $("#mensaje_equipo").html('<img src="../imagen/ajax-loader.gif"> Cargando...');
           },
           success: function(datos) {
               var texto = "",
                   color = "";
               if (datos == "existe_equipo") {
                   texto = "<strong>Error!</strong>, El equipo ya existe en la base de datos.";
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
               $("#mensaje_equipo").html(texto).css({
                   "color": color
               });
               $("#mensaje_equipo").fadeOut(5000, function() {
                   $(this).html("");
                   $(this).fadeIn(5000);
               });
               load(1);
           }
       });
       event.preventDefault();
   });

   function load(page) {
       var selected = $("#selec").val();
       var q = $("#q").val();
       var selectedt = $("#selet").val();
       var qt = $("#qt").val();
       var selectedm = $("#selem").val();
       var qm = $("#qm").val();
       var selectedmo = $("#selemo").val();
       var qmo = $("#qmo").val();
       var selectedte = $("#selete").val();
       var qte = $("#qte").val();
       var selectedu = $("#seleu").val();
       var qu = $("#qu").val();
       $("#loader").fadeIn('slow');
       $.ajax({
           type: 'GET',
           url: '../modelo/listar_equipo.php?action=ajax&page=' + page + '&q=' + q,
           data: "selected=" + selected,
           beforeSend: function(objeto) {
               $('#loader').html('<img src="../imagen/ajax-loader.gif"> Cargando...');
           },
           success: function(data) {
               $(".list_equipo").html(data).fadeIn('slow');
               $('#loader').html('');
           }
       });
       $.ajax({
           type: 'GET',
           url: '../modelo/listar_torre.php?action=ajax&page=' + page + '&qt=' + qt,
           data: "selectedt=" + selectedt,
           beforeSend: function(objeto) {
               $('#loader').html('<img src="../imagen/ajax-loader.gif"> Cargando...');
           },
           success: function(data) {
               $(".list_torre").html(data).fadeIn('slow');
               $('#loader').html('');
           }
       });
       $.ajax({
           type: 'GET',
           url: '../modelo/listar_monitor.php?action=ajax&page=' + page + '&qm=' + qm,
           data: "selectedm=" + selectedm,
           beforeSend: function(objeto) {
               $('#loader').html('<img src="../imagen/ajax-loader.gif"> Cargando...');
           },
           success: function(data) {
               $(".list_monitor").html(data).fadeIn('slow');
               $('#loader').html('');
           }
       });
       $.ajax({
           type: 'GET',
           url: '../modelo/listar_mouse.php?action=ajax&page=' + page + '&qmo=' + qmo,
           data: "selectedmo=" + selectedmo,
           beforeSend: function(objeto) {
               $('#loader').html('<img src="../imagen/ajax-loader.gif"> Cargando...');
           },
           success: function(data) {
               $(".list_mouse").html(data).fadeIn('slow');
               $('#loader').html('');
           }
       });
       $.ajax({
           type: 'GET',
           url: '../modelo/listar_teclado.php?action=ajax&page=' + page + '&qte=' + qte,
           data: "selectedte=" + selectedte,
           beforeSend: function(objeto) {
               $('#loader').html('<img src="../imagen/ajax-loader.gif"> Cargando...');
           },
           success: function(data) {
               $(".list_teclado").html(data).fadeIn('slow');
               $('#loader').html('');
           }
       });
       $.ajax({
           type: 'GET',
           url: '../modelo/listar_usuarios.php?action=ajax&page=' + page + '&qu=' + qu,
           data: "selectedu=" + selectedu,
           beforeSend: function(objeto) {
               $('#loader').html('<img src="../imagen/ajax-loader.gif"> Cargando...');
           },
           success: function(data) {
               $(".list_usuarios").html(data).fadeIn('slow');
               $('#loader').html('');
           }
       });
       $.ajax({
           type: 'GET',
           url: '../modelo/consultas/busqueda_equipo.php?action=ajax&page=' + page + '&q=' + q,
           data: "selected=" + selected,
           beforeSend: function(objeto) {
               $('#loader').html('<img src="../imagen/ajax-loader.gif"> Cargando...');
           },
           success: function(data) {
               $(".list_equipoo").html(data).fadeIn('slow');
               $('#loader').html('');
           }
       });
       $.ajax({
           type: 'GET',
           url: '../modelo/consultas/busqueda_torre.php?action=ajax&page=' + page + '&qt=' + qt,
           data: "selectedt=" + selectedt,
           beforeSend: function(objeto) {
               $('#loader').html('<img src="../imagen/ajax-loader.gif"> Cargando...');
           },
           success: function(data) {
               $(".list_torree").html(data).fadeIn('slow');
               $('#loader').html('');
           }
       });
       $.ajax({
           type: 'GET',
           url: '../modelo/consultas/busqueda_monitor.php?action=ajax&page=' + page + '&qm=' + qm,
           data: "selectedm=" + selectedm,
           beforeSend: function(objeto) {
               $('#loader').html('<img src="../imagen/ajax-loader.gif"> Cargando...');
           },
           success: function(data) {
               $(".list_monitorr").html(data).fadeIn('slow');
               $('#loader').html('');
           }
       });
       $.ajax({
           type: 'GET',
           url: '../modelo/consultas/busqueda_mouse.php?action=ajax&page=' + page + '&qmo=' + qmo,
           data: "selectedmo=" + selectedmo,
           beforeSend: function(objeto) {
               $('#loader').html('<img src="../imagen/ajax-loader.gif"> Cargando...');
           },
           success: function(data) {
               $(".list_mousee").html(data).fadeIn('slow');
               $('#loader').html('');
           }
       });
       $.ajax({
           type: 'GET',
           url: '../modelo/consultas/busqueda_teclado.php?action=ajax&page=' + page + '&qte=' + qte,
           data: "selectedte=" + selectedte,
           beforeSend: function(objeto) {
               $('#loader').html('<img src="../imagen/ajax-loader.gif"> Cargando...');
           },
           success: function(data) {
               $(".list_tecladoo").html(data).fadeIn('slow');
               $('#loader').html('');
           }
       });
   }
   $('#datosUpdateEquipo').on('show.bs.modal', function(event) {
       var button = $(event.relatedTarget) // Botón que activó el modal
       var ids = button.data('ids')
       var id = button.data('id') // Extraer la información de atributos de datos
       var equipo = button.data('equipo') // Extraer la información de atributos de datos
       var marca = button.data('marca') // Extraer la información de atributos de datos
       var modelo = button.data('modelo') // Extraer la información de atributos de datos
       var ubicacion = button.data('ubicacion') // Extraer la información de atributos de datos
       var estado = button.data('estado') // Extraer la información de atributos de datos
       var modal = $(this)
       modal.find('.modal-title').text('Modificando Id: ' + id)
       modal.find('.modal-body #ids').val(ids)
       modal.find('.modal-body #id').val(id)
       modal.find('.modal-body #equipo').val(equipo)
       modal.find('.modal-body #marca').val(marca)
       modal.find('.modal-body #modelo').val(modelo)
       modal.find('.modal-body #ubicacion').val(ubicacion)
       modal.find('.modal-body #estado option[value="'+estado+'"]').attr('selected', 'selected');
       $('.alert').hide(); //Oculto alert
   })
   $("#actualizarDatosEquipo").submit(function(event) {
       var parametros = $(this).serialize();
       $.ajax({
           type: "POST",
           url: "../modelo/modificar.php",
           data: parametros,
           beforeSend: function(objeto) {
               $("#actualizar_datos_equipo").html('<img src="../imagen/ajax-loader.gif"> Cargando...');
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
               $("#actualizar_datos_equipo").html(texto).css({
                   "color": color
               });
               $("#actualizar_datos_equipo").fadeOut(5000, function() {
                   $(this).html("");
                   $(this).fadeIn(5000);
               });
               load(1);
           }
       });
       event.preventDefault();
   });
   $('#datosDeleteEquipo').on('show.bs.modal', function(event) {
       var button = $(event.relatedTarget) // Botón que activó el modal
       var ids = button.data('ids')
       var id = button.data('id') // Extraer la información de atributos de datos
       var equipo = button.data('equipo')
       var marca = button.data('marca')
       var modelo = button.data('modelo')
       var ubicacion = button.data('ubicacion')
       var modal = $(this)
       modal.find('#ids').val(ids)
       modal.find('#id_e').val(id)
       modal.find('#equi').val(equipo)
       modal.find('#mar_equi').val(marca)
       modal.find('#model').val(modelo)
       modal.find('#ubi_equi').val(ubicacion)
   })
   $("#eliminarDatosEquipo").submit(function(event) {
       var parametros = $(this).serialize();
       $.ajax({
           type: "POST",
           url: "../modelo/eliminar.php",
           data: parametros,
           beforeSend: function(objeto) {
               $("#DeleteEquipo").html('<img src="../imagen/ajax-loader.gif"> Cargando...');
           },
           success: function(datos) {
               $(".confirmarEquipo").hide('fast');
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
               $("#DeleteEquipo").html(texto).fadeIn('slow').css({
                   "color": color
               });
               $("#DeleteEquipo").fadeOut(5000, function() {
                   $(this).html("");
                   $(this).fadeIn(5000);
               });
               load(1);
           }
       });
       event.preventDefault();
   });