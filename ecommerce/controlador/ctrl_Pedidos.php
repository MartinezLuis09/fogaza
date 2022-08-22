<?php
include_once('../modelo/mdl_Pedidos.php');
$obj = new Pedidos;

$opc = $_POST['opc'];

switch ($opc) {
    case 1:
        echo $obj->fechaActual();
        break;
    case 2:
        echo $obj->ultimoFolioPedido() + 1;
        break;
    case 3:
        $email = $_POST['email'];
        $sql = $obj->informacionUsuario($email);
        foreach ($sql as $row) {
            $infoUsuario = array(
                'nombre' => $row['nombre'],
                'email' => $row['email'],
                'telefono' => "(" . substr($row['telefono'], 0, 3) . ")" . " " . substr($row['telefono'], 5, 3) . " - " . substr($row['telefono'], 6, 4),
            );
        }
        echo json_encode($infoUsuario);
        break;
    case 4:
        $diseño = '<option selected value="0" disabled >Seleccione una Opción</option>';
        $sql = $obj->categoriaProductos();
        foreach ($sql as $row) {
            $diseño .= '<option value="' . $row['id'] . '">' . $row['categoria'] . '</option>';
        }
        echo $diseño;
        break;
    case 5:
        $diseño = null;
        $id_categoria = $_POST['id_categoria'];
        $sql = $obj->productosPorCategoria($id_categoria);

        foreach ($sql as $row) {

            $diseño =
                '
                <div id="' . $row['titulo'] . '" class="gridProduct pointer col-6 col-lg-3 pt-4">
                    <div class="card" >
                        <div class="rowList" >
                            <div class="imgList" >
                                <img src="../recursos/img/productos/principal/default.png?t=' . time() . '" 
                                class="card-img-top" alt="...">
                            </div>
                            <div class="bodyList">
                                <div class="card-body pb-4" style="height: 65px;">
                                    <p class="card-title m-0 text-danger fw-bold"><strong>' . $row['titulo'] . '</strong></p>
                                </div>
                                <div class="card-body pb-4" style="height: 15px;">
                                    <h4 class="card-text">$ ' . number_format($row['precio'], 2, ',', '.') . '</h4>
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
            echo $diseño;
        }
        break;

    case 6:
        $titulo = $_POST['titulo'];
        $sql = $obj->informacionProducto($titulo);
        foreach ($sql as $row) {
            $infoProducto = array(
                'titulo' => $row['titulo'],
                'descripcion' => $row['descripcion'],
                'precio' => $row['precio'],
                'id_categoria' => $row['id_categoria'],
            );
        }
        echo json_encode($infoProducto);
        break;
    case 7:
        $diseño = null;
        $titulo = $_POST['titulo'];
        $sql = $obj->informacionProducto($titulo);
        foreach ($sql as $row) {
            $diseño = '
            <div class="row">
                <div class="card-text col-4 col-sm-4 col-md-4 col-lg-2 col-xl-2">
                       <img src="../recursos/img/productos/principal/default.png" width="100px" alt="">
                </div>
                <div class="card-text col-8 col-sm-8 col-md-8 col-lg-4 col-xl-5">
                    <p class="text-uppercase fw-bold">' . $row['titulo'] . '</p>
                    <p class="text-muted m-0">Sabor: #</p>
                    <p class="text-muted m-0">Tamaño: #</p>
                    <p class="text-muted m-0 ellipsis-2">' . $row['descripcion'] . '</p>
                </div>
                <div class="card-text col-6 col-sm-6 col-md-6 col-lg-3 col-xl-2">
                    <div class="input-group mb-3">
                        <span class="input-group-text bg-white pointer" id="iptMinus"
                            aria-label="Restar cantidad"><i class="icon-minus"></i></span>
                        <input type="text" class="form-control c-auto text-center" id="iptCantidad"
                            aria-label="cantidad" value="1" readonly>
                        <span class="input-group-text bg-white pointer" aria-label="Sumar cantidad"
                            id="iptPlus"><i class="icon-plus"></i></span>
                    </div>
                </div>
                <div class="card-text col-3 col-sm-2 col-md-3 col-lg-2 col-xl-2 text-center">
                    <p class="fw-bold" id="precio' . $row['id'] . '" >$ ' . number_format($row['precio'], 2) . '</p>
                </div>
                <div class="card-text col-3 col-sm-2 col-md-3 col-lg-1 col-xl-1 text-center">
                    <button class="btn btn-outline-danger"><i class="icon-trash"></i></button>
                </div>
                <hr>
            </div>            
            ';
        }
        echo $diseño;
        break;
}
