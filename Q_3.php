
<html>

<head>
    <title>PHP Test</title>
</head>
<body>
    <form action="#" method = "POST">

        <input type="text" name="txtnum" placeholder="Enter a number">
        <input type="submit" name="btnsubmit" value="Submit">
        <?php
            if (isset($_POST['btnsubmit'])) {
                $number = $_POST['txtnum'];
                sum1($number);
            }
        ?>

    </form>
</body>

</html>


<?php

//  1 – 1/4 + 1/9 – 1/16 + 1/25 ….  

function sum1($num) {

$n = $num;

$sum3 = 0.0+1;


for ($i = 2; $i <= $n; $i++) {
    $term = 1/($i * $i);

    if($i % 2 == 0) {
        echo "-" . $term . " ";
        $sum3 -= $term;
    } else {
        echo "+" . $term . " ";
        $sum3 += $term;
    }
}

echo "\nSum of Series 3: " . $sum3 . "\n";
}
?>