<?php
/* Challenge 30: Check if Palindrome - Checks if the string entered by 
the user is a palindrome. That is that it reads the same forwards as backwards like “racecar”
*/

echo<<<_END

<form method="post" action="30-palindrome.php">

Give a word to check if palindrome:
<input type="text" name="palindrome" size="20" />
<input type="submit" value="Palindrome" />

</form>
 
_END;


if (isset($_POST['palindrome'])) {

	$word = $_POST['palindrome'];
	$reverse = strrev($word);
	if ($word == $reverse) {

		echo "Its a palindrome!";
	}
	else echo "Not a palindrom. :(";
	
	
}



?>