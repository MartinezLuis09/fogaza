<!DOCTYPE html>
<html lang="es">

<?php
 include("header.php");
 include("navbar.php");
 ?>

<!-- ENCABEZADO CATEGORIAS -->
<div class="bg-light pt-3 ps-3 mb-2">
        <div class="col-12">
            <nav class="text-uppercase" style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php" class="txt-none bold text-danger txt-hover-reset">INICIO</a></li>
                    <li class="breadcrumb-item active bold" aria-current="page">PRODUCTO #</li>
                </ol>
            </nav>
        </div>
    </div>

<body>

<?php
include("botonesflotantes.php");
?>
    <main>
        <!-- PRODUCTOS -->
        <section class="container">
            <div class="row" id="contenedorProducto">
            </div>
        </section>
    </main>

    <?php
 include("footer.php");
 ?>

    <script src="../recursos/js/index.js"=<?php echo time(); ?>"></script>
    <script src="../recursos/js/index.min.js"=<?php echo time(); ?>"></script>
    <script src="../recursos/js/productos.js"=<?php echo time(); ?>"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>