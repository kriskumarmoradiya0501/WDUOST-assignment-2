<!DOCTYPE html>
<html>
<head>
    <title>Armstrong Number Checker</title>
</head>
<body>
    <form method="post">
        Enter a number: <input type="text" name="number">
        <input type="submit" value="Check">
    </form>

    <?php
    if (isset($_POST['number'])) {
        $number = $_POST['number'];
        $length = strlen($number);
        $sum = 0;

        for ($i = 0; $i < $length; $i++) {
            $digit = intval($number[$i]);
            $sum += pow($digit, $length);
        }

        if ($sum == intval($number)) {
            echo "<p>$number is an Armstrong number.</p>";
        } else {
            echo "<p>$number is NOT an Armstrong number.</p>";
        }
    }
    ?>
</body>
</html>
