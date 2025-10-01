
<html>
<head><title>Max and Min in Array</title></head>
<body>
<h2>Find Maximum and Minimum in Array</h2>
<form method="post" action="#">
	Enter array elements (comma separated): <input type="text" name="arr" placeholder="e.g. 5,2,9,1,7" required>
	<input type="submit" name="btnsubmit" value="Find">
</form>

<?php
if (isset($_POST['btnsubmit'])) {
	$arr = array_map('trim', explode(',', $_POST['arr']));
	$max = $arr[0];
	$min = $arr[0];
	foreach ($arr as $v) {
		if ($v > $max) $max = $v;
		if ($v < $min) $min = $v;
	}
	echo "<br><b>Array:</b> [" . implode(", ", $arr) . "]<br>";
	echo "<b>Maximum:</b> $max<br>";
	echo "<b>Minimum:</b> $min<br>";
}
?>
</body>
</html>
