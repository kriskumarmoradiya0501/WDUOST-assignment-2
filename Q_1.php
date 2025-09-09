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
function sum1($num) {

    $n = $num;

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


}
?>
