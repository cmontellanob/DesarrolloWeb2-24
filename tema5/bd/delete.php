<?php 

include 'conexion.php';
$id=$_GET['id'];

$sql="DELETE FROM padron WHERE id=$id";
$resultado=$con->query($sql);

if($resultado){
    ?>
    <h2>Registro eliminado correctamente</h2>
   
    <?php
}else{
    echo "Error al eliminar";
}
?>