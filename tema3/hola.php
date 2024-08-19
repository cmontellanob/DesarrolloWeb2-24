<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .hola {
            color:red;
        }
    </style>
</head>
<body>
    <h1>Primer Ejercicio</h1>
    <p class="hola">
    <?php 
    echo "HOla Mundo";
    ?>
    </p>
    <h2>Imprimir numeros del 1 al 10 en una lista con comillas dobles</h2>
    <ul>
        <?php 
        for ($i=0;$i<10;$i++)
        {
            echo "<li>'$i'</li>";
        }
        ?>
    </ul>
    <h2>Imprimir numeros del 1 al 10 en una lista con comillas simples</h2>
    <ul>
        <?php 
        for ($i=0;$i<10;$i++)
        {
            echo '<li>"'.$i.'"</li>';
        }
        ?>
    </ul>

    <h2>Imprimir numeros del 1 al 10 en una lista con Codigo Espagueti</h2>
    <ul>
        <?php 
        for ($i=0;$i<10;$i++)
        { ?>
           <li>
            <?php echo $i ?>
           </li>
        <?php }
        ?>
        
    </ul>


    
</body>
</html>