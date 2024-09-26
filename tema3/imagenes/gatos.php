<?php
$numero = rand(1, 4);
$nombre_gato = "gato".$numero.".png";
$imagen = imagecreatefrompng($nombre_gato);
header("Content-Type: image/png");
imagepng($imagen);
?>
