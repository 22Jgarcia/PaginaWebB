<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Dashboard </title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
    <script src="js/datatables-simple-demo.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/card-hidder.js"></script>
</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="home.php">Inicio</a>
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle"><i class="fas fa-bars"></i></button>

        <!-- Navbar Search-->
        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
            <div class="input-group">
                <input 
                    class="form-control" 
                    id="search" 
                    type="text" 
                    placeholder="Search for..." 
                    aria-label="Search for..." 
                    aria-describedby="btnNavbarSearch"
                />
                <button 
                    class="btn btn-primary"
                    id="btnNavbarSearch"
                    type="button"
                    onclick="filterCard('clientes')"
                >
                    <i class="fas fa-search"></i>
                </button>
            </div>
        </form>
        <!-- Navbar-->
        <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#!">Settings</a></li>
                    <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                    <li>
                        <hr class="dropdown-divider" />
                    </li>
                    <li><a class="dropdown-item" href="#!">Logout</a></li>
                </ul>
            </li>
        </ul>
    </nav>



    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">

                    <div class="nav">
                        <div class="sb-sidenav-menu-heading p-1">Paginas</div>
                        <div class="btn btn-dark">
                            <a class="nav-link collapsed" href="home.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard

                            </a>
                        </div>


                        <!--  aca coloque un link para productos.php -->
                        <div class="btn btn-dark">
                            <a class="nav-link collapsed" href="movimientos.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-cube"></i></div>
                                Movimientos

                            </a>
                        </div>
                        <div class="btn btn-dark">
                            <a class="nav-link collapsed" href="clientes.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-address-card"></i></div>
                                Clientes

                            </a>
                        </div>
                        <div class="btn btn-dark">
                            <a class="nav-link collapsed" href="cuentas.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-user"></i></div>
                                Cuentas

                            </a>
                        </div>

                        <div class="btn btn-dark">
                            <a class="nav-link collapsed" href="pagos.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-book"></i></div>
                                Pagos

                            </a>
                        </div>
                        <div class="btn btn-dark">
                            <a class="nav-link collapsed" href="EmpleadosCrud.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-male"></i></div>
                                Empleados

                            </a>
                        </div>
                        <div class="btn btn-dark">
                            <a class="nav-link collapsed" href="movimientos.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-newspaper"></i></div>
                                Movimientos

                            </a>
                        </div>
                        <div class="btn btn-dark">
                            <a class="nav-link collapsed" href="Prestamos.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-suitcase"></i></div>
                                Prestamos

                            </a>
                        </div>
                        <div class="btn btn-dark">
                            <a class="nav-link collapsed" href="Servicios.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-signal"></i></div>
                                Servicios

                            </a>
                        </div>
                        <div class="btn btn-dark">
                            <a class="nav-link collapsed" href="Tarjetas.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-window-maximize"></i></div>
                                Tarjetas

                            </a>
                        </div>
                        <div class="btn btn-dark">
                            <a class="nav-link collapsed" href="Usuarios.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-id-badge"></i></div>
                                Usuarios

                            </a>
                        </div>
                    </div>
                </div>

            </nav>
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading">Core</div>
                        <a class="nav-link" href="index.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Dashboard
                        </a>
                        <a class="nav-link" href="productos.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-cube"></i></div>
                            Productos
                        </a>
                        <a class="nav-link" href="usuarios.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-address-card"></i></div>
                            Usuarios
                        </a>
                </div>

            </nav>





        </div>
        <script src="js/scripts.js"></script>
        <div id="layoutSidenav_content">