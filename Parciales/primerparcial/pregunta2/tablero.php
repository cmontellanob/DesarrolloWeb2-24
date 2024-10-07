<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    $color=$_GET['color'];
    ?>
    <style>
        .par {
            border:1px solid black;
            width:45px;
            height:45px;
            background-color:<?php echo $color?>    
        }
        .impar {
            border:1px solid black;
            width:45px;
            height:45px;
            background-color:white;

        }
        

    </style>    
</head>
<body>
    

<?php

$numerofilas=$_GET['numerofilas'];
$numerocolumnas=$_GET['numerocolumnas'];

$fila=$_GET['fila'];
$columna=$_GET['columna'];

?>
<table style="border-collapse:collapse;border:1px solid black">
<?php
for ($i=0;$i<$numerofilas;$i++)
{
    ?>
    <tr>

    
   <?php
   for ($j=0;$j<$numerocolumnas;$j++)
   {
    $imprimir="&nbsp";
    $resaltado="";
    if ($i==$fila-1 and $j==$columna-1)
    {
        $imprimir='<img src="Bowser.png" style="width:45px">';
        $resaltado='style="background-color:yellow"';
    }
     if (($j+$i)%2==0)
     {
        echo '<td class="par" '.$resaltado.' >'.$imprimir.'</td>';
     }else
     {
        echo '<td class="impar" '.$resaltado.' >'.$imprimir.'</td>';
     }
     
     
   }

   ?>
   </tr>
   

<?php
}



?>
</table>

</body>
</html>
