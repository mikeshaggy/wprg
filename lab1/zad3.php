<?php
$fibonacciSequence = fibonacci(10);
$count = 1;
for ($i = 0; $i < count($fibonacciSequence); $i++) {
    if ($i % 2 != 0) {
        printf("%d: %d\n", $i, $fibonacciSequence[$i]);
        $count++;
    }
}
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

