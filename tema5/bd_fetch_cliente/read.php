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
$datos=[];
 while($fila=$resultado->fetch_assoc()) 
    {
        $datos[]=$fila;
     }
echo json_encode($datos, JSON_UNESCAPED_UNICODE);
?>