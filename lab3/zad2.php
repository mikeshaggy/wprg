<?php
function recursiveFibonacci($n) {
    if ($n <= 1) {
        return $n;
    } else {
        return recursiveFibonacci($n - 1) + recursiveFibonacci($n - 2);
    }
}

function iterativeFibonacci($n) {
    $a = 0;
    $b = 1;
    for ($i = 2; $i <= $n; $i++) {
        $temp = $a + $b;
        $a = $b;
        $b = $temp;
    }
    return $b;
}

function timeMeasure($function, $arg) {
    $start = microtime(true);
    $result = $function($arg);
    $time = microtime(true) - $start;
    return [$time, $result];
}

$arg = 30;
$recursive = timeMeasure("recursiveFibonacci", $arg);
$iterative = timeMeasure("iterativeFibonacci", $arg);

echo "Czas wykonania rekurencyjnej funkcji Fibonacciego dla argumentu $arg: {$recursive[0]} sekund<br>";
echo "Wynik: {$recursive[1]}<br><br>";

echo "Czas wykonania iteracyjnej funkcji Fibonacciego dla argumentu $arg: {$iterative[0]} sekund<br>";
echo "Wynik: {$iterative[1]}<br><br>";

if ($recursive[0] < $iterative[0]) {
    echo "Funkcja rekurencyjna działa szybciej o " . ($iterative[0] - $recursive[0]) . " sekund";
} else {
    echo "Funkcja iteracyjna działa szybciej o " . ($recursive[0] - $iterative[0]) . " sekund";
}
?>
