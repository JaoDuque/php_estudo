<?php

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
        'saldo' => 10
    ],
];

$contasCorrentes ['074.223.654-15'] = [
    'titular' => 'Bosco', 
    'saldo' => 100
];

foreach ($contasCorrentes as $cpf => $conta){
    echo $cpf." ". $conta['titular'] . PHP_EOL;
} 