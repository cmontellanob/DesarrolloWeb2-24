<?php
$con = new mysqli("localhost", "root", "", "bd_elecciones");
if ($con->connect_error)
    die("conexion fallada" . $con->connect_error);
?>
