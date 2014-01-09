<!DOCTYPE html>
<html>
<head>
	<title>Binary to Decimal and vice versa</title>
</head>
<body>

</body>
</html>

<?php
/*
Challenge 8: Binary to Decimal and Back Converter - 
Develop a converter to convert a decimal number to binary or a binary 
number to its decimal equivalent. 


*/



if (isset($_POST['d'])) {
	$d = sanitizeString($_POST['d']);
	echo decbin($d);
}

if (isset($_POST['b'])) {
	$b = sanitizeString($_POST['b']);
	echo bindec($b);
}



echo <<<_END

<pre>

<form method="post" action="8-binary-decimal.php">
Decimal Number: <input type="text" name="d" size="7" />
	<input type="submit" value="Convert" />
Binary Number: <input type="text" name="b" size="7" />
	<input type="submit" value="Convert" />

</form></pre>

_END;


function sanitizeString($var)
{
	$var = stripcslashes($var);
	$var = htmlentities($var);
	$var = strip_tags($var);
	return $var;
}

?>