<?php
$a=$_POST['a'];
$b=$_POST['b'];
setcookie('a',$a,0);
setcookie('b',$b,0);
echo '<ul>';
echo '<li><a href="resultado.php?operacion=suma">suma</a></li>';
echo '<li><a href="resultado.php?operacion=restar">restar</a></li>';
echo '<li><a href="resultado.php?operacion=multiplicar">multiplicar</a></li>';
echo '</ul>';

