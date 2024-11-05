<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
include ("conexion.php");

$sql="SELECT id,nombre FROM departamentos";
$resultado=$con->query($sql);

?>
    <form action="registrar.php">
        <label for="departamento">departamento</label>
        <select name="departamento" id="departamento" onchange="cargarProvincias()">
        <?php while($fila=$resultado->fetch_assoc()) 
    {?>
            <option value="<?php echo $fila['id']; ?>"><?php echo $fila['nombre'];?></option>
            <?php }
            ?>
        </select><br>
        <label for="provincia">provincia</label>
        <select name="provincia" id="provincia"></select>

    </form>
<script src = "fetchjson.js"></script>
</body>
</html>