<?php
include_once('../modelo/mdl_Pedidos.php');
$obj = new Pedidos;

$opc = $_POST['opc'];

switch ($opc) {
    case 1: //FUNCION DETERMINADA POR LA VARIABLE DE OPCION$
        echo $obj->fechaActual();
        break;
    case 2:
        echo $obj->ultimoFolioPedido();
        break;
    case 3:
        $email = $_POST['email'];
        $sql = $obj->consutarInformacionCliente($email);

        foreach ($sql as $row) {
            $infoUsuario = array(
                'nombre' => $row['nombre'],
                'email' => $row['email'],
                'telefono' => $row['telefono'],
            );
        }

        echo json_encode($infoUsuario);
        break;
    case 4:

        $opciones = "null";

        $categoria = '';
        $sql = $obj->getCatProd();

        foreach ($sql as $row) {
            $opciones =
                '<option value="' . $row['categoria'] . '">' . $row['categoria'] . '</option>';
            echo $opciones;
        }

        break;
}
