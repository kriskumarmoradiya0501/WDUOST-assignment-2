<!DOCTYPE html>
<html>
<head>
    <title>Reverse Number</title>
</head>
<body>
    <form method="post">
        Enter a number: <input type="text" name="number">
        <input type="submit" value="Reverse">
    </form>

    <?php
    if (isset($_POST['number'])) {
        $number = $_POST['number'];
        $reverse = strrev($number);
        echo "<p>Reverse of $number is: $reverse</p>";
    }
    ?>
</body>
</html>
