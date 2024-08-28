<?php
include('pila.php');
session_start();
echo "el elemento eliminado es: ".$_SESSION['p']->eliminar();

?>
<meta http-equiv="refresh" content="3; url=menupila.html">