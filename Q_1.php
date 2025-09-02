<?php
$n = 20;

$sum1 = 0;
for ($i = 1; $i <= $n; $i++) {
    $term = $i * $i;
    if ($i % 2 == 0) {
        echo "+ $term ";
        $sum1 += $term;
    } else {
        echo "- $term ";
        $sum1 -= $term;
    }
}
echo "\nSum of Series 1: $sum1\n";

?>
