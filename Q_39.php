
<html>
<head><title>Count Positive, Negative, Zero</title></head>
<body>
<h2>Count Positive, Negative, and Zero Elements in Array</h2>
<form method="post" action="#">
	Enter array elements (comma separated): <input type="text" name="arr" placeholder="e.g. -2,0,5,3,-1,0" required>
	<input type="submit" name="btnsubmit" value="Count">
</form>

<?php
if (isset($_POST['btnsubmit'])) {
	$arr = array_map('trim', explode(',', $_POST['arr']));
	$pos = 0;
	$neg = 0;
	$zero = 0;
	foreach ($arr as $v) {
		if ($v > 0) $pos++;
		elseif ($v < 0) $neg++;
		else $zero++;
	}
	echo "<br><b>Array:</b> [" . implode(", ", $arr) . "]<br>";
	echo "<b>Positive elements:</b> $pos<br>";
	echo "<b>Negative elements:</b> $neg<br>";
	echo "<b>Zero elements:</b> $zero<br>";
}
?>
</body>
</html>
