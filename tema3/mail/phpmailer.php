<?php
require_once("phpmailer/class.phpmailer.php");
$correo = new phpmailer();
//Datos personales del emisor
$correo->From = "carlosmontellao@gmail.com";
$correo->FromName = "Luis Miguel Cabezas";

$correo->Subject = "Mensaje de prueba";

$correo->Body = "Cuerpo del mensaje";
//Direcci—n de destino
$correo->AddAddress("carlosmontellano@hotmail.com","Carlos MOntellano");

if (!$correo->Send()) {
	echo "Correo enviado correctamente";
} else {
	echo "El correo no ha podido enviarse";
}
?>