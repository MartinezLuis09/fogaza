<?php
include_once('../modelo/mdl_Buscador.php');
$obj = new Busqueda;

$opc    = $_POST['opc'];


switch($opc){
    case 0://FUNCION DETERMINADA POR LA VARIABLE DE OPCION
        $tarjetas = '';
        $coincidencia = $_POST['coincidencia'];
        $ordenar = $_POST['ordenar'];
        $descripcion= '';
        $precio = '';
        $portada = '';
        if ($ordenar = 1) {
            $sql = $obj -> getPrecioMenorMayor($ordenar);
          }if ($ordenar = 2) {
            $sql = $obj -> getPrecioMayorMenor($ordenar);
          }else{
            $sql = $obj -> mostrarProductosBuscador($coincidencia);
          }
             
        foreach($sql as $row){ 
        $tarjetas .= '
        <div class="gridProduct pointer col-6 col-lg-3 pt-4">
            <div class="card" >
                <div class="rowList">
                    <div class="imgList">
                        <img src="../recursos/img/productos/principal/default.png?t=' . time() . '" class="card-img-top"
                        alt="...">
                    </div>
                    <div class="bodyList">
                        <div class="card-body pb-4" style="height: 70px;">
                            <p class="card-title m-0 text-uppercase text-danger fw-bold"><strong>' . $row['titulo'] . '</strong></p>
                        </div>
                        <div class="card-body pb-4" style="height: 15px;">
                            <h4 class="card-text">$'. $row['precio'] . '</h4>
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
        }
        echo $tarjetas;
    break;
}
?>