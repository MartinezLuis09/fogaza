$("#btnGridList").click(function () {
  //convierto a lista
  $(this).addClass("active");
  $(".gridProduct").addClass("col-12");
  $(".rowList").addClass("row");
  $(".imgList").addClass("col-4");
  $(".bodyList").addClass("col-8");
  $(".descripcion").addClass("ellipsis-3");
  //remuevo columna
  $(".gridProduct").removeClass("col-6 col-lg-3");
  $(".descripcion").removeClass("ellipsis-2");
  $("#btnGridCol").removeClass("active");
});

$("#btnGridCol").click(function () {
  //convierto a columna
  $(this).addClass("active");
  $(".gridProduct").addClass("col-6 col-lg-3");
  $(".descripcion").addClass("ellipsis-2");
  //remuevo lista
  $("#btnGridList").removeClass("active");
  $(".gridProduct").removeClass("col-12");
  $(".rowList").removeClass("row");
  $(".imgList").removeClass("col-4");
  $(".bodyList").removeClass("col-8");
  $(".descripcion").removeClass("ellipsis-3");
});

$(".gridProduct").click(function () {
  let idProducto = $(this).attr("identificador");
  let nameProducto = $(this).attr("name");
  let precio = $(this).attr("precio");
  localStorage.setItem("idProducto", idProducto);
  localStorage.setItem("nameProducto", nameProducto);
  localStorage.setItem("precio", precio);
  setInterval(() => {
    window.location.href = "producto.html";
  }, 100);
});

$(".imgList").mouseover(function () {
  $(this).addClass("animate__animated animate__pulse");
});
$(".imgList").mouseleave(function () {
  $(this).removeClass("animate__animated animate__pulse");
});

$("#iptBusqueda").keydown(function (e) {
  if (e.which == 13) {
    if (!$("#iptBusqueda").val()) {
      $("#iptBusqueda").focus();
      $("#iptBusqueda").addClass("is-invalid");
    } else {
      let producto = $(this).val();
      sessionStorage.setItem("productoBuscado", producto);
      window.location.href = "buscador.html";
    }
    e.preventDefault();
  }
});

$(".btnBusqueda").click(function () {
  if (!$("#iptBusqueda").val()) {
    $("#iptBusqueda").focus();
    $("#iptBusqueda").addClass("is-invalid");
  } else {
    let producto = $(this).val();
    sessionStorage.setItem("productoBuscado", producto);
    window.location.href = "buscador.html";
  }
});
