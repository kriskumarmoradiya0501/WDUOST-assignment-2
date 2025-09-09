<!DOCTYPE html>
<html>
<head>
    <title>Octal Number Checker</title>
</head>
<body>
    <form method="post">
        Enter a number: <input type="text" name="number">
        <input type="submit" value="Check">
    </form>

    <?php
    if (isset($_POST['number'])) {
        $number = $_POST['number'];
        $isOctal = true;

        for ($i = 0; $i < strlen($number); $i++) {
            if ($number[$i] < '0' || $number[$i] > '7') {
                $isOctal = false;
                break;
            }
        }

        if ($isOctal) {
            echo "<p>$number is an Octal number.</p>";
        } else {
            echo "<p>$number is NOT an Octal number.</p>";
        }
    }
    ?>
</body>
</html>
