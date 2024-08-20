<!-- Conexion a BDD para extraer datos de la tabla-->
<?php
require_once('db_conexion.php');
$script = "SELECT * FROM  tbl_servicios";
$tbl_empleados = mysqli_query($conexion, $script);
?>

<!-- Insertar datos tabla BDD-->
<?php
// Verificar si se ha enviado el formulario
if (isset($_POST["submit"])) {
    // Obtener los valores del formulario
    $CodigoCuenta  = $_POST['codigocuenta'];
    $NombreServicio = $_POST['nombreservicio'];
    $NombreProveedor = $_POST['nombreproveedor'];
    $CuentaProveedor = $_POST['cuentaproveedor'];
    $MonedaPago = $_POST['monedapago'];
    $Monto = $_POST['monto'];
    $Estado = isset($_POST['gridRadios']) ? $_POST['gridRadios'] : null;
    $FechaCreacion = date('y/m/d');
    date_default_timezone_set('America/Guatemala');
    $HoraCreacion = date('H:i:s');
    $UsuarioCreacion = 'JORGE';

    // Preparar la consulta SQL
    require_once("db_conexion.php");
    $ScriptInsert = " INSERT INTO tbl_servicios( CodigoCuenta,NombreServicio, NombreProveedor, CuentaProveedor, MonedaPago, Monto ,Estado,  FechaCreacion, HoraCreacion, UsuarioCreacion) 
							  VALUES ('$CodigoCuenta','$NombreServicio', '$NombreProveedor', '$CuentaProveedor', '$MonedaPago', $Monto, '$Estado', '$FechaCreacion', '$HoraCreacion', '$UsuarioCreacion' )";

    // Ejecutar la consulta
    $Resultado = mysqli_query($conexion, $ScriptInsert);

    // Redireccionar pagina 
    if ($Resultado == true) {
        header("location:Servicios.php");
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
            <h1 class="text-center">SERVICIOS</h1>

            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                <i class="bi bi-person-add"></i> Agregar
            </button>

            <table id="tableEmpleados" class="hover m-t-1" style="width:100%">
                <thead>
                    <tr>
                        <th>Codigo Servicio </th>
                        <th>Codigo Cuenta </th>
                        <th>Nombre Servicio</th>
                        <th>Nombre Proveedor</th>
                        <th>Cuenta Proveedor </th>
                        <th>Moneda Pago</th>
                        <th>Monto</th>
                        <th>Estado</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($tbl_empleados as $fila) {
                    ?>

                        <tr>
                            <td><?php echo ($fila["CodigoServicio"]); ?></td>
                            <td><?php echo ($fila["CodigoCuenta"]); ?></td>
                            <td><?php echo ($fila["NombreServicio"]); ?></td>
                            <td><?php echo ($fila["NombreProveedor"]); ?></td>
                            <td><?php echo ($fila["CuentaProveedor"]); ?></td>
                            <td><?php echo ($fila["MonedaPago"]); ?></td>
                            <td><?php echo ($fila["Monto"]); ?></td>
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
                <h5 class="modal-title" id="exampleModalLabel">AGREGAR EMPLEADOS</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <form class="row g-3" method="post">
                    <div class="col-md-6">
                        <label for="codigocuenta" class="form-label">Codigo Cuenta</label>
                        <input type="number" class="form-control" id="codigocuenta" name="codigocuenta" required oninvalid="this.setCustomValidity('Campo obligatorio')" oninput="this.setCustomValidity('')">

                    </div>
                    <div class="col-md-6">
                        <label for="nombreservicio" class="form-label">Nombres de servicios</label>
                        <input type="text" class="form-control" id="nombreservicio" name="nombreservicio" required oninvalid="this.setCustomValidity('Campo obligatorio')" oninput="this.setCustomValidity('')">
                    </div>
                    <div class="col-md-6">
                        <label for="nombreproveedor" class="form-label">Nombre de Proveedor</label>
                        <input type="text" class="form-control" id="nombreproveedor" name="nombreproveedor" required oninvalid="this.setCustomValidity('Campo obligatorio')" oninput="this.setCustomValidity('')">
                    </div>
                    <div class="col-6">
                        <label for="cuentaproveedor" class="form-label">Cuenta proveedor</label>
                        <input type="text" class="form-control" id="cuentaproveedor" name="cuentaproveedor" required oninvalid="this.setCustomValidity('Campo obligatorio')" oninput="this.setCustomValidity('')">
                    </div>
                    <div class="col-6">
                        <label for="monedapago" class="form-label">Moneda de Pago</label>
                        <input type="text" class="form-control" id="monedapago" name="monedapago" required oninvalid="this.setCustomValidity('Campo obligatorio')" oninput="this.setCustomValidity('')">
                    </div>
                    <div class="col-md-6">
                        <label for="monto" class="form-label">Monto</label>
                        <input type="number" step="0.01" class="form-control" id="monto" name="monto" required oninvalid="this.setCustomValidity('Campo obligatorio')" oninput="this.setCustomValidity('')">
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