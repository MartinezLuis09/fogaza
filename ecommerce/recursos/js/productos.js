$(function mostrartodo() {
  let datos = new FormData();
  datos.append("opc", 1);
  $.ajax({
    type: "POST",
    url: "../controlador/ctrl_Productos.php",
    contentType: false,
    data: datos,
    processData: false,
    cache: false,
    success: function (respuesta) {
      $("#contenedorProductosLista").html(respuesta);
    },
  });
});

$(function getCategorias() {
  let datos = new FormData();
  let sl =
  '<option disabled selected value="CATEGORIAS">CATEGORIAS</option>';
  datos.append("opc", 2);
  $.ajax({
    type: "POST",
    url: "../controlador/ctrl_Productos.php",
    contentType: false,
    data: datos,
    processData: false,
    cache: false,
    success: function (respuesta) {
      $("#slCat").html(sl + respuesta);
      console.log("categorias",respuesta) 
     },
  });
});

$("#slCat").change(function () {
  let datos = new FormData();
  let seleccion = $(this).val();
  let cat = $('#slCat>option:selected').text();
  datos.append("opc", 3);
  datos.append("idCat", seleccion);
   $.ajax({
    type: "POST",
    url: "../controlador/ctrl_Productos.php",
    contentType: false,
    data: datos,
    processData: false,
    cache: false,
    success: function (respuesta) {
      $("#contenedorProductosLista").html(respuesta);
      $(".breadcrumb-item.active.bold").html(cat);
      // console.log("Mostrar",respuesta);
        },
  });
});

