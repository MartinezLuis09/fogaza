<?php
include_once('../modelo/mdl_Pedidos.php');
$obj = new Pedidos;

$opc    = $_POST['opc'];

switch ($opc) {
    case 1: //FUNCION DETERMINADA POR LA VARIABLE DE OPCION
        echo $obj->fechaActual();
        break;
    case 2:
        break;
}