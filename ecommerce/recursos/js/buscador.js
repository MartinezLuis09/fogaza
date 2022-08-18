$(function () {
  let productoBuscado = localStorage.getItem("productoBuscado");
  $("#productoBuscado").html(productoBuscado);
  busqueda(productoBuscado);
});

function busqueda(n) {
  let datos = new FormData();
  datos.append("opc", 0);
  datos.append("coincidencia", n);
  $.ajax({
    type: "POST",
    url: "../controlador/ctrl_Buscador.php",
    contentType: false,
    data: datos,
    processData: false,
    cache: false,
    success: function (respuesta) {
      $("#contenedorProductos").html(respuesta);
    },
  });
}

$("#selectOrder").change(function (){
  let datos = new FormData();
  let seleccionDelSelectM = $(this).val();
  datos.append("opc", 0);
  datos.append("ordenar",  seleccionDelSelectM);
  // alert(seleccionDelSelectM)
  $.ajax({
    type: "POST",
    url: "../controlador/ctrl_Buscador.php",
    contentType: false,
    data: datos,
    processData: false,
    cache: false,
    success: function (respuesta) {
      $("#contenedorProductos").html(respuesta);
    },
  });
});