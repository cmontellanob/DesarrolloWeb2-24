<?php
include 'conexion.php';
$id=$_POST['id'];
$correo=$_POST['correo'];
$sql="UPDATE usuarios SET correo='$correo' WHERE id=$id";

$resultado=$con->query($sql);

if($resultado){
    ?>
    <h2>Registro actualizado correctamente</h2>
    <meta http-equiv="refresh" content="3;url=read.php">
    <?php
}else{
    echo "Error al actualizar";
}
?>