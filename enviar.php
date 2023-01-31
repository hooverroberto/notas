<?php
include "conexion.php";

$email = $_POST['email'];
$password = $_POST['password'];
$address = $_POST['address'];
$address2 =$_POST['address2'];
$city = $_POST['city'];
$state = $_POST['state'];
$imagen = addslashes(file_get_contents($_FILES["imagen"]["tmp_name"]));

$consulta = "INSERT INTO applogueo (email, password, address, address2, city, state, imagen)
VALUES('$email', '$password', '$address', '$address2', '$city', '$state', '$imagen')";

$resultado = $conexion -> query($consulta);
if($resultado){
    header("location:registro.php");
}
?>
