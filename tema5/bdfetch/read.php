<?php include 'conexion.php';

$sql="SELECT fotografia, p.id,nombres,apellidos,carnet,sexo,fecha_nacimiento,direccion,numero_mesa FROM padron p
 left join mesa m on p.mesa_id=m.id 
";
if(isset ($_GET['buscar'])){
    $palabra="%".$_GET['buscar']."%";
    $sql.=" where nombres like '$palabra' or apellidos like '$palabra' or cast(carnet as varchar(15)) like '$palabra' " ;
    $buscar='&buscar='.$_GET['buscar'];
}
else
{
    $buscar='';
}
if(isset ($_GET['ordenar'])){
    $sql.=" order by ".$_GET['ordenar'];
}

$resultado=$con->query($sql);

?>





<form action="read.php" method="get">
    <label for="buscar">Buscar</label>
    <input type="text" name="buscar" value="<?php echo isset($_GET['buscar'])?$_GET['buscar']:'';?>">
    <?php if (isset($_GET['ordenar']))
    {
    ?>
    <input type="hidden" name="ordenar" value="<?php echo $_GET['ordenar'];?>">
    <?php }?>
    <input type="submit" value="buscar">
</form>
<table>
    <tr>
        <th>Fotografia</th>
        <th><a href="javascript:ordenar('nombres')<?php echo $buscar?>">Nombres</a></th>
        <th><a href="javascript:ordenar('apellidos')<?php echo $buscar?>">Apellidos</a></th>
        <th><a href="javascript:ordenar('carnet')<?php echo $buscar?>">Carnet</a></th>
        <th><a href="javascript:ordenar('sexo')<?php echo $buscar?>">Sexo</a></th>
        <th><a href="javascript:ordenar('fecha_nacimiento')<?php echo $buscar?>">Fecha de nacimiento</a></th>
        <th><a href="javascript:ordenar('direccion')<?php echo $buscar?>">Direccion</a></th>
        <td><a href="javascript:ordenar('mesa')<?php echo $buscar?>">Mesa</a></th>
        <th>Operaciones</th>
    </tr>
    <?php while($fila=$resultado->fetch_assoc()) 
    {?>
    <tr>
        <td> <img src="images/<?php echo $fila['fotografia'];   ?>" width="100px" >   </td>
        <td><?php echo $fila['nombres'];?></td>
        <td><?php echo $fila['apellidos'];?></td>
        <td><?php echo $fila['carnet'];?></td>
        <td><?php 
         echo  $fila['sexo']=='M'?"Masculino":"Femenino";

        // if ($fila['sexo']=='M')
        // {
        //     echo "Masculino";
        // }
        // else
        // {
        //     echo "Femenino"; 

        // }
        ?></td>
        <td><?php echo $fila['fecha_nacimiento'];?></td>
        <td><?php echo $fila['direccion'];?></td>
        <td><?php echo $fila['numero_mesa'];?></td>
        <td>
      
        <a href="javascript:cargarContenido('form_update.php?id=<?php echo $fila['id'];?>')">Editar</a> 
        
        <a href="javascript:confirmar('Desea Eliminar a la Persona',<?php echo $fila['id'];?>)">Eliminar</a>
      
       
    </tr>

    <?php }?>
   

</table>
