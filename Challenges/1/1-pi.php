<?php 
/* Challenge 1: PI to the Nth Digit - Enter a number and have the program generate 
PI up to that many decimal places. Keep a limit to how far the program will go. */

if (isset($_POST['f'])) $f = sanitizeString($_POST['f']); 

if ($f < 9 )
	echo bcpi($f);
else echo "incorrect number";


echo <<<_END
<html><head><title>Pi Generator</title> </head><body><pre>
Pi generator upto 8 decimal places. Enter a number between 1-8

<form method="post" action="1-pi.php"> 
Decimal place: <input type="text" name="f" size="7" />
<input type="submit" value="Convert" />
</form></pre></body></html> 
_END;

function sanitizeString($var) 
{
	$var = stripslashes($var); 
	$var = htmlentities($var); 
	$var = strip_tags($var); 
	return $var;
} 

// Pi algo Source: http://mgccl.com/2007/01/22/php-calculate-pi-revisited


function bcfact($n)
{
    return ($n == 0 || $n== 1) ? 1 : bcmul($n,bcfact($n-1));
}
function bcpi($precision)
{
    $num = 0;$k = 0;
    bcscale($precision+3);
    $limit = ($precision+3)/14;
    while($k < $limit)
    {
        $num = bcadd($num, bcdiv(bcmul(bcadd('13591409',bcmul('545140134', $k)),bcmul(bcpow(-1, $k), bcfact(6*$k))),bcmul(bcmul(bcpow('640320',3*$k+1),bcsqrt('640320')), bcmul(bcfact(3*$k), bcpow(bcfact($k),3)))));
        ++$k;
    }
    return bcdiv(1,(bcmul(12,($num))),$precision);
}
?>