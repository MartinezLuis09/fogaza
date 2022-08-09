function consultaAjax() {
  let datos = new FormData();
  datos.append("opc", 0);
  datos.append("date", $("#dateRetiros").val());

  $.ajax({
    type: "POST",
    url: "../controlador/finanzas/teso/retiros.php",
    contentType: false,
    data: datos,
    processData: false,
    cache: false,
    beforeSend: function () {
      $("#tablaRetiros").html(load);
    },
    success: function (respuesta) {
      $("#tablaRetiros").html(respuesta);
      console.log("consultaAjax",respuesta);
    },
  });
}
