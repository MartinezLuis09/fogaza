$('#btnGridList').click(function () {
    //convierto a lista
    $('.gridProduct').addClass('col-12');
    $('.rowList').addClass('row');
    $('.imgList').addClass('col-4');
    $('.bodyList').addClass('col-8');
    //remuevo columna
    $('.gridProduct').removeClass('col-6 col-lg-3');
});

$('#btnGridCol').click(function () {
    //convierto a columna
    $('.gridProduct').addClass('col-6 col-lg-3');
    //remuevo lista
    $('.gridProduct').removeClass('col-12');
    $('.rowList').removeClass('row');
    $('.imgList').removeClass('col-4');
    $('.bodyList').removeClass('col-8');
});

$('.gridProduct').click(function () {
    window.location.href = "producto.html";
});

$(".imgList").mouseover(function () {
    $(this).addClass('animate__animated animate__pulse');
});
$(".imgList").mouseleave(function () {
    $(this).removeClass('animate__animated animate__pulse');
});

$('#iptBusqueda').keydown(function (e) {
    if (e.which == 13 ) {
        if ( !$(this).val() ) {
            swal.fire('h');
        } else {
            let producto = $(this).val();
            e.preventDefault();
            sessionStorage.setItem("productoBuscado", producto);
            window.location.href = "buscador.html";
        }
    }
});

$('.btnBusqueda').click(function () {
    if ( !$(this).val() ) {
        
    } else {
        let producto = $(this).val();
        e.preventDefault();
        sessionStorage.setItem("productoBuscado", producto);
        window.location.href = "buscador.html";
    }
});
