
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
function factorial($num) {
    return ($num <= 1) ? 1 : $num * factorial($num - 1);
}


function sum1($num) {

    $n = $num;


$sum = 0;

for($i = 1; $i <= $n; $i++) {
    $fact = factorial($i);
    echo "$i! + ";
    $sum += $fact;
}

echo "\nSum of Series: $sum\n";
}
?>