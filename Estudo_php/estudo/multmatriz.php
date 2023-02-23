<?php
$array = [];
$matriz = [];

echo "Digite a quantidade de colunas da Matriz 1: ";
$m = (int)fgets(STDIN);
echo "Digite a quantidade de linhas da Matriz 1: ";
$n = (int)fgets(STDIN);
#$i = linhas
#$j = colunas
echo "Digite a Matriz 1:".PHP_EOL;
for ($i = 0; $i < $n; $i++){
    for ($j = 0; $j < $m; $j++){
       $array[$i][$j] = (int)fgets(STDIN);
       }
}
for ($i = 0; $i < $n; $i++){
    for ($j = 0; $j < $m; $j++){
        echo $array[$i][$j]; 
    }
    echo PHP_EOL;
}
echo "Digite a quantidade de colunas da Matriz 2: ";
$o = (int)fgets(STDIN);
echo "Digite a Matriz 2:".PHP_EOL;
for ($i = 0; $i < $m; $i++){
    for ($j = 0; $j < $o; $j++){
       $matriz[$i][$j] = (int)fgets(STDIN);
       }
}
for ($i = 0; $i < $m; $i++){
    for ($j = 0; $j < $o; $j++){
        echo $matriz[$i][$j];
    }
    echo PHP_EOL;
}
$manv = [];
echo "Matrizes multiplicadas :".PHP_EOL;

for($i = 0; $i < $n; $i++) {
    for($j = 0; $j < $o; $j++) {
        for($x = 0; $x < $n; $x++) {
            $aux += $array[$i][$x] * $matriz[$x][$j];
        }
        $manv[$i][$j] = $aux;
        $aux = 0;
    }
}

for($i = 0; $i < $n; $i++) {
    for($j = 0; $j < $o; $j++) {
        echo $manv[$i][$j];
    }
    echo  PHP_EOL;
}
