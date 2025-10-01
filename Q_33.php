
<html>
<head><title>Recursive Table</title></head>
<body>
<h2>Recursive Multiplication Table</h2>
<form method="post" action="#">
	Enter a number: <input type="text" name="num" required>
	<input type="submit" name="btnsubmit" value="Print Table">
</form>

<?php
function printTable($num, $i = 1) {
	if ($i > 10) return;
	echo "$num x $i = " . ($num * $i) . "<br>";
	printTable($num, $i + 1);
}

if (isset($_POST['btnsubmit'])) {
	$num = (int)$_POST['num'];
	echo "<br><b>Table of $num:</b><br>";
	printTable($num);
}
?>
</body>
</html>
