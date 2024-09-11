<?php include 'conexion.php';
session_start();
include ("acceso.php");
$sql="SELECT id,email,nivel FROM usuarios";
$resultado=$con->query($sql);
?>
<table>
    <tr>
        <th>email</th>
        <th>nivel</th>
    </tr>
    <?php while($fila=$resultado->fetch_assoc()) 
    {?>
    <tr>
        <td><?php echo $fila['email'];?></td>
        <td><?php
        if($fila['nivel']==1){
            echo "administrador"; 
        }
        else{
            echo "usuario";
        }
        ?></td>
        <td><a href="form_update_usuarios.php?id=<?php echo $fila['id'];?>">Editar</a> 
        
        <a href="delete_usuarios.php?id=<?php echo $fila['id'];?>">Eliminar</a>       
    </tr>
    <?php }?>
</table>

<a href="form_create_usuario.html">Registrar nuevo</a>
