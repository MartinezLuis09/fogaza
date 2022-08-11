$(function() {
    let datos = new FormData();
    datos.append("opc", 1);
    datos.append("descripcion", null);
    datos.append("precio", null);
    datos.append("portada", null);
    datos.append("titulo", null);
    
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
