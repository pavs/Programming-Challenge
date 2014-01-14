<?php

/* Challenge 28: Pig Latin - Pig Latin is a game of alterations played on 
the English language game. To create the Pig Latin form of an English word 
the initial consonant sound is transposed to the end of the word and an ay i
s affixed (Ex.: "banana" would yield anana-bay). Read Wikipedia for more information 
on rules.

Rules from Wikipedia: For words that begin with consonant sounds, the initial consonant or 
consonant cluster is moved to the end of the word, and "ay" is added "happy" → "appyhay".
For words that begin with vowel sounds or silent letter, "way" is added at the 
end of the word: "egg" → "eggway"

Note: I think for the first time I have done a program without looking at an existing example. happy :)

*/

echo<<<_END

<form method="post" action="28-pig.php">
Give us a word to translate it to pig-latin:
<input type="text" name="piggy" size="20"/>
<input type="submit" value="pig-latin" />
</form>

_END;

//For words that begin with consonant sounds, the initial consonant or 
//consonant cluster is moved to the end of the word, and "ay" is added "happy" → "appyhay"



if (isset($_POST['piggy'])) {

	$consonent = array(b, c, d, f, g, h, j, k, l, m, n, p, q, r, s, t, v, x, z, w, y);
	$vowels = array(a, e, i, o, u);
	$word = strtolower($_POST['piggy']);
	$ay = 'ay';
	$way = 'way';


	if (in_array($word[0], $consonent)) {

		$piggy_cons = substr($word, 1); 
		echo $piggy_cons .$word[0] .$ay;

	}

	if (in_array($word[0], $vowels)) {

		echo $word .$way;
	}


}


?>