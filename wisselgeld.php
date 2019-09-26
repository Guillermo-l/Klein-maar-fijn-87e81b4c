<?php
$test[1] = $argv[1] * 100;
$centen;

// Function
function bereken($inputBedrag, $euro)
{
    $eenheid = $inputBedrag / $euro;
    $restBedrag = $inputBedrag % $euro;
    $endValue = floor($eenheid);
    return array($endValue, $restBedrag);
}

// Money
$geld = [500, 200, 100, 50, 20, 10, 5, 2, 1, 0.50, 0.20, 0.10, 0.05, 0.02, 0.01];

// For Loop
for ($i = 0; $i < count($geld); $i++) {
    $geld[$i] *= 100;
    $test = bereken($test[1], $geld[$i]);
    if ($test[0] > 0) {
        // Echo, output function
        if ($geld[$i] < 100) {
            echo $test[0] . " x " . $geld[$i] . " cent" . PHP_EOL;
        } else {
            $geld[$i] /= 100;
        echo $test[0] . " x " . $geld[$i] . " euro" . PHP_EOL;
        }
    }
}