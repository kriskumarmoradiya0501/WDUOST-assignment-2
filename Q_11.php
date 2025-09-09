<!DOCTYPE html>
<html>
<head>
    <title>Sum of Digits</title>
</head>
<body>
    <h2>Sum of Digits Calculator</h2>
    <form method="post">
        Enter a number: <input type="number" name="number">
        <input type="submit" value="Calculate">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number = intval($_POST["number"]);
        $sum = 0;

        while ($number > 0) {
            $sum += $number % 10;
            $number = intdiv($number, 10);
        }

        echo "<h3>Sum of digits: $sum</h3>";
    }
    ?>
</body>
</html>
