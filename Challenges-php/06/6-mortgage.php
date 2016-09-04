<!DOCTYPE html>
<html>
<head>
	<title>Mortgage Calculator</title>
</head>
<body>

<?php
/* Challenge 6: Mortgage Calculator - Calculate the monthly payments of a fixed term 
mortgage over given Nth terms at a given interest rate. Also figure out how long 
it will take the user to pay back the loan.

Did the whole thing myself, but I have my doubts with the formula,
as the challenge question itself was not very clear to me.
*/

if ($_GET['calc'] == "yes") {
	$principal = $_GET['principal'];
	$intrate = $_GET['interest'];
	$interest = ((($principal / 12) + $intrate)/ 100);
	$monthly = ($principal / 12) + $interest;

	Print "The monthly payment for $$principal mortgage with $intrate% annual interest is $$monthly monthly";
}


?>

<form action = "<?php echo $_SERVER['PHP_SELF']; ?>" method = "GET">
	Principal: <input type = "text" name = "principal" size=4> <br />
	Interest rate: <input type = "text" name = "interest" size=4> <br />
<input type="hidden" name = "calc" value = "yes">
<input type="submit" name = "Calculate"/>
</form>


</body>
</html>
