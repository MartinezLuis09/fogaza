<!DOCTYPE html>
<html lang="es">

<?php
 include("header.php");
 include("navbar.php");
 ?>

<body>
  
    <!-- ENCABEZADO CATEGORIAS -->
    <div class="bg-light pt-3 ps-3 mb-2">
        <div class="col-12 ">
            <nav class="text-uppercase" style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="./"
                            class="txt-none bold text-danger txt-hover-reset">INICIO</a></li>
                    <li class="breadcrumb-item active bold" aria-current="page">CARRITO</li>
                </ol>
            </nav>
        </div>
    </div>

    <main>
        <!-- PRODUCTOS -->
        <section class="container">
            <div class="row">
                <div class="card p-0">
                    <div class="card-header fw-bold">
                        CARRITO DE COMPRAS
                    </div>
                    <div class="card-body p-sm-2 p-md-4 p-lg-4 p-xl-4">
                        <div class="row">
                            <div class="card-text text-center collapse">
                                <p class="text-muted fs-5"><i class="icon-basket"></i> Su carrito de compras está vacío.
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="card-text col-4 col-sm-4 col-md-4 col-lg-2 col-xl-2">
                                <img src="../recursos/img/productos/principal/default.png" width="100px" alt="">
                            </div>
                            <div class="card-text col-8 col-sm-8 col-md-8 col-lg-4 col-xl-5">
                                <p class="text-uppercase fw-bold">PRODUCTO #</p>
                                <p class="text-muted m-0">Sabor: #</p>
                                <p class="text-muted m-0">Tamaño: #</p>
                                <p class="text-muted m-0 ellipsis-2">Lorem ipsum dolor sit amet consectetur adipisicing
                                    elit. Consequatur tempore maiores possimus ipsum, nulla quae esse corporis voluptate
                                    fuga laboriosam numquam dolor perspiciatis minus et totam facere veritatis. Numquam,
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
                                <p class="text-muted m-0 ellipsis-2">Lorem ipsum dolor sit amet consectetur
                                    adipisicing elit. Consequatur tempore maiores possimus ipsum, nulla quae esse
                                    corporis voluptate fuga laboriosam numquam dolor perspiciatis minus et totam
                                    facere veritatis. Numquam, nihil?</p>
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
                                <p class="text-muted m-0 ellipsis-2">Lorem ipsum dolor sit amet consectetur
                                    adipisicing elit. Consequatur tempore maiores possimus ipsum, nulla quae
                                    esse corporis voluptate fuga laboriosam numquam dolor perspiciatis minus et
                                    totam facere veritatis. Numquam, nihil?</p>
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
                    <div class="card-footer text-center text-md-center text-lg-end">
                        <button class="btn btn-danger col-11 col-sm-10 col-lg-5 col-xl-3">Continuar</button>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <?php
 include("footer.php");
 ?>

    <script src="ecommerce/recursos/js/index.js"></script>

    <script>
        AOS.init();
    </script>
</body>

</html>