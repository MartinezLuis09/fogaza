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
       <div class="row">
                <div class="gridProduct pointer col-6 col-lg-3 pt-4" identificador="1" name="producto 1" precio="10"> 
                <div class="card">
                        <div class="rowList">
                            <div class="imgList" data-aos="fade-up">
                            <a href="producto.php">      
                            <img src="../recursos/img/productos/principal/default.png" class="card-img-top"
                                    alt="..." >
                            </div>
                            </a>
                            <div class="bodyList">
                                <div class="card-body pb-4" style="height: 200px;">
                                    <p class="card-title m-0 text-danger fw-bold"><strong></strong></p>
                                    <h4 class="card-text">$ 10.00</h4>
                                    <hr>
                                    <p class="card-text ellipsis-2 text-muted descripcion">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Sodales ut etiam sit amet nisl
                                        purus in mollis nunc. Iaculis at erat pellentesque adipiscing. Elementum eu
                                        facilisis sed odio morbi quis commodo odio. Eleifend quam adipiscing vitae proin
                                        sagittis nisl rhoncus mattis. Morbi non arcu risus quis varius quam quisque.
                                        Facilisi cras fermentum odio eu feugiat pretium. Vitae congue mauris rhoncus
                                        aenean vel elit. Morbi non arcu risus quis varius quam quisque id. Fermentum et
                                        sollicitudin ac orci phasellus egestas tellus rutrum tellus. Pharetra sit amet
                                        aliquam id diam maecenas ultricies mi. Aliquam sem et tortor consequat.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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