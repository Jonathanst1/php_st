<?php
$peso = 90;
$altura =1.58;
$alturaCalc =$altura * $altura;
$pesoCalc =$peso;
$imc = $pesoCalc/$alturaCalc;

if($imc <= 18.5){
    echo "seu IMC é $imc".PHP_EOL;
    echo "Que indica Magreza!.";
}
if($imc >=18.6 && 24.9){
    echo "Seu Imc é $imc".PHP_EOL;
    echo "Que indica NORMAL!.";
}
if($imc >=25 && 30){
    echo "Seu Imc é $imc".PHP_EOL;
    echo "Que indica SOBREPESO";
}
if ($imc >= 30) {
    echo "Seu imc é $imc".PHP_EOL;
    echo "Que indica OBESIDADE!.";
}

