<?php include 'conexion.php';
session_start();
include ("acceso.php");
$sql="SELECT p.id,nombres,apellidos,carnet,sexo,fecha_nacimiento,direccion,numero_mesa FROM padron p
 left join mesa m on p.mesa_id=m.id 
";
$resultado=$con->query($sql);

?>
<ul>
<li>usuario : <?php echo $_SESSION['email'];?> </li>
<li>Nivel: <?php echo $_SESSION['nivel']==1?'Administrador':'Usuario'; ?> </li>
</ul>


<a href="cerrar_session.php">Cerrar Session</a>
<table>
    <tr>
        <th>Fotografia</th>
        <th>Nombres</th>
        <th>Apellidos</th>
        <th>Carnet</th>
        <th>Sexo</th>
        <th>Fecha de nacimiento</th>
        <th>Direccion</th>
        <td>Mesa</th>
        <th>Operaciones</th>
    </tr>
    <?php while($fila=$resultado->fetch_assoc()) 
    {?>
    <tr>
        <td> <img src="images/<?php echo $fila['nombres'];  ?>" >   </td>
        <td><?php echo $fila['nombres'];?></td>
        <td><?php echo $fila['apellidos'];?></td>
        <td><?php echo $fila['carnet'];?></td>
        <td><?php echo $fila['sexo'];?></td>
        <td><?php echo $fila['fecha_nacimiento'];?></td>
        <td><?php echo $fila['direccion'];?></td>
        <td><?php echo $fila['numero_mesa'];?></td>
        <td>
        <?php if ($_SESSION['nivel']==1)      
        {?>
        <a href="form_update.php?id=<?php echo $fila['id'];?>">Editar</a> 
        
        <a href="delete.php?id=<?php echo $fila['id'];?>">Eliminar</a>
        <?php }
        ?>
    </tr>

    <?php }?>
   

</table>
<?php if ($_SESSION['nivel']==1)
{
    ?>

<a href="form_create.php">Registrar nuevo</a>
<?php
}