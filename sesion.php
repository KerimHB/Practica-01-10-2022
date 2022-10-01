<?php
require 'conexion.php';

session_start();
$user = $_POST['user'];
$pass = $_POST['pass'];


$query = "SELECT * FROM usuario WHERE username='$user' AND user_pass='$pass'";
$consulta = pg_query($conexion,$query);
$cant = pg_num_rows($consulta);
if($cant>0){
    $_SESSION['username'] = $user;
    header('location: ingreso.php');
}
else{
    echo "Datos erroneos";
}

?>