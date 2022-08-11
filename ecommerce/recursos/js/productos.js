$(function() {
    let datos = new FormData();
    datos.append("opc", 1);
    /* datos.append("date", $("#dateRetiros").val());
   */
    $.ajax({
      type: "POST",
      url: "../controlador/ctrl_Productos.php",
      contentType: false,
      data: datos,
      processData: false,
      cache: false,
      success: function (respuesta) {
      $(".card-title").html(respuesta); 
        console.log("Metodo Ajax",respuesta);
      },
    });
  });