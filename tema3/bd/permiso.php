<?php 
if ($_SESSION['nivel']==2)
{
    ?>
    Usted no esta autorizado a ver esta pagina
    <meta http-equiv="refresh" content="3; url=read.php">
<?php
    die();
}    
?>