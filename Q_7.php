<!DOCTYPE html>
<html>
<head>
    <title>Expression Calculator</title>
</head>
<body>
    <form method="post">
        Enter value of x: <input type="number" name="x" step="any" required>
        <input type="submit" value="Calculate">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $x = floatval($_POST["x"]);
        $result = 7;

        function factorial($num) {
            if ($num <= 1) return 1;
            return $num * factorial($num - 1);
        }

        for ($n = 2; $n <= 5; $n++) {
            $term = pow($x, $n) / factorial($n);
            $result += $term;
        }

        echo "<h3>Result: " . round($result, 4) . "</h3>";
    }
    ?>
</body>
</html>
