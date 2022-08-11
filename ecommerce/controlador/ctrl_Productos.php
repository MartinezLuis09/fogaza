<?php
include_once('../modelo/mdl_Productos.php');
$obj = new Producto;

$opc    = $_POST['opc'];


switch($opc){
    case 1://FUNCION DETERMINADA POR LA VARIABLE DE OPCION
        $tarjetas = null;
        $titulo ='';   
        $descripcion = '';   
        $precio = '';
        $portada = '';
        $sql = $obj -> mostrarProductos();  
        foreach($sql as $row){
            $tarjetas = '
            <div class="gridProduct pointer col-6 col-lg-3 pt-4" identificador="1" name="producto 1" precio="10">
            <div class="card">
                <div class="rowList">
                    <div class="imgList" data-aos="fade-up">
                        <a href="producto.php">
                            <img src="" class="card-img-top"
                                alt="...">
                    </div>
                    </a>
                    <div class="bodyList">
                        <div class="card-body pb-4" style="height: 200px;">
                            <p class="card-title m-0 text-danger text-uppercase fw-bold"><strong>'.$row['titulo'].'</strong></p>
                            <h4 class="card-text">$'.$row['precio'].'</h4>
                            <hr>
                            <p class="card-text ellipsis-2 text-muted descripcion">
                            '.$row['descripcion'].'
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
        $tarjetas = null;
        $titulo ='';   
        $descripcion = '';   
        $precio = '';
        $portada = '';
        $id_categoria = '';
        $sql = $obj -> mostrarProductosCat();  
        foreach($sql as $row){
            $tarjetas = '
            <div class="gridProduct pointer col-6 col-lg-3 pt-4" identificador="1" name="producto 1" precio="10">
            <div class="card">
                <div class="rowList">
                    <div class="imgList" data-aos="fade-up">
                        <a href="producto.php">
                            <img src="" class="card-img-top"
                                alt="...">
                    </div>
                    </a>
                    <div class="bodyList">
                        <div class="card-body pb-4" style="height: 200px;">
                            <p class="card-title m-0 text-danger text-uppercase fw-bold"><strong>'.$row['titulo'].'</strong></p>
                            <h4 class="card-text">$'.$row['precio'].'</h4>
                            <hr>
                            <p class="card-text ellipsis-2 text-muted descripcion">
                            '.$row['descripcion'].'
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
}
?>