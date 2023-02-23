
$a= $array [0][0];
$b= $array [1][1];
$c= $array [2][2];
$d= $array [0][1];
$e= $array [1][2];
$f= $array [2][0];
$g= $array [0][2];
$h= $array [1][0];
$k= $array [2][1];

$dep = $a*$b*$c+$d*$e*$f+$g*$h*$k;
$des = $g*$b*$f+$a*$h*$k+$d*$h*$c;
echo $dep .PHP_EOL; 
echo $des .PHP_EOL;
