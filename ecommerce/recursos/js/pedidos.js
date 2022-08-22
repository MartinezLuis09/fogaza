$(function () {
  $("#divProducto").hide();
  $("#divRelleno").hide();
  $("#divInfoPastel").hide();
  $("#divObservaciones").hide();
  $("#divBtnAgregar").hide();

  // alert(cantProductos);
  if (localStorage.getItem("cantidad") == null) {
    $("#divCarritoCompras").hide();
    $("#infoEntregaPago").hide();
    $("#divBtnPedido").hide();
  } else {
    $("#divMensajeLista").hide();

    //pedidos.push(JSON.parse(localStorage.getItem("lcsPedidos")));
    // alert(pedidos);
  }
});

$(function fechaActual() {
  let datos = new FormData();
  datos.append("opc", 1);

  $.ajax({
    type: "POST",
    url: "../controlador/ctrl_Pedidos.php",
    contentType: false,
    data: datos,
    processData: false,
    cache: false,
    success: function (res) {
      $("#fechaActual").val(res.trim());
    },
  });
});

$(function ultimoFolioPedido() {
  let datos = new FormData();
  datos.append("opc", 2);

  $.ajax({
    type: "POST",
    url: "../controlador/ctrl_Pedidos.php",
    contentType: false,
    data: datos,
    processData: false,
    cache: false,
    success: function (res) {
      $("#folioPedido").val(res.trim().padStart(5, "0"));
    },
  });
});

$(function informacionUsuario() {
  let datos = new FormData();
  datos.append("opc", 3);
  datos.append("email", "asdasd@asasdasd.bk");

  $.ajax({
    type: "POST",
    url: "../controlador/ctrl_Pedidos.php",
    contentType: false,
    data: datos,
    processData: false,
    cache: false,
    dataType: "JSON",
    success: function (data) {
      $("#nombre").val(data["nombre"]);
      $("#email").val(data["email"]);
      $("#telefono").val(data["telefono"]);
    },
  });
});

$(function categoriasProductos() {
  let datos = new FormData();
  datos.append("opc", 4);

  $.ajax({
    type: "POST",
    url: "../controlador/ctrl_Pedidos.php",
    contentType: false,
    data: datos,
    processData: false,
    cache: false,
    success: function (respuesta) {
      $("#listaCategorias").html(respuesta);
      $("#listaCategoriasModal").html(respuesta);
    },
  });
});

$("#listaCategorias").change(function () {
  let datos = new FormData();
  datos.append("opc", 5);
  datos.append("id_categoria", $("#listaCategorias").val());

  $.ajax({
    type: "POST",
    url: "../controlador/ctrl_Pedidos.php",
    contentType: false,
    data: datos,
    processData: false,
    cache: false,
    success: function (data) {
      $("#listaCategoriasModal").prop(
        "selectedIndex",
        $("#listaCategorias").val()
      );
      $("#catalogoProductos").html(data);
      $("#modalProductos").modal("show");
      $("#listaCategorias").prop("selectedIndex", 0);
    },
  });
});

$("#listaCategoriasModal").change(function () {
  let datos = new FormData();
  datos.append("opc", 5);
  datos.append("id_categoria", $("#listaCategoriasModal").val());

  $.ajax({
    type: "POST",
    url: "../controlador/ctrl_Pedidos.php",
    contentType: false,
    data: datos,
    processData: false,
    cache: false,
    success: function (data) {
      $("#catalogoProductos").html(data);
    },
  });
});

//---------------------------------------------------
$("div.modal-body #catalogoProductos").on("click", "div", function () {
  if ($(this).attr("id") != undefined) {
    let datos = new FormData();
    datos.append("opc", 6);
    datos.append("titulo", $(this).attr("id"));

    $.ajax({
      type: "POST",
      url: "../controlador/ctrl_Pedidos.php",
      contentType: false,
      data: datos,
      processData: false,
      cache: false,
      dataType: "JSON",
      success: function (data) {
        $("#divMensajePro").hide();
        $("#modalProductos").modal("hide");
        $("#divProducto").show();
        $("#divRelleno").show();
        $("#divObservaciones").show();
        $("#divBtnAgregar").show();

        if (data["id_categoria"] == 1) {
          $("#divInfoPastel").show();
        }

        $("#NombreProducto").val(data["titulo"]);
      },
    });
  }
});

