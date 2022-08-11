<?php
    include("header.php");
    require("navbar.php");
    require("slider.php");
?>
<body>
   
   <!-- ENCABEZADO CATEGORIAS -->
   <div class="bg-light pt-3 ps-3 mb-2">
       <div class="row">
           <div class="col-12 col-sm-10 col-lg-6">
               <nav class="text-uppercase" style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                   <ol class="breadcrumb">
                       <li class="breadcrumb-item"><a href="./"
                               class="txt-none bold text-danger txt-hover-reset">INICIO</a></li>
                       </ol>
               </nav>
           </div>

           <div class="col-sm-2 col-md-6 col-lg-6 d-none d-sm-flex flex-row-reverse">
               <button type="button" class="btn btn-default" id="btnGridList"><i class="icon-th-list"></i></button>
               <button type="button" class="btn btn-default" id="btnGridCol"><i class="icon-th"></i></button>
           </div>
       </div>
   </div>


   <main>
       <!-- PRODUCTOS -->
       <section class="container">
       <div class="row" id="contenedorProductosLista">
                
                </div>
       </section>
   </main>
   <?php
include("footer.php");
?>
   <script src="../recursos/js/index.js"></script>
   <script src="../recursos/js/productos.js"></script>
   <script src="../recursos/js/buscador.js"></script>

   <script>
       AOS.init();
   </script>
   
</body>