<!DOCTYPE html>
<html>
<head>
	<title>Distance Between Two Cities</title>
</head>
<body>

<?php
/* Challenge 12: Distance Between Two Cities - Calculates the distance
 between two cities and allows the user to specify a unit of distance. 
 This program may require finding coordinates for the cities like latitude and longitude.

 Latitude and longitude function taken from: http://www.geodatasource.com/developers/php
*/

function distance($lat1, $lon1, $lat2, $lon2, $unit) {

  $theta = $lon1 - $lon2;
  $dist = sin(deg2rad($lat1)) * sin(deg2rad($lat2)) +  cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * cos(deg2rad($theta));
  $dist = acos($dist);
  $dist = rad2deg($dist);
  $miles = $dist * 60 * 1.1515;
  $unit = strtoupper($unit);

  if ($unit == "K") {
    return ($miles * 1.609344);
  } else if ($unit == "N") {
      return ($miles * 0.8684);
    } else {
        return $miles;
      }
}

if (isset($_POST['dis1']) && ($_POST['dis2']) && ($_POST['dis3']) && ($_POST['dis4']) && ($_POST['unit']))

{
	$dis1 = $_POST['dis1'];
	$dis2 = $_POST['dis2'];
	$dis3 = $_POST['dis3'];
	$dis4 = $_POST['dis4'];
	$unit = $_POST['unit'];

}

echo distance($dis1, $dis2, $dis3, $dis4, $unit);



echo <<<_END
<pre>
<form method="post" action="12-distance.php">

Enter Lattitude and Longitude of two places:

Lat and Long for first place:
	<input type="text" name="dis1" size="7" />
	<input type="text" name="dis2" size="7" />

Lat and long for second place:
	<input type="text" name="dis3" size="7" />
	<input type="text" name="dis4" size="7" />

Please choose your unit. 'M' for Miles, 'K' for Kilometers and 'N' for Nautical Miles.
	<input type="text" name="unit" size="7" />

	<input type="submit" value="Distance" />

</form></pre>
_END


?>

</body>
</html>