<html>
<head><title>Custom Built-in Functions Demo</title></head>
<body>
<h2>Custom Built-in Functions Demo</h2>
<form method="post" action="#">
	Enter numbers (comma separated for arrays): <input type="text" name="arr" placeholder="e.g. 1,2,3,4"><br><br>
	Number 1: <input type="text" name="num1"><br>
	Number 2: <input type="text" name="num2"><br>
	For factorial/prime/series: <input type="text" name="single" placeholder="e.g. 5"><br>
	<input type="submit" name="btnsubmit" value="Show Results">
</form>

<?php
if (isset($_POST['btnsubmit'])) {
	$arr = isset($_POST['arr']) ? array_map('trim', explode(',', $_POST['arr'])) : array();
	$num1 = isset($_POST['num1']) ? $_POST['num1'] : 0;
	$num2 = isset($_POST['num2']) ? $_POST['num2'] : 0;
	$single = isset($_POST['single']) ? $_POST['single'] : 0;

	function sum_custom($arr) {
		$sum = 0;
		foreach ($arr as $v) $sum += $v;
		return $sum;
	}
	function pow_custom($a, $b) {
		$res = 1;
		for ($i = 0; $i < $b; $i++) $res *= $a;
		return $res;
	}
	function max_custom($arr) {
		$max = $arr[0];
		foreach ($arr as $v) if ($v > $max) $max = $v;
		return $max;
	}
	function min_custom($arr) {
		$min = $arr[0];
		foreach ($arr as $v) if ($v < $min) $min = $v;
		return $min;
	}
	function factorial_custom($n) {
		$f = 1;
		for ($i = 2; $i <= $n; $i++) $f *= $i;
		return $f;
	}
	function space_custom($str) {
		return str_replace('', ' ', $str);
	}
	function series_custom($n) {
		$s = [];
		for ($i = 1; $i <= $n; $i++) $s[] = $i;
		return implode(', ', $s);
	}
	function prime_custom($n) {
		if ($n <= 1) return false;
		for ($i = 2; $i <= sqrt($n); $i++) if ($n % $i == 0) return false;
		return true;
	}
	function factors_custom($n) {
		$f = [];
		for ($i = 1; $i <= $n; $i++) if ($n % $i == 0) $f[] = $i;
		return implode(', ', $f);
	}
	function sort_array_custom($arr) {
		for ($i = 0; $i < count($arr) - 1; $i++) {
			for ($j = $i + 1; $j < count($arr); $j++) {
				if ($arr[$i] > $arr[$j]) {
					$tmp = $arr[$i];
					$arr[$i] = $arr[$j];
					$arr[$j] = $tmp;
				}
			}
		}
		return $arr;
	}

	if (!empty($arr)) {
		echo "<b>sum([" . implode(", ", $arr) . "]):</b> " . sum_custom($arr) . "<br>";
		echo "<b>max([" . implode(", ", $arr) . "]):</b> " . max_custom($arr) . "<br>";
		echo "<b>min([" . implode(", ", $arr) . "]):</b> " . min_custom($arr) . "<br>";
		echo "<b>sort_array([" . implode(", ", $arr) . "]):</b> [" . implode(", ", sort_array_custom($arr)) . "]<br>";
	}
	if ($num1 !== '' && $num2 !== '') {
		echo "<b>pow($num1, $num2):</b> " . pow_custom($num1, $num2) . "<br>";
	}
	if ($single !== '') {
		echo "<b>factorial($single):</b> " . factorial_custom($single) . "<br>";
		echo "<b>series($single):</b> " . series_custom($single) . "<br>";
		echo "<b>prime($single):</b> " . (prime_custom($single) ? 'Yes' : 'No') . "<br>";
		echo "<b>factors($single):</b> " . factors_custom($single) . "<br>";
	}
	if ($num1 !== '') {
		echo "<b>space('$num1'):</b> " . implode(' ', str_split($num1)) . "<br>";
	}
}
?>
</body>
</html>
