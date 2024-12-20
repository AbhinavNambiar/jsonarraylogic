<?php
$array = [5, 6, 2, 1, 3, 4, 7, 8, 9, 10];

$reversedArray = [];

for ($i = count($array) - 1; $i >= 0; $i--) {
    $reversedArray[] = $array[$i];
}

$jsonResult = '{';
for ($i = 0; $i < count($reversedArray); $i++) {
    $jsonResult .= '"' . $i . '":' . $reversedArray[$i];
    if ($i < count($reversedArray) - 1) {
        $jsonResult .= ',';
    }
}
$jsonResult .= '}';

echo $jsonResult;
