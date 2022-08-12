<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>La Fogaza</title>
    <link rel="shortcut icon" href="ecommerce/recursos/img/logo/logo.png" type="image/x-icon">

    <!-- ICON-FONT [FONTELLO] -->
    <!-- https://fontello.com/ -->
    <link rel="stylesheet" href="ecommerce/recursos/fontello/css/fontello.css">
    <link rel="stylesheet" href="ecommerce/recursos/fontello/css/animation.css">

    <!-- BOOTSTRAP -->
    <!-- https://getbootstrap.com/docs/5.2/getting-started/introduction/ -->
    <link rel="stylesheet" href="ecommerce/recursos/bootstrap-5.2.0/css/bootstrap.min.css">
    <script src="ecommerce/recursos/bootstrap-5.2.0/popper.js"></script>
    <script src="ecommerce/recursos/bootstrap-5.2.0/js/bootstrap.min.js"></script>
    <script src="ecommerce/recursos/bootstrap-5.2.0/js/bootstrap.bundle.min.js"></script>

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
    <link rel="stylesheet" href="ecommerce/recursos/plugins/aos-master/dist/aos.css">
    <script src="ecommerce/recursos/plugins/aos-master/dist/aos.js"></script>

    <link rel="stylesheet" href="ecommerce/recursos/css/style.css">

</head>
<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #211B1D;">
        <div class="container-fluid">
            <div class="container">
                <a class="navbar-brand col-1 d-none d-sm-block" href="index.php">
                    <img src="ecommerce/recursos/img/logo/logo.png" alt="" height="48">
                </a>
            </div>

            <button class="navbar-toggler text-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="icon-th"></span>
            </button>
            <div class="collapse navbar-collapse me-0 me-sm-5" id="navbarNavDropdown">
                <ul class="navbar-nav justify-content-end">

                    <form class="d-flex col-12 col-sm-12 mt-3 mt-sm-3 mt-lg-0" role="form" method="POST">
                        <div class="input-group flex-nowrap" >
                            <input type="text" class="form-control" placeholder="Buscar" aria-label="Buscador de productos"
                                aria-describedby="addon-wrapping" id="iptBusqueda" >
                            <span class="input-group-text bg-danger text-white pointer border-none btnBusqueda" id="addon-wrapping"><i
                                    class="icon-search"></i></span>
                        </div>
                    </form>

                    <li class="nav-item">
                        <a class="nav-link text-light" href="ecommerce/vistas/pedidos.php">Pedidos</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link text-light" href="ecommerce/vistas/contacto.php">Contacto</a>
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
                        <a class="nav-link text-light" href="ecommerce/vistas/carrito.php"><i class="icon-basket"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="ecommerce/recursos/img/sliders/slider1.png" class="d-block w-100" alt="...">
        </div>
        <!-- <div class="carousel-item">
            <img src="..." class="d-block w-100" alt="...">
          </div> -->
    </div>
</div>
<body>
   
 <!-- ENCABEZADO CATEGORIAS -->
 <div class="bg-light p-2">
        <div class="row">
            <div class="col-11 col-sm-6 col-lg-3">
                <select class="form-select form-select ms-4 col-2" aria-label="Categorías" id="">
                <option selected>Categorías</option>
                    <option value="1">Pasteleria</option>
                    <option value="2">Pan Blanco</option>
                    <option value="3">Pan Dulce</option>
                    <option value="4">Bocadillos</option>
                    <option value="5">Velas</option>
                    <option value="6">Postres Y Panques</option>
                    <option value="7">Galletas</option>
                </select>
            </div>
            <div class="col-4 col-sm-6 col-lg-9 d-none d-sm-flex flex-row-reverse">
                <button type="button" class="btn btn-default" id="btnGridList"><i class="icon-th-list"></i></button>
                <button type="button" class="btn btn-default active" id="btnGridCol"><i class="icon-th"></i></button>
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
   <footer>
    <div class="row bg-dark mt-4">
        <div class="col text-center text-light p-3">
            <strong style="color:#A8A8A8;"> <i class="icon-copyright"></i> 2022 Copyright </strong> La Fogaza.
            Tapachula, Chiapas
        </div>
    </div>
</footer>
   <script src="ecommerce/recursos/js/index.js"></script>
   <script src="ecommerce/recursos/js/productos.js"></script>
   <script src="ecommerce/recursos/js/buscador.js"></script>    
   <script>
       AOS.init();
   </script>
</body>