<!DOCTYPE html>
<html>
<head>
	<title>Alarm Clock</title>
</head>
<body>

<?php

/* Challenge 11: Alarm Clock - A simple clock where it plays a sound 
after X number of minutes/seconds or at a particular time.

*/

// Needs pcntl module for this to work. I haven't tested it.

if (!empty($_POST['alarm'])) {
	pcntl_alarm($_POST['alarm']);
}



echo <<<_END

<pre>
<form method="post" action="11-alarm.php" >

Provide Seconds for alarm clock:
	<input type="text" name="alarm" size="7" />
	<input type="submit" value="Seconds" />

</form> </pre>
_END


?>

</body>
</html>