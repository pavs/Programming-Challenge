<?php

/*
Challenge 15: Factorial Finder - The Factorial of a positive integer, n, 
is defined as the product of the sequence n, n-1, n-2, ...1 and the factorial 
of zero, 0, is defined as being 1. Solve this using both loops and recursion.
*/

echo<<<_END

<!DOCTYPE html>
<html>
<head>
	<title>Factorial Finder</title>
</head>
<body>



<form method="post" action="15-factorial.php">
Give a number for its factorial:
<input type="text" name="fact" size="10" />
<input type="submit" value="calculate" />

</body>
</html>

_END;

if (isset($_POST['fact'])) {
	$number = $_POST['fact'];
	echo factorial($number);
}


function factorial($number) {
	if ($number < 2) {
		return 1;
	} else {
		return ($number * factorial($number-1));
	}
}

?>