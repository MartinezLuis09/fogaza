$('#iptMinus').click(function(){
    let cantidad = $('#iptCantidad').val();
    let precio = $('#iptCantidad').attr('precio');
    let cant = 0;
    let subtotal = 0;
    if ( parseInt(cantidad) > 1 ) {
        cant = parseInt(cantidad)- 1;
        subtotal = parseFloat(precio) * cant;
        $('#iptCantidad').val(cant);
        $('#iptSubtotal').val(subtotal);
    }
});

$('#iptPlus').click(function(){
    let cantidad = $('#iptCantidad').val();
    let precio = $('#iptCantidad').attr('precio');
    let cant = 0;
    let subtotal = 0;
    if ( parseInt(cantidad) > 0 ) {
        cant = parseInt(cantidad) + 1;
        subtotal = parseFloat(precio) * cant;
        $('#iptCantidad').val(cant);
        $('#iptSubtotal').val(subtotal);
    }
});