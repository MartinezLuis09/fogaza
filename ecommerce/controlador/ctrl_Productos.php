<?php
include_once('../modelo/mdlProductos.php');
$obj = new Producto;

$opc    = $_POST['opc'];

switch($opc){
    case 1://FUNCION DETERMINADA POR LA VARIABLE DE OPCION
             $sql = $obj->mostrarProductos(); 
             foreach($sql as $row){
              echo $row[6];
             }
            /* $obj->nombreFuncion2($array); */
        break;
    case 2:
            /* echo "RETORNO DE VARIBLE AL JS";

            $ARRAY = ARRAY("VARIABLE"=>'VARIABLE');

            echo json_encode($ARRAY); */
        break;
}
?>