<?php 

/*
 Implementation of Mergesort algorithm in PHP
 Tobias Baldauf, 20120624
 https://github.com/technopagan/Computer-Science-Algorithms/blob/master/sorting/merge-sort-algorithm.php
 */

 /* Challenge 19: Sorting - Implement two types of sorting algorithms: Merge sort and bubble sort.

 */

echo<<<_END

<form method="post" action="19-sorting.php">
Enter numbers to be merge sorted: 
<input type="text" name="merge" size="10"/>
<input type="submit" value="Merge" />
<br/>

Enter numbers to be bubble sorted:
<input type="text" name="bubble" size="10" />
<input type="submit" value="bubble" />

_END;

if (isset($_POST['merge'])) {
    $data = str_split($_POST['merge']);
    $data = mergesort($data);
    $neat = implode(" > ", $data);
    echo "<pre><br/>Converted: " .$_POST['merge'] ." into " .$neat ." using merge sort</pre>";
}

if (isset($_POST['bubble'])){
    $bub = str_split($_POST['bubble']);
    $bub = bubble_sort($bub);
    $neato = implode(" > ", $bub);
    echo "<pre><br/>Converted: " .$_POST['bubble'] ." into " .$neato ." using bubble sort</pre>";
    
}




/* test bubble sort 

$arr = array(1,3,2,8,5,7,4,0);

print("Before sorting");
print_r($arr);

bubble_sort($arr);
print("After sorting by using bubble sort");
print_r($arr);
*/

// The nitty gritty
// This is it! Get the data to process, split it into halfs and compare
// Returns: freshly sorted, reassembled array from split array-parts
function mergesort($data) {

    // Only process if we're not down to one piece of data
    if(count($data)>1) {
        
        // Find out the middle of the current data set and split it there to obtain to halfs
        $data_middle = round(count($data)/2, 0, PHP_ROUND_HALF_DOWN);
        // and now for some recursive magic
        $data_part1 = mergesort(array_slice($data, 0, $data_middle));
        $data_part2 = mergesort(array_slice($data, $data_middle, count($data)));

        // Setup counters so we can remember which piece of data in each half we're looking at
        $counter1 = $counter2 = 0;

        // iterate over all pieces of the currently processed array, compare size & reassemble
        for ($i=0; $i<count($data); $i++) {
            // if we're done processing one half, take the rest from the 2nd half
            if($counter1 == count($data_part1)) {
                $data[$i] = $data_part2[$counter2];
                ++$counter2;
            // if we're done with the 2nd half as well or as long as pieces in the first half are still smaller than the 2nd half
            } elseif (($counter2 == count($data_part2)) or ($data_part1[$counter1] < $data_part2[$counter2])) { 
                $data[$i] = $data_part1[$counter1];
                ++$counter1;
            } else {
                $data[$i] = $data_part2[$counter2];
                ++$counter2;
            }
        }
    }
    return $data;
}

// Bubble Sort. Take from: http://stackoverflow.com/questions/9001294/bubble-sort-in-php

function bubble_sort($arr) {
    $size = count($arr);
    for ($i=0; $i<$size; $i++) {
        for ($j=0; $j<$size-1-$i; $j++) {
            if ($arr[$j+1] < $arr[$j]) {
                swap($arr, $j, $j+1);
            }
        }
    }
    return $arr;
}

function swap(&$arr, $a, $b) {
    $tmp = $arr[$a];
    $arr[$a] = $arr[$b];
    $arr[$b] = $tmp;
}





?>