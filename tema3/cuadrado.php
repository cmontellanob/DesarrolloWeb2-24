<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div style="margin:auto; width:50%">
<?php
$cadena="sistemas";
$longitud=strlen($cadena);
echo strtoupper($cadena),"<br>";
for($i=1;$i<$longitud-1;$i++){
    echo substr(strtoupper($cadena), $i,1);
    for($j=1;$j<=$longitud;$j++){
        echo "&nbsp;&nbsp;";
    }
    echo substr(strtoupper($cadena), $longitud-$i-1,1)."<br>";
}
for($k=1;$k<=$longitud;$k++){
    echo substr(strtoupper($cadena),$longitud-$k,1);
}

?>
</div>  
</body>
</html>
