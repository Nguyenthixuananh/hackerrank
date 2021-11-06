<?php
$s1 = [3, 2, 1, 1, 1];
$s2 = [4, 3, 2];
$s3 = [1, 1, 4, 1];


$h1 = array_sum($s1);
$h2 = array_sum($s2);
$h3 = array_sum($s3);
//$i1 = $i2 = $i3 = 0;
$equal = ($h1 == $h2) && ($h2 == $h3);
while(!$equal) {
    $max = $h1;
    if($h2 > $max)
        $max = $h2;
    if($h3 > $max)
        $max = $h3;
    if($max == $h1) {
        $h1 -= array_shift($s1);
//        $i1++;
    } elseif($max == $h2) {
        $h2 -= array_shift($s2);
//        $i2++;
    } else {
        $h3 -= array_shift($s3);
//        $i3++;
    }
    $equal = ($h1 == $h2) && ($h2 == $h3);
}
echo $h1;
