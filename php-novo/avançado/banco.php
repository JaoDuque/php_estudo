<?php

function sacar($conta, $valorASacar){

    if ( $valorASacar > $conta ['saldo']){
        exibeMensagem("Você não pode sacar este valor");
    } else{
        $conta ['saldo'] -=$valorASacar;
    }
    
    return $conta;
}

function exibeMensagem($mensagem){
    echo $mensagem . PHP_EOL;
}

$contasCorrentes = [
    '074.422.654-03' => [
    'titular' => 'João',
     'saldo' => 1000
    ],
    '074.225.654-04' => [
        'titular' => 'Duque',
         'saldo' => 10000
    ],
    '074.223.654-05' => [
        'titular' => 'Machado', 
        'saldo' => 100
    ],
];

$valorASacar = 10;

foreach ($contasCorrentes as $cpf => $conta){
   exibeMensagem ( $cpf." ". $conta['titular']." ". $conta['saldo']);
} 