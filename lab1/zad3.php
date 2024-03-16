<?php
$nums = fibonacci(10);
//foreach ($nums as $key => $value) {
//    echo $value . "\n";
//}

function fibonacci($num) {
    $array = array();
    $x = 0;
    $y = 1;
    for ($i = 0; $i <= $num; $i++) {
        $array[] = $x;
        $temp = $x + $y;
        $x = $y;
        $y = $temp;
    }
    return $array;
}
?>
