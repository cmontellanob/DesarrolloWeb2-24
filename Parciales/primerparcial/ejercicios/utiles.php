<?php 
  class Utiles{
  private $cadena;
  public function __construct($cadena) {
    $this->cadena=$cadena;
  }
  public function aumentarguiones($n)

  { $aux=" ";
    for($i=0; $i<strlen($this->$cadena); $i++)
    {
        $aux .=$this->cadena["$i"];
        for($j=0; $j<strlen($this->$cadena); $j++){
            $aux .="-";
        }
    }
    return $aux;
  }

}