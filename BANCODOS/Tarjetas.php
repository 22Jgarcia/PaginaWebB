<!-- Conexion a BDD para extraer datos de la tabla-->
<?php
require_once('db_conexion.php');
$script = "SELECT * FROM  tbl_tarjetas";
$tarjetas = mysqli_query($conexion, $script);
?>

<!-- Insertar datos tabla BDD-->
<?php
// Verificar si se ha enviado el formulario
if (isset($_POST["submit"])) {
    // Obtener los valores del formulario
    $CodigoCliente = $_POST['codigocliente'];
    $NumeroTarjeta = $_POST['numerotarjeta'];
    $TipoTarjeta = $_POST['tipotarjeta'];
    $RangoTarjeta = $_POST['rangotarjeta'];
    $FechaExpiracion = $_POST['fechaexpiracion'];
    $cvv = $_POST['cvv'];
    $Monto = $_POST['monto'];
    $Moneda = $_POST['moneda'];
    $Estado = isset($_POST['gridRadios']) ? $_POST['gridRadios'] : null;
    $FechaCreacion = date('y/m/d');
    date_default_timezone_set('America/Guatemala');
    $HoraCreacion = date('H:i:s');
    $UsuarioCreacion = 'JORGE';

    // Preparar la consulta SQL
    require_once("db_conexion.php");
    $ScriptInsert = " INSERT INTO tbl_tarjetas( CodigoCliente,NumeroTarjeta, TipoTarjeta, RangoTarjeta, FechaExpiracion, cvv, Monto, Moneda, Estado,  FechaCreacion, HoraCreacion, UsuarioCreacion) 
							  VALUES ('$CodigoCliente','$NumeroTarjeta', '$TipoTarjeta', '$RangoTarjeta', '$FechaExpiracion','$cvv', '$Monto','$Moneda', '$Estado', '$FechaCreacion', '$HoraCreacion', '$UsuarioCreacion' )";

    // Ejecutar la consulta
    $Resultado = mysqli_query($conexion, $ScriptInsert);

    // Redireccionar pagina 
    if ($Resultado == true) {
        header("location:Tarjetas.php");
    } else {
        echo "Error al insertar los datos";
    }

    mysqli_close($conexion);
}
?>

<!-- Menu superior-->
<?php require_once("layout/superior.php"); ?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">


<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="text-center">TARJETAS</h1>

            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                <i class="bi bi-person-add"></i> Agregar
            </button>

            <table id="tableEmpleados" class="hover m-t-1" style="width:100%">
                <thead>
                    <tr>
                        <th>CodigoTarjeta </th>
                        <th>CodigoCliente </th>
                        <th>NumeroTarjeta </th>
                        <th>TipoTarjeta</th>
                        <th>RangoTarjeta </th>
                        <th>FechaExpiracion</th>
                        <th>cvv</th>
                        <th>Monto</th>
                        <th>Moneda</th>
                        <th>Estado</th>

                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($tarjetas as $fila) {
                    ?>

                        <tr>
                            <td><?php echo ($fila["CodigoTarjeta"]); ?></td>
                            <td><?php echo ($fila["CodigoCliente"]); ?></td>
                            <td><?php echo ($fila["NumeroTarjeta"]); ?></td>
                            <td><?php echo ($fila["TipoTarjeta"]); ?></td>
                            <td><?php echo ($fila["RangoTarjeta"]); ?></td>
                            <td><?php echo ($fila["FechaExpiracion"]); ?></td>
                            <td><?php echo ($fila["cvv"]); ?></td>
                            <td><?php echo ($fila["Monto"]); ?></td>
                            <td><?php echo ($fila["Moneda"]); ?></td>
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
                <h5 class="modal-title" id="exampleModalLabel">AGREGAR TARJETAS</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <form class="row g-3" method="post">

                    <div class="col-md-6">
                        <label for="codigocliente" class="form-label">Codigo Cliente</label>
                        <input type="number" class="form-control" id="codigocliente" name="codigocliente" required>

                    </div>
                    <div class="col-md-6">
                        <label for="numerotarjeta" class="form-label">Numero de Tarjeta</label>
                        <input type="number" class="form-control" id="numerotarjeta" name="numerotarjeta" required oninvalid="this.setCustomValidity('Campo obligatorio')" oninput="this.setCustomValidity('')">
                    </div>
                    <div class="col-md-6">
                        <label for="tipotarjeta" class="form-label">Tipo de Tarjeta</label>
                        <input type="text" class="form-control" id="tipotarjeta" name="tipotarjeta" required oninvalid="this.setCustomValidity('Campo obligatorio')" oninput="this.setCustomValidity('')">
                    </div>
                    <div class="col-md-6">
                        <label for="rangotarjeta" class="form-label">Rango de Tarjeta</label>
                        <input type="text" class="form-control" id="rangotarjeta" name="rangotarjeta" required oninvalid="this.setCustomValidity('Campo obligatorio')" oninput="this.setCustomValidity('')">
                    </div>
                    <div class="col-6">
                        <label for="fechaexpiracion" class="form-label">Fecha de Expiracion</label>
                        <input type="date" class="form-control" id="fechaexpiracion" name="fechaexpiracion" required oninvalid="this.setCustomValidity('Campo obligatorio')" oninput="this.setCustomValidity('')">
                    </div>
                    <div class="col-6">
                        <label for="cvv" class="form-label">CVV</label>
                        <input type="text" class="form-control" id="cvv" name="cvv" required oninvalid="this.setCustomValidity('Campo obligatorio')" oninput="this.setCustomValidity('')">
                    </div>

                    <div class="col-md-6">
                        <label for="monto" class="form-label">Monto</label>
                        <input type="number" step="0.01" class="form-control" id="monto" name="monto" required oninvalid="this.setCustomValidity('Campo obligatorio')" oninput="this.setCustomValidity('')">
                    </div>
                    <div class="col-md-6">
                        <label for="moneda" class="form-label">Moneda</label>
                        <input type="text" class="form-control" id="moneda" name="moneda" required oninvalid="this.setCustomValidity('Campo obligatorio')" oninput="this.setCustomValidity('')">
                    </div>

                    <div class="col-md-8">
                        <fieldset class="row mb-3">
                            <legend class="col-form-label col-sm-2 pt-0">Estado</legend>
                            <div class="col-sm-8">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="Activo" checked>
                                    <label class="form-check-label" for="gridRadios1">
                                        Aceptado
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="Inactivo">
                                    <label class="form-check-label" for="gridRadios2">
                                        Rechazado
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