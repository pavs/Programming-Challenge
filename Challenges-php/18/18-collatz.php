<?php
/* Challenge 18: Collatz Conjecture - Start with a number n > 1. 
Find the number of steps it takes to reach one using the following process: 
If n is even, divide it by 2. If n is odd, multiply it by 3 and add 1.

Source from multiple places inclusing my own implementation.
*/

echo<<<_END

<form method="post" action="18-collatz.php">
Enter a number greater than one:
<input type="text" name="coll" size="10" />
<input type="submit" value="Collatz" />
</br>
_END;


if (isset($_POST['coll'])) {

    $number = $_POST['coll'];
	echo collcon($number);
}

function collcon($number) {

	$i=0;
	while($number>1){
		if ($number % 2)
		{
			$number = (3*$number) + 1;
			$i++;
			echo "step $i: $n <br/>";
		}
		else
		{
			$number = $number/2;
			$i++;
			echo "step $i: $number <br/>";
		}
	}
}




?>