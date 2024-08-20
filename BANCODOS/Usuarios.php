<!-- Conexion a BDD para extraer datos de la tabla-->
<?php
require_once('db_conexion.php');
$script = "SELECT * FROM  tbl_usuarios";
$tbl_empleados = mysqli_query($conexion, $script);
?>

<!-- Insertar datos tabla BDD-->
<?php
// Verificar si se ha enviado el formulario
if (isset($_POST["submit"])) {
    // Obtener los valores del formulario
    $CodigoEmpleado = $_POST['codigoempleado'];
    $UsuarioSistema = $_POST['usuariosistema'];
    $ClaveSistema = $_POST['clavesistema'];
    $Estado = isset($_POST['gridRadios']) ? $_POST['gridRadios'] : null;
    $FechaCreacion = date('y/m/d');
    date_default_timezone_set('America/Guatemala');
    $HoraCreacion = date('H:i:s');
    $UsuarioCreacion = 'JORGE';

    // Preparar la consulta SQL
    require_once("db_conexion.php");
    $ScriptInsert = " INSERT INTO tbl_usuarios( CodigoEmpleado ,UsuarioSistema, ClaveSistema, Estado, FechaCreacion, HoraCreacion, UsuarioCreacion)  
							  VALUES ('$CodigoEmpleado ','$UsuarioSistema', '$ClaveSistema', '$Estado', '$FechaCreacion', '$HoraCreacion', '$UsuarioCreacion' )";

    // Ejecutar la consulta
    $Resultado = mysqli_query($conexion, $ScriptInsert);

    // Redireccionar pagina 
    if ($Resultado == true) {
        header("location:Usuarios.php");
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
            <h1 class="text-center">USUARIOS</h1>

            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                <i class="bi bi-person-add"></i> Agregar
            </button>

            <table id="tableEmpleados" class="hover m-t-1" style="width:100%">
                <thead>
                    <tr>
                        <th>CodigoUsuario </th>
                        <th>CodigoEmpleado </th>
                        <th>UsuarioSistema </th>
                        <th>ClaveSistema</th>
                        <th>Estado </th>

                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($tbl_empleados as $fila) {
                    ?>

                        <tr>
                            <td><?php echo ($fila["CodigoUsuario"]); ?></td>
                            <td><?php echo ($fila["CodigoEmpleado"]); ?></td>
                            <td><?php echo ($fila["UsuarioSistema"]); ?></td>
                            <td><?php echo ($fila["ClaveSistema"]); ?></td>
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
                <h5 class="modal-title" id="exampleModalLabel">AGREGAR USUARIOS</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <form class="row g-3" method="post">
                    <div class="col-md-6">
                        <label for="codigoempleado" class="form-label">Codigo Empleado</label>
                        <input type="number" class="form-control" id="codigoempleado" name="codigoempleado" required>

                    </div>
                    <div class="col-md-6">
                        <label for="usuariosistema" class="form-label">Usario del Sistema</label>
                        <input type="text" class="form-control" id="usuariosistema" name="usuariosistema" required oninvalid="this.setCustomValidity('Campo obligatorio')" oninput="this.setCustomValidity('')">
                    </div>
                    <div class="col-md-6">
                        <label for="clavesistema" class="form-label">Clave del sistema</label>
                        <input type="text" class="form-control" id="clavesistema" name="clavesistema" required oninvalid="this.setCustomValidity('Campo obligatorio')" oninput="this.setCustomValidity('')">
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