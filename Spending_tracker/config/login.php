<?php
require_once('config.php');
$email = $_POST['email'];
$password = $_POST['password'];

$query = "SELECT * FROM usuarios WHERE correo = '$email' AND contraseña ='$password'";
$result = $conexion->query($query);
if($result -> num_rows > 0){
    header("location : ../index.php");
}else{
    header("location: ../modulos/gastos/index.php");
}

?> 

