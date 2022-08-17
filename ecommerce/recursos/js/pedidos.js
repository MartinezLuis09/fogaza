// $("#divInfoPastel").hide();
// $("#divObservaciones").hide();
// $("#divInfoEntrega").hide();
// $("#divCostos").hide();

//-------------------------------------------------------------
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

//-------------------------------------------------------------
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

//-----------------------------------------------
$(function MostrarInfoUsu() {
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

//------------------------
$(function mostrarCategorias() {
  let datos = new FormData();
  let men =
    '<option selected value="0" disabled >Seleccione una Opción</option>';
  datos.append("opc", 4);
  $.ajax({
    type: "POST",
    url: "../controlador/ctrl_Pedidos.php",
    contentType: false,
    data: datos,
    processData: false,
    cache: false,
    success: function (respuesta) {
      $("#listaCategorias").html(men + respuesta);
      $("#listaCategoriasModal").html(men + respuesta);
    },
  });
});

$("#listaCategorias").change(function () {
  let datos = new FormData();
  let seleccion = $(this).val();

  datos.append("opc", 5);
  datos.append("id_categoria", seleccion);

  $.ajax({
    type: "POST",
    url: "../controlador/ctrl_Pedidos.php",
    contentType: false,
    data: datos,
    processData: false,
    cache: false,
    success: function (data) {
      if (seleccion > 0) {
        $("#listaCategoriasModal").prop("selectedIndex", seleccion);
        $("#catalogoProductos").html(data);
        $("#modalProductos").modal("show");
        $("#listaCategorias").prop("selectedIndex", 0);
        $("#ordenarModal").prop("selectedIndex", 0);
      }
    },
  });
});

//---------------------------------------
$("#listaCategoriasModal").change(function () {
  let datos = new FormData();
  let seleccion = $(this).val();

  datos.append("opc", 5);
  datos.append("id_categoria", seleccion);

  $.ajax({
    type: "POST",
    url: "../controlador/ctrl_Pedidos.php",
    contentType: false,
    data: datos,
    processData: false,
    cache: false,
    success: function (data) {
      if (seleccion > 0) {
        $("#catalogoProductos").html(data);
        $("#ordenarModal").prop("selectedIndex", 0);
      }
    },
  });
});

//---------------------------------------------------
$("div.modal-body #catalogoProductos").on("click", "div", function () {
  if ($(this).attr("id") != undefined) {
    let id = $(this).attr("id");
    alert(id);
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
