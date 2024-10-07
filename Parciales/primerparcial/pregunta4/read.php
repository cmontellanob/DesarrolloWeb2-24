<?php include 'conexion.php';

$sql="SELECT  id,nombres,apellidos,correo FROM usuarios ";

if(isset ($_GET['ordenar'])){
    $sql.=" order by ".$_GET['ordenar'];
}

$resultado=$con->query($sql);

?>

<table>
    <tr>
        
        <th><a href="read.php?ordenar=nombres">Nombres</a></th>
        <th><a href="read.php?ordenar=apellidos">Apellidos</a></th>
        <th><a href="read.php?ordenar=correo">Correo</a></th>
   
    </tr>
    <?php while($fila=$resultado->fetch_assoc()) 
    {?>
    <tr>
       
        <td><?php echo $fila['nombres'];?></td>
        <td><?php echo $fila['apellidos'];?></td>
        <td><a href="form_update.php?id=<?php echo $fila['id'] ?>"> <?php echo $fila['correo'];?></a></td>
       
    </tr>

    <?php }?>
   

</table>
