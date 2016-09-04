<!DOCTYPE html>
<html>
<head>
	<title>Basic Calculator</title>
</head>
<body>

</body>
</html>

<?php
/*
Challenge 9: Calculator - A simple calculator to do basic operators. 
Make it a scientific calculator for added complexity. 
*/

if (isset($_POST['add0']) && ($_POST['add1'])) {
	$add1 = sanitizeString($_POST['add0']);
	$add2 = sanitizeString($_POST['add1']);

	$addition = $add1 + $add2;

	echo "Addition: " .$addition;
}

if (isset($_POST['mul0']) && ($_POST['mul1'])) {
	$mul1 = sanitizeString($_POST['mul0']);
	$mul2 = sanitizeString($_POST['mul1']);

	$multiply = $mul1 * $mul2;

	echo "Multiplication: " .$multiply;
}

if (isset($_POST['sub0']) && ($_POST['sub1'])) {
	$sub1 = sanitizeString($_POST['sub0']);
	$sub2 = sanitizeString($_POST['sub1']);

	$minus = $sub1 - $sub2;

	echo "Subtract: " .$minus;
}

if (isset($_POST['div0']) && ($_POST['div1'])) {
	$div1 = sanitizeString($_POST['div0']);
	$div2 = sanitizeString($_POST['div1']);

	$divide = $div1 / $div2;

	echo "Divition: " .$divide;
}


echo <<<_END

<pre>

<form method="post" action="9-basic-calculator.php">
Add Two Numbers: 
	<input type="text" name="add0" size="7" />
	<input type="text" name="add1" size="7" />
	<input type="submit" value="Add" />

<br>

Multiple Two Numbers:
	<input type="text" name="mul0" size="7" />
	<input type="text" name="mul1" size="7" />
	<input type="submit" value="Multiple" />

<br>

Subtract Numbers:
	<input type="text" name="sub0" size="7" />
	<input type="text" name="sub1" size="7" />
	<input type="submit" value="Subtract" />
<br>

Divide Numbers:
	<input type="text" name="div0" size="7" />
	<input type="text" name="div1" size="7" />
	<input type="submit" value="Divide" />

<br>



</form></pre>
_END;





function sanitizeString($var){

	$var = stripcslashes($var);
	$var = htmlentities($var);
	$var = strip_tags($var);
	return $var;
}
?>