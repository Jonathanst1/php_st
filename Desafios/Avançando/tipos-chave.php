<?php
// o php só consegue trabalhar com chaves em arrays associativos do tipo numerico inteiro ou strings ,qualquer diferença sera converttida para string ou numero inteiro.
$array = [
    1=>'a',
    '1' => 'b',
    1.5 => 'c',
    true => 'd'//valor booleano é convertido pra 1 quando para inteiro
];

foreach($array as $item) {
    echo $item .PHP_EOL;
}