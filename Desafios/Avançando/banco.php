<?php
//sub Rotina

//uma sub rotina executa  dentro da função e não devolve valor nenhum ao contrario da rotina

function sacar( array $conta, $valorAsacar): array
{
    if ($valorAsacar > $conta['saldo']) {
        exibeMensagem("Você não pode sacar este valor");
    } else{
        $conta['saldo'] -= $valorAsacar;   
    }
    return $conta;
}

function depositar( array $conta, float $valorADepositar):array
{
    if ($valorADepositar > 0){
        $conta['saldo'] += $valorADepositar;
    }else {
        exibeMensagem( "Depositos precisam ser positivos!.");
    }
    
    return $conta;
}


function exibeMensagem(string $mensagem)
 {
    echo $mensagem .PHP_EOL;
}
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

$contasCorrentes['123.456.789-10'] = sacar($contasCorrentes['123.456.789-10'], 500); // a mesma função pode receber vários parâmetros separados por virgula
$contasCorrentes['123.256.789-10 '] = sacar($contasCorrentes['123.256.789-10 '], 100);


$contasCorrentes['123.456.789-10'] = depositar(
    $contasCorrentes['123.456.789-10'],
    900

);

foreach ($contasCorrentes as $cpf => $conta) {
    exibeMensagem($cpf . " " . $conta['titular'] . ' ' . $conta['saldo']);
}