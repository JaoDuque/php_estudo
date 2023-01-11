<?php  
    $matriz = [];


    for ($i = 0; $i < count($matriz); $i++) {
        $i = fgets(STDIN);
        $j = fgets(STDIN);
        for ($j = 0; $j < count($matriz[$i]); $j++) {
            echo $matriz[$i][$j].'  ';
        }
        echo PHP_EOL;
    }
?> 
for ($i = 0; $i < 1; $i++){
    for ($j = 0; $j < 1; $j++){
      $array[$i][$j] = $array[1][1];
     echo $array[$i][$j];
    }
    echo PHP_EOL;
}
for ($i = 0; $i < 1; $i++){
    for ($j = 0; $j < 1; $j++){
      $array[$i][$j] = $array[2][2];
      echo $array[$i][$j];
    }
    echo PHP_EOL;
}
for ($i = 0; $i < 1; $i++){
    for ($j = 0; $j < 1; $j++){
      $array[$i][$j] = $array[0][2];
      echo $array[$i][$j] .PHP_EOL;
      $array[$i][$j] = $array[1][1];
      echo $array[$i][$j] .PHP_EOL;
      $array[$i][$j] = $array[2][0];
      echo $array[$i][$j] .PHP_EOL;
    }
}