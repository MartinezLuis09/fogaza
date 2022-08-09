$(function(){
    let productoBuscado = sessionStorage.getItem('productoBuscado');
    $('#productoBuscado').html(productoBuscado);
});