

<html>
    <head>
        <title></title>
    </head>
    <body> 
        <form action="#" method="POST">
            <input type="text" name="txtnum" placeholder="Enter a number how many terms you want : ">
            <input type="text" name="txtnum1" placeholder="From what you want to multiply ">
            <input type="submit" name="btnsubmit" value="Submit">
            <?php
                if (isset($_POST['btnsubmit'])) {
                    $number = $_POST['txtnum'];
                    $number2 = $_POST['txtnum1'];
                    sum1($number);
                }
            ?>
        </form>
    </body>
</html>

<?php

//(6) x + x2 + x 3 + x 4 + x 5 …. ( Here x is user defined value )  

// $n = 5; // Number of terms
// $temp = 2;

// for($i = 1; $i <= $n; $i++) {
//     echo $temp . " * ".$i;
//     $temp = $temp * ($i + 2);
// }

function sum1($num,$num1) {
    $n = $num;
    $num1 = $num1;
    $sum  = 0
    for($i = 1; $i <= $n; $i++) {
        $temp = $num1 * $i;
        $sum = $sum + $temp;
        echo $temp . " ";
    }

}


?>