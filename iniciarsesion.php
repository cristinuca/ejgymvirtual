<?php
require_once "conexform.php";

$email = $_POST['email'];
$contraseña = $_POST['contraseña'];

$iniciar = mysqli_query($con, "SELECT * FROM registro WHERE email='$email' AND contraseña='$contraseña'");

if(mysqli_num_rows($iniciar) > 0) {
    echo "
    <script>
    window.location = 'inicio.php';
    </script>
    ";
    exit;
} else {
    echo "
    <script>
    alert('primero tienes que registrarte');
    window.location = 'index.php';
    </script>
    ";
}

