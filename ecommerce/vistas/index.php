<!--ARCHIVOS PHP -->
<?php include("header.php"); require("navbar.php"); require("slider.php");?>

 <!-- ENCABEZADO CATEGORIAS -->
 <div class="bg-light p-2">
        <div class="row">
            <div class="col-11 col-sm-6 col-lg-3">
                <select class="form-select form-select ms-4 col-2 text-uppercase fw-bold"" aria-label="Categorías" id="selectCategorias">
                
                </select>
            </div>
            <div class="col-4 col-sm-6 col-lg-9 d-none d-sm-flex flex-row-reverse">
                <button type="button" class="btn btn-default" id="btnGridList"><i class="icon-th-list"></i></button>
                <button type="button" class="btn btn-default active" id="btnGridCol"><i class="icon-th"></i></button>
            </div>
        </div>
    </div>
<!-- INDEX -->
<body>
<!--ARCHIVOS PHP -->
<?php include("botonesflotantes.php");?>
   <main>
       <section class="container">
       <div class="row" id="contenedorProductosLista">       
        </div>
       </section>
   </main>
<!--ARCHIVOS PHP -->
   <?php include("footer.php");?>
   <!--ARCHIVOS SCRIPTS -->
   <script src="../recursos/js/index.js"=<?php echo time(); ?>"></script>
   <script src="../recursos/js/productos.js"=<?php echo time(); ?>"></script>
   <script src="../recursos/js/producto.js"=<?php echo time(); ?>"></script>
   <script src="../recursos/js/buscador.js"=<?php echo time(); ?>"></script>
   <script>
       AOS.init();
   </script>
   
</body>