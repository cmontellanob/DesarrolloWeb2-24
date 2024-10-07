<?php include('Operaciones.php');
session_start();
$op=$_GET['op'];

switch ($op){
    case 'sumar':
        echo $_SESSION['o']->sumar();
        break;
    case 'restar':
        echo $_SESSION['o']->restar();
        break;
    case 'multiplicar':
        echo $_SESSION['o']->multiplicar();
        break;
    case 'dividir':
        echo $_SESSION['o']->dividir();
        break;
                        
}