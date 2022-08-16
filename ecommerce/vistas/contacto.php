<!DOCTYPE html>
<html lang="es">

<?php
include("header.php");
include("navbar.php");
?>


<body>
<?php
include("botonesflotantes.php");
?>
    <!-- ENCABEZADO CATEGORIAS -->
    <div class="bg-light pt-3 ps-3 mb-2">
        <div class="col-12">
            <nav class="text-uppercase" style="--bs-breadcrumb-divider: '/';" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="./" class="txt-none fw-bold text-danger txt-hover-reset">SEGUIR
                            COMPRANDO</a></li>
                    <li class="breadcrumb-item active fw-bold" aria-current="page">
                        CONTÁCTO
                    </li>
                </ol>
            </nav>
        </div>
    </div>

    <main>
        <!-- PRODUCTOS -->
        <section class="container">
            <div class="row">
                <div class="card mb-3" style="z-index:1;">
                    <div class="row g-0">
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title fw-bold text-uppercase text-center">¿Duda o sugerencia?</h5>
                                <p class="card-text text-muted fw-bold text-center fs-6">Escríbenos y nos pondremos en
                                    contacto.</p>
                                <div class="card-text">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="floatingInput" placeholder="La Fogaza">
                                        <label for="floatingInput" aria-label="Nombre completo"><i class="icon-user"></i> Nombre completo</label>
                                    </div>
                                </div>
                                <div class="card-text row">
                                    <div class="col-12 col-sm-6">
                                        <div class="form-floating mb-3">
                                            <input type="email" class="form-control" id="floatingInput" placeholder="correo@dominio.com">
                                            <label for="floatingInput" aria-label="Correo electrónico ó email"><i class="icon-at"></i> Correo electrónico</label>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <div class="form-floating mb-3">
                                            <input type="number" class="form-control" id="floatingInput" placeholder="962 000 00 00">
                                            <label for="floatingInput" aria-label="Telefono"><i class="icon-phone-1"></i> Teléfono</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-text">
                                    <div class="form-floating mb-3">
                                        <textarea class="form-control textarea" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 200px"></textarea>
                                        <label for="floatingTextarea2" aria-label="Mensaje"><i class="icon-edit-1"></i>
                                            Mensaje</label>
                                    </div>
                                </div>
                                <div class="card-text">
                                    <button class="btn btn-danger col-12" aria-label="Enviar mensaje"><i class="icon-mail"></i> Enviar mensaje</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 p-2">
                            <div class="col-12 text-center fs-5 mt-2 mb-2">
                                <strong>¡ SERVICIO A DOMICILIO !</strong>
                            </div>
                            <div class="col-12 text-center mt-2">
                                <div class="card-text text-muted fs-5"><i class="icon-motorcycle"></i> Lunes a Domingo
                                    <i class="icon-truck"></i>
                                </div>
                                <div class="card-text text-muted fs-5"><i class="icon-clock"></i> 9:00 a 18:00 horas
                                </div>
                            </div>
                            <div class="col-12 text-center fs-5 mt-2 mb-2">
                                <strong>¡ S Í G U E N O S !</strong>
                            </div>
                            <div class="col-12 text-center">
                                <a class="txt-none" aria-label="Facebook" href="https://www.facebook.com/LaFogaza" target="_blank" data-bs-toggle="tooltip" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Tooltip on top">
                                    <i class="fs-2 text-primary icon-facebook-1"></i>
                                </a>
                                <a class="txt-none" aria-label="Instagram" href="https://www.instagram.com/LaFogaza.tap/" target="_blank">
                                    <i class="fs-2 text-danger icon-instagram"></i>
                                </a>
                                <a class="txt-none" aria-label="Whatsapp" href="https://wa.me/+529621531832" target="_blank">
                                    <i class="fs-2 text-success icon-whatsapp"></i>
                                </a>
                            </div>
                            <div class="col-12 text-center">
                                <div id="popcorn" aria-describedby="tooltip"></div>
                                <div id="tooltip" role="tooltip" style="position: absolute; inset: auto auto 0px 0px; margin: 0px; transform: translate(127px, -347px);" data-popper-placement="top">
                                </div>
                                <div class="col-12 text-center fs-5 mt-2 mb-2">
                                    <strong>¡ L L Á M A N O S !</strong>
                                </div>
                                <div class="col-12 text-center mt-2">
                                    <a class="txt-none text-muted fs-5" href="tel:+529621531832"><i class="icon-phone-1"></i> 962 153 18 32
                                    </a>
                                </div>
                                <div class="col-12 text-center fs-5 mt-2">
                                    <strong>¡ U B Í C A N O S !</strong>
                                </div>
                                <div class="col-12 text-center mt-2">
                                    <a class="txt-none text-muted" href="https://g.page/LaFogaza?share" target="_blank"><i class="icon-location-1"></i> 4a Av. Norte entre Central y 1a
                                        Poniente.
                                        Tapachula, Chiapas</a>
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3855.5251687446057!2d-92.2673708856765!3d14.907806573472065!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x858e0f20fb86779d%3A0x1d948a7d3a6eef09!2sLa%20Fogaza!5e0!3m2!1ses-419!2smx!4v1659239627424!5m2!1ses-419!2smx" width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
    <!-- BOOTSTRAP -->
    <!-- https://getbootstrap.com/docs/5.2/getting-started/introduction/ -->
    <script src="../recursos/bootstrap-5.2.0/popper.js"=<?php echo time(); ?>"></script>
    <script src="../recursos/bootstrap-5.2.0/js/bootstrap.min.js"></script>

    <!-- JQUERY -->
    <!-- https://jquery.com/ -->
    <script src="../recursos/jQuery-3.6.0/jquery-3.6.0.min.js"=<?php echo time(); ?>"></script>

    <!-- SWEETALERT -->
    <!-- https://sweetalert2.github.io/ -->
    <script src="../recursos/plugins/sweetalert2/package/dist/sweetalert2.all.min.js"=<?php echo time(); ?>"></script>

    <!-- AOS Framework -->
    <!-- https://michalsnik.github.io/aos/ -->
    <script src="../recursos/plugins/aos-master/dist/aos.js"=<?php echo time(); ?>"></script>

    <script src="../recursos/js/index.js"=<?php echo time(); ?>"></script>
    <script src="../recursos/js/index.js"=<?php echo time(); ?>"></script>

    <script>
        AOS.init();
    </script>
</body>

</html>