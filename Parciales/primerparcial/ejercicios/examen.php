
<?php
    class Examen{
       private $cadena1;
       private $cadena2;

        public function __construct($cadena1,$cadena2) {
            $this->cadena1=$cadena1;
            $this->cadena2=$cadena2;
        }
        public function cruzar(){
            $encontro = false;
            for($i = 0; $i<strlen($this->cadena1); $i++){
                for($j = 0; $j<strlen($this->cadena2); $j++){
                    if($this->cadena1[$i] == $this->cadena2[$j]){
                        $encontro = true;
                        $auxi = $i;
                        $auxj = $j;
                    }
                }
            }
            echo $this->cadena1."<br>";
            echo $this->cadena2."<br>";
            echo "cadena1 en su posicion $auxi coincide con cadena2 en su posicion $auxj";
            if ($encontro == false){
                echo "no existen letras comunes";
                return;
            }
            ?>
            <table style = "border-collapse : collapse; border: 1px solid black">
                <?php for ($i = 0; $i<strlen($this->cadena1); $i++){
                    echo "<tr>";
                    for ($j = 0; $j<strlen($this->cadena2); $j++){
                    
                        if ($i == $auxi ){
                            echo '<td class = "celda" style = "background-color : blue">'.$this->cadena2[$j];
                        } else
                        if ($j == $auxj){
                            echo '<td class = "celda" style = "background-color : blue">'.$this->cadena1[$i];
                        } else {
                            echo '<td class = "celda"> &nbsp;';
                        }
                        echo '</td>';
                    }
                    echo "</tr>";
                }?>
            </table>
            <?php
        }

        
    }

    ?>