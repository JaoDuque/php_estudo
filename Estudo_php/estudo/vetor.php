<?php

$vetor = [];
echo "Digite os números do vetor:". PHP_EOL;
for($i=0;$i<10;$i++){
    $vetor[] = (int) fgets(STDIN);
}
echo "Digite o indice do numero que deseja ver:". PHP_EOL;
$indice = (int) fgets(STDIN);
$vetor[$indice];
echo "Seu número é:". PHP_EOL;
  echo $vetor[$indice];