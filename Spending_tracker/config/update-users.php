<?php
require_once('config.php');
$correo= $_POST['correo'];
$contraseña= $_POST['contraseña'];
$telefono= $_POST['telefono'];
$nombre= $_POST['nombre'];
$status= $_POST['status'];

$query = "UPDATE usuarios set correo = '$correo', contraseña = '$contraseña', telefono = '$telefono' , nombre = '$nombre' , status = '$status' WHERE id = '$id'";
echo $query;
$conexion->query($query);

header("location:  ../modulos/usuarios/index.php");

?>