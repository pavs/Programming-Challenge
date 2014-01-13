<?php
/* Challenge 21: Sieve of Eratosthenes - The sieve of Eratosthenes 
is one of the most efficient ways to find all of the smaller primes (below 10 million or so).

function taken from: http://rosettacode.org/wiki/Sieve_of_Eratosthenes#PHP
*/

$limit = 100;
print_r (iprimes_upto($limit));

function iprimes_upto($limit)
{
    for ($i = 2; $i < $limit; $i++)
    {
	$primes[$i] = true;
    }
 
    for ($n = 2; $n < $limit; $n++)
    {
	if ($primes[$n])
	{
	    for ($i = $n*$n; $i < $limit; $i += $n)
	    {
		$primes[$i] = false;
	    }
	}
    }
 
    return $primes;
}

?>