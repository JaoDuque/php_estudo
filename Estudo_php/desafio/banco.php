<?php

require 'funcoes.php'; 

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

$contasCorrentes['074.223.654-05'] = sacar ($contasCorrentes ['074.223.654-05'], $valorASacar = 10);
$contasCorrentes['074.225.654-04'] = sacar ($contasCorrentes ['074.225.654-04'], $valorASacar = 10 );  

$contasCorrentes['074.422.654-03'] = depositar ($contasCorrentes ['074.422.654-03'], $valorADepositar = 100 );  


foreach ($contasCorrentes as $cpf => $conta){
   exibeMensagem ("$cpf {$conta['titular']} {$conta['saldo']}");
} 