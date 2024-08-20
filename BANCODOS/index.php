<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <style>
        body {
            /* fallback for old browsers */
            background: #6a11cb;

            /* Chrome 10-25, Safari 5.1-6 */
            background: -webkit-linear-gradient(to right, rgba(106, 17, 203, 1), rgba(37, 117, 252, 1));

            /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
            background: linear-gradient(to right, rgba(106, 17, 203, 1), rgba(37, 117, 252, 1));
            background-attachment: fixed;
        }
    </style>
</head>

<body>





    <!-- gradient-custom -->
    <form action="validar.php" method="post">

        <section class="vh-100">
            <div class="container  py-5 vh-100">

                <div class="row d-flex justify-content-center align-items-center h-100">
                    <!-- colocando imagien al login -->
                    <div class="col-md-8 col-lg-7 col-xl-6 d-none d-xl-block ">
                        <img src="https://img.freepik.com/free-vector/login-concept-illustration_114360-739.jpg?w=740&t=st=1722642616~exp=1722643216~hmac=97df06844808987e239b6981a016710bcdaafa53ce3eb10e9f3b01bfb4239b63" class="img-fluid rounded shadow-sm object-fit-cover " alt="Phone image">
                    </div>
                    <div class="col-12 col-md-8 col-lg-6 col-xl-5 ">
                        <div class="card bg-dark text-white" style="border-radius: 1rem; ">
                            <div class="card-body p-5 text-center  ">

                                <!-- cambiarle que no se pase del fondo el siguiente div -->
                                <div class="mb-md-5 mt-md-4 pb-5 ">

                                    <h2 class="fw-bold mb-2 text-uppercase">Login</h2>
                                    <p class="text-white-50 mb-5">Porfavor ingrese su
                                        usuario y su contraseña!</p>

                                    <div data-mdb-input-init class="form-outline form-white mb-4">
                                        <input type="text" id="UsuarioSistema" name="UsuarioSistema" class="form-control form-control-lg" />
                                        <label class="form-label" for="UsuarioSistema">Usuario</label>
                                    </div>

                                    <div data-mdb-input-init class="form-outline form-white mb-4">
                                        <input type="password" id="ClaveSistema" name="ClaveSistema" class="form-control form-control-lg" />
                                        <label class="form-label" for="ClaveSistema">Contraseña</label>
                                    </div>

                                    <button data-mdb-button-init data-mdb-ripple-init class="btn btn-outline-light btn-lg px-5 mt-5" type="submit">Login</button>

                                    <!--  <div class="d-flex justify-content-center text-center mt-4 pt-1">
                                        <a href="#!" class="text-white"><i class="fab fa-facebook-f fa-lg"></i></a>
                                        <a href="#!" class="text-white"><i class="fab fa-twitter fa-lg mx-4 px-2"></i></a>
                                        <a href="#!" class="text-white"><i class="fab fa-google fa-lg"></i></a>
                                    </div> -->

                                </div>



                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </form>



</body>

</html>