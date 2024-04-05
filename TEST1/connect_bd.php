<?php

// Iniciamos la sessión
session_start();

// Recogida de variables de los campos del formulario.
$nombre=$_POST['nombre'];
$primer_apellido=$_POST['primer_apellido'];
$segundo_apellido=$_POST['segundo_apellido'];
$correo=$_POST['correo'];
$contraseña=$_POST['contraseña'];

// Asignacion y comprobacion de conectividad con la base de datos PHPMyAdmin.
$servername='localhost';
$database='test';
$username='root';
$password='';

$conn=mysqli_connect($servername, $username, $password, $database);

if (!$conn){
    die("Conexión fallida: " . mysqli_connect_error());
}

// Función para verificar si la tabla de usuarios está vacía
function tabla_usuarios_vacia($conn) {
    $resultado = mysqli_query($conn, "SELECT COUNT(*) AS total FROM usuarios");
    $fila = mysqli_fetch_assoc($resultado);
    return $fila['total'] == 0; // Retorna true si la tabla está vacía
}

// Funcion numeros incrementales del campo codigo_usuario de la base de datos.
function num_incremental(){
    if (isset($_SESSION['numero_inicial'])){
        $_SESSION['numero_inicial']++;
    } else {
        $_SESSION['numero_inicial'] = 0; // Inicializar a 1 si no está definido
    }
    return $_SESSION['numero_inicial']; // Devolver el valor actualizado
}

// Verificar si la tabla de usuarios está vacía
if (tabla_usuarios_vacia($conn)) {
    // Reiniciar la sesión 'numero_inicial' si la tabla está vacía
    $_SESSION['numero_inicial'] = 0;
}

$num_incrementales = num_incremental(); // Llamar a la función sin argumentos

// Inserts de los campos recogidos del formulario.
$sql = "INSERT INTO usuarios(codigo_usuario, nombre, primer_apellido, segundo_apellido, correo, contraseña)
VALUES('{$_SESSION['numero_inicial']}','$nombre','$primer_apellido','$segundo_apellido','$correo','$contraseña')";

// Comprobacion Inserts en la base de datos.
if (mysqli_query($conn, $sql)){
    ?>
    <script src="alert.js"></script>
<?php
}else{
    echo "Error" . $sql . "<br>" . mysqli_error($conn);
}

?>