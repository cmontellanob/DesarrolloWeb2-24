<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
$id= $_GET['iddepartamento'];
include ("conexion.php");

$sql="SELECT id,nombre FROM provincias where iddepartamento=$id";
$resultado=$con->query($sql);

?>
        <?php while($fila=$resultado->fetch_assoc()) 
    {?>
            <option value="<?php echo $fila['id']; ?>"><?php echo $fila['nombre'];?></option>
            <?php }
            ?>
        </select><br>
</body>
</html>