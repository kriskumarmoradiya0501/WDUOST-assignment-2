
<html>
<head><title>Remove Duplicates In-Place</title></head>
<body>
<h2>Remove Duplicate Elements from Array (No Second Array)</h2>
<form method="post" action="#">
	Enter array elements (comma separated): <input type="text" name="arr" placeholder="e.g. 1,2,2,3,4,4,5" required>
	<input type="submit" name="btnsubmit" value="Remove Duplicates">
</form>

<?php
if (isset($_POST['btnsubmit'])) {
	$arr = array_map('trim', explode(',', $_POST['arr']));
	$n = count($arr);
	for ($i = 0; $i < $n; $i++) {
		for ($j = $i + 1; $j < $n; $j++) {
			if ($arr[$i] == $arr[$j]) {
				for ($k = $j; $k < $n - 1; $k++) {
					$arr[$k] = $arr[$k + 1];
				}
				$n--;
				unset($arr[$n]);
				$j--;
			}
		}
	}
	echo "<br><b>Array after removing duplicates:</b> [" . implode(", ", $arr) . "]<br>";
}
?>
</body>
</html>
