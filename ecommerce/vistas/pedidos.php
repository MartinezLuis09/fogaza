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
        <section class="container">
            <div class="row">
                <div class="card p-0">
                    <div class="card-header fw-bold">
                        SOLICITUD DE PEDIDO
                    </div>
                    <div class="card-body p-sm-2 p-md-4 p-lg-4 p-xl-4">
                        <div class="row">
                            <div class="card-text text-center">
                                <p class="text-muted">INSERTE FORMULARIO DE PEDIDO <i class="icon-clip"></i></p>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-center text-md-center text-lg-end">
                        <button class="btn btn-danger col-11 col-sm-10 col-lg-5 col-xl-3">Realizar pedidido</button>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <script src="ecommerce/recursos/js/index.min.js"></script>

    <script>
        AOS.init();
    </script>
    <?php
 include("footer.php");
 ?>
</body>
</html>