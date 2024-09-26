<?php

$imagen = imagecreatefrompng("escudo.png");
header("Content-Type: image/png");
imagepng($imagen);
?>
