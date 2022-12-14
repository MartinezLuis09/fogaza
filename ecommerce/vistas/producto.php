<!--ARCHIVOS PHP -->
<?php include("header.php"); include("navbar.php");?>
<!-- ENCABEZADO CATEGORIAS -->
<div class="bg-light pt-3 ps-3 mb-2">
        <div class="col-12">
            <nav class="text-uppercase" style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php" class="txt-none bold text-danger txt-hover-reset">SEGUIR
                                COMPRANDO</a></li>
                    <li class="breadcrumb-item active bold" aria-current="page" id="idtituloEncabezado"></li>
                </ol>
            </nav>
        </div>
    </div>
<!--PRODUCTO INDIVIDUAL-->
<body>
<!--ARCHIVOS PHP -->
<?php include("botonesflotantes.php");?>
<main>
        <!-- PRODUCTOS -->
        <section class="container">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="row">
                            <div class="col-12 col-sm-4" data-aos="fade-up">

                                <!-- <img src="ecommerce/recursos/img/productos/principal/default.png" class="card-img-top"
                                    alt="..."> -->
                                <div class="card">
                                    <img src="../recursos/img/productos/principal/default.png"
                                        class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <!-- <div id="carouselExampleControls" class="carousel slide"
                                            data-bs-ride="carousel">
                                            <div class="carousel-inner">
                                                <div class="carousel-item active">
                                                    <img src="ecommerce/recursos/img/productos/principal/default.png"
                                                        class="card-img-top" alt="...">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="ecommerce/recursos/img/productos/principal/default.png"
                                                        class="card-img-top" alt="...">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="ecommerce/recursos/img/productos/principal/default.png"
                                                        class="card-img-top" alt="...">
                                                </div>
                                            </div>
                                            <button class="carousel-control-prev" type="button"
                                                data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Previous</span>
                                            </button>
                                            <button class="carousel-control-next" type="button"
                                                data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Next</span>
                                            </button>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-8">
                                <div class="card-body">
                                    <p class="card-title fs-1 m-0 text-uppercase text-danger text-uppercase" id="idtitulo"></p>
                                    <p class="card-text fs-3" >$<strong id="idprecio"></strong></p>
                                    <p class="card-text" id="iddescripcion">
                                        
                                    </p>
                                    <p class="card-text">
                                        <small class="text-muted">
                                            Entrega aproximada <i class="icon-clock"></i> 30 minutos <i
                                                class="icon-truck"></i> <i class="icon-motorcycle"></i>
                                        </small>
                                    </p>
                                    <div class="card-text">
                                        <div class="form-floating">
                                            <select class="form-select" id="floatingSelect"
                                                aria-label="Floating label select example">
                                                <option value="0" selected>Selecciona tu preferido</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                            <label for="floatingSelect">Tama??o</label>
                                        </div>
                                    </div>
                                    <div class="card-text mt-3">
                                        <div class="form-floating">
                                            <textarea class="form-control textarea"
                                                placeholder="Indicaciones sobre el producto" id="floatingTextarea2"
                                                style="height: 90px"></textarea>
                                            <label for="floatingTextarea2">Indicaciones sobre el producto</label>
                                        </div>
                                    </div>
                                    <div class="card-text mt-3  col-12 col-sm-6">
                                        <label for="">Cantidad</label>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text bg-white pointer" id="iptMinus"
                                                aria-label="Restar cantidad"><i class="icon-minus"></i></span>
                                            <input type="text" class="form-control c-auto text-center" id="iptCantidad" precio=""
                                                aria-label="cantidad" value="1" readonly>
                                            <span class="input-group-text bg-white pointer" aria-label="Sumar cantidad"
                                                id="iptPlus"><i class="icon-plus"></i></span>
                                        </div>
                                    </div>
                                    <div class="card-text mt-3 col-12">
                                        <div class="input-group mb-3">
                                            <span class="input-group-text">$</span>
                                            <input type="text" class="form-control text-end" id="iptSubtotal"
                                                aria-label="Precio total del producto" value="0.00" disabled>
                                        </div>
                                    </div>
                                    <div class="card-text mt-3">
                                        <div class="col d-flex justify-content-end">
                                            <button type="button" class="btn btn-danger col-6" id="btnCarrito">A??adir al
                                                carrito</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
<!--ARCHIVOS PHP -->
    <?php include("footer.php");?>
<!--ARCHIVOS SCRIPTS -->
    <script src="../recursos/js/index.js"=<?php echo time(); ?>"></script>
    <script src="../recursos/js/index.min.js"=<?php echo time(); ?>"></script>
    <script src="../recursos/js/producto.js"=<?php echo time(); ?>"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>