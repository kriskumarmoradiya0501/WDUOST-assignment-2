<?php

//(6) x + x2 + x 3 + x 4 + x 5 …. ( Here x is user defined value )  

$n = 5; // Number of terms
$temp = 2;

for($i = 1; $i <= $n; $i++) {
    echo $temp . " * ".$i;
    $temp = $temp * ($i + 2);
}


?>