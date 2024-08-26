<?php class Persona {
    public $nombre;
    public $sexo;
    public $edad;
    public $altura;
    public function __construct($nombre, $sexo, $edad, $altura) {
        $this->nombre = $nombre;
        $this->sexo = $sexo;
        $this->edad = $edad;
        $this->altura = $altura;
    }
    public function getNombre() {
        return $this->nombre;
    }
    public function getSexo() {
        return $this->sexo;
    }

}