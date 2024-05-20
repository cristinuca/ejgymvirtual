<?php

require_once "conexform.php";

$Nombre=$_POST['Nombre'];
$Edad=$_POST['Edad'];
$Sexo=$_POST['Sexo'];
$Telefono=$_POST['Telefono'];

$insertar = mysqli_query($con, "INSERT INTO formulariog(Nombre, Edad, Sexo, Telefono)VALUES(
    '$Nombre',
    '$Edad',
    '$Sexo',
    '$Telefono'
)") or die(mysqli_error($con));

header("location: graxform.php");
?>