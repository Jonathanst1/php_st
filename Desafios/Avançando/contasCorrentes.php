<?php

//arrays associativos é comum terem strings

$conta1 = [ //definindo chave
    'titular'=>'Vinicius', //=>Operador de seta
    'saldo' =>1000];


$conta2 = [
     'titular' => 'Maria',
     'saldo' =>10000
 ];
 $conta3 = [
     'titular' => 'Alberto',
     'saldo' => 300
 ]; 
 
 
$contasCorrentes = [$conta1,$conta2,$conta3]; //array de arrays,arrays associativos

//existe arrays numeros e arrays associativos onde nós definimos os indice

for ($i = 0; $i < count($contasCorrentes); $i++){
    echo $contasCorrentes[$i] ['titular'] .PHP_EOL;
}
