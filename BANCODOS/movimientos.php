<!-- Conexion a BDD para extraer datos de la tabla-->
<?php
require_once('db_conexion.php');
$script = "SELECT * FROM tbl_movimientos";
$movimientos = mysqli_query($conexion, $script);
?>

<!-- Insertar datos tabla BDD-->
<?php
// Verificar si se ha enviado el formulario
if (isset($_POST["submit"])) {
    // Obtener los valores del formulario
    $CodigoCuenta  = $_POST['codigocuenta'];
    $TipoTransaccion = $_POST['tipotransaccion'];
    $Monto = $_POST['monto'];
    $FechaTransaccion = $_POST['fechatransaccion'];
    $Estado = isset($_POST['gridRadios']) ? $_POST['gridRadios'] : null;
    $FechaCreacion = date('y/m/d');
    date_default_timezone_set('America/Guatemala');
    $HoraCreacion = date('H:i:s');
    $UsuarioCreacion = 'JORGE';

    // Preparar la consulta SQL
    require_once("db_conexion.php");
    $ScriptInsert = " INSERT INTO tbl_movimientos( CodigoCuenta,TipoTransaccion, Monto,  FechaTransaccion,   Estado,  FechaCreacion, HoraCreacion, UsuarioCreacion) 
                  VALUES ('$CodigoCuenta','$TipoTransaccion','$Monto', '$FechaTransaccion',  '$Estado', '$FechaCreacion', '$HoraCreacion', '$UsuarioCreacion' )";


    // Ejecutar la consulta
    $result = mysqli_query($conexion, $ScriptInsert);

    // Redireccionar pagina 
    if ($result == true) {
        header("location:movimientos.php");
    } else {
        echo "Error al insertar los datos";
    }

    mysqli_close($conexion);
}
?>

<?php require_once('layout/superior.php');      ?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <div class="container-lg mt-5">
        <h1 class="text-center mt-4">MOVIMIENTOS</h1>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            <i class="bi bi-person-add"></i> Agregar
        </button>
        <div class="row">
            <div class="col-md-12">
                <table id="example" class="hover m-t-1" style="width:100%">



                    <thead>
                        <tr>
                            <th>CodigoTransaccion </th>
                            <th>CodigoCuenta </th>
                            <th>TipoTransaccion</th>
                            <th>Monto</th>
                            <th>FechaTransaccion</th>
                            <th>Estado</th>


                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($movimientos as $fila) {
                        ?>
                            <tr>
                                <td><?php echo ($fila["CodigoTransaccion"]); ?></td>
                                <td><?php echo ($fila["CodigoCuenta"]); ?></td>
                                <td><?php echo ($fila["TipoTransaccion"]); ?></td>
                                <td><?php echo ($fila["Monto"]); ?></td>
                                <td><?php echo ($fila["FechaTransaccion"]); ?></td>
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
                    <h5 class="modal-title" id="exampleModalLabel">AGREGAR MOVIMIENTOS</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <form class="row g-3" method="post">
                        <div class="col-md-6">
                            <label for="codigocuenta" class="form-label">Codigo de Cuenta</label>
                            <input type="text" class="form-control" id="codigocuenta" name="codigocuenta" required>

                        </div>
                        <div class="col-md-6">
                            <label for="tipotransaccion" class="form-label">Tipo de transaccion</label>
                            <input type="text" class="form-control" id="tipotransaccion" name="tipotransaccion" required>

                        </div>
                        <div class="col-md-6">
                            <label for="monto" class="form-label">Monto</label>
                            <input type="number" step="0.01" class="form-control" id="monto" name="monto" required>

                        </div>
                        <div class="col-6">
                            <label for="fechatransaccion" class="form-label">Fecha de Transaccion</label>
                            <input type="date" class="form-control" id="fechatransaccion" name="fechatransaccion" required oninvalid="this.setCustomValidity('Campo obligatorio')" oninput="this.setCustomValidity('')">
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


