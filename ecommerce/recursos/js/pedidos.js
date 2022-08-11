$(function () {
  let datos = new FormData();
  datos.append("opc", 1);
  $.ajax({
    type: "POST",
    url: "../controlador/ctrl_Pedidos.php",
    contentType: false,
    data: datos,
    processData: false,
    cache: false,
    success: function (respuesta) {
      $("#fechaActual").val(respuesta);
      console.log("Metodo Fecha Actual", respuesta);
    },
  });
});
