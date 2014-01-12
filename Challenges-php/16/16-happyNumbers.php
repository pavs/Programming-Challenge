
<?php
/* Challenge 16: Happy Numbers - A happy number is defined by the following process. 
Starting with any positive integer, replace the number by the sum of the squares of 
its digits, and repeat the process until the number equals 1 (where it will stay), or 
it loops endlessly in a cycle which does not include 1. Those numbers for which this 
process ends in 1 are happy numbers, while those that do not end in 1 are unhappy numbers. 
Display an example of your output here. Find first 8 happy numbers.

Takes from: http://rosettacode.org/wiki/Happy_numbers#PHP
*/



function isHappy($n) {
    while (1) {
        $total = 0;
        while ($n > 0) {
            $total += pow(($n % 10), 2);
            $n /= 10;
        }
        if ($total == 1)
            return true;
        if (array_key_exists($total, $past))
            return false;
        $n = $total;
        $past[$total] = 0;
    }
}
 
$i = $cnt = 0;
while ($cnt < 8) {
    if (isHappy($i)) {
        echo "$i ";
        $cnt++;
    }
    $i++;
}


?>