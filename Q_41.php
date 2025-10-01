
<html>
<head><title>Swap Even and Odd Positions</title></head>
<body>
<h2>Swap Even and Odd Positional Elements in Array</h2>
<form method="post" action="#">
	Enter array elements (comma separated): <input type="text" name="arr" placeholder="e.g. 1,2,3,4,5,6" required>
	<input type="submit" name="btnsubmit" value="Swap">
</form>

<?php
if (isset($_POST['btnsubmit'])) {
	$arr = array_map('trim', explode(',', $_POST['arr']));
	$n = count($arr);
	for ($i = 0; $i < $n - 1; $i += 2) {
		$temp = $arr[$i];
		$arr[$i] = $arr[$i + 1];
		$arr[$i + 1] = $temp;
	}
	echo "<br><b>Array after swapping:</b> [" . implode(", ", $arr) . "]<br>";
}
?>
</body>
</html>
