<?php
/*Challenge 29: Count Vowels - Enter a string and the program counts 
the number of vowels in the text. For added complexity have it report 
a sum of each vowel found.
*/

echo<<<_END

<form method="post" action="29-vowels.php">
Enter text with vowels to count how many:
<input type="text" name="vowels" size="20" />
<input type="submit" value="Vowels" />

_END;

if(isset($_POST['vowels'])) {
	$vowels = array(a, e, i, o, u);
	$words = strtolower($_POST['vowels']);
	$words_array = preg_split('//', $words, -1, PREG_SPLIT_NO_EMPTY); 
	$match = array_intersect($words_array, $vowels);
	$count = count($match);
	print_r($count);
}



?>