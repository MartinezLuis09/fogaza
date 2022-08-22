$(function mostrarTodosProductos() {
  let datos = new FormData();
  datos.append("opc", 1);
  datos.append("idCategoria", $(this).val());
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

$("#selectCategorias").change(function () {
  mostrarTodosProductos();
});

$(function getCategoriasNombre() {
  let datos = new FormData();
  datos.append("opc", 2);

  $.ajax({
    type: "POST",
    url: "../controlador/ctrl_Productos.php",
    contentType: false,
    data: datos,
    processData: false,
    cache: false,
    success: function (respuesta) {
      $("#selectCategorias").html(respuesta);
      // console.log("categorias",respuesta)
    },
  });
});


$("body #contenedorProductosLista").on("click", "div", function () {
  if ($(this).attr("id") != undefined) {
    let idProducto = $(this).attr("id");
    localStorage.setItem("idProducto", idProducto);
    window.location.href = "../vistas/producto.php";
  }
});