let pedidos = [];
$("#btgAgregar").click(function () {
  if (localStorage.getItem("cantidad") == null) {
    localStorage.setItem("cantidad", 0);
  } else {
    localStorage.setItem(
      "cantidad",
      parseInt(localStorage.getItem("cantidad")) + 1
    );
  }
  pedidos[parseInt(localStorage.getItem("cantidad"))] = ("#NombreProducto").val();
  localStorage.setItem("lcsPedidos", JSON.stringify(pedidos));

  // JSON.parse(localStorage.getItem("lcsPedidos"));

  let datos = new FormData();
  datos.append("opc", 7);
  datos.append("id", idProducto);

  $.ajax({
    type: "POST",
    url: "../controlador/ctrl_Pedidos.php",
    contentType: false,
    data: datos,
    processData: false,
    cache: false,
    success: function (respuesta) {
      $("#divCarritoCompras").html(respuesta);
    },
  });

  // let datos = new FormData();
  // datos.append("opc", 7);
  // datos.append("id", idProducto);

  // $.ajax({
  //   type: "POST",
  //   url: "../controlador/ctrl_Pedidos.php",
  //   contentType: false,
  //   data: datos,
  //   processData: false,
  //   cache: false,
  //   success: function (respuesta) {
  //     $("#divCarritoCompras").html(respuesta);
  //   },
  // });

  //limpiar campos y ocultar
  $("#divMensajePro").show();
  $("#divProducto").hide();
  $("#divRelleno").hide();
  $("#divObservaciones").hide();
  $("#divBtnAgregar").hide();
  $("#divInfoPastel").hide();

  // Mostrar nuevos campos de entrega
  $("#divMensajeLista").hide();
  $("#divCarritoCompras").show();
  $("#infoEntregaPago").show();
  $("#divBtnPedido").show();
  $("#divDireccionEntrega").hide();

  if ($("#listaCategoriasModal").val() != 1) {
    $("#divImporteBase").hide();
  }
});

$("#tipoEntrega").change(function () {
  if ($(this).val() == "Entrega a Domicilio") {
    $("#divDireccionEntrega").show();
  } else {
    $("#divDireccionEntrega").hide();
  }
});

//-------------------------------------------------
$(function () {
  const dateGoTo = new Date();

  let month = dateGoTo.getMonth() + 1;
  let day = dateGoTo.getDate();
  if (dateGoTo.getMonth() + 1 > -10 && dateGoTo.getMonth() + 1 < 10) {
    month = "0" + (dateGoTo.getMonth() + 1);
  }
  if (dateGoTo.getDate() > -10 && dateGoTo.getDate() < 10) {
    day = "0" + dateGoTo.getDate();
  }
  const date = dateGoTo.getFullYear() + "-" + month + "-" + day;
  const hour = dateGoTo.getHours() + ":" + dateGoTo.getMinutes();
  const today = date + " " + hour;

  $('input[name="fechaEntrega"]').daterangepicker({
    singleDatePicker: true,
    defaultDate: today,
    timePicker: true,
    timePicker24Hour: true,
    startDate: moment().startOf("hour"),
    locale: {
      format: "DD/MM/YYYY - HH:mm",
      daysOfWeek: ["Do", "Lu", "Ma", "Mi", "Ju", "Vi", "Sa"],
      monthNames: [
        "Enero",
        "Febrero",
        "Marzo",
        "Abril",
        "Mayo",
        "Junio",
        "Julio",
        "Agosto",
        "Setiembre",
        "Octubre",
        "Noviembre",
        "Diciembre",
      ],
    },
  });
});
