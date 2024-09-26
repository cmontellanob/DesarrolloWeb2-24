<?php
$correo = "carlosmontellano@gmail.com";
$asunto = "Ejemplo de Asunto";
$cuerpo = "Cuerpo del mensaje";
$resultado = mail($correo, $asunto, $cuerpo);
if ($resultado) {
echo "Correo enviado correctamente";
} else {
echo "El correo no ha podido enviarse";
}
?>
