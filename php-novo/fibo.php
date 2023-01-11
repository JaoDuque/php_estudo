<?php

$num = fgets(STDIN);
echo "1 ";
$a = 0;
$b = 1;
for ($i = 1; $i < $num; $i++){
  
    $c = $a + $b;
    $a = $b;
    $b = $c;

    echo "$b ";   
};
