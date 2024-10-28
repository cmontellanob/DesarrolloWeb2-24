<?php
include 'conexion.php';

$id=$_POST['id'];
$nombres=$_POST['nombres'];
$apellidos=$_POST['apellidos'];
$carnet=$_POST['carnet'];
$sexo=$_POST['sexo'];
$fecha_nacimiento=$_POST['fecha_nacimiento'];
$direccion=$_POST['direccion'];
$mesa_id=$_POST['mesa_id'];
if($_FILES['fotografia']['name']!=""){
    $archivo_original=$_FILES['fotografia']['name'];
    $arreglo=explode(".",$archivo_original);
    $extension=$arreglo[1];
    $fotografia=uniqid().'.'.$extension; 
    copy($_FILES['fotografia']['tmp_name'],'images/'.$fotografia);
    $sql="UPDATE padron SET fotografia='$fotografia',nombres='$nombres',apellidos='$apellidos',carnet='$carnet',sexo='$sexo',fecha_nacimiento='$fecha_nacimiento',direccion='$direccion',mesa_id=$mesa_id WHERE id=$id";
}
else{
    $sql="UPDATE padron SET nombres='$nombres',apellidos='$apellidos',carnet='$carnet',sexo='$sexo',fecha_nacimiento='$fecha_nacimiento',direccion='$direccion',mesa_id=$mesa_id WHERE id=$id";
}

$resultado=$con->query($sql);

if($resultado){
    ?>
    <h2>Registro actualizado correctamente</h2>
    <?php
}else{
    echo "Error al actualizar";
}
?>