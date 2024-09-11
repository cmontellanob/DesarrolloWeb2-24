<?php session_start();

include 'conexion.php';
include ("acceso.php");
include ("permiso.php");
$email=$_POST['email'];
$password=sha1($_POST['password']);
$nivel=$_POST['nivel'];
$sql="INSERT INTO usuarios (email,password,nivel) VALUES ('$email','$password',$nivel)";
$resultado=$con->query($sql);
if($resultado){?>
<h1>Datos insertados correctamente</h1>
<meta http-equiv="refresh" content="3; url=read_usuarios.php">
<?php
}else{
    echo "Error al insertar los datos";
}
?>


