<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>La Fogaza</title>
    <link rel="shortcut icon" href="ecommerce/recursos/img/logo/logo.png" type="image/x-icon">

    <!-- ICON-FONT [FONTELLO] -->
    <!-- https://fontello.com/ -->
    <link rel="stylesheet" href="ecommerce/recursos/fontello/css/fontello.min.css">
    <link rel="stylesheet" href="ecommerce/recursos/fontello/css/animation.min.css">

    <!-- BOOTSTRAP -->
    <!-- https://getbootstrap.com/docs/5.2/getting-started/introduction/ -->
    <link rel="stylesheet" href="ecommerce/recursos/bootstrap-5.2.0/css/bootstrap.min.css">
    <script src="ecommerce/recursos/bootstrap-5.2.0/popper.min.js"></script>
    <script src="ecommerce/recursos/bootstrap-5.2.0/js/bootstrap.min.js"></script>

    <!-- JQUERY -->
    <!-- https://jquery.com/ -->
    <script src="ecommerce/recursos/jQuery-3.6.0/jquery-3.6.0.min.js"></script>

    <!-- ANIMATION CSS -->
    <!-- https://animate.style/ -->
    <link rel="stylesheet" href="ecommerce/recursos/plugins/animate/animate.min.css">

    <!-- SWEETALERT -->
    <!-- https://sweetalert2.github.io/ -->
    <link rel="stylesheet" href="ecommerce/recursos/plugins/sweetalert2/package/dist/sweetalert2.min.css">
    <script src="ecommerce/recursos/plugins/sweetalert2/package/dist/sweetalert2.all.min.js"></script>

    <!-- AOS Framework -->
    <!-- https://michalsnik.github.io/aos/ -->
    <link rel="stylesheet" href="ecommerce/recursos/plugins/aos-master/dist/aos.min.css">
    <script src="ecommerce/recursos/plugins/aos-master/dist/aos.min.js"></script>

    <link rel="stylesheet" href="ecommerce/recursos/css/style.min.css">
</head>

<body>
    <!-- BARRA DE MENÚ -->
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #211B1D;">
        <div class="container-fluid">
            <div class="container">
                <a class="navbar-brand col-1 d-none d-sm-block" href="./">
                    <img src="ecommerce/recursos/img/logo/logo.png" alt="" height="48">
                </a>
            </div>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="icon-th"></span>
            </button>
            <div class="collapse navbar-collapse me-0 " id="navbarNavDropdown">
                <ul class="navbar-nav justify-content-end">

                    <form class="d-flex col-12 col-sm-12 mt-3 mt-sm-3 mt-lg-0">
                        <div class="input-group flex-nowrap" >
                            <input type="text" class="form-control" placeholder="Búsqueda" aria-label="Buscador de productos"
                                aria-describedby="addon-wrapping" id="iptBusqueda">
                            <span class="input-group-text bg-danger text-white pointer border-none btnBusqueda" id="addon-wrapping"><i
                                    class="icon-search"></i></span>
                        </div>
                    </form>

                    <li class="nav-item">
                        <a class="nav-link text-light" href="pedidos.html">Pedidos</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link text-light" href="contacto.html">Contacto</a>
                    </li>

                    <li class="nav-item dropdown  animate__animated animate__headShake" style="z-index:2;">
                        <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdownMenuLink" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Mi cuenta
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="#" id="btnLogin"><i class="icon-user"></i> Iniciar Sesión</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#"><i class="icon-pencil"></i> Registrarse</a></li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown collapse">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Leonardo Martínez
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="#"><i class="icon-user"></i> Perfil</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#"><i class="icon-off"></i> Cerrar Sesión</a></li>
                        </ul>
                    </li>
                    <li class="nav-item collapse">
                        <a class="nav-link " href="#">Mis compras</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="carrito.html"><i class="icon-basket"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

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

    <footer>
        <div class="bg-dark mt-4">
            <div class="col text-center text-light p-3">
                <strong style="color:#A8A8A8;"> <i class="icon-copyright"></i> 2022 Copyright </strong> La Fogaza.
                Tapachula, Chiapas
            </div>
        </div>
    </footer>

    <script src="ecommerce/recursos/js/index.min.js"></script>

    <script>
        AOS.init();
    </script>
</body>

</html>