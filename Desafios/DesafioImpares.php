<?php
//se o resto de divi por 2  = 0 é par caso contrario impar

for ($contador = 1;$contador <100; $contador++) {
    if($contador %2 !=0) {
        echo $contador .PHP_EOL;
    }
}
