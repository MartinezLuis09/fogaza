$(function () {
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
  '<option value="0" selected value="CATEGORIAS">CATEGORIAS</option>';
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

$(function () {
  
});

$(function mostrarProdByCat(n) {
  let datos = new FormData();
  datos.append("opc", 3);
  datos.append("idCat", n);
  $.ajax({
    type: "POST",
    url: "../controlador/ctrl_Productos.php",
    contentType: false,
    data: datos,
    processData: false,
    cache: false,
    success: function (respuesta) {
      $("#contenedorProductosLista").html(respuesta);
      console.log("Mostrar",respuesta);
    },
  });
});


