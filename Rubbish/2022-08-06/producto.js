$(function () {
  if (localStorage.getItem("precio")) {
    // $('#card-title').html(localStorage.getItem('idProducto'));
    $(".card-title").html(
      "<strong>" + localStorage.getItem("nameProducto") + "</strong>"
    );
    $("#precioProducto").html(
      "<strong>$ " +
        parseFloat(localStorage.getItem("precio")).toFixed(2) +
        "</strong>"
    );
    $("#iptSubtotal").val(
      parseFloat(localStorage.getItem("precio")).toFixed(2)
    );
    $("#iptCantidad").attr(
      "precio",
      parseFloat(localStorage.getItem("precio"))
    );
  }
});

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

$("#btnCarrito").click(function () {
  Swal.fire({
    text: "¡Se ha agregado un nuevo producto al carrito de compras!",
    icon: "success",
    showDenyButton: true,
    showCancelButton: false,
    confirmButtonText: "Ir a mi carrito de compras",
    denyButtonText: "Seguir comprando",
  }).then((result) => {
    if (result.isConfirmed) {
      window.location.href = "carrito.html";
    } else if (result.isDenied) {
      window.location.href = "./";
    }
  });
});
