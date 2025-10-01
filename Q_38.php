
<html>
<head><title>Sort and Merge Arrays</title></head>
<body>
<h2>Sort and Merge Two Arrays</h2>
<form method="post" action="#">
	Enter first array (comma separated): <input type="text" name="arr1" placeholder="e.g. 5,2,9" required><br><br>
	Enter second array (comma separated): <input type="text" name="arr2" placeholder="e.g. 1,7,3" required><br><br>
	<input type="submit" name="btnsubmit" value="Sort and Merge">
</form>

<?php
if (isset($_POST['btnsubmit'])) {
	$arr1 = array_map('trim', explode(',', $_POST['arr1']));
	$arr2 = array_map('trim', explode(',', $_POST['arr2']));
	sort($arr1);
	sort($arr2);
	$merged = array_merge($arr1, $arr2);
	sort($merged);
	echo "<br><b>First Array (sorted):</b> [" . implode(", ", $arr1) . "]<br>";
	echo "<b>Second Array (sorted):</b> [" . implode(", ", $arr2) . "]<br>";
	echo "<b>Merged Array (sorted):</b> [" . implode(", ", $merged) . "]<br>";
}
?>
</body>
</html>
