<?php
$mayor=($_POST['valor'][0]);
foreach($_POST['valor'] as $valor)
{
    if($valor>$mayor)
    {
        $mayor=$valor;
    }
}
echo "<div>El mayor es $mayor</div>";


?>