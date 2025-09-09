<!-- Save this as search_array.php and run it on a local server like XAMPP -->
<!DOCTYPE html>
<html>
<head>
    <title>Search Element in Array</title>
</head>
<body>
    <h2>Search for an Animal</h2>
    <form method="post">
        Enter animal name: <input type="text" name="search"><br><br>
        <input type="submit" value="Search">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Predefined array
        $animals = array("Dog", "Cat", "Elephant", "Tiger");

        // Get user input
        $search = $_POST["search"];

        // Search in array
        if (in_array($search, $animals)) {
            echo "<h3>Result:</h3>";
            echo "$search is found in the array.";
        } else {
            echo "<h3>Result:</h3>";
            echo "$search is NOT found in the array.";
        }
    }
    ?>
</body>
</html>
