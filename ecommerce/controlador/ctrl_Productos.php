<?php
include_once('../modelo/mdl_Productos.php');
$obj = new Producto;

$opc    = $_POST['opc'];


switch($opc){
    case 1://FUNCION DETERMINADA POR LA VARIABLE DE OPCION
        $tarjetas = null;
        $sql = $obj -> mostrarProductos();  
        foreach($sql as $row){
            $tarjetas = '
            <div class="gridProduct pointer col-6 col-lg-3 pt-4" identificador="1" name="producto 1" precio="10">
        <div class="card">
            <div class="rowList">
                <div class="card h-100">
                    <a href="producto.php">
                        <img src="../recursos/img/productos/principal/default.png?t='.time().'" class="card-img-top"
                            alt="...">
                    </a>
                </div>
                <div class="bodyList">
                    <div class="card-body pb-4" style="height: 100px;">
                        <p class="card-title m-0 text-danger text-uppercase fw-bold"><strong>'.$row['titulo'].'</strong></p>
                        <h4 class="card-text">$'.$row['precio'].'</h4>
                    </div>
                    <div class="card-body pb-4" style="height: 100px;">
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
        $categorias = "";
        $sql = $obj->getCatProdInd();
        foreach ($sql as $row) {
            $categorias =
                '<option value="' . $row['id'] . '">' . $row['categoria'] . '</option>';
            echo $categorias;
        }
        break;

        case 3:
            $tarjetas = null;
            $idCat = $_POST['idCat'];
            $sql = $obj -> mostrarProductosCat($idCat);  
            foreach($sql as $row){
                $tarjetasCat = '
                <div class="gridProduct pointer col-6 col-lg-3 pt-4" identificador="1" name="producto 1" precio="10">
        <div class="card">
            <div class="rowList">
                <div class="card h-100">
                    <a href="producto.php">
                        <img src="../recursos/img/productos/principal/default.png?t='.time().'" class="card-img-top"
                            alt="...">
                    </a>
                </div>
                <div class="bodyList">
                    <div class="card-body pb-4" style="height: 100px;">
                        <p class="card-title m-0 text-danger text-uppercase fw-bold"><strong>'.$row['titulo'].'</strong></p>
                        <h4 class="card-text">$'.$row['precio'].'</h4>
                    </div>
                    <div class="card-body pb-4" style="height: 100px;">
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
                echo $tarjetasCat;
               }  
            break;
}
