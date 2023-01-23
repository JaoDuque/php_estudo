<?php

function sacar(array $conta, float $valorASacar):array
{

    if ( $valorASacar > $conta ['saldo']){
        exibeMensagem("Você não pode sacar este valor");
    } else{
        $conta ['saldo'] -=$valorASacar;
    }
    
    return $conta;
}

function depositar(array $conta,float $valorADepositar):array
{
  
    if ( $valorADepositar > 0){
        $conta ['saldo'] +=$valorADepositar;
    } else{
        exibeMensagem("Você só pode depositar valores positivos");
    }
    
    return $conta;  
}

function exibeMensagem(string $mensagem)
{
    echo $mensagem . PHP_EOL;
}

for ($i = 0; $i < 1; $i++){
    for ($j = 0; $j < $n; $j++){
        [$i]=[$j];
        echo $array[$i][$j] .PHP_EOL;    
    }
}
for ($i = 0; $i < 1; $i++){
    for ($j = 0; $j < $n; $j++){
        [$i]+[$j] = $n + 1;
        echo $array[$i][$j] .PHP_EOL;
    }
}

for ($i = 0; $i < $m; $i++){
    for ($j = 0; $j < $n; $j++){
       echo $array[$i][$j];
    }
    echo PHP_EOL;
};