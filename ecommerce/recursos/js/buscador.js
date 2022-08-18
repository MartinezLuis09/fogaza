$(function () {
  let productoBuscado = localStorage.getItem("productoBuscado");
  $("#productoBuscado").html(productoBuscado);
  busqueda(productoBuscado);
});

function busqueda(n) {
  let datos = new FormData();
  datos.append("opc", 0);
  datos.append("coincidencia", n);
  datos.append("ordenar", 0);
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

function ordenamiento(){
  let n = localStorage.getItem("productoBuscado");
  let datos = new FormData();
  selectORDER = $("#selectOrder").val();
  datos.append("opc", 0);
  datos.append("coincidencia", n);
  datos.append("ordenar",  selectORDER);
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

$("body #contenedorProductos").on("click", "div", function() {
  if ($(this).attr("id") != undefined) {
    let idProducto = $(this).attr("id");
        localStorage.setItem(
          "idProducto",
          idProducto
        );
        window.location.href="../vistas/producto.php";
  }
});
