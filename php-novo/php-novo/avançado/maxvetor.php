<?php
$vetor=[];
$maior = 0;
for($i=0;$i< 10;$i++){
    $vetor[] = (int) fgets(STDIN);
    if($maior < $vetor[$i]){
        $maior = $vetor[$i];
        $indice = $i;
       }
}
echo "O maior elemento é $maior e seu indice é $indice".PHP_EOL;