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
            echo $tarjetas;
           }  
                   break;
    case 2:
        $categorias = "";
        $sql = $obj->getCategoriasProductos();
        foreach ($sql as $row) {
            $categorias =
                '<option class="text-uppercase fw-bold" value="' . $row['id'] . '">' . $row['categoria'] . '</option>';
            echo $categorias;
        }
        break;

        case 3:
            $tarjetasCat = null;
            $idCategoria = $_POST['idCategoria'];
            $sql = $obj -> mostrarProductosCategoria($idCategoria);  
            foreach($sql as $row){
                $tarjetasCat = '
                <div class="gridProduct pointer col-6 col-lg-3 pt-4">
                    <div class="card" id="'. $row['id'] . '">
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
                echo $tarjetasCat;
               }  
            break;

            case 4:
                $tarjetasIn = null;
                $idProducto = $_POST['idProducto'];
                $sql = $obj -> mostrarProductosIndividualmente($idProducto);  
                foreach($sql as $row){
                    $tarjetasIn = '
                    <div class="col-12">
                    <div class="card" id="'. $row['id'] . '">
                        <div class="row">
                            <div class="col-12 col-sm-4">
                            <img src="../recursos/img/productos/principal/default.png?t=' . time() . '" class="card-img-top"
                            alt="...">
                                <div class="card">
                                <img src="../recursos/img/productos/principal/default.png?t=' . time() . '" class="card-img-top"
                                alt="...">
                                    <div class="card-body">
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-8">
                                <div class="card-body">
                                    <p class="card-title fs-1 m-0 text-uppercase text-danger text-uppercase">' . $row['titulo'] . ' </p>
                                    <p class="card-text fs-3">$ ' . $row['precio'] . ' </p>
                                    <p class="card-text">
                                    ' . $row['descripcion'] . ' 
                                    </p>
                                    <p class="card-text">
                                        <small class="text-muted">
                                            Entrega aproximada <i class="icon-clock"></i> 30 minutos <i
                                                class="icon-truck"></i> <i class="icon-motorcycle"></i>
                                        </small>
                                    </p>
                                    <div class="card-text">
                                        <div class="form-floating">
                                            <select class="form-select" id="floatingSelect"
                                                aria-label="Floating label select example">
                                                <option value="0" selected>Selecciona tu preferido</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                            <label for="floatingSelect">Tamaño</label>
                                        </div>
                                    </div>
                                    <div class="card-text mt-3">
                                        <div class="form-floating">
                                            <textarea class="form-control textarea"
                                                placeholder="Indicaciones sobre el producto" id="floatingTextarea2"
                                                style="height: 90px"></textarea>
                                            <label for="floatingTextarea2">Indicaciones sobre el producto</label>
                                        </div>
                                    </div>
                                    <div class="card-text mt-3  col-12 col-sm-6">
                                        <label for="">Cantidad</label>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text bg-white pointer" id="iptMinus"
                                                aria-label="Restar cantidad"><i class="icon-minus"></i></span>
                                            <input type="text" class="form-control c-auto text-center" id="iptCantidad" precio=""
                                                aria-label="cantidad" value="1" readonly>
                                            <span class="input-group-text bg-white pointer" aria-label="Sumar cantidad"
                                                id="iptPlus"><i class="icon-plus"></i></span>
                                        </div>
                                    </div>
                                    <div class="card-text mt-3 col-12">
                                        <div class="input-group mb-3">
                                            <span class="input-group-text">$</span>
                                            <input type="text" class="form-control text-end" id="iptSubtotal"
                                                aria-label="Precio total del producto" value="$ ' . $row['precio'] . '" disabled>
                                        </div>
                                    </div>
                                    <div class="card-text mt-3">
                                        <div class="col d-flex justify-content-end">
                                            <button type="button" class="btn btn-danger col-6" id="btnCarrito">Añadir al
                                                carrito</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                    ';
                    echo $tarjetasIn;
                   }  
                break;

}
