<!DOCTYPE html>
<html>
<head>
    <title>Associative Array Demo</title>
</head>
<body>
    <h2>Enter Student Details</h2>
    <form method="post">
        Name: <input type="text" name="name" ><br><br>
        Age: <input type="number" name="age" ><br><br>
        Course: <input type="text" name="course" ><br><br>
        University: <input type="text" name="university"><br><br>
        <input type="submit" value="Submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $student = array(
            "Name" => $_POST["name"],
            "Age" => $_POST["age"],
            "Course" => $_POST["course"],
            "University" => $_POST["university"]
        );

        echo "<h3>Student Information:</h3>";
        foreach ($student as $key => $value) {
            echo "$key: $value<br>";
        }
    }
    ?>
</body>
</html>
