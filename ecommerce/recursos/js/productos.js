$(function mostrarTodosProductos() {
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
      /*       console.log("Mostrar",respuesta);
       */
    },
  });
});

$(function getCategoriasNombre() {
  let datos = new FormData();
  let opcionDesabilitada =
    '<option class="text-uppercase  fw-bold"  disabled selected value="ELIJE UNA OPCION">ELIJE UNA OPCION</option>';
  datos.append("opc", 2);
  $.ajax({
    type: "POST",
    url: "../controlador/ctrl_Productos.php",
    contentType: false,
    data: datos,
    processData: false,
    cache: false,
    success: function (respuesta) {
      $("#selectCategorias").html(opcionDesabilitada + respuesta);
      // console.log("categorias",respuesta)
    },
  });
});

$("#selectCategorias").change(function () {
  let datos = new FormData();
  let seleccionDelSelect = $(this).val();
  datos.append("opc", 3);
  datos.append("idCategoria", seleccionDelSelect);
  $.ajax({
    type: "POST",
    url: "../controlador/ctrl_Productos.php",
    contentType: false,
    data: datos,
    processData: false,
    cache: false,
    success: function (respuesta) {
      $("#contenedorProductosLista").html(respuesta);
      // console.log("Mostrar",respuesta);
    },
  });
});

$("body #contenedorProductosLista").on("click", "div", function () {
  if ($(this).attr("id") != undefined) {
    let idProducto = $(this).attr("id");
    /* alert(idProducto); */
    let datos = new FormData();
    datos.append("opc", 4);
    datos.append("idProducto", idProducto);
    $.ajax({
      type: "POST",
      url: "../controlador/ctrl_Productos.php",
      contentType: false,
      data: datos,
      processData: false,
      cache: false,
      success: function (respuesta) {
        /* window.location.replace("../vistas/producto.php"); */
        $("#contenedorProducto").html(respuesta);
        console.log("Mostrar", respuesta);
      },
    });
  }
});
