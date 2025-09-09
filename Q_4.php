<html>
    <head>
        <title></title>
    </head>
    <body>
        <form action="#" method="POST">
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

function sum1($num) {
    $n = $num;
    $temp = 1;
    for($i = 1; $i <= $n; $i++) {
        $temp = (($temp * $i) + $i);
        echo $temp . " ";
    }
}


?>