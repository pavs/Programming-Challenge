<?php

/* Challenge 31: Count Words in a String - Counts the number of individual words in a string. 
*/


echo<<<_END

<form method="post" action="" >
Length of your string:
	<input type="text" name="length" size="20"/>
	<input type="submit" value="StringLen" />
</form>

_END;

if (isset($_POST['length'])) {

	echo strlen($_POST['length']);
}


?>