<?php 
class Operaciones{
   private $a;
   private $b;
   private $c;

   function __construct ($a,$b,$c)
   {
    $this->a=$a;
    $this->b=$b;
    $this->c=$c;
   }

   public function sumar()
   {
       return $this->a+$this->b+$this->c;
   }
   public function restar()
   {
       return $this->a-$this->b-$this->c;
   }
   public function multiplicar()
   {
       return $this->a*$this->b*$this->c;
   }
   public function dividir()
   {
       return $this->a/$this->b/$this->c;
   }

   


}