<html>
<head><title>Recursive Factorial</title></head>
<body>
<h2>Recursive Factorial Calculator</h2>
<form method="post" action="#">
	Enter a number: <input type="text" name="num" required>
	<input type="submit" name="btnsubmit" value="Calculate Factorial">
</form>

<?php
function factorial($n) {
	if ($n <= 1) return 1;
	return $n * factorial($n - 1);
}

if (isset($_POST['btnsubmit'])) {
	$num = (int)$_POST['num'];
	$fact = factorial($num);
	echo "<br><b>Factorial of $num is: $fact</b>";
}
?>
</body>
</html>
