
$("#iptMinus").click(function () {
  let cantidad = $("#iptCantidad").val();
  let precio = $("#iptCantidad").attr("precio");
  let cant = 0;
  let subtotal = 0;
  if (parseInt(cantidad) > 1) {
    cant = parseInt(cantidad) - 1;
    subtotal = parseFloat(precio) * cant;
    $("#iptCantidad").val(cant);
    $("#iptSubtotal").val(subtotal);
  }
});

$("#iptPlus").click(function () {
  let cantidad = $("#iptCantidad").val();
  let precio = $("#iptCantidad").attr("precio");
  let cant = 0;
  let subtotal = 0;
  if (parseInt(cantidad) > 0) {
    cant = parseInt(cantidad) + 1;
    subtotal = parseFloat(precio) * cant;
    $("#iptCantidad").val(cant);
    $("#iptSubtotal").val(subtotal.toFixed(2));
  }
});


carrito = [];
$("#btnCarrito").click(function () {
    carrito.push({
        "idProducto":localStorage.getItem('idProducto'),
        "nombreProducto":localStorage.getItem("nameProducto") ,
        "subtotal":$().val(),
        "cantidad":$().val(),
        "detalles":$().val(),
        "detalles":$().val(),
    });
//   Swal.fire({
//     text: "¡Se ha agregado un nuevo producto al carrito de compras!",
//     icon: "success",
//     showDenyButton: true,
//     showCancelButton: false,
//     confirmButtonText: "Ir a mi carrito de compras",
//     denyButtonText: "Seguir comprando",
//   }).then((result) => {
//     if (result.isConfirmed) {
//       window.location.href = "carrito.html";
//     } else if (result.isDenied) {
//       window.location.href = "./";
//     }
//   });
});

$(function () {
 let datos = new FormData();
 datos.append("opc", 4);
 datos.append("idProducto", localStorage.getItem("idProducto"));
 $.ajax({
  type: "POST",
      url: "../controlador/ctrl_Productos.php",
      contentType: false,
      data: datos,
      processData: false,
      cache: false,
      dataType: "JSON",
      success: function (data)  {
      $("#idtituloEncabezado").html(data["titulo"]);
      $("#idtitulo").html(data["titulo"]);
      $("#iddescripcion").html(data["descripcion"]);
      $("#idprecio").html(data["precio"]);
    },
  });
});
