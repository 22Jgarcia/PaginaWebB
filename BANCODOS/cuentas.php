<!-- Conexion a BDD para extraer datos de la tabla-->
<?php
require_once('db_conexion.php');
$script = "SELECT * FROM tbl_cuentas";
$cuentas = mysqli_query($conexion, $script);
?>

<!-- Insertar datos tabla BDD-->
<?php
// Verificar si se ha enviado el formulario
if (isset($_POST["submit"])) {
    // Obtener los valores del formulario
    $CodigoCliente = $_POST['codigoclientes'];
    $NumeroCuenta = $_POST['numerocuenta'];
    $TipoCuenta = $_POST['tipocuenta'];
    $Saldo = $_POST['saldo'];
    $FechaApertura = $_POST['fechaapertura'];
    $Estado = isset($_POST['gridRadios']) ? $_POST['gridRadios'] : null;
    $FechaCreacion = date('y/m/d');
    date_default_timezone_set('America/Guatemala');
    $HoraCreacion = date('H:i:s');
    $UsuarioCreacion = 'JORGE';

    // Preparar la consulta SQL
    require_once("db_conexion.php");
    $ScriptInsert = " INSERT INTO tbl_cuentas( CodigoCliente, NumeroCuenta,  TipoCuenta,  Saldo,FechaApertura,  Estado,  FechaCreacion, HoraCreacion, UsuarioCreacion) 
                  VALUES ('$CodigoCliente','$NumeroCuenta', '$TipoCuenta', '$Saldo', '$FechaApertura', '$Estado', '$FechaCreacion', '$HoraCreacion', '$UsuarioCreacion' )";


    // Ejecutar la consulta
    $result = mysqli_query($conexion, $ScriptInsert);

    // Redireccionar pagina 
    if ($result == true) {
        header("location:cuentas.php");
    } else {
        echo "Error al insertar los datos";
    }

    mysqli_close($conexion);
}
?>

<?php require_once('layout/superior.php');      ?>

<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CUENTAS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.1.2/css/dataTables.dataTables.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

</head>

<body>
    <div class="container-lg mt-5">
        <h1 class="text-center mt-4">CUENTAS</h1>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            <i class="bi bi-person-add"></i> Agregar
        </button>
        <div class="row">
            <div class="col-md-12">
                <table id="example" class="hover m-t-1" style="width:100%">



                    <thead>
                        <tr>
                            <th>CodigoCuenta </th>
                            <th>CodigoCliente </th>
                            <th>NumeroCuenta</th>
                            <th>TipoCuenta</th>
                            <th>saldo</th>
                            <th>FechaApertura</th>
                            <th>Estado</th>


                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($cuentas as $fila) {
                        ?>
                            <tr>
                                <td><?php echo ($fila["CodigoCuenta"]); ?></td>
                                <td><?php echo ($fila["CodigoCliente"]); ?></td>
                                <td><?php echo ($fila["NumeroCuenta"]); ?></td>
                                <td><?php echo ($fila["TipoCuenta"]); ?></td>
                                <td><?php echo ($fila["Saldo"]); ?></td>
                                <td><?php echo ($fila["FechaApertura"]); ?></td>
                                <td><?php echo ($fila["Estado"]); ?></td>



                            </tr>
                        <?php
                        }
                        ?>

                    </tbody>

                </table>
            </div>
        </div>
    </div>

    <!-- Formulario Modal Empleados -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">AGREGAR CUENTA</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <form class="row g-3" method="post">
                    <div class="col-md-6">
                            <label for="codigoclientes" class="form-label">Codigo Cliente</label>
                            <input type="number" class="form-control" id="codigoclientes" name="codigoclientes" required>

                        </div>
                        <div class="col-md-6">
                            <label for="numerocuenta" class="form-label">Numero Cuenta</label>
                            <input type="number" class="form-control" id="numerocuenta" name="numerocuenta" required>

                        </div>
                        <div class="col-md-6">
                            <label for="tipocuenta" class="form-label">Tipo de cuenta</label>
                            <input type="text" class="form-control" id="tipocuenta" name="tipocuenta" required oninvalid="this.setCustomValidity('Campo obligatorio')" oninput="this.setCustomValidity('')">
                        </div>
                        <div class="col-md-6">
                            <label for="saldo" class="form-label">Saldo</label>
                            <input type="number" step="0.01" class="form-control" id="saldo" name="saldo" required oninvalid="this.setCustomValidity('Campo obligatorio')" oninput="this.setCustomValidity('')">
                        </div>
                        <div class="col-6">
                            <label for="fechaapertura" class="form-label">Fecha de Apertura</label>
                            <input type="date" class="form-control" id="fechaapertura" name="fechaapertura" required oninvalid="this.setCustomValidity('Campo obligatorio')" oninput="this.setCustomValidity('')">
                        </div>

                        <div class="col-md-8">
                            <fieldset class="row mb-3">
                                <legend class="col-form-label col-sm-2 pt-0">Estado</legend>
                                <div class="col-sm-8">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="Activo" checked>
                                        <label class="form-check-label" for="gridRadios1">
                                            Activo
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="Inactivo">
                                        <label class="form-check-label" for="gridRadios2">
                                            inactivo
                                        </label>
                                    </div>
                                </div>
                            </fieldset>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal"><i class="bi bi-x-lg"></i> Cerrar</button>
                            <button type="submit" name="submit" class="btn btn-primary"><i class="bi bi-floppy"></i> Guardar</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>



    <!--Crea tabla como objeto y aplica estilos y propiedades DataTables -->

    <script>
        new DataTable('#example');

        document.getElementById('nombre').oninvalid = function() {
            this.setCustomValidity('Campo obligatorio');
        };

        document.getElementById('nombre').oninput = function() {
            this.setCustomValidity('');
        };
    </script>


</body>

</html>