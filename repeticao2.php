<?php
//loop for (PARA)// menor que o while
// a contição $contador++ é a mesma coisa que :

//$contador = $contador +1;
//$contador += $contador;
//$contador++;
/*
Vamos utilizar o while quando não sabemos quando o loop se encerrará. Quando é uma decisão um pouco mais complexa. Já o for é utilizado quando sabemos o 
momento de saída do loop. Normalmente, quando temos um caso de uso
 de variável contadora.


*/

for ($contador = 1; $contador <=15; $contador++ ){
    if ($contador == 13){ //!= não é igual a 13 /PARA PULAR O 13
        break; // quebra o loop antes da contição ser satisfeita
        //normalmente o break e o continue não são muito usados.
        //continue; //se o contador for 13 ele vai para a próxima linha da interação.
    
    }
        
    echo "#$contador" .PHP_EOL;
    
}