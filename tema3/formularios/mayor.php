<?php
$n=$_POST['n'];
$mayor=$_POST['valor0'];
for ($i=1;$i<$n;$i++)
{ if ($_POST['valor'.$i]>$mayor)
  {$mayor=$_POST['valor'.$i];}
}
echo "<div>El mayor es $mayor</div>";


?>