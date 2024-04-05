<?php

// Conexión directa a la base de datos
$servername = 'localhost';
$database = 'test';
$username = 'root';
$password = '';

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Conexión fallida: " . mysqli_connect_error());
}

// Consulta datos del formulario.
if (isset($_POST['correo']) && isset($_POST['contraseña'])){
    $correo = $_POST['correo'];
    $contraseña = $_POST['contraseña'];
    
    // Consulta SQL
    $query = "SELECT * FROM usuarios WHERE correo = '$correo' AND contraseña = '$contraseña'";
    
    // Ejecutar consulta
    $result = mysqli_query($conn, $query);
    
    // Verificar si se encontraron resultados
    if (mysqli_num_rows($result) == 1){
        // Si el inicio de sesión es correcto, redirige a otra página
        header("Location: pagina1.php");
        exit(); // Finaliza la ejecución del script después de redirigir
    }else{
        echo '<script>alert("Correo o contraseña incorrectos.");</script>';
        exit(); // Finaliza la ejecución del script después de la redirección
    }
}
?>