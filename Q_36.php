
<html>
<head><title>Sort Array Ascending and Descending</title></head>
<body>
<h2>Sort Array in Ascending and Descending Order</h2>
<form method="post" action="#">
	Enter array elements (comma separated): <input type="text" name="arr" placeholder="e.g. 5,2,9,1,7" required>
	<input type="submit" name="btnsubmit" value="Sort">
</form>

<?php
if (isset($_POST['btnsubmit'])) {
	$arr = array_map('trim', explode(',', $_POST['arr']));
	$asc = $arr;
	$desc = $arr;
	sort($asc);
	rsort($desc);
	echo "<br><b>Original Array:</b> [" . implode(", ", $arr) . "]<br>";
	echo "<b>Ascending Order:</b> [" . implode(", ", $asc) . "]<br>";
	echo "<b>Descending Order:</b> [" . implode(", ", $desc) . "]<br>";
}
?>
</body>
</html>
