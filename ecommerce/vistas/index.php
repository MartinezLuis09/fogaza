<?php
    include("header.php");
    require("navbar.php");
    require("slider.php");
?>
<body>
   
 <!-- ENCABEZADO CATEGORIAS -->
 <div class="bg-light p-2">
        <div class="row">
            <div class="col-11 col-sm-6 col-lg-3">
                <select class="form-select form-select ms-4 col-2" aria-label="Categorías" id="selectCategorias">
                
                </select>
            </div>
            <div class="col-4 col-sm-6 col-lg-9 d-none d-sm-flex flex-row-reverse">
                <button type="button" class="btn btn-default" id="btnGridList"><i class="icon-th-list"></i></button>
                <button type="button" class="btn btn-default active" id="btnGridCol"><i class="icon-th"></i></button>
            </div>
        </div>
    </div>


   <main>
     <!-- ENCABEZADO CATEGORIAS -->
     <div class="bg-light p-2">
        <div class="col-12 ">
            <nav class="text-uppercase" style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="./" class="txt-none bold text-danger txt-hover-reset">INICIO</a></li>
                    <li class="breadcrumb-item active bold" aria-current="page"></li>
                </ol>
            </nav>
        </div>
    </div>
       <!-- PRODUCTOS -->
       <section class="container">
       <div class="row" id="contenedorProductosLista">
                
        </div>
       </section>
   </main>
   <?php
include("footer.php");
?>
   <script src="../recursos/js/index.js"=<?php echo time(); ?>"></script>
   <script src="../recursos/js/productos.js"=<?php echo time(); ?>"></script>
   <script src="../recursos/js/buscador.js"=<?php echo time(); ?>"></script>

   <script>
       AOS.init();
   </script>
   
</body>