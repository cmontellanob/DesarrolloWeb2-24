<?php
include 'conexion.php';
$nombres=$_POST['nombres'];
$apellidos=$_POST['apellidos'];
$carnet=$_POST['carnet'];
$sexo=$_POST['sexo'];
$fecha_nacimiento=$_POST['fecha_nacimiento'];
$direccion=$_POST['direccion'];
$sql="INSERT INTO padron (nombres,apellidos,carnet,sexo,fecha_nacimiento,direccion) VALUES ('$nombres','$apellidos','$carnet','$sexo','$fecha_nacimiento','$direccion')";
$resultado=$con->query($sql);
if($resultado){?>
<h1>Datos insertados correctamente</h1>
<meta http-equiv="refresh" content="3; url=read.php">
<?php
}else{
    echo "Error al insertar los datos";
}
?>


