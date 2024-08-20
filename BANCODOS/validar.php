<?php

session_start();

if (isset($_POST['UsuarioSistema']) && isset($_POST['ClaveSistema'])) {	
    $UsuarioSistema = $_POST['UsuarioSistema'];
    $ClaveSistema = $_POST['ClaveSistema'];
    $_SESSION['UsuarioSistema'] = $UsuarioSistema;

    $hostname = "localhost";
    $username = "jgarcia";
    $password = "root";
    $database = "db_banco";
    $conexion = new mysqli($hostname, $username, $password, $database);

    // Verificar la conexión
    if ($conexion->connect_error) {
        die ("Conexión fallida: " . $conexion->connect_error);
    }

    // Preparar la consulta para evitar inyección SQL
    $consulta = $conexion->prepare("SELECT * FROM tbl_usuarios WHERE UsuarioSistema = ? AND ClaveSistema = ?");
    $consulta->bind_param("ss", $UsuarioSistema, $ClaveSistema); // "ss" significa que se van a enlazar dos strings
    $consulta->execute();
    $resultado = $consulta->get_result();
    $filas = $resultado->num_rows;

    if ($filas > 0) {
        header("location:home.php"); 
        
    } else {
        include "index.php";
       /*  echo 'ERROR DE AUTENTIFICACION'; */
        
    }

    // Liberar el resultado y cerrar la conexión
    $consulta->close();
    $conexion->close();
} else {
    
    echo 'Por favor, complete todos los campos del formulario.';
}
?>


