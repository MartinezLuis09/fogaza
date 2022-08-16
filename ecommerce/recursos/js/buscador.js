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

$(function getFechas() {
  let datos = new FormData();
  let opcionDesabilitadaSl ='<option disabled selected value="ORDENAR">ORDENAR</option>';
  datos.append("opc", 1);
  $.ajax({
    type: "POST",
    url: "../controlador/ctrl_Buscador.php",
    contentType: false,
    data: datos,
    processData: false,
    cache: false,
    success: function (respuesta) {
      $("#selectFechas").html(opcionDesabilitadaSl + respuesta);
      console.log("categoriasxd",respuesta) 
     },
  });
});
