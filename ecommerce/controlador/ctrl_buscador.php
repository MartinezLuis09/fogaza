<?php
include_once('../modelo/mdl_buscador.php');
$obj = new Busqueda;

$opc    = $_POST['opc'];


switch($opc){
    case 0://FUNCION DETERMINADA POR LA VARIABLE DE OPCION
        $tarjetas = '';
        $coincidencia = $_POST['coincidencia'];
        $descripcion= $_POST['descripcion'];
        $precio = $_POST['precio'];
        //La primera es crear un arreglo independiente
        // $array = array($coincidencia);

        //Al parecer el array no esta funcionando hay que probar la 2da forma
        //Hay que meter la variable directamente. Y modificar el modelo.
        // Ahora si funciona
        $sql = $obj -> mostrarProductosBuscador($coincidencia, $descripcion, $precio);     
        // Ahora solo modificamos un poco para que nos muestre el nombre real dentro de la BD   
        // para ello hacemos uso de la variable $row
        // Podemos poner el nombre de la columna existente en la BD o ponemos la posicion
        // en la que se encuentra empezando por el 0
        // muestra el mismo resultado ya que $row[6] = $row['titulo']
        // en lo personal recomiendo usar $row['nombre de columna'] es mas facil de identificar
        
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
        }
        echo $tarjetas;
    break;
}
?>