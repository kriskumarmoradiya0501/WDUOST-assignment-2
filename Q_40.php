
<html>
<head><title>Menu Driven Array Operations</title></head>
<body>
<h2>Menu Driven Array Operations</h2>
<form method="post" action="#">
	Enter array elements (comma separated): <input type="text" name="arr" value="<?php if(isset($_POST['arr'])) echo htmlspecialchars($_POST['arr']); ?>" required><br><br>
	<select name="operation">
		<option value="insert">Insert</option>
		<option value="delete">Delete</option>
		<option value="update">Update</option>
		<option value="search">Search</option>
	</select><br><br>
	Value: <input type="text" name="value"><br>
	For update: New Value: <input type="text" name="newvalue"><br><br>
	<input type="submit" name="btnsubmit" value="Perform Operation">
</form>

<?php
if (isset($_POST['btnsubmit'])) {
	$arr = array_map('trim', explode(',', $_POST['arr']));
	$operation = $_POST['operation'];
	$value = $_POST['value'];
	$newvalue = isset($_POST['newvalue']) ? $_POST['newvalue'] : '';

	if ($operation == 'insert' && $value !== '') {
		$arr[] = $value;
		echo "<b>After Insertion:</b> [" . implode(", ", $arr) . "]<br>";
	} elseif ($operation == 'delete' && $value !== '') {
		$key = array_search($value, $arr);
		if ($key !== false) {
			unset($arr[$key]);
			$arr = array_values($arr);
			echo "<b>After Deletion:</b> [" . implode(", ", $arr) . "]<br>";
		} else {
			echo "<b>Value $value not found in array.</b><br>";
		}
	} elseif ($operation == 'update' && $value !== '' && $newvalue !== '') {
		$key = array_search($value, $arr);
		if ($key !== false) {
			$arr[$key] = $newvalue;
			echo "<b>After Update:</b> [" . implode(", ", $arr) . "]<br>";
		} else {
			echo "<b>Value $value not found in array.</b><br>";
		}
	} elseif ($operation == 'search' && $value !== '') {
		$key = array_search($value, $arr);
		if ($key !== false) {
			echo "<b>Value $value found at position " . ($key+1) . ".</b><br>";
		} else {
			echo "<b>Value $value not found in array.</b><br>";
		}
	}
	echo "<b>Current Array:</b> [" . implode(", ", $arr) . "]<br>";
}
?>
</body>
</html>
