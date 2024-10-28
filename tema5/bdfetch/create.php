<?php 
include 'conexion.php';



$nombres=$_POST['nombres'];
$apellidos=$_POST['apellidos'];
$carnet=$_POST['carnet'];
$sexo=$_POST['sexo'];
$fecha_nacimiento=$_POST['fecha_nacimiento'];
$direccion=$_POST['direccion'];
$mesa_id=$_POST['mesa_id'];
$archivo_original=$_FILES['fotografia']['name'];
$arreglo=explode(".",$archivo_original);
$extension=$arreglo[1];
$fotografia=uniqid().'.'.$extension;

copy($_FILES['fotografia']['tmp_name'],'images/'.$fotografia);


$sql="INSERT INTO padron (fotografia,nombres,apellidos,carnet,sexo,fecha_nacimiento,direccion,mesa_id) VALUES ('$fotografia','$nombres','$apellidos','$carnet','$sexo','$fecha_nacimiento','$direccion',$mesa_id)";
$resultado=$con->query($sql);
if($resultado){?>
<h1>Datos insertados correctamente</h1>

<?php
}else{
    echo "Error al insertar los datos";
}
?>


