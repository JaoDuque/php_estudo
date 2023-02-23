<?php

$contasCorrentes = [
    07442265403 => [
    'titular' => 'João',
     'saldo' => 1000
    ],
    07422565404 => [
        'titular' => 'Duque',
         'saldo' => 10000
    ],
    07422365405 => [
        'titular' => 'Machado', 
        'saldo' => 10
    ],
];

foreach ($contasCorrentes as $cpf => $conta){
    echo $cpf. PHP_EOL;
} 