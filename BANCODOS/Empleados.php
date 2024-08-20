<!-- Conexion a BDD para extraer datos de la tabla-->
<?php
require_once('db_conexion.php');
$script = "SELECT * FROM tbl_empleados";
$tbl_empleados = mysqli_query($conexion, $script);
?>

<!-- Menu superior-->
<?php require_once("layout/superior.php"); ?>

<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>EMPLEADOS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.1.2/css/dataTables.dataTables.css">


</head>

<body>

    <div class="container-lg mt-5">
        <h1 class="text-center mt-4">EMPLEADOS</h1>
        <div class="row">
            <div class="col-md-12">
                <table id="example" class="hover m-t-1" style="width:100%">
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
                            </tr>

                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdn.datatables.net/2.1.2/js/dataTables.js"></script>
    <script>
        new DataTable('#example');
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>