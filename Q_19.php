<!DOCTYPE html>
<html>
<head>
    <title>Binary Number Checker</title>
</head>
<body>
    <form method="post">
        Enter a number: <input type="text" name="number">
        <input type="submit" value="Check">
    </form>

    <?php
    if (isset($_POST['number'])) {
        $number = $_POST['number'];
        $isBinary = true;

        for ($i = 0; $i < strlen($number); $i++) {
            if ($number[$i] != '0' && $number[$i] != '1') {
                $isBinary = false;
                break;
            }
        }

        if ($isBinary) {
            echo "<p>$number is a Binary number.</p>";
        } else {
            echo "<p>$number is NOT a Binary number.</p>";
        }
    }
    ?>
</body>
</html>
