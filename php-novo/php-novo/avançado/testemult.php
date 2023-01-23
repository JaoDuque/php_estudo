<?php
$array = [
        [3,2],
        [5,-1]
];
$matriz = [
    [6,4,-2],
    [0,7,1]
];

$manv = [];
for($i = 0; $i < 2; $i++) {
    for($j = 0; $j < 3; $j++) {
        for($x = 0; $x < 2; $x++) {
            $aux += $array[$i][$x] * $matriz[$x][$j];
        }
        $manv[$i][$j] = $aux;
        $aux = 0;
    }
}

for($i = 0; $i < 2; $i++) {
    for($j = 0; $j < 3; $j++) {
        echo $manv[$i][$j];
    }
    echo  PHP_EOL;
}
