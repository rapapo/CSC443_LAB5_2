<!DOCTYPE html>
<html>
<body>
<?php
$monthDays = array ('Splorch' => 23, 'Sploo' => 28,'Splat' => 2, 'Splatt' => 3,'Spleen' => 44, 'Splune' => 30,'Spling' => 61, 'Slendo' => 61,'Sploctember' => 31, 'Splictember' => 31,'Splanet' => 30, 'TheRest' => 22);

echo "MINIMUM DAYS :";
$min = min(array_values($monthDays));
print_r($min);

echo "<br>";
echo "MONTH HAVING MINIMUM DAYS :";
$min_month = array_search ($min, $monthDays);
print_r($min_month);

echo "<br>";
echo "TOTAL DAYS :";
$sum = array_sum(array_values($monthDays));
print_r($sum);