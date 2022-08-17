<!--ARCHIVOS PHP -->
<?php include("header.php"); include("navbar.php");?>
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
<!--PRODUCTO INDIVIDUAL-->
<body>
<!--ARCHIVOS PHP -->
<?php include("botonesflotantes.php");?>
    <main>
        <section class="container">
            <div class="row" id="contenedorProducto">      
            </div>
        </section>
    </main>
<!--ARCHIVOS PHP -->
    <?php include("footer.php");?>
<!--ARCHIVOS SCRIPTS -->
    <script src="../recursos/js/index.js"=<?php echo time(); ?>"></script>
    <script src="../recursos/js/index.min.js"=<?php echo time(); ?>"></script>
    <script src="../recursos/js/productos.js"=<?php echo time(); ?>"></script>
    <script src="../recursos/js/producto.js"=<?php echo time(); ?>"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>