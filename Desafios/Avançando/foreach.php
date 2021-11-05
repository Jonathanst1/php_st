<?php


//arrays associativos é comum terem strings

 
$contasCorrentes = [
    '123.456.789-10' => [
        'titular' => 'VInicius',
        'saldo' => 1000

    ],
    '123.456.789-11' => [
        'titular' => 'Maria',
        'saldo' => 10000
    ],
    '123.256.789-10 '=> [
        'titular' => 'Alberto',
        'saldo' => 300
    ]
];
    $contasCorrentes['123.558.961-22'] = [
        'titular' => 'Claudia',
        'saldo' => 2000
    ];
 //array de arrays,arrays associativos

 $contasCorrentes['051.551.222-18'] = [
     'titular' => 'Claudia 2 ',
     'Saldo ' => 2002
 ];

foreach ($contasCorrentes as $cpf => $conta) { //para cada uma das contas correntes como conta
    echo $cpf . " ".$conta['titular'] .
    PHP_EOL;
}

/*
om grandes poderes vêm grandes responsabilidades, 
e muitas pessoas abusam destes poderes. 
Tome cuidado para não tratar o array no PHP como a única opção para modelar seus dados. 
Conheça as outras opções e saiba quando aplicar cada uma. 
Uma dica: Estude (muito) sobre orientação a objetos e não use arrays quando 
deveria estar utilizando objetos.


*/