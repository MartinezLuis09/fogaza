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

                                <div class="card-text row">
                                    <div class="col-12 col-sm-3">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" id="floatingInput"
                                                placeholder="00/00/0000">
                                            <label for="floatingInput" aria-label="Fecha"><i
                                                    class="icon-calendar-2"></i>
                                                Fecha</label>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6"></div>
                                    <div class="col-12 col-sm-3">
                                        <div class="form-floating mb-3">
                                            <input type="number" class="form-control" id="floatingInput"
                                                placeholder="000">
                                            <label for="floatingInput" aria-label="Folio"><i class="icon-hash"></i>
                                                Numero de Pedido</label>
                                        </div>
                                    </div>
                                </div>


                                <div class="card-text row">
                                    <div class="col-12 col-sm-4">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" id="floatingInput"
                                                placeholder="Juan Perez Lopez">
                                            <label for="floatingInput" aria-label="Nombre Completo"><i
                                                    class="icon-user"></i> Nombre Completo</label>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-5">
                                        <div class="form-floating mb-3">
                                            <input type="email" class="form-control" id="floatingInput"
                                                placeholder="correo@dominio.com">
                                            <label for="floatingInput" aria-label="Correo electrónico ó email"><i
                                                    class="icon-at"></i> Correo electrónico</label>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-3">
                                        <div class="form-floating mb-3">
                                            <input type="number" class="form-control" id="floatingInput"
                                                placeholder="962 000 00 00">
                                            <label for="floatingInput" aria-label="Telefono"><i
                                                    class="icon-phone-1"></i> Teléfono</label>
                                        </div>
                                    </div>
                                </div>


                                <div class="card-text row">
                                    <div class="col-12 col-sm-4">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" id="floatingInput"
                                                placeholder="Modelo">
                                            <label for="floatingInput" aria-label="Modelo"><i class="icon-user"></i>
                                                Modelo</label>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-4">
                                        <div class="form-floating mb-3">
                                            <select id="floatingInput" class="form-select"
                                                placeholder="Selecciona una Opción">
                                                <option selected>Selecciona una Opción</option>
                                                <option>Opcion 1</option>
                                                <option>Opcion 2</option>
                                            </select>
                                            <label for="floatingInput" aria-label="Relleno"><i class="icon-at"></i>
                                                Relleno</label>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-4">
                                        <div class="form-floating mb-3">
                                            <select id="floatingInput" class="form-select"
                                                placeholder="Selecciona una Opción">
                                                <option selected>Selecciona una Opción</option>
                                                <option>3 Leches</option>
                                                <option>Tradicional</option>
                                            </select>
                                            <label for="floatingInput" aria-label="Sabor de Pan"><i
                                                    class="icon-phone-1"></i> Sabor de Pan</label>
                                        </div>
                                    </div>
                                </div>


                                <div class="card-text">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="floatingInput"
                                            placeholder="La Fogaza">
                                        <label for="floatingInput" aria-label="Leyenda"><i class="icon-edit-1"></i>
                                            Leyenda del Pastel</label>
                                    </div>
                                </div>


                                <div class="card-text row">
                                    <div class="col-12 col-sm-4">
                                        <div class="form-floating mb-3">
                                            <input type="number" class="form-control" id="floatingInput"
                                                placeholder="00">
                                            <label for="floatingInput" aria-label="Kilos o Número de Personas"><i
                                                    class="icon-users"></i> Kilos o Número de Personas</label>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-4">
                                        <div class="form-floating mb-3">
                                            <select id="floatingInput" class="form-select"
                                                placeholder="Selecciona una Opción">
                                                <option selected>Selecciona una Opción</option>
                                                <option>Envio Domicilio</option>
                                                <option>Entrega en Tienda</option>
                                            </select>
                                            <label for="floatingInput" aria-label="Sabor de Pan"><i
                                                    class="icon-truck"></i> Tipo de Entrega</label>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-4">
                                        <div class="form-floating mb-3">
                                            <input type="datetime-local" class="form-control" id="floatingInput"
                                                placeholder="dd/mm/aaaa --:-- --">
                                            <label for="floatingInput" aria-label="Correo electrónico ó email"><i
                                                    class="icon-clock"></i> Fecha y Hora de Entrega</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-text">
                                    <div class="form-floating mb-3">
                                        <textarea class="form-control textarea" placeholder="Direccion"
                                            id="floatingTextarea2" style="height: 125px"></textarea>
                                        <label for="floatingTextarea2" aria-label="Dirección"><i
                                                class=" icon-map-pin"></i>
                                            Direccion</label>
                                    </div>
                                </div>


                                <div class="card-text row">
                                    <div class="col-12 col-sm-3">
                                        <div class="form-floating mb-3">
                                            <input type="number" class="form-control" id="floatingInput"
                                                placeholder="$00.00">
                                            <label for="floatingInput" aria-label="Monto Total"><i
                                                    class="icon-dollar"></i>Monto Total</label>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-3">
                                        <div class="form-floating mb-3">
                                            <input type="number" class="form-control" id="floatingInput"
                                                placeholder="Anticipo Minimo 30%">
                                            <label for="floatingInput" aria-label="Anticipo Minimo 30%"><i
                                                    class="icon-percent"></i> Anticipo Recomendado</label>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-3">
                                        <div class="form-floating mb-3">
                                            <input type="number" class="form-control" id="floatingInput"
                                                placeholder="Monto Restante">
                                            <label for="floatingInput" aria-label="Restante"><i class="icon-dollar"></i>
                                                Monto Restante</label>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-3">
                                        <div class="form-floating mb-3">
                                            <input type="number" class="form-control" id="floatingInput"
                                                placeholder="Importe de Base">
                                            <label for="floatingInput" aria-label="Importe de Base"><i
                                                    class="icon-dollar"></i> Importe de Base</label>
                                        </div>
                                    </div>
                                </div>



                                <div class="card-text">
                                    <div class="form-floating mb-3">
                                        <textarea class="form-control textarea" placeholder="Observacion"
                                            id="floatingTextarea2" style="height: 125px"></textarea>
                                        <label for="floatingTextarea2" aria-label="Observaciones"><i
                                                class="icon-edit-1"></i>
                                            Observaciones</label>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="card-footer text-center text-md-center text-lg-end p-3">
                    <button class="btn btn-danger col-12 col-sm-10 col-lg-5 col-xl-7" aria-label="Realizar Pedido"><i
                            class="icon-basket-1"></i>
                        Realizar Pedido</button>
                </div>
            </div>
            </div>
        </section>
    </main>
    <?php
 include("footer.php");
 ?>
    <script src="../recursos/js/index.min.js"></script>

    <script>
        AOS.init();
    </script>

</body>
</html>