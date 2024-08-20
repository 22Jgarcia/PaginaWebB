
<!-- Insertar datos tabla BDD-->
<?php
// Verificar si se ha enviado el formulario
if (isset($_POST["submit"])) {
    // Obtener los valores del formulario
    $Nombre = $_POST['nombre'];
    $Apellido = $_POST['apellido'];
    $cargo = $_POST['cargo'];
    $fechaContratacion = $_POST['fechaContratacion'];
    $salario = $_POST['salario'];
    $telefono = $_POST['telefono'];
    $Estado = isset($_POST['gridRadios']) ? $_POST['gridRadios'] : null;
    $FechaCreacion = date('y/m/d');
    date_default_timezone_set('America/Guatemala');
    $HoraCreacion = date('H:i:s');
    $UsuarioCreacion = 'JORGE';

    // Preparar la consulta SQL
    require_once("db_conexion.php");
    $ScriptInsert = " INSERT INTO tbl_empleados( Nombre,  Apellido,  Cargo, FechaContratacion, Salario, Telefono,  Estado,  FechaCreacion, HoraCreacion, UsuarioCreacion) 
							  VALUES ('$Nombre', '$Apellido', '$cargo', '$fechaContratacion', $salario, $telefono,   '$Estado', '$FechaCreacion', '$HoraCreacion', '$UsuarioCreacion' )";

    // Ejecutar la consulta
    $Resultado = mysqli_query($conexion, $ScriptInsert);

    // Redireccionar pagina 
    if ($Resultado == true) {
        header("location:EmpleadosCrud.php");
    } else {
        echo "Error al insertar los datos";
    }

    mysqli_close($conexion);
}
?>
