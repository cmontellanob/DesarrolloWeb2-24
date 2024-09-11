<?php session_start();
include 'conexion.php';
include ("acceso.php");
include ("permiso.php");

$id=$_GET['id'];
$sql="SELECT id,nombres,apellidos,carnet,sexo,fecha_nacimiento,direccion,mesa_id FROM padron WHERE id=$id";
$sql2 ="SELECT id,numero_mesa FROM mesa";

$resultado=$con->query($sql);
$resultado2 = $con->query($sql2);
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
        <input type="radio" name="sexo" id="sexof" value="femenino" 
        <?php
            echo $fila['sexo']=='F'?"checked":"";
        ?>>Femenino
        <input type="radio" name="sexo" id="sexov" value="masculino"
        <?php
            echo $fila['sexo']=='M'?"checked":"";
        ?>>Masculino <br>>
    <label for="fecha_nacimiento">Fecha de nacimiento</label>
    <input type="date" name="fecha_nacimiento"  value="<?php echo $fila['fecha_nacimiento'];?>"><br>
    <label for="direccion">Direccion</label>
    <input type="text" name="direccion"  value="<?php echo $fila['direccion'];?>"><br>
    <select name="mesa_id" id="mesa_id">
    <?php while($mesa=$resultado2->fetch_assoc()) 
    {?>
            <option value="<?php echo $mesa['id']; ?>"
            <?php
                echo $fila['mesa_id']==$mesa['id']?"selected":"";
            ?>
            ><?php echo $mesa['numero_mesa'];?></option>
            <?php }
            ?>
        </select><br>
    <input type="submit" value="Actualizar">
</form>

