<?php require_once('layout/superior.php');       ?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cart</title>

    <style>
        body {
            background-image: url('https://img.freepik.com/vector-gratis/gradiente-formas-geometricas-sobre-fondo-oscuro_23-2148434188.jpg?w=1380&t=st=1723224536~exp=1723225136~hmac=32e18ecbcbcb28e312ff861f32111dd470debfb79eba3d027e5ef78594fc74e8');
            max-width: 100%;
            max-height: 100%;
        }
    </style>
</head>

<body>
    <div class="container-lg mt-2  ">
        <!-- <h1 class="text-center mt-4">PRODUCTOS</h1> -->
        <div class="row">
            <div class="col-lg-4 col-md-6" data-card="clientes">
                <!-- carta para presentar las tablas -->
                <div class="card mt-5 border border-dark " style="width: 18rem; height: 18rem;">
                    <div class="h-50 ">
                        <img src="https://images.unsplash.com/photo-1556740749-887f6717d7e4?q=80&w=1471&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="card-img-top h-100" alt="..." style="object-fit: cover;">
                    </div>
                    <div class="card-body ">
                        <p class="card-text text-center">Aca se encuentra la <b>TABLA CLIENTES</b></p>
                    </div>
                    <div class="d-grid gap-2 col-6 mx-auto">

                        <div class="text-decoration-none text-dark  d-flex justify-content-center">
                            <a href="clientes.php">
                                <button type="button" class="btn btn-light  text-center  ">
                                    CLIENTES
                                </button>
                            </a>
                        </div>


                    </div>
                </div>
            </div>

            <!-- relleno de cart -->
            <div class="col-lg-4 col-md-6 data-card="pagos"">
                <!-- carta para presentar las tablas -->
                <div class="card  mt-5 border border-dark" style="width: 18rem; height: 18rem;">
                    <div class="h-50 flex">
                        <img src="https://images.unsplash.com/photo-1653330963134-329a61aedc68?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="card-img-top h-100" style="max-width:286px; object-fit: cover;" alt="...">

                    </div>
                    <div class="card-body ">
                        <p class="card-text text-center">Aca se encuentra la <b>TABLA PAGOS</b></p>
                    </div>
                    <div class="d-grid gap-2 col-6 mx-auto">

                        <div class="text-decoration-none text-dark  d-flex justify-content-center">
                            <a href="pagos.php">
                                <button type="button" class="btn btn-light  text-center  ">
                                    PAGOS
                                </button>
                            </a>
                        </div>

                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 data-card="cuentas"">
                <!-- carta para presentar las tablas -->
                <div class="card  mt-5 border border-dark" style="width: 18rem; height: 18rem;">
                    <div class="h-50 flex">
                        <img src="https://cdn.pixabay.com/photo/2017/11/10/05/46/group-2935521_1280.png" class="card-img-top h-100" style="max-width:286px; object-fit: cover;" alt="...">

                    </div>
                    <div class="card-body">
                        <p class="card-text text-center">Aca se encuentra la <b>TABLA CUENTAS</b></p>
                    </div>
                    <div class="d-grid gap-2 col-6 mx-auto">

                        <div class="text-decoration-none text-dark  d-flex justify-content-center">
                            <a href="cuentas.php">
                                <button type="button" class="btn btn-light  text-center  ">
                                    CUENTAS
                                </button>
                            </a>
                        </div>


                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 data-card="empleados"">
                <!-- carta para presentar las tablas -->
                <div class="card  mt-5 border border-dark" style="width: 18rem; height: 18rem;">
                    <div class="h-50 flex">
                        <img src="https://images.unsplash.com/photo-1543269865-cbf427effbad?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="card-img-top h-100" style="max-width:286px; object-fit: cover;" alt="...">

                    </div>
                    <div class="card-body">
                        <p class="card-text text-center">Aca se encuentra la <b>TABLA EMPLEADOS</b></p>
                    </div>
                    <div class="d-grid gap-2 col-6 mx-auto">

                        <div class="text-decoration-none text-dark  d-flex justify-content-center">
                            <a href="EmpleadosCrud.php">
                                <button type="button" class="btn btn-light  text-center  ">
                                    EMPLEADOS
                                </button>
                            </a>
                        </div>


                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 data-card="movimientos"">
                <!-- carta para presentar las tablas -->
                <div class="card  mt-5 border border-dark" style="width: 18rem; height: 18rem;">
                    <div class="h-50 flex">
                        <img src="https://plus.unsplash.com/premium_photo-1661409078904-42334551db0c?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="card-img-top h-100" style="max-width:286px; object-fit: cover;" alt="...">

                    </div>
                    <div class="card-body">
                        <p class="card-text text-center">Aca se encuentra la <b>TABLA MOVIMIENTOS</b></p>
                    </div>
                    <div class="d-grid gap-2 col-6 mx-auto">


                        <div class="text-decoration-none text-dark  d-flex justify-content-center">
                            <a href="movimientos.php">
                                <button type="button" class="btn btn-light  text-center  ">
                                    MOVIMIENTOS
                                </button>
                            </a>
                        </div>



                    </div>
                </div>
            </div>



            <div class="col-lg-4 col-md-6 data-card="prestamos"">
                <!-- carta para presentar las tablas -->
                <div class="card  mt-5 border border-dark" style="width: 18rem; height: 18rem;">
                    <div class="h-50 flex">
                        <img src="https://images.unsplash.com/photo-1521790797524-b2497295b8a0?q=80&w=1738&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="card-img-top h-100" style="max-width:286px; object-fit: cover;" alt="...">

                    </div>
                    <div class="card-body ">
                        <p class="card-text text-center">Aca se encuentra la <b>TABLA PRESTAMOS</b></p>
                    </div>

                    <div class="d-grid gap-2 col-6 mx-auto">
                        <div class="text-decoration-none text-dark  d-flex justify-content-center">
                            <a href="Prestamos.php">
                                <button type="button" class="btn btn-light  text-center  ">
                                    PRESTAMOS
                                </button>
                            </a>
                        </div>

                    </div>
                </div>
            </div>


            <div class="col-lg-4 col-md-6 data-card="servicios"">
                <!-- carta para presentar las tablas -->
                <div class="card mt-5 border border-dark " style="width: 18rem; height: 18rem;">
                    <div class="h-50 ">
                        <img src="https://imgs.search.brave.com/pVF8EyS5MzxFq8OAzUO8LTF_270bWJx88kcvoOyjQ2Q/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly9jZG4u/c2hvcGlmeS5jb20v/cy9maWxlcy8xLzAy/MjkvMDgzOS9maWxl/cy9VbnRpdGxlZF9k/ZXNpZ25fMjhkMjkx/NWYtNDZkYi00NDY1/LTliMmQtNGUwNWIx/ODgzNjRmLnBuZz9m/b3JtYXQ9d2VicCZ2/PTE1OTMwMTU4MjQm/d2lkdGg9MTAyNA" class="card-img-top h-100" alt="..." style="object-fit: cover;">
                    </div>
                    <div class="card-body ">
                        <p class="card-text text-center">Aca se encuentra la <b>TABLA SERVICIOS</b></p>
                    </div>
                    <div class="d-grid gap-2 col-6 mx-auto">

                        <div class="text-decoration-none text-dark d-flex justify-content-center ">

                            <a href="Servicios.php">
                                <button type="button" class="btn btn-light  text-center  ">
                                    SERVICIOS

                                </button>
                            </a>
                        </div>

                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 data-card="tarjetas"">
                <!-- carta para presentar las tablas -->
                <div class="card mt-5 border border-dark " style="width: 18rem; height: 18rem;">
                    <div class="h-50 ">
                        <img src="https://images.unsplash.com/photo-1614267118647-20c5ffa6a6e4?q=80&w=1469&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="card-img-top h-100" alt="..." style="object-fit: cover;">
                    </div>
                    <div class="card-body ">
                        <p class="card-text text-center">Aca se encuentra la <b>TABLA TARJETAS</b></p>
                    </div>
                    <div class="d-grid gap-2 col-6 mx-auto">

                        <div class="text-decoration-none text-dark d-flex justify-content-center  ">
                            <a href="Tarjetas.php">
                                <button type="button" class="btn btn-light  text-center  ">
                                    TARJETAS
                                </button>
                            </a>
                        </div>

                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 data-card="usuarios"">
                <!-- carta para presentar las tablas -->
                <div class="card  mt-5 border border-dark" style="width: 18rem; height: 18rem;">
                    <div class="h-50 flex">
                        <img src="https://plus.unsplash.com/premium_photo-1677094310918-cc302203b21c?q=80&w=1632&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="card-img-top h-100" style="max-width:286px; object-fit: cover;" alt="...">

                    </div>
                    <div class="card-body">
                        <p class="card-text text-center">Aca se encuentra la <b>TABLA USUARIOS</b></p>
                    </div>
                    <div class="d-grid gap-2 col-6 mx-auto">
                        <div class="text-decoration-none text-dark d-flex justify-content-center ">

                            <a href="Usuarios.php">
                                <button type="button" class="btn btn-light  text-center  ">

                                    USUARIOS

                                </button>
                            </a>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>

</body>

</html>


