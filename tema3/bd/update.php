<?php
include 'conexion.php';

$id=$_POST['id'];
$nombres=$_POST['nombres'];
$apellidos=$_POST['apellidos'];
$carnet=$_POST['carnet'];
$sexo=$_POST['sexo'];
$fecha_nacimiento=$_POST['fecha_nacimiento'];
$direccion=$_POST['direccion'];

$sql="UPDATE padron SET nombres='$nombres',apellidos='$apellidos',carnet='$carnet',sexo='$sexo',fecha_nacimiento='$fecha_nacimiento',direccion='$direccion' WHERE id=$id";
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