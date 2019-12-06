<?php

$sum = 0;

foreach (file('inputs/1.txt') as $line) {
    $sum += floor(intval(trim($line)) / 3) - 2;
}
print_r("Answer 1: " . $sum . "\r\n");

$sum = 0;
foreach (file('inputs/1.txt') as $line) {
    $fuelToAdd = floor(intval(trim($line)) / 3) -2;
    $totalFuelToAdd = 0;
    while ($fuelToAdd > 0) {
        $totalFuelToAdd += $fuelToAdd;
        $fuelToAdd = floor($fuelToAdd / 3) - 2;
    }
    $sum += $totalFuelToAdd;
}
print_r("Answer 2: " . $sum);
