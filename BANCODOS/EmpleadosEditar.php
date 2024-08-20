<!-- Editar datos tabla BDD-->
<?php
// Verificar si se ha enviado el formulario
if (isset($_POST["submit"])) {
    // Obtener los valores del formulario
    $CodioEmpleado = $_POST['CodigoEmpleado'];
    $Nombre = $_POST['Nombre'];
    $Apellido = $_POST['Apellido'];
    $cargo = $_POST['Cargo'];
    $fechaContratacion = $_POST['FechaContratacion'];
    $salario = $_POST['Salario'];
    $telefono = $_POST['Telefono'];
    $Estado = isset($_POST['gridRadios']) ? $_POST['gridRadios'] : null;
    $FechaCreacion = date('y/m/d');
    date_default_timezone_set('America/Guatemala');
    $HoraCreacion = date('H:i:s');
    $UsuarioCreacion = 'JORGE';

    // Preparar la consulta SQL
    require_once("db_conexion.php");
    $Scriptupdate = " 
        Update tbl_empleados
        set Nombre = '$Nombre',
            Apellido = '$Apellido',
            Cargo = '$cargo',
            FechaContratacion = '$fechaContratacion',
            Salario = $salario,
            Telefono = $telefono,
            Estado = '$Estado',
            FechaCreacion = '$FechaCreacion',
            HoraCreacion = '$HoraCreacion',
            UsuarioCreacion = '$UsuarioCreacion'
        where CodigoEmpleado = $CodioEmpleado";
    // Ejecutar la consulta
    $Resultado = mysqli_query($conexion, $Scriptupdate);

    // Redireccionar pagina 
    if ($Resultado == true) {
        header("location:EmpleadosCrud.php");
    } else {
        echo "Error al insertar los datos";
    }

    mysqli_close($conexion);
}
?>