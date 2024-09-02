<?php
include 'conexion.php';

$id=$_GET['id'];

$sql="DELETE FROM padron WHERE id=$id";
$resultado=$con->query($sql);

if($resultado){
    ?>
    <h2>Registro eliminado correctamente</h2>
    <meta http-equiv="refresh" content="3;url=read.php">
    <?php
}else{
    echo "Error al eliminar";
}
?>