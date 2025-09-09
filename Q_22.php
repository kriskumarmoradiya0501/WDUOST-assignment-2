<!-- save this as sort_array.php and run it on a local server like XAMPP -->
<!DOCTYPE html>
<html>
<head>
    <title>Sort Array</title>
</head>
<body>
    <h2>Enter 5 Numbers to Sort</h2>
    <form method="post">
        <input type="number" name="num1" required>
        <input type="number" name="num2" required>
        <input type="number" name="num3" required>
        <input type="number" name="num4" required>
        <input type="number" name="num5" required>
        <br><br>
        <input type="submit" value="Sort">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $array = [
            $_POST["num1"],
            $_POST["num2"],
            $_POST["num3"],
            $_POST["num4"],
            $_POST["num5"]
        ];

        sort($array);

        echo "<h3>Sorted Array:</h3>";
        echo implode(", ", $array);
    }
    ?>
</body>
</html>
