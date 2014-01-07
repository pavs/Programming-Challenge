<?php
/* Challenge 4: Next Prime Number - Have the program find prime numbers until the user 
chooses to stop asking for the next one.

I asked a question about the nature of the program I am trying to write.
But someone ended up doing the program for me. It obviously better than anthing
I could have done so I decided to use it. 
*/


$primes = array(
      2,   3,   5,   7,  11,  13,  17,  19,  23,  29, 
     31,  37,  41,  43,  47,  53,  59,  61,  67,  71, 
     73,  79,  83,  89,  97, 101, 103, 107, 109, 113, 
    127, 131, 137, 139, 149, 151, 157, 163, 167, 173 
); // add more primes to it

if(array_keys($_POST) === array("hid", "sub")) {
		$num = ($_POST["hid"] == sizeof($primes)-1) ? $_POST["hid"] : $_POST["hid"]+1;
	}

else {
		$num = 0;
	}
?>


<html>
<head>
	Prints Next Prime Number
</head>
<body>

<form method="POST">
<h3><?php print($primes[$num]); ?></h3>
<input type="hidden" name="hid" value="<?php print($num); ?>"/>
<input type="submit" name="sub" value="Next Prime"/>
</form>

</body>
</html>