<?php

/* Challenge 27: Reverse a String - Enter a string and the program will reverse it and print it out.
*/

echo<<<_END

<form method="post" action="27-reverse.php">
Enter string to reverse:
<input type="text" name="reverse" size="20" />
<input type="submit" value="Reverse" />
</form>
_END;

if(isset($_POST['reverse'])) {
	$string = $_POST['reverse'];
	echo strrev($string); 

}

?>