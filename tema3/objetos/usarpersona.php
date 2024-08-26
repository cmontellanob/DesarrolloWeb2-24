<?php include 'persona.php';
$nombre=$_POST['nombre'];
$sexo=$_POST['sexo'];
$edad=$_POST['edad'];
$altura=$_POST['altura'];
$persona1 = new Persona($nombre, $sexo, $edad, $altura);
//$persona1 = new Persona('Juan', 'Hombre', 25, 1.75);
echo 'Nombre: ' . $persona1->getNombre() . '<br>';
echo 'Sexo: ' . $persona1->getSexo() . '<br>';
