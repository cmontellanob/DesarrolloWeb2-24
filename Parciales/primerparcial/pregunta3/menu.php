<?php 
 include ("Operaciones.php");
 session_start();
if (!isset($_SESSION['o']))
{
    $a=$_GET['a'];
    $b=$_GET['b'];
    $c=$_GET['c'];
    $_SESSION['o']=new Operaciones($a,$b,$c);  
}

?>
<ul>
    <li><a href="resultado.php?op=sumar">Sumar</a></li>
    <li><a href="resultado.php?op=restar">Restar</a></li>
    <li><a href="resultado.php?op=multiplicar">Multiplicar</a></li>
    <li><a href="resultado.php?op=dividir">Dividir</a></li>
</ul>

