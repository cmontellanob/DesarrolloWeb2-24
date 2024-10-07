<?php 
include ('conexion.php');
$id=$_GET['id'];
$sql="SELECT correo FROM usuarios WHERE id=$id";
$resultado=$con->query($sql);
$fila=$resultado->fetch_assoc();
?>

<form action="update.php" method="post" >
    <input type="hidden" name="id" value="<?php echo $id;?>">
    <label for="Correo">Correo</label>
    <input type="email" name="correo" value="<?php echo $fila['correo'];?>">
    
    <input type="submit" value="Actualizar">
</form>

