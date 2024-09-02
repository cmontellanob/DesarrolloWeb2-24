<?php include 'conexion.php';
$sql="SELECT id,nombres,apellidos,carnet,sexo,fecha_nacimiento,direccion FROM padron";
$resultado=$con->query($sql);
?>
<table>
    <tr>
        <th>Nombres</th>
        <th>Apellidos</th>
        <th>Carnet</th>
        <th>Sexo</th>
        <th>Fecha de nacimiento</th>
        <th>Direccion</th>
        <th>Operaciones</th>
    </tr>
    <?php while($fila=$resultado->fetch_assoc()) 
    {?>
    <tr>
        <td><?php echo $fila['nombres'];?></td>
        <td><?php echo $fila['apellidos'];?></td>
        <td><?php echo $fila['carnet'];?></td>
        <td><?php echo $fila['sexo'];?></td>
        <td><?php echo $fila['fecha_nacimiento'];?></td>
        <td><?php echo $fila['direccion'];?></td>
        <td><a href="form_update.php?id=<?php echo $fila['id'];?>">Editar</a> 
        
        <a href="delete.php?id=<?php echo $fila['id'];?>">Eliminar</a>

        
        
    </tr>

    <?php }?>
   

</table>

<a href="form_create.html">Registrar nuevo</a>
