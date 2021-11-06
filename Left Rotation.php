<?php
//function rotateLeft($d, $arr) {
//    for($i=0; $i<$d; $i++) {
//        $temp= array_splice($arr, 1);
//        $temp[]=$arr[0];
//        $arr=$temp;
//} foreach($arr as $value) {
//        return $value." ";
//    }
//}
function rotateLeft($d, $arr) {
    $a = array_splice($arr, $d,count($arr)-$d );
    return array_merge($a, $arr);
}