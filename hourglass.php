<?php

require_once('data.php');

/*
 * hourglassSum Function:
 * Calculate all hourglass sums of a given array, and return maximum value:
 *
 */

function hourglassSum($arr) {
  for($i = 0; $i <= count($arr) - 3; $i++) {
    for($j = 0; $j <= count($arr[$i]) - 3; $j++) {
      $result[] = intval($arr[$i][$j] + $arr[$i][$j+1] + $arr[$i][$j+2]    
      + $arr[$i+1][$j+1]                                                   
      + $arr[$i+2][$j] + $arr[$i+2][$j+1] + $arr[$i+2][$j+2]);           
    }
  }
  return max($result);
}

echo "The largest hourglass sum of data1 is: " . hourglassSum($data1) . "\n";
echo "The largest hourglass sum of data2 is: " . hourglassSum($data2) . "\n";
echo "The largest hourglass sum of data3 is: " . hourglassSum($data3) . "\n";


?>
