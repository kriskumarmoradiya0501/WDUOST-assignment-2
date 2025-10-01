<html>
<head><title>Remove Duplicates from Array</title></head>
<body>
	<h2>Enter Array Elements (comma separated)</h2>
	<form method="post" action="#">
		<input type="text" name="arr" placeholder="e.g. 1,2,2,3,4,4,5" required>
		<input type="submit" name="btnsubmit" value="Remove Duplicates">
	</form>

	<?php
	if (isset($_POST['btnsubmit'])) {
		$input = $_POST['arr'];
		// Convert input string to array
		$arr = array_map('trim', explode(',', $input));
		// Remove duplicates
		$unique = array_unique($arr);
		echo "<br><b>Original Array:</b> [" . implode(", ", $arr) . "]<br>";
		echo "<b>Array after removing duplicates:</b> [" . implode(", ", $unique) . "]";
	}
	?>
</body>
</html>
