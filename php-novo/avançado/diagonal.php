<?php
$array = [];

$m = (int)fgets(STDIN);
$n = (int)fgets(STDIN);

for ($i = 0; $i < $m; $i++){
    for ($j = 0; $j < $n; $j++){
       
        $array[$i][$j] = (int)fgets(STDIN);
       
        if($array = $array[$i][$j]){
            echo $array . PHP_EOL;
        }
    }
}
