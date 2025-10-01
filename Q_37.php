
<html>
<head><title>Difference in Days Between Dates</title></head>
<body>
<h2>Find Difference in Days Between Two Dates</h2>
<form method="post" action="#">
	Enter first date: <input type="date" name="date1" required><br><br>
	Enter second date: <input type="date" name="date2" required><br><br>
	<input type="submit" name="btnsubmit" value="Find Difference">
</form>

<?php
if (isset($_POST['btnsubmit'])) {
	$date1 = $_POST['date1'];
	$date2 = $_POST['date2'];
	$d1 = new DateTime($date1);
	$d2 = new DateTime($date2);
	$diff = $d1->diff($d2);
	echo "<br><b>Difference in days:</b> " . $diff->days . " day(s)";
}
?>
</body>
</html>
