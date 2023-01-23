<?php
$array = [];

$m = (int)fgets(STDIN);
$n = (int)fgets(STDIN);

for ($i = 0; $i < $m; $i++){
    for ($j = 0; $j < $n; $j++){
       $array[$i][$j] = (int)fgets(STDIN);
       }
}

for ($i = 0; $i < $m; $i++){
    for ($j = 0; $j < $n; $j++){
       echo $array[$i][$j];
    }
    echo PHP_EOL;
}

for ($i = 0; $i < $m; $i++){
    for ($j = 0; $j < $n; $j++){
       if ($i == $j){
        echo $array[$i][$j];
       }
    }
    echo PHP_EOL;
}
for ($i = 0; $i < $m; $i++){
    for ($j = 0; $j < $n; $j++){
        if ($j==$n-1-$i){
            echo $array[$i][$j];
        }
    }
    echo PHP_EOL;
}