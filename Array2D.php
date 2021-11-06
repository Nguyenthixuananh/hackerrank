<?php
$arr1 = [1, 1, 1, 0, 0 ,0];
$arr2 = [0, 1, 0, 0, 0 ,0];
$arr3 = [1, 1, 1, 0, 0 ,0];
$arr4 = [0, 0, 2, 4, 4 ,0];
$arr5 = [0, 0, 0, 2, 0 ,0];
$arr6 = [0, 0, 1, 2, 4 ,0];
$array = [];

//echo hourglassSum($array);



function hourglassSum($arr) {
    $sum = array();
    for($i=0; $i<4; $i++) {
        for($j=0; $j<4; $j++) {
            $sum[] = findans($arr, $i, $j);
        }
    }rsort($sum);
    return array_shift($sum);
}
function findans($array, $x, $y)
{
    $s=0;

    $s += $array[$x][$y] + $array[$x][$y+1] + $array[$x][$y+2];
    $s += $array[$x+1][$y+1];
    $s += $array[$x+2][$y] + $array[$x+2][$y+1] + $array[$x+2][$y+2];

    return $s;
}