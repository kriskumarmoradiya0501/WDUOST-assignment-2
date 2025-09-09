<html>
<head><title>Prime Number Check</title></head>
<body>
	<form action="#" method="POST">
		<input type="text" name="num" placeholder="Enter a number">
		<input type="submit" name="btnsubmit" value="Check">
	</form>
	<?php
	if (isset($_POST['btnsubmit'])) {
		$number = $_POST['num'];
		function isPrime($num) {
			if ($num <= 1) return false;
			for ($i = 2; $i <= sqrt($num); $i++) {
				if ($num % $i == 0) return false;
			}
			return true;
		}
		if (isPrime($number)) {
			echo "$number is a prime number.";
		} else {
			echo "$number is not a prime number.";
		}
	}
	?>
</body>
</html>
