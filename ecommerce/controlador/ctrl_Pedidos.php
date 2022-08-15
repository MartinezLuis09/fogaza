<?php
include_once('../modelo/mdl_Pedidos.php');
$obj = new Pedidos;

$opc = $_POST['opc'];

switch ($opc) {
    case 1:
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
        $diseño = null;
        $sql = $obj->mostrarCategoriaProdudctos();
        foreach ($sql as $row) {
            $diseño = '<option value="' . $row['id'] . '">' . $row['categoria'] . '</option>';
            echo $diseño;
        }
        break;
    case 5:
        $diseño = null;
        $sql = $obj->mostrarProductosFiltrados($id_categoria);
        foreach ($sql as $row) {
            $diseño =
                '
                <div class="gridProduct pointer col-6 col-lg-3 pt-4" identificador="1" name="producto 1" precio="10">
                    <div class="card">
                        <div class="rowList">
                            <div class="imgList" data-aos="fade-up">                
                            </div>
                        </div>
                        
                        <div class="bodyList">
                            <div class="card-body pb-4" style="height: 200px;">
                                <p class="card-title m-0 text-danger text-uppercase fw-bold"><strong>' . $row['titulo'] . '</strong></p>
                                <h4 class="card-text">$' . $row['precio'] . '</h4>
                                <hr>
                                <p class="card-text ellipsis-2 text-muted descripcion"> ' . $row['descripcion'] . ' </p>
                            </div>
                        </div>
                    </div>
                </div>
            ';
            echo $diseño;
        }

        break;
}