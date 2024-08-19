<html> <head> 
<title>Ejemplo de PHP</title> 
</head> <body>
     <?php $posicion = "arriba"; 
     
     switch($posicion) {
        case "arriba":// Bloque 1 
         echo "La variable contiene";
        echo " el valor arriba"; 
        break; 
        case "abajo":// Bloque 2 
        echo "La variable contiene"; 
        echo " el valor abajo"; 
        break; 
        default:// Bloque 3 
        echo "La variable contiene otro valor"; 
        echo " distinto de arriba y abajo";} ?> 
        </body> 
    </html>