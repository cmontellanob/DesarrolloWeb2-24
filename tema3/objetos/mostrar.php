<?php
include('pila.php');
session_start();
if (isset($_SESSION['p'])) {
    $_SESSION['p']->mostrar();
}
else{
    echo "No hay pila";
}
?>
<meta http-equiv="refresh" content="3; url=menupila.html">
