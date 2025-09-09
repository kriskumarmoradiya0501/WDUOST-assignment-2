<!DOCTYPE html>
<html>
<head>
    <title>Sum of First and Last Digit</title>
</head>
<body>
    <form method="post">
        Enter a number: <input type="text" name="number">
        <input type="submit" value="Find Sum">
    </form>

    <?php
    if (isset($_POST['number'])) {
        $number = $_POST['number'];
        $firstDigit = intval($number[0]);
        $lastDigit = intval($number[strlen($number) - 1]);
        $sum = $firstDigit + $lastDigit;

        echo "<p>First digit: $firstDigit</p>";
        echo "<p>Last digit: $lastDigit</p>";
        echo "<p>Sum of first and last digit: $sum</p>";
    }
    ?>
</body>
</html>
