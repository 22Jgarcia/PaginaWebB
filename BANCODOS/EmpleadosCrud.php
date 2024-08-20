<!-- Conexion a BDD para extraer datos de la tabla-->
<?php
require_once('db_conexion.php');
$script = "SELECT * FROM tbl_empleados";
$tbl_empleados = mysqli_query($conexion, $script);
?>


<!-- Menu superior-->
<?php require_once("layout/superior.php"); ?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">






<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="text-center">EMPLEADOS</h1>

            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                <i class="bi bi-person-add"></i> Agregar
            </button>

            <table id="tableEmpleados" class="hover m-t-1" style="width:100%">
                <thead>
                    <tr>
                        <th>Codigo</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Cargo</th>
                        <th>Fecha Contratacion</th>
                        <th>Salario</th>
                        <th>Telefono</th>
                        <th>Estado</th>
                        <th>Editar</th>

                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($tbl_empleados as $fila) {
                    ?>

                        <tr>
                            <td><?php echo ($fila["CodigoEmpleado"]); ?></td>
                            <td><?php echo ($fila["Nombre"]); ?></td>
                            <td><?php echo ($fila["Apellido"]); ?></td>
                            <td><?php echo ($fila["Cargo"]); ?></td>
                            <td><?php echo ($fila["FechaContratacion"]); ?></td>
                            <td><?php echo ($fila["Salario"]); ?></td>
                            <td><?php echo ($fila["Telefono"]); ?></td>
                            <td><?php echo ($fila["Estado"]); ?></td>
                            <td>
                                <button type="button" class="btn btn-warning editbtn btn-sm">
                                    <i class="bi bi-pencil-fill"></i>
                                </button>
                            </td>
                        </tr>

                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>


<!-- Formulario Modal Empleados Insertar -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">AGREGAR EMPLEADOS</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <form class="row g-3" method="post" action="EmpleadosInsert.php">
                    <div class="col-md-6">
                        <label for="nombre" class="form-label">Nombres</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" required oninvalid="this.setCustomValidity('Campo obligatorio')" oninput="this.setCustomValidity('')">
                    </div>
                    <div class="col-md-6">
                        <label for="apellido" class="form-label">Apellido</label>
                        <input type="text" class="form-control" id="apellido" name="apellido" required oninvalid="this.setCustomValidity('Campo obligatorio')" oninput="this.setCustomValidity('')">
                    </div>
                    <div class="col-6">
                        <label for="cargo" class="form-label">Cargo</label>
                        <input type="text" class="form-control" id="cargo" name="cargo" required oninvalid="this.setCustomValidity('Campo obligatorio')" oninput="this.setCustomValidity('')">
                    </div>
                    <div class="col-6">
                        <label for="fechaContratacion" class="form-label">Fecha Contracioón</label>
                        <input type="date" class="form-control" id="fechaContratacion" name="fechaContratacion" required oninvalid="this.setCustomValidity('Campo obligatorio')" oninput="this.setCustomValidity('')">
                    </div>
                    <div class="col-md-6">
                        <label for="salario" class="form-label">Salario</label>
                        <input type="number" step="0.01" class="form-control" id="salario" name="salario" required oninvalid="this.setCustomValidity('Campo obligatorio')" oninput="this.setCustomValidity('')">
                    </div>
                    <div class="col-md-6">
                        <label for="telefono" class="form-label">Telefono</label>
                        <input type="number" class="form-control" id="telefono" name="telefono" required oninvalid="this.setCustomValidity('Campo obligatorio')" oninput="this.setCustomValidity('')">
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


<!-- Formulario Modal Empleados Editar -->
<div class="modal fade" id="ModalEditar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"> UPDATE EMPLEADOS</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <form class="row g-3" method="post" action="EmpleadosEditar.php">
                    <div class="col-md-6">
                        <label for="CodigoEmpleado" class="form-label">Codigo Empleado</label>
                        <input type="number" class="form-control" id="CodigoEmpleado" name="CodigoEmpleado" readonly>
                    </div>
                    <div class="col-md-6">
                        <label for="Nombre" class="form-label">Nombres</label>
                        <input type="text" class="form-control" id="Nombre" name="Nombre" required oninvalid="this.setCustomValidity('Campo obligatorio')" oninput="this.setCustomValidity('')">
                    </div>
                    <div class="col-md-6">
                        <label for="Apellido" class="form-label">Apellido</label>
                        <input type="text" class="form-control" id="Apellido" name="Apellido" required oninvalid="this.setCustomValidity('Campo obligatorio')" oninput="this.setCustomValidity('')">
                    </div>
                    <div class="col-6">
                        <label for="Cargo" class="form-label">Cargo</label>
                        <input type="text" class="form-control" id="Cargo" name="Cargo" required oninvalid="this.setCustomValidity('Campo obligatorio')" oninput="this.setCustomValidity('')">
                    </div>
                    <div class="col-6">
                        <label for="FechaContratacion" class="form-label">Fecha Contracioón</label>
                        <input type="date" class="form-control" id="FechaContratacion" name="FechaContratacion" required oninvalid="this.setCustomValidity('Campo obligatorio')" oninput="this.setCustomValidity('')">
                    </div>
                    <div class="col-md-6">
                        <label for="Salario" class="form-label">Salario</label>
                        <input type="number" step="0.01" class="form-control" id="Salario" name="Salario" required oninvalid="this.setCustomValidity('Campo obligatorio')" oninput="this.setCustomValidity('')">
                    </div>
                    <div class="col-md-6">
                        <label for="Telefono" class="form-label">Telefono</label>
                        <input type="number" class="form-control" id="Telefono" name="Telefono" required oninvalid="this.setCustomValidity('Campo obligatorio')" oninput="this.setCustomValidity('')">
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
                        <button type="submit" name="submit" class="btn btn-primary"><i class="bi bi-floppy"></i> Update</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>



<!--Funcion Js que llama y llena campos modal Editar -->
<script>
    $(document).ready(function() {
        $('#tableEmpleados').on('click', '.editbtn', function() {
            $('#ModalEditar').modal('show');

            $tr = $(this).closest('tr');
            var data = $tr.children("td").map(function() {
                return $(this).text();
            }).get();

            $('#CodigoEmpleado').val(data[0]);
            $('#Nombre').val(data[1]);
            $('#Apellido').val(data[2]);
            $('#Cargo').val(data[3]);
            $('#FechaContratacion').val(data[4]);
            $('#Salario').val(data[5]);
            $('#Telefono').val(data[6]);

            // Establecer el valor de radio button para el estado
            var estado = data[7];
            $("input[name='gridRadios'][value='" + estado + "']").prop("checked", true);
        });

        new DataTable('#tableEmpleados');
    });
</script>
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
