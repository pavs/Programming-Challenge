
<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>

<form action = "<?php echo $_SERVER['PHP_SELF']; ?>" method = "GET">
    Cost: <input type = "text" name = "cost" size=4> <br />
    Paid: <input type = "text" name = "paid" size=4> <br />
<input type="hidden" name = "change" value = "yes">
<input type="submit" name = "Calculate"/>
</form>

</body>
</html>
<? 
function have_need($have,$coin_value,$max){ 
    //Dave Husk, easyphpscripts.com 
    if($have < $coin_value) return(0); 
    while(1){ 
        if($have >= ($max * $coin_value)) return($max); 
        $max--; 
    } 
} 
function have_want($have,$coin_value,$max){ 
    //Dave Husk, easyphpscripts.com 
    if($have < $coin_value) return($have); 
    while(1){ 
        if($have >= ($max * $coin_value)) return($have - ($max * $coin_value)); 
        $max--; 
    } 
} 
print("<table border=\"2\">"); 
print("<tr><th align=\"center\"><strong>Dollars</strong></th>"); 
print("<th align=\"center\"><strong>Half Dollar Coins</strong></th>"); 
print("<th align=\"center\"><strong>Quarters</strong></th>"); 
print("<th align=\"center\"><strong>Dimes</strong></th>"); 
print("<th align=\"center\"><strong>Nickels</strong></th>"); 
print("<th align=\"center\"><strong>Pennies</strong></th></tr>"); 

if ($_GET['change'] == "yes") {
$cost = $_GET['cost'];
$paid = $_GET['paid'];
$change = $cost-$paid;
$coins = explode("." round($change, 2));
$have =  $coins[1]; 
$have0 = have_want($have,100,1); 
$have1 = have_want($have0,50,2); 
$have2 = have_want($have1,25,4); 
$have3 = have_want($have2,10,10); 
$have4 = have_want($have3,5,20); 
}
print ('<tr><td align="right">'.have_need($have,100,1).'</td>'); 
print ('<td align="right">'.have_need($have0,50,2).'</td>'); 
print ('<td align="right">'.have_need($have1,25,4).'</td>'); 
print ('<td align="right">'.have_need($have2,10,10).'</td>'); 
print ('<td align="right">'.have_need($have3,5,20).'</td>'); 
print ('<td align="right">'.have_need($have4,1,100).'</td></tr>'); 
?>