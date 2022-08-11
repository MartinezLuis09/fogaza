$(function() {
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
      },
    });
  });
