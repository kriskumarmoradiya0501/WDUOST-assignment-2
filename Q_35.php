
<html>
<head><title>Odd and Even Count in Array</title></head>
<body>
<h2>Count Odd and Even Elements in Array</h2>
<form method="post" action="#">
	Enter array elements (comma separated): <input type="text" name="arr" placeholder="e.g. 5,2,9,1,7" required>
	<input type="submit" name="btnsubmit" value="Count">
</form>

<?php
if (isset($_POST['btnsubmit'])) {
	$arr = array_map('trim', explode(',', $_POST['arr']));
	$odd = 0;
	$even = 0;
	foreach ($arr as $v) {
		if ($v % 2 == 0) $even++;
		else $odd++;
	}
	echo "<br><b>Array:</b> [" . implode(", ", $arr) . "]<br>";
	echo "<b>Odd elements:</b> $odd<br>";
	echo "<b>Even elements:</b> $even<br>";
}
?>
</body>
</html>
