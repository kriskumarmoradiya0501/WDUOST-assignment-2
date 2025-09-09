<html>
<head><title>Palindrome Number Check</title></head>
<body>
	<form action="#" method="POST">
		<input type="text" name="num" placeholder="Enter a number">
		<input type="submit" name="btnsubmit" value="Check">
	</form>
	<?php
	if (isset($_POST['btnsubmit'])) {
		$number = $_POST['num'];
		function isPalindrome($num) {
			$original = $num;
			$reverse = 0;
			while ($num > 0) {
				$digit = $num % 10;
				$reverse = ($reverse * 10) + $digit;
				$num = (int)($num / 10);
			}
			return $original == $reverse;
		}
		if (isPalindrome($number)) {
			echo "$number is a palindrome.";
		} else {
			echo "$number is not a palindrome.";
		}
	}
	?>
</body>
</html>
