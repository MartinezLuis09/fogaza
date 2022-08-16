<!DOCTYPE html>
<html lang="es">

<?php
include("header.php");
include("navbar.php");
?>

<body>
    <!-- ENCABEZADO CATEGORIAS -->
    <div class="bg-light p-2">
        <div class="col-12 ">
            <nav class="text-uppercase" style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="./"
                            class="txt-none bold text-danger txt-hover-reset">INICIO</a></li>
                    <li class="breadcrumb-item active bold" aria-current="page">PEDIDOS</li>
                </ol>
            </nav>
        </div>
    </div>

    <main>
        <!-- PRODUCTOS -->
        <section class="container ">
            <div class="row">
                <div class="card mb-3" style="z-index:1;">
                    <div class="row">
                        <div class="col">
                            <div class="card-body">
                                <h5 class="card-title fw-bold text-uppercase text-center">Solicitud de Pedido</h5>
                                <fieldset disabled>
                                    <div class="card-text row">
                                        <div class="col-12 col-sm-3">
                                            <div class="form-floating mb-3">
                                                <input type="text" class="form-control text-center" id="fechaActual"
                                                    require />
                                                <label for="fechaActual" aria-label="Fecha Actual">
                                                    <i class="icon-calendar-2"></i class=>Fecha</label>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6"></div>
                                        <div class="col-12 col-sm-3">
                                            <div class="form-floating mb-3">
                                                <input type="text" class="form-control text-center" id="folioPedido"
                                                    placeholder="" />
                                                <label for="folioPedido" aria-label="Folio"><i class="icon-hash"></i>
                                                    Numero de Pedido</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card-text row">
                                        <div class="col-12 col-sm-4">
                                            <div class="form-floating mb-3">
                                                <input type="text" class="form-control text-center" id="nombre"
                                                    placeholder="Juan Perez Lopez" />
                                                <label for="nombre" aria-label="Nombre Completo"><i
                                                        class="icon-user"></i> Nombre Completo</label>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-5">
                                            <div class="form-floating mb-3">
                                                <input type="email" class="form-control text-center" id="email"
                                                    placeholder="correo@dominio.com" />
                                                <label for="email" aria-label="Correo electrónico ó email"><i
                                                        class="icon-at"></i> Correo Electronico </label>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-3">
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
                                                Categoria Producto</label>
                                        </div>

                                    </div>
                                    <div class="col-12 col-sm-4">
                                        <div class="form-floating mb-3">
                                            <select id="opcionRelleno" class="form-select"
                                                placeholder="Selecciona una Opción">
                                                <option selected value="Selecciona una Opción">Selecciona una Opción
                                                </option>
                                            </select>
                                            <label for="opcionRelleno" aria-label="Relleno"><i
                                                    class="icon-chart-pie-alt"></i>
                                                Relleno</label>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-4">
                                        <div class="form-floating mb-3">
                                            <select id="opcionSabor" class="form-select"
                                                placeholder="Selecciona una Opción">
                                                <option selected value="Selecciona una Opción">Selecciona una Opción
                                                </option>
                                                <option value="3 LECHES">3 LECHES</option>
                                                <option value="TRADICIONAL">TRADICIONAL</option>
                                            </select>
                                            <label for="opcionSabor" aria-label="Sabor de Pan"><i
                                                    class="icon-emo-wink2"></i> Sabor de Pan</label>
                                        </div>
                                    </div>
                                </div>


                                <div class="card-text">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="leyenda" placeholder="La Fogaza" />
                                        <label for="leyenda" aria-label="Leyenda"><i class="icon-edit-1"></i>
                                            Leyenda del Pastel</label>
                                    </div>
                                </div>


                                <div class="card-text row">
                                    <div class="col-12 col-sm-4">
                                        <div class="form-floating mb-3">
                                            <input type="number" class="form-control" id="kilosPersonas"
                                                placeholder="00" />
                                            <label for="kilosPersonas" aria-label="Kilos o Número de Personas"><i
                                                    class="icon-users"></i> Kilos / Número de Personas</label>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-4">
                                        <div class="form-floating  mb-3">

                                            <select class="form-select" aria-label="Entrega en Tienda">
                                                <option value="Entrega en Tienda" selected>Entrega en Tienda</option>
                                                <option value="Entrega a Domicilio">Entrega a Domicilio</option>
                                            </select>

                                            <label for="tipoEntrega" aria-label="Sabor de Pan"><i class="icon-truck">
                                                </i> Tipo de Entrega</label>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-4">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" name="fechaEntrega" readonly />
                                            <label for="fechaEntrega" aria-label="Fecha y Hora de Entrega"><i
                                                    class="icon-calendar-2"></i> Fecha y Hora de Entrega</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-text">
                                    <div class="form-floating mb-3">
                                        <textarea class="form-control textarea" placeholder="Direccion"
                                            id="direccionEntrega" style="height: 75px"></textarea>
                                        <label for="direccionEntrega" aria-label="Dirección"><i
                                                class=" icon-location"></i>
                                            Direccion</label>
                                    </div>
                                </div>


                                <div class="card-text row">


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
                                            <input type="number" class="form-control" id="montoRestante"
                                                placeholder="Monto Restante" />
                                            <label for="montoRestante" aria-label="Restante"><i class="icon-dollar"></i>
                                                Monto Restante</label>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-3">
                                        <div class="form-floating mb-3">
                                            <input type="number" class="form-control" id="importeBase"
                                                placeholder="Importe de Base" />
                                            <label for="importeBase" aria-label="Importe de Base"><i
                                                    class="icon-dollar"></i> Importe de Base</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-text">
                                    <div class="form-floating mb-3">
                                        <textarea class="form-control textarea" placeholder="Observacion"
                                            id="observaciones" style="height: 125px"></textarea>
                                        <label for="observaciones" aria-label="Observaciones"><i
                                                class="icon-edit-1"></i>
                                            Observaciones</label>
                                    </div>
                                </div>

                                <div class="card-text text-center text-md-center text-lg-end p-3">
                                    <button class="btn btn-danger col-12 col-xl-7" aria-label="Realizar Pedido"><i
                                            class="icon-basket-1"></i>
                                        Realizar Pedido</button>
                                </div>

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
                                    <div class="form-floating mb-3">
                                        <h5 class="modal-title fw-bold text-uppercase text-center">Catalogo de Productos
                                        </h5>
                                    </div>
                                </div>

                                <div class="card-text row">
                                    <div class="col-12 col-sm-3">
                                        <div class="form-floating mb-2">
                                            <select id="listaCategoriasModal" class="form-select"
                                                placeholder="Selecciona una Opción">
                                            </select>
                                            <label for="listaCategorias" aria-label="Categoria Producto"><i
                                                    class="icon-th-list"></i>
                                                Categoria Producto</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="modal-body">
                            <div class="row" id="catalogoProductos">

                            </div>
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

    <?php
    include("footer.php");
    ?>

    <link rel="stylesheet" href="../recursos/daterangepicker/daterangepicker.css?t=<?php echo time(); ?>" />

    <script src="../recursos/js/index.min.js?t=<?php echo time(); ?>"></script>
    <script src="../recursos/js/pedidos.js?t=<?php echo time(); ?>"></script>

    <script src="../recursos/jQuery-3.6.0/jquery-3.6.0.min.js?t=<?php echo time(); ?>"></script>
    <script src="../recursos/daterangepicker/moment.min.js?t=<?php echo time(); ?>"></script>
    <script src="../recursos/daterangepicker/daterangepicker.js?t=<?php echo time(); ?>"></script>

    <script>
    AOS.init();
    </script>

</body>

</html>