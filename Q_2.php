<?php
function factorial($num) {
    return ($num <= 1) ? 1 : $num * factorial($num - 1);
}

$n = 5;

$sum = 0;

for($i = 1; $i <= $n; $i++) {
    $fact = factorial($i);
    echo "$i! + ";
    $sum += $fact;
}

echo "\nSum of Series: $sum\n";

?>