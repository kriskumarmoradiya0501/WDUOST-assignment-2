<html>
<head><title>Number System Conversions</title></head>
<body>
<h2>Number System Conversions</h2>
<form method="post" action="#">
	Enter value: <input type="text" name="value" required>
	<select name="conversion">
		<option value="dectobin">Decimal to Binary</option>
		<option value="dectooct">Decimal to Octal</option>
		<option value="dectohexa">Decimal to Hexadecimal</option>
		<option value="bintodec">Binary to Decimal</option>
		<option value="bintooct">Binary to Octal</option>
		<option value="bintohexa">Binary to Hexadecimal</option>
		<option value="octtodec">Octal to Decimal</option>
		<option value="octtobin">Octal to Binary</option>
		<option value="octtohexa">Octal to Hexadecimal</option>
		<option value="hexatodec">Hexadecimal to Decimal</option>
		<option value="hexatobin">Hexadecimal to Binary</option>
		<option value="hexatooct">Hexadecimal to Octal</option>
	</select>
	<input type="submit" name="btnsubmit" value="Convert">
</form>

<?php
if (isset($_POST['btnsubmit'])) {
	$value = trim($_POST['value']);
	$conv = $_POST['conversion'];
	$result = '';
	switch ($conv) {
		case 'dectobin':
			$result = decbin((int)$value);
			break;
		case 'dectooct':
			$result = decoct((int)$value);
			break;
		case 'dectohexa':
			$result = strtoupper(dechex((int)$value));
			break;
		case 'bintodec':
			$result = bindec($value);
			break;
		case 'bintooct':
			$result = decoct(bindec($value));
			break;
		case 'bintohexa':
			$result = strtoupper(dechex(bindec($value)));
			break;
		case 'octtodec':
			$result = octdec($value);
			break;
		case 'octtobin':
			$result = decbin(octdec($value));
			break;
		case 'octtohexa':
			$result = strtoupper(dechex(octdec($value)));
			break;
		case 'hexatodec':
			$result = hexdec($value);
			break;
		case 'hexatobin':
			$result = decbin(hexdec($value));
			break;
		case 'hexatooct':
			$result = decoct(hexdec($value));
			break;
	}
	echo "<br><b>Result:</b> $result";
}
?>
</body>
</html>
