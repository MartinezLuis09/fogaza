<?php
include_once('../modelo/mdl_Productos.php');
$obj = new Producto;

$opc = $_POST['opc'];

switch($opc){
    case 1://FUNCION DETERMINADA POR LA VARIABLE DE OPCION
            $tarjetas = null;
            
            $idCategoria = $_POST['idCategoria'];
            $sql = $obj -> mostrarProductos($idCategoria); 
            
            foreach($sql as $row){
                $tarjetas = '
                <div class="gridProduct pointer col-6 col-lg-3 pt-4">
                    <div class="card" id="'. $row['id'] . '" >
                        <div class="rowList">
                            <div class="imgList">
                                <img src="../recursos/img/productos/principal/default.png?t=' . time() . '" class="card-img-top"
                                alt="...">
                            </div>
                            <div class="bodyList">
                                <div class="card-body pb-4" style="height: 65px;">
                                    <p class="card-title m-0 text-uppercase text-danger fw-bold"><strong>' . $row['titulo'] . '</strong></p>
                                </div>
                                <div class="card-body pb-4" style="height: 15px;">
                                    <h4 class="card-text">$ ' . number_format($row['precio'],2,'.',',') . '</h4>
                                </div>
                                <div class="card-body pb-4" style="height: 100px;">
                                    <hr>
                                    <p class="card-text ellipsis-2 text-muted descripcion">
                                    ' . $row['descripcion'] . ' 
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
    case 2://lista de categoria
        $categorias = '<option class="text-uppercase  fw-bold"  disabled selected value="0">ELIJA UNA OPCION</option>';
        $sql = $obj->getCategoriasProductos();
        foreach ($sql as $row) {
            $categorias .=
                '<option class="text-uppercase fw-bold" value="' . $row['id'] . '">' . $row['categoria'] . '</option>';
        }
        echo $categorias;
        break;
    case 3://Producto Individual
        $idProducto = $_POST['idProducto'];
        $sql = $obj->mostrarProductosIndividualmente($idProducto);
        foreach ($sql as $row) {
            $infoProductoIndividual = array(
                'titulo' => $row['titulo'],
                'descripcion' => $row['descripcion'],
                'precio' => number_format($row['precio'],2,'.',','),
            );
        }
        echo json_encode($infoProductoIndividual);
        break;

}
