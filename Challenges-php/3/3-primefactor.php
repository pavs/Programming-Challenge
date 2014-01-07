<?php 

// Same. Modified First challenge and added function from somewhere else

if (isset($_POST['f'])) $f = sanitizeString($_POST['f']); 

echo factors($f);

echo <<<_END
<html><head><title>Prime Factor</title> </head><body><pre>

<form method="post" action="3-primefactor.php"> 
Prime Factor: <input type="text" name="f" size="7" />
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

function factors($n = 0, $array = FALSE) {
 
	$pf = array();	
	for ($i = 2; $i <= $n / $i; $i++) {	
		while ($n % $i == 0) {
			$pf[] = $i;
			$n = $n / $i;
		}		
	}
 
	if ($n > 1) $pf[] = $n;	
	return ($array === TRUE) ? $pf : implode(' * ', $pf);
 
}

?>