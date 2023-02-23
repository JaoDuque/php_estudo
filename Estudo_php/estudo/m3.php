<?php
$array = [];

for ($i = 0; $i < 3; $i++){
    for ($j = 0; $j < 3; $j++){
        $array[$i][$j] = (int)fgets(STDIN);
    }
}
for ($i = 0; $i < 3; $i++){
    for ($j = 0; $j < 3; $j++){
       echo $array[$i][$j];
    }
    echo PHP_EOL;
};