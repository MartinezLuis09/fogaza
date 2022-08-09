<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #211B1D;">
        <div class="container-fluid">
            <div class="container">
                <a class="navbar-brand col-1 d-none d-sm-block" href="./">
                    <img src="ecommerce/recursos/img/logo/logo.png" alt="" height="48">
                </a>
            </div>

            <button class="navbar-toggler text-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="icon-th"></span>
            </button>
            <div class="collapse navbar-collapse me-0 me-sm-5" id="navbarNavDropdown">
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