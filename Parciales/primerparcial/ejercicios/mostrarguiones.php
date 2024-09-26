<?php
include("utiles.php");
$cadena=$_GET["cadena"];
$o= new Utiles($cadena);

echo $o->aumentarguiones($n)