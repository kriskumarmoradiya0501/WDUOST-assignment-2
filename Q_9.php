<!DOCTYPE html>
<html>
<head>
    <title>Fibonacci Series Generator</title>
</head>
<body>
    <h2>Generate Fibonacci Series</h2>
    <form method="post">
        Enter number of terms: <input type="number" name="terms" min="1" required>
        <input type="submit" value="Generate">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $terms = intval($_POST["terms"]);

        $fibonacci = [];
        $fibonacci[0] = 1;
        $fibonacci[1] = 1;

        for ($i = 2; $i < $terms; $i++) {
            $fibonacci[$i] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
        }

        echo "<h3>Fibonacci Series:</h3>";
        for ($i = 0; $i < $terms; $i++) {
            echo $fibonacci[$i] . " ";
        }
    }
    ?>
</body>
</html>
