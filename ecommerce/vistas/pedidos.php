<!-- ARCHIVOS PHP -->
<?php include("header.php");
include("navbar.php"); ?>

<!-- ENCABEZADO CATEGORIAS -->
<div class="bg-light p-2">
    <div class="col-12 ">
        <nav class="text-uppercase" style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="./" class="txt-none bold text-danger txt-hover-reset">INICIO</a>
                </li>
                <li class="breadcrumb-item active bold" aria-current="page">PEDIDOS</li>
            </ol>
        </nav>
    </div>
</div>


<!-- PEDIDOS -->

<body>
    <!-- ARCHIVOS PHP -->
    <?php include("botonesflotantes.php"); ?>
    <main>
        <section class="container ">



            <!-- ROW DE INFO USUARIO Y PRODUCTO -->
            <div class="row">
                <div class="card mb-3" style="z-index:1;">
                    <div class="row">
                        <!-- CARD HEADER -->
                        <div class="card-header fw-bold">
                            <h5 class="card-title fw-bold text-uppercase text-center">Solicitud de Pedido</h5>
                        </div>

                        <!-- CARD BODY -->
                        <div class="card-body p-sm-2 p-md-4 p-lg-4 p-xl-4">
                            <div class="card-text row">
                                <div class="col-12 col-sm-3">
                                    <div class="form-floating mb-3">
                                        <input readonly type="text" class="form-control-plaintext text-center"
                                            id="fechaActual" />
                                        <label for="fechaActual" aria-label="Fecha Actual">
                                            <i class="icon-calendar-2"></i class=>Fecha</label>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-5"></div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-floating mb-3">
                                        <input readonly type="text" class="form-control-plaintext text-center"
                                            id="folioPedido" placeholder="" />
                                        <label for="folioPedido" aria-label="Folio"><i class="icon-hash"></i>
                                            Numero de Pedido</label>
                                    </div>
                                </div>
                            </div>

                            <fieldset disabled>
                                <div class="card-text row">
                                    <div class="col-12 col-sm-4">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control text-center" id="nombre"
                                                placeholder="Juan Perez Lopez" />
                                            <label for="nombre" aria-label="Nombre Completo"><i class="icon-user"></i>
                                                Nombre Completo</label>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-4">
                                        <div class="form-floating mb-3">
                                            <input type="email" class="form-control text-center" id="email"
                                                placeholder="correo@dominio.com" />
                                            <label for="email" aria-label="Correo electrónico ó email"><i
                                                    class="icon-at"></i> Correo Electronico </label>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-4">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control text-center" id="telefono"
                                                placeholder="000 000 00 00" />
                                            <label for="telefono" aria-label="Telefono"><i class="icon-phone-1"></i>
                                                Teléfono</label>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>

                            <div class="card-text row">
                                <div class="col-12 col-sm-4">
                                    <div class="form-floating mb-3">
                                        <select id="listaCategorias" class="form-select"
                                            placeholder="Selecciona una Opción">
                                        </select>
                                        <label for="listaCategorias" aria-label="Categoria Producto"><i
                                                class="icon-th-list"></i>
                                            Categoria de Productos</label>
                                    </div>
                                </div>

                                <div class="col-12 col-sm-4" id="divProducto">
                                    <div class="form-floating mb-3">
                                        <input readonly type="text" class="form-control text-center"
                                            id="NombreProducto" />
                                        <label for="NombreProducto" aria-label="Nombre Producto">
                                            <i class="icon-cube"></i>
                                            Producto</label>
                                    </div>
                                </div>

                                <div class="col-12 col-sm-4" id="divRelleno">
                                    <div class="form-floating mb-3">
                                        <select id="opcionRelleno" class="form-select"
                                            placeholder="Selecciona una Opción">
                                            <option selected value="Selecciona una Opción">Seleccione una Opción
                                            </option>
                                        </select>
                                        <label for="opcionRelleno" aria-label="Relleno"><i
                                                class="icon-chart-pie-alt"></i>
                                            Relleno</label>
                                    </div>
                                </div>
                            </div>

                            <!-- Mensaje vacio -->

                            <div class="row" id="divMensajePro">
                                <div class="card-text text-center">
                                    <p class="text-muted">ELIGA LA CATEGORIA DEL PRODUCTO QUE DESEA <i
                                            class="icon-clip"></i></p>
                                </div>
                            </div>


                            <div class="card-text row" id="divInfoPastel">
                                <div class="col-12 col-sm-3">
                                    <div class="form-floating mb-3">
                                        <input type="number" class="form-control" id="kilosPersonas" placeholder="00" />
                                        <label for="kilosPersonas" aria-label="Kilos o Número de Personas"><i
                                                class="icon-users"></i> Kilos / Número de Personas</label>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-3">
                                    <div class="form-floating mb-3">
                                        <select id="opcionSabor" class="form-select"
                                            placeholder="Selecciona una Opción">
                                            <option selected value="Selecciona una Opción">Seleccione una
                                                Opción
                                            </option>
                                            <option value="3 LECHES">3 LECHES</option>
                                            <option value="TRADICIONAL">TRADICIONAL</option>
                                        </select>
                                        <label for="opcionSabor" aria-label="Sabor de Pan"><i
                                                class="icon-emo-wink2"></i>
                                            Sabor de Pan</label>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="leyenda" placeholder="La Fogaza" />
                                        <label for="leyenda" aria-label="Leyenda"><i class="icon-edit-1"></i>
                                            Leyenda del Pastel</label>
                                    </div>
                                </div>
                            </div>


                            <div class="card-text">
                                <div class="card-text" id="divObservaciones">
                                    <div class="form-floating mb-3">
                                        <textarea class="form-control textarea" placeholder="Observacion"
                                            id="observaciones" style="height: 100px"></textarea>
                                        <label for="observaciones" aria-label="Observaciones"><i
                                                class="icon-edit-1"></i>
                                            Observaciones</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card-text text-center text-md-center text-lg-end p-3" id="divBtnAgregar">
                            <button class="btn btn-danger col-12 col-xl-7" aria-label="Agregar Producto"
                                id="btgAgregar"><i class="icon-basket-1"></i>
                                Agregar Producto</button>
                        </div>
                    </div>
                </div>
            </div>



            <div class="row" id="divListaProductos">
                <div class="card mb-3" style="z-index:1;">
                    <div class="row">
                        <div class="card-header fw-bold">
                            <h5 class="card-title fw-bold text-uppercase text-center">Lista de Productos
                            </h5>
                        </div>

                        <div class="card-body p-sm-2 p-md-4 p-lg-4 p-xl-4">


                            <div class="row" id="divMensajeLista">
                                <div class="card-text text-center">
                                    <p class="text-muted">NO HA AGREGADO PRODUCTOS A SU LISTA <i class="icon-clip"></i>
                                    </p>
                                </div>
                            </div>

                            <div class="row" id="divCarritoCompras">
                                <div class="row">
                                    <div class="card-text col-4 col-sm-4 col-md-4 col-lg-2 col-xl-2">
                                        <img src="../recursos/img/productos/principal/default.png" width="100px" alt="">
                                    </div>
                                    <div class="card-text col-8 col-sm-8 col-md-8 col-lg-4 col-xl-5">
                                        <p class="text-uppercase fw-bold">PRODUCTO #</p>
                                        <p class="text-muted m-0">Sabor: #</p>
                                        <p class="text-muted m-0">Tamaño: #</p>
                                        <p class="text-muted m-0 ellipsis-2">Lorem ipsum dolor sit amet
                                            consectetur
                                            adipisicing
                                            elit. Consequatur tempore maiores possimus ipsum, nulla quae
                                            esse corporis
                                            voluptate
                                            fuga laboriosam numquam dolor perspiciatis minus et totam facere
                                            veritatis.
                                            Numquam,
                                            nihil?</p>
                                    </div>
                                    <div class="card-text col-6 col-sm-6 col-md-6 col-lg-3 col-xl-2">
                                        <div class="input-group mb-3">
                                            <span class="input-group-text bg-white pointer" id="iptMinus"
                                                aria-label="Restar cantidad"><i class="icon-minus"></i></span>
                                            <input type="text" class="form-control c-auto text-center" id="iptCantidad"
                                                precio="10.5" aria-label="cantidad" value="1" readonly>
                                            <span class="input-group-text bg-white pointer" aria-label="Sumar cantidad"
                                                id="iptPlus"><i class="icon-plus"></i></span>
                                        </div>
                                    </div>
                                    <div class="card-text col-3 col-sm-2 col-md-3 col-lg-2 col-xl-2 text-center">
                                        <p class="fw-bold">$ 0.00</p>
                                    </div>
                                    <div class="card-text col-3 col-sm-2 col-md-3 col-lg-1 col-xl-1 text-center">
                                        <button class="btn btn-outline-danger"><i class="icon-trash"></i></button>
                                    </div>
                                    <hr>
                                </div>

                                <div class="row">
                                    <div class="card-text col-4 col-sm-4 col-md-4 col-lg-2 col-xl-2">
                                        <img src="../recursos/img/productos/principal/default.png" width="100px" alt="">
                                    </div>
                                    <div class="card-text col-8 col-sm-8 col-md-8 col-lg-4 col-xl-5">
                                        <p class="text-uppercase fw-bold">PRODUCTO #</p>
                                        <p class="text-muted m-0">Sabor: #</p>
                                        <p class="text-muted m-0">Tamaño: #</p>
                                        <p class="text-muted m-0 ellipsis-2">Lorem ipsum dolor sit amet
                                            consectetur
                                            adipisicing
                                            elit. Consequatur tempore maiores possimus ipsum, nulla quae
                                            esse corporis
                                            voluptate
                                            fuga laboriosam numquam dolor perspiciatis minus et totam facere
                                            veritatis.
                                            Numquam,
                                            nihil?</p>
                                    </div>
                                    <div class="card-text col-6 col-sm-6 col-md-6 col-lg-3 col-xl-2">
                                        <div class="input-group mb-3">
                                            <span class="input-group-text bg-white pointer" id="iptMinus"
                                                aria-label="Restar cantidad"><i class="icon-minus"></i></span>
                                            <input type="text" class="form-control c-auto text-center" id="iptCantidad"
                                                precio="10.5" aria-label="cantidad" value="1" readonly>
                                            <span class="input-group-text bg-white pointer" aria-label="Sumar cantidad"
                                                id="iptPlus"><i class="icon-plus"></i></span>
                                        </div>
                                    </div>
                                    <div class="card-text col-3 col-sm-2 col-md-3 col-lg-2 col-xl-2 text-center">
                                        <p class="fw-bold">$ 0.00</p>
                                    </div>
                                    <div class="card-text col-3 col-sm-2 col-md-3 col-lg-1 col-xl-1 text-center">
                                        <button class="btn btn-outline-danger"><i class="icon-trash"></i></button>
                                    </div>
                                    <hr>
                                </div>
                            </div>


                            <div class="row" id="infoEntregaPago">
                                <div class="card-text row" id="divInfoEntrega">
                                    <div class="col-12 col-sm-3">
                                        <div class="form-floating  mb-3">
                                            <select class="form-select" aria-label="Entrega en Tienda" id="tipoEntrega">
                                                <option value="Entrega en Tienda" selected>Entrega en Tienda
                                                </option>
                                                <option value="Entrega a Domicilio">Entrega a Domicilio
                                                </option>
                                            </select>
                                            <label for="tipoEntrega" aria-label="Sabor de Pan"><i class="icon-truck">
                                                </i> Tipo de Entrega</label>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-3">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" name="fechaEntrega" readonly />
                                            <label for="fechaEntrega" aria-label="Fecha y Hora de Entrega"><i
                                                    class="icon-calendar-2"></i> Fecha y Hora de
                                                Entrega</label>
                                        </div>
                                    </div>

                                    <div class="col-12 col-sm-6" id="divDireccionEntrega">
                                        <div class="form-floating mb-3">
                                            <textarea class="form-control textarea" placeholder="Direccion"
                                                id="direccionEntrega"></textarea>
                                            <label for="direccionEntrega" aria-label="Dirección"><i
                                                    class=" icon-location"></i>Direccion</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-text row" id="divCostos">


                                    <div class="col-12 col-sm-3">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" id="montoTotal" placeholder="$00.00"
                                                readonly />
                                            <label for="montoTotal" aria-label="Monto Total"><i class="icon-dollar"></i>
                                                Monto Total</label>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-3">
                                        <div class="form-floating mb-3">
                                            <input type="number" class="form-control" id="montoAnticipo"
                                                placeholder="Anticipo Minimo 30%" />
                                            <label for="montoAnticipo" aria-label="Anticipo Minimo 30%"><i
                                                    class="icon-percent"></i> Anticipo Recomendado</label>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-3">
                                        <div class="form-floating mb-3">
                                            <input readonly type="number" class="form-control" id="montoRestante"
                                                placeholder="Monto Restante" />
                                            <label for="montoRestante" aria-label="Restante"><i class="icon-dollar"></i>
                                                Monto Restante</label>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-3">
                                        <div class="form-floating mb-3" id="divImporteBase">
                                            <input type="number" class="form-control" id="importeBase"
                                                placeholder="Importe de Base" />
                                            <label for="importeBase" aria-label="Importe de Base"><i
                                                    class="icon-dollar"></i>
                                                Importe de Base</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card-text text-center text-md-center text-lg-end p-3" id="divBtnPedido">
                                <button class="btn btn-danger col-12 col-xl-7" aria-label="Realizar Pedido"><i
                                        class="icon-basket-1"></i>
                                    Realizar Pedido</button>
                            </div>



                        </div>
                    </div>
                </div>
            </div>


            <!-- Modal -->
            <div class="modal fade " id="modalProductos" data-bs-backdrop="static" tabindex="-1"
                aria-labelledby="modalProductos" aria-hidden="true">
                <div class="modal-dialog modal-xl modal-dialog-scrollable">
                    <div class="modal-content">
                        <div class="modal-header">
                            <div class="col">
                                <div class="card-text row">
                                    <h5 class="modal-title fw-bold text-uppercase text-center">
                                        Catalogo de Productos
                                    </h5>
                                </div>
                                <div class="card-text row">
                                    <div class="col-12 col-sm-3">
                                        <div class="form-floating ">
                                            <select id="listaCategoriasModal" class="form-select form-select-sm"
                                                placeholder="Selecciona una Opción">
                                            </select>
                                            <label for="listaCategorias" aria-label="Categoria Producto"><i
                                                    class="icon-th-list"></i>
                                                Categoria de Productos</label>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6"></div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-body">
                            <div class="row" id="catalogoProductos"></div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger col-12 col-xl-7" data-bs-dismiss="modal">
                                <i class="icon-basket-1"></i>
                                Cerrar Catalogo de Productos</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!--ARCHIVOS PHP -->

    <?php include("footer.php"); ?>

    <!--ARCHIVOS SCRIPTS -->
    <link rel="stylesheet" href="../recursos/daterangepicker/daterangepicker.css?t=<?php echo time(); ?>" />
    <script src="../recursos/js/index.min.js?t=<?php echo time(); ?>"></script>
    <script src="../recursos/js/pedidos.js?t=<?php echo time(); ?>"></script>
    <script src="../recursos/js/index.js?t=<?php echo time(); ?>"></script>
    <script src="../recursos/jQuery-3.6.0/jquery-3.6.0.min.js?t=<?php echo time(); ?>"></script>
    <script src="../recursos/daterangepicker/moment.min.js?t=<?php echo time(); ?>"></script>
    <script src="../recursos/daterangepicker/daterangepicker.js?t=<?php echo time(); ?>"></script>

    <script>
    AOS.init();
    </script>

</body>

</html>