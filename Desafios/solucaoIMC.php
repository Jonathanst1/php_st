<?php

$peso = 90;
$altura = 1.58;
$imc = $peso / $altura **2;

echo "Seu IMC é de $imc. Você está com o IMC ";

if ($imc < 18) {
    echo "Magreza";
}elseif ($imc < 25){
    echo "Normal";
}else {
    echo "Acima do Peso";
}

echo " Recomendado";
