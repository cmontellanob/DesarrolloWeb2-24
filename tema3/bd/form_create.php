<?php session_start();
include ("acceso.php");
include ("conexion.php");
include ("permiso.php");

$sql="SELECT id,numero_mesa FROM mesa";
$resultado=$con->query($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="create.php" method="post" enctype="multipart/form-data">
    <label for="fotografia">Fotografia</label>
    <input type="file" name="fotografia" id="fotografia"><br>
        <label for="nombres">Nombres</label>
        <input type="text" name="nombres" id="nombres"><br>
        <label for="apellidos">Apellidos</label>
        <input type="text" name="apellidos" id="apellidos"><br>
        <label for="carnet">Carnet</label>
        <input type="text" name="carnet" id="carnet"><br>
        <label for="sexo">Sexo</label>
        <input type="radio" name="sexo" id="sexof" value="femenino">Femenino
        <input type="radio" name="sexo" id="sexov" value="masculino">Masculino <br>
        <label for="fecha_nacimiento">Fecha de nacimiento</label>
        <input type="date" name="fecha_nacimiento" id="fecha_nacimiento"><br>
        <label for="direccion">Direccion</label>
        <input type="text" name="direccion" id="direccion"><br>
        <label for="mesa_id">Mesa</label>
        <select name="mesa_id" id="mesa_id">
        <?php while($fila=$resultado->fetch_assoc()) 
    {?>
            <option value="<?php echo $fila['id']; ?>"><?php echo $fila['numero_mesa'];?></option>
            <?php }
            ?>
        </select><br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>