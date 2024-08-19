<?php
$letras =['a','e','i','o','u'];
foreach ($letras as  $letra)
{
    echo $letra.'-';
}
echo "<br>";
// declarar indices
$letras2 =[0=>'a',1=>'e',2=>'i',3=>'o',4=>'u'];
foreach ($letras2 as  $letra)
{
    echo $letra.'-';
}
echo "<br>";
// declarar indices
$letras3 =[2=>'a',4=>'e',6=>'i',8=>'o',9=>'u'];
foreach ($letras3 as $indice=> $letra)
{
    echo "inidice $indice = $letra";
}
echo "<br>";

//indice cualificados
$letras4 =['primera'=>'a','segunda'=>'e','tercera'=>'i','cuarta'=>'o','quinta'=>'u'];
foreach ($letras4 as $indice=> $letra)
{
    echo "inidice $indice = $letra <br>";
}
