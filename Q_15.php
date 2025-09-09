<!DOCTYPE html>
<html>
<head>
    <title>Smallest and Largest Digit</title>
</head>
<body>
    <form method="post">
        Enter a number: <input type="text" name="number">
        <input type="submit" value="Find">
    </form>

    <?php
    if (isset($_POST['number'])) {
        $number = $_POST['number'];
        $digits = str_split($number);

        $min = $max = intval($digits[0]);

        foreach ($digits as $digit) {
            $d = intval($digit);
            if ($d < $min) {
                $min = $d;
            }
            if ($d > $max) {
                $max = $d;
            }
        }

        echo "<p>Smallest digit: $min</p>";
        echo "<p>Largest digit: $max</p>";
    }
    ?>
</body>
</html>
