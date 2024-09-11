<?php
include "conexion.php";
session_start();
$email = $_POST['email'];
$password = sha1($_POST['password']);
$sql = "SELECT email, nivel FROM usuarios WHERE email = '$email' and password = '$password'";
$resultado = $con->query($sql);
if ($resultado){
    if ($fila = $resultado->fetch_assoc()){
        $_SESSION['email']=$fila['email'];
        $_SESSION['nivel']=$fila['nivel'];

        header("location:read.php");
    }
    else{
        echo "Password Incorrecto";
        ?>
        <meta http-equiv="refresh" content="3; url=form_login.html">
        <?php
    }
    
}
else{
    echo "error";
}