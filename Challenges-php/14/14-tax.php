<?php
/* Challenge 14: Tax Calculator - Asks the user to enter a cost and either a country or state tax. 
It then returns the tax plus the total cost with tax.

function idea take from stackoverflaw.com
*/


echo<<<_END

<!DOCTYPE html>
<html>
<head>
	<title>Tax Calculator</title>
</head>
<body>


<form method="post" action="14-tax.php">
Please provide weekly salary to calculate tax:
<input type="text" name="get_tax" size="10" />
<input type="submit" value="calculate" />

</form>

</body>
</html>


_END;

if (isset($_POST['get_tax'])) {

	$salary = $_POST['get_tax'];

	if ($salary <= 150 ) {
		echo "You income doesn't fall under the tax bracket.";
	}
    else {
	echo "Your weekly tax for your salary $" .$salary ." is $" .tax($salary);
	}
}


function tax($salary) {
	$percent = 0;
	$subt = 0;

	if ($salary >= 150 && $salary <= 650) {
		$percent = 10;
		$subt = 15;
	} elseif ($salary >= 651 && $salary <= 1400) {
		$percent = 15;
		$subt = 47.50;
	} elseif ($salary >= 1401 && $salary <= 2350) {
		$percent = 20;
		$subt = 117;
	} elseif ($salary >= 2351 && $salary <= 3550) {
		$percent = 25;
		$subt = 235;
	} elseif ($salary >= 3551 && $salary <= 5000) {
		$percent = 30;
		$subt = 412;
	} elseif ($salary >= 5001) {
		$percent = 35;
		$subt = 662;
	}

	$final = $salary * $percent / 100 - $subt;
	return $final;

	
}

?>