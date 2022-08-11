<?php
include_once('../modelo/mdl_Productos.php');
$obj = new Producto;

$opc    = $_POST['opc'];
$tarjetas = null;

switch($opc){
    case 1://FUNCION DETERMINADA POR LA VARIABLE DE OPCION
        $sql = $obj -> mostrarProductos();
        foreach($sql as $row){
            $tarjetas .= '
            <div class="gridProduct pointer col-6 col-lg-3 pt-4" identificador="1" name="producto 1" precio="10">
                <div class="card">
                    <div class="rowList">
                        <div class="imgList" data-aos="fade-up">
                            <a href="producto.php">
                                <img src="../recursos/img/productos/principal/default.png" class="card-img-top"
                                    alt="...">
                        </div>
                        </a>
                        <div class="bodyList">
                            <div class="card-body pb-4" style="height: 200px;">
                                <p class="card-title m-0 text-danger text-uppercase fw-bold"><strong></strong></p>
                                <h4 class="card-text">$ 10.00</h4>
                                <hr>
                                <p class="card-text ellipsis-2 text-muted descripcion">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Sodales ut etiam sit amet nisl
                                    purus in mollis nunc. Iaculis at erat pellentesque adipiscing. Elementum eu
                                    facilisis sed odio morbi quis commodo odio. Eleifend quam adipiscing vitae proin
                                    sagittis nisl rhoncus mattis. Morbi non arcu risus quis varius quam quisque.
                                    Facilisi cras fermentum odio eu feugiat pretium. Vitae congue mauris rhoncus
                                    aenean vel elit. Morbi non arcu risus quis varius quam quisque id. Fermentum et
                                    sollicitudin ac orci phasellus egestas tellus rutrum tellus. Pharetra sit amet
                                    aliquam id diam maecenas ultricies mi. Aliquam sem et tortor consequat.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            ';  
            echo $tarjetas;
           }  
                   break;
    case 2:
            /* echo "RETORNO DE VARIBLE AL JS";

            $ARRAY = ARRAY("VARIABLE"=>'VARIABLE');

            echo json_encode($ARRAY); */
        break;
}
?>