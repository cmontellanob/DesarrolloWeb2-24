<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php 
$oracion="esta es una oracion";
?>
<ul>
    <?php 
     $separado=explode(" ",$oracion);

      foreach ($separado as $palabra)  
      {?>
        <li><?php echo $palabra ?></li>
      <?php }?>

</ul>
<?php 
     
     $invertido="";
     for ($i=0;$i<strlen($oracion);$i++)   
     {
        $invertido=substr($oracion,$i,1).$invertido;
     }
     echo $invertido,"<br>";
     $separado=explode(" ",$invertido);
     echo implode("-",$separado);

     
?>