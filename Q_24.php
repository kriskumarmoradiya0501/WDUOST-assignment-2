<!-- Save this as merge_arrays.php and run it on a local server like XAMPP -->
<!DOCTYPE html>
<html>
<head>
    <title>Merge Arrays</title>
</head>
<body>
    <h2>Enter Elements for Two Arrays</h2>
    <form method="post">
        Array 1 (comma-separated): <br>
        <input type="text" name="array1" value="Red,Blue,Green"><br><br>
        Array 2 (comma-separated): <br>
        <input type="text" name="array2" value="Yellow,Purple,Orange"><br><br>
        <input type="submit" value="Merge Arrays">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $array1 = explode(",", $_POST["array1"]);
        $array2 = explode(",", $_POST["array2"]);

        $array1 = array_map('trim', $array1);
        $array2 = array_map('trim', $array2);

        $merged = array_merge($array1, $array2);

        echo "<h3>Merged Array:</h3>";
        echo implode(", ", $merged);
    }
    ?>
</body>
</html>
