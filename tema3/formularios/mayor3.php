<?php
$a=$_POST['a'];
$b=$_POST['b'];
$c=$_POST['c'];
if ($a>$b and $a>$c)
{echo "el mayor es $a";}

if ($b>$a and $b>$c)
{echo "el mayor es $b";}

if ($c>$a and $c>$b)
{echo "el mayor es $c";}

?>