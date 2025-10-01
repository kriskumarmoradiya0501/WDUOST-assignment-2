
<html>
<head><title>Sum of Array Elements</title></head>
<body>
    <h2>Enter Array Elements (comma separated)</h2>
    <form method="post" action="#">
        <input type="text" name="arr" placeholder="e.g. 10,20,30,40" required>
        <input type="submit" name="btnsubmit" value="Find Sum">
    </form>

    <?php
    if (isset($_POST['btnsubmit'])) {
        $input = $_POST['arr'];
        $arr = array_map('trim', explode(',', $input));
        $sum = array_sum($arr);
        echo "<br><b>Array:</b> [" . implode(", ", $arr) . "]<br>";
        echo "<b>Sum of elements:</b> $sum";
    }
    ?>
</body>
</html>