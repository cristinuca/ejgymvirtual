<?php 
require_once "conexform.php";

$nombre = $_POST['nombre'];
$email = $_POST['email'];
$usuario = $_POST['usuario'];
$contraseña = $_POST['contraseña'];


$query = "INSERT INTO registro(nombre, email, usuario, contraseña)VALUES(
    '$nombre',
    '$email',
    '$usuario',
    '$contraseña'
)";

$check_email = mysqli_query($con, "SELECT * FROM registro WHERE email='$email'");

if(mysqli_num_rows($check_email) > 0) {
    echo "
    <script>
    alert('ya existe una persona con este correo');
    window.location = 'index.php';
    </script>
    ";
    exit;
} else {
    echo "
    <script>
    alert('ya estas registrado');
    window.location = 'index.php';
    </script>
    ";
}

$insertar = mysqli_query($con, $query);