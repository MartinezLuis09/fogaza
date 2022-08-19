$(function () {
  busqueda();
});

function busqueda() {
  let productoBuscado = localStorage.getItem("productoBuscado");
  $("#productoBuscado").html(productoBuscado);

  let datos = new FormData();
  datos.append("opc", 0);
  datos.append("coincidencia", productoBuscado);
  datos.append("ordenar", $("#selectOrder").val());
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

$("body #contenedorProductos").on("click", "div", function () {
  if ($(this).attr("id") != undefined) {
    let idProducto = $(this).attr("id");
    localStorage.setItem("idProducto", idProducto);
    window.location.href = "../vistas/producto.php";
  }
});
