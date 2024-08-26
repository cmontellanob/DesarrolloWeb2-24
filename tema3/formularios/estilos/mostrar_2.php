<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .grande{
            font-size: 32px;
            background-color: yellow;
            width: 300px;
            margin: 0 auto;
            border: 1px solid black;
        }
        .mediano{
            font-size: 24px;
            background-color: blue;
            width: 200px;
            margin: 0 auto;
            border: 1px solid black;
        }
        .pequeno{
            font-size: 12px;
            background-color: green;
            width: 200px;
            margin: 0 auto;
            border: 1px solid black;
        }
    
    </style>
</head>
<body>
    <div class="<?php echo $_GET['estilo'];?>">
        Programacion web
    </div>
</body>
</html>