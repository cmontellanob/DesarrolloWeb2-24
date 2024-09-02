<?php
include 'conexion.php';
$id=$_GET['id'];
$sql="SELECT id,nombres,apellidos,carnet,sexo,fecha_nacimiento,direccion FROM padron WHERE id=$id";
$resultado=$con->query($sql);
$fila=$resultado->fetch_assoc();
?>
<form action="update.php" method="post">
    <input type="hidden" name="id" value="<?php echo $fila['id'];?>">
    <label for="nombres">Nombres</label>
    <input type="text" name="nombres"  value="<?php echo $fila['nombres'];?>"><br>
    <label for="apellidos">Apellidos</label>
    <input type="text" name="apellidos"  value="<?php echo $fila['apellidos'];?>"><br>
    <label for="carnet">Carnet</label>
    <input type="text" name="carnet"  value="<?php echo $fila['carnet'];?>"><br>
    <label for="sexo">Sexo</label>
    <input type="text" name="sexo"  value="<?php echo $fila['sexo'];?>"><br>
    <label for="fecha_nacimiento">Fecha de nacimiento</label>
    <input type="date" name="fecha_nacimiento"  value="<?php echo $fila['fecha_nacimiento'];?>"><br>
    <label for="direccion">Direccion</label>
    <input type="text" name="direccion"  value="<?php echo $fila['direccion'];?>"><br>
    
    <input type="submit" value="Actualizar">
</form>

