<?php session_start();
include ("acceso.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="create_usuario.php" method="post">
        <label for="email">Email</label>
        <input type="email" name="email" id="email"><br>
        <label for="password">Password</label>
        <input type="password" name="password" id="password"><br>
        <label for="nivel">Nivel</label>
        <select name="nivel" id="nivel">
            <option value="1">administrador</option>
            <option value="2">usuario</option>
        </select>
        <br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>