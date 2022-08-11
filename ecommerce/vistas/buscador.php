<!DOCTYPE html>
<html lang="es">


<?php
include 'header.php';
include 'navbar.php';
?>

<body>

    <!-- ENCABEZADO CATEGORIAS -->
    <div class="bg-light pt-3 ps-3 mb-2">
        <div class="row">
            <div class="col-12 col-sm-10 col-lg-6">
                <nav class="text-uppercase" style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="./"
                                class="txt-none bold text-danger txt-hover-reset">SEGUIR
                                COMPRANDO</a></li>
                        <li class="breadcrumb-item active bold" id="productoBuscado" aria-current="page"></li>
                    </ol>
                </nav>
                <div class="col-11 col-sm-6 col-lg-3">
                <select class="form-select form-select ms-4 col-2" aria-label="Categorías" id="">
                    <option selected>Destacados</option>
                    <option value="1">Categoría 1</option>
                    <option value="2">Categoría 2</option>
                    <option value="3">Categoría 3</option>
                </select>
            </div>
            </div>
            

            <div class="col-sm-2 col-md-6 col-lg-6 d-none d-sm-flex flex-row-reverse">
                <button type="button" class="btn btn-default" id="btnGridList"><i class="icon-th-list"></i></button>
                <button type="button" class="btn btn-default" id="btnGridCol"><i class="icon-th"></i></button>
            </div>
        </div>
    </div>
    


    <main>
        <section class="container">
            <div class="row" id="contenedorProductos">
                
            </div>
        </section>
    </main>
    <?php include 'footer.php'; ?>
    <script src="../recursos/js/index.js?t=<?php echo time(); ?>"></script>
    <script src="../recursos/js/buscador.js?t=<?php echo time(); ?>"></script>

    <script>
    AOS.init();
    </script>

</body>

</html>