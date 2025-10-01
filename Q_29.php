<html>
<head><title>Types of Functions in PHP</title></head>
<body>
    <h2>Demonstrate All Types of Functions</h2>
    <form method="post" action="#">
        Enter a number: <input type="text" name="num" required>
        <input type="submit" name="btnsubmit" value="Test Functions">
    </form>

    <?php
    // 1. No argument, no return value
    function greet() {
        echo "<br>1. Hello from a function with no arguments and no return value.";
    }

    // 2. With argument, no return value
    function printSquare($n) {
        echo "<br>2. Square of $n is: " . ($n * $n);
    }

    // 3. No argument, with return value
    function getRandomNumber() {
        return rand(1, 100);
    }

    // 4. With argument and return value
    function cube($n) {
        return $n * $n * $n;
    }

    if (isset($_POST['btnsubmit'])) {
        $num = $_POST['num'];
        greet();
        printSquare($num);
        $rand = getRandomNumber();
        echo "<br>3. Random number (no argument, returns value): $rand";
        $cubed = cube($num);
        echo "<br>4. Cube of $num (argument, returns value): $cubed";
    }
    ?>
</body>
</html>