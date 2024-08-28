<?php 
class Pila {
    private $elementos=[];
    private $tope;
    private $max;

    public function __construct($max)
    {
        $this->$max=$max;
        $this->tope=0;
    }
    public function insertar($elem)
    {
        if($this->max==$this->tope)
        {
            return "pila llena";
        }
        else
        {
            $this->elementos[$this->tope];
            $this->tope++;
        }
    }
    public function eliminar()
    {
        if($this->tope==0)
        {
            return "pila vacia";
        }
        else
        {
            $elem=elementos[$this->tope];
            
            $this->tope--;
            return  $elem;
        }
    }
    public function mostrar()
    {
        for($i=0;$i<$this->tope;$i++)
        {
            echo $this->elementos[$i].'<br>';

        }


    }



}
