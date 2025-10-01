
<html>
<head><title>First, Second, Third Differences</title></head>
<body>
<h2>Find First, Second, and Third Differences</h2>
<form method="post" action="#">
	Enter sequence (comma separated): <input type="text" name="arr" placeholder="e.g. 1,2,5,8,10,15,25,35,50,100" required>
	<input type="submit" name="btnsubmit" value="Find Differences">
</form>

<?php
function differences($arr) {
	$diff = [];
	for ($i = 1; $i < count($arr); $i++) {
		$diff[] = $arr[$i] - $arr[$i-1];
	}
	return $diff;
}

if (isset($_POST['btnsubmit'])) {
	$arr = array_map('trim', explode(',', $_POST['arr']));
	$arr = array_map('floatval', $arr);
	$d1 = differences($arr);
	$d2 = differences($d1);
	$d3 = differences($d2);
	echo "<br><b>Original Array:</b> [" . implode(", ", $arr) . "]<br>";
	echo "<b>D1 (First Differences):</b> [" . implode(", ", $d1) . "]<br>";
	echo "<b>D2 (Second Differences):</b> [" . implode(", ", $d2) . "]<br>";
	echo "<b>D3 (Third Differences):</b> [" . implode(", ", $d3) . "]<br>";
}
?>
</body>
</html>
