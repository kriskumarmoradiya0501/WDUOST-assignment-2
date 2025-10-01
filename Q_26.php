<html>
<head><title>Multidimensional Array Demo</title></head>
<body>
	<h2>Enter Student Details</h2>
	<form method="post" action="#">
		Name: <input type="text" name="name" required><br><br>
		Age: <input type="number" name="age" required><br><br>
		Grade: <input type="text" name="grade" required><br><br>
		<input type="submit" name="btnsubmit" value="Add Student">
	</form>

	<?php
	// Initialize students array in session
	session_start();
	if (!isset($_SESSION['students'])) {
		$_SESSION['students'] = array();
	}

	// Add new student if form submitted
	if (isset($_POST['btnsubmit'])) {
		$student = array(
			"Name" => $_POST['name'],
			"Age" => $_POST['age'],
			"Grade" => $_POST['grade']
		);
		$_SESSION['students'][] = $student;
	}

	// Display the students array as a table
	if (count($_SESSION['students']) > 0) {
		echo "<h3>Student List</h3>";
		echo "<table border='1' cellpadding='5'>";
		echo "<tr><th>Name</th><th>Age</th><th>Grade</th></tr>";
		foreach ($_SESSION['students'] as $student) {
			echo "<tr>";
			echo "<td>" . htmlspecialchars($student["Name"]) . "</td>";
			echo "<td>" . htmlspecialchars($student["Age"]) . "</td>";
			echo "<td>" . htmlspecialchars($student["Grade"]) . "</td>";
			echo "</tr>";
		}
		echo "</table>";
	}
	?>
</body>
</html>
