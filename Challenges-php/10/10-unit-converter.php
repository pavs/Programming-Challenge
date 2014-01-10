<!DOCTYPE html>
<html>
<head>
	<title>Different Unit Converters</title>
</head>
<body>

<?php
/* Challenge 10: Unit Converter (temp, currency, volume, mass and more) 
- Converts various units between one another. The user enters the type
 of unit being entered, the type of unit they want to convert to and then 
 the value. The program will then make the conversion.
*/

// Celsius and Fahrenheit

if (!empty($_POST['celsius'])) {
	$c = $_POST['celsius'];
	$f = ($c * 9/5) + 32;
	echo "<pre>$c Celsius is " .$f ." Fahrenheit</pre>";
}



if (!empty($_POST['fahren'])) {
	$fah = $_POST['fahren'];
	$cen = ($fah - 32) / 1.8;
	echo "<pre>$fah Fahrenheit is " .$cen ." Celsius</pre>";
}

// currency converter dollar and pound

if (!empty($_POST['dollar'])) {
	$dollar = $_POST['dollar'];
	$pound = $dollar * .61;
	echo "<pre>$$dollar is equal to &pound" .$pound ."</pre>";
}

if (!empty($_POST['pound'])) {
	$pound = $_POST['pound'];
	$dollar = $pound * 1.65;
	echo "<pre>&pound$pound is equal to $" .$dollar ."</pre>";
}

// Volume Conversion Mile and Kilometer

if (!empty($_POST['mile'])) {
	$mile = $_POST['mile'];
	$kilo = $mile * 1.6;
	echo "<pre>$mile mile is equal to " .$kilo ."km</pre>";
}

if (!empty($_POST['kilo'])) {
	$kilo = $_POST['kilo'];
	$mile = $kilo * .62;
	echo "<pre>$kilo KM is equal to " .$mile ."mile</pre>";
}

// Mass Conversion KG and Pound

if (!empty($_POST['kg'])) {
	$kilo = $_POST['kg'];
	$lbs = $kilo * 2.20;
	echo "<pre>$kilo KG is equal to " .$lbs ."lb</pre>";
}

if (!empty($_POST['lbs'])) {
	$lbs = $_POST['lbs'];
	$kilo = $lbs * .45;
	echo "<pre>$lbs lb is equal to " .$kilo ."kg</pre>";
}


echo <<<_END

<pre>
<form method="post" action="10-unit-converter.php">

Celsius to Fahrenheit:
	<input type="text" name="celsius" size="7" />
	<input type="submit" value="Fahrenheit" />

<br>

Fahrenheit to Celsius: 
	<input type="text" name="fahren" size="7" />
	<input type="submit" value="Celsius" />

<br>

Dollar to Pound:
	<input type="text" name="dollar" size="7" />
	<input type="submit" value="Dollar" />

<br>

Pound to Dollar:
	<input type="text" name="pound" size="7" />
	<input type="submit" value="Pound" />

<br>

Mile to Kilometer:
	<input type="text" name="mile" size="7" />
	<input type="submit" value="KM" />

<br>

Kilometer to Mile:
	<input type="text" name="kilo" size="7" />
	<input type="submit" value="Mile" />

<br>

KG to Pound:
	<input type="text" name="kg" size="7" />
	<input type="submit" value="Pound" />

<br>

Pound to KG:
	<input type="text" name="lbs" size="7" />
	<input type="submit" value="KG" />

</form>
</pre>


_END






?>

</body>
</html>