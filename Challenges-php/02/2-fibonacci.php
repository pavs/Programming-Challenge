<?php 
/* Challenge 2:Fibonacci Sequence - Enter a number and have the program generate the 
Fibonacci sequence to that number or to the Nth number.

I Used code from the first challenge and added function from somewhere else.
*/


if (isset($_POST['f'])) $f = sanitizeString($_POST['f']); 

echo fibonacci($f);

echo <<<_END
<html><head><title>Fibonacci Sequence Generator</title> </head><body><pre>

<form method="post" action="2-fibonacci.php"> 
Fibonacci Sequence: <input type="text" name="f" size="7" />
<input type="submit" value="Convert" />
</form></pre></body></html> 
_END;

// Sanitizing input
function sanitizeString($var) 
{
	$var = stripslashes($var); 
	$var = htmlentities($var); 
	$var = strip_tags($var); 
	return $var;
} 

function fibonacci($n)
{
	$a = 0;
	$b = 1;
	for ($i = 0; $i < $n; $i++)
	{
		printf("%d\n",$a);
		$sum = $a+$b;
		$a = $b;
		$b = $sum;
	}
}

?>