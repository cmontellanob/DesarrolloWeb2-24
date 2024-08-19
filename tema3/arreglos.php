
<?php

$numeros=array(1,2,3,4,5,6,7,8,9,0);
$mayor=$numeros[0];?>
<h1>Con ciclo For</h1>
<?php
for($i=1;$i<count($numeros);$i++)
{
    if ($numeros[$i]>$mayor)
    {
        $mayor=$numeros[$i];
    }

}
echo "el mayor es $mayor";
?>
<h2>Con ciclo foreach</h2>
<?php
$mayor=$numeros[0];
foreach($numeros as $numero)
{
    if ($numero>$mayor)
    {
        $mayor=$numero;
    }
  
}
echo "el mayor es $mayor";
?>
<h2>Con ciclo foreach con indice</h2>
<?php
$mayor=$numeros[0];
$indicemayor=0;
foreach($numeros as $indice=>$numero)
{
    if ($numero>$mayor)
    {
        $mayor=$numero;
        $indicemayor=$indice;
    }
    
}
echo "el mayor es $mayor y esta en el indice $indicemayor";
?>