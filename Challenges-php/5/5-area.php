 <head> 
 <title>Calculate Area</title> 
 </head> 
 <body> 

 <?php 
 if ($_GET['calc'] == "yes") { 
 	$width = $_GET['width']; 
 	$length = $_GET['length']; 
 	$area = $width * $length; 
 	$cost = ($area / 12) * 15;
 	print "<h2>Results</h2>"; 
 	print "The area of a rectangle $width inch x $length inch is $area sq-inch <p>"; 
 	print "The cost of $area sq-inch at $15 per 12inch tile is $$cost";
  } 
 ?> 

 <h2>Calculate Area</h2> 

 <form action = "<?php echo $_SERVER['PHP_SELF']; ?>" method = "GET"> 
 Width (inch): <input type = "text" name = "width" size=4> <br/> 
 Length (inch): <input type = "text" name = "length" size=4> <br> 
 <input type="hidden" name="calc" value ="yes"> 
 <input type = "submit" name = "Calculate"/> 
 </form> 

 </body> 
 </html> 