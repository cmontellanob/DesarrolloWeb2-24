<?php 
$con= new mysqli("localhost","root","","bd_elecciones");
if($con->connect_error)
{
    die("Error: " . $con->connect_error);
}
?>