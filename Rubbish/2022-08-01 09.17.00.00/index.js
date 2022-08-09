$('#btnGridList').click(function(){
    //convierto a lista
    $('.gridProduct').addClass('col-12');
    $('.rowList').addClass('row');
    $('.imgList').addClass('col-4');
    $('.bodyList').addClass('col-8');
    //remuevo columna
    $('.gridProduct').removeClass('col-6 col-lg-3');
});

$('#btnGridCol').click(function() {
    //convierto a columna
    $('.gridProduct').addClass('col-6 col-lg-3');
    //remuevo lista
    $('.gridProduct').removeClass('col-12');
    $('.rowList').removeClass('row');
    $('.imgList').removeClass('col-4');
    $('.bodyList').removeClass('col-8');
});

$('.gridProduct').click(function(){
    window.location.href = "productos.html";
});

$(".imgList").on('mouseover',function(){
    $(this).addClass('animate__animated animate__pulse');
});
$(".imgList").on('mouseleave',function(){
    $(this).removeClass('animate__animated animate__pulse');
});