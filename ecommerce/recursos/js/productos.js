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
    '<option class="text-uppercase  fw-bold"  disabled selected value="ELIJA UNA OPCION">ELIJA UNA OPCION</option>';
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

