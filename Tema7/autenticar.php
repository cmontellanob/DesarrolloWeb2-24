<?php session_start();
$correo=$_POST['correo'];
$password=sha1($_POST['password']);
include('conexion.php');
$sql="SELECT email,nivel from usuarios where email='$correo' 
and password='$password'";
echo $sql;

$result = $con->query($sql);
$i=1;
if ($result->num_rows > 0) {
    $datos = $result->fetch_assoc();
    $_SESSION['correo']=$datos['correo'];
    $_SESSION['nivel']=$datos['nivel'];
    echo "Usuario Autenticado";
}
else
{?>
   Error usuario o Conatraseña no valido 
  <meta http-equiv="refresh" content="5; url=formlogin.html">
<?php
}

?>