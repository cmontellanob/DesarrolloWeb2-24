<?php
$a=$_COOKIE['a'];
$b=$_COOKIE['b'];

$op=$_GET['operacion'];

switch($op){
    case 'suma':
        $resultado = $a + $b;
        break;
    case 'restar':
        $resultado = $a - $b;
        break;
    case 'multiplicar':
        $resultado = $a * $b;
        break;
}
echo $resultado;





?>