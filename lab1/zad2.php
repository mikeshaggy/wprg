<?php
$rangeStart = 0;
$rangeEnd = 50;
for ($i = $rangeStart; $i < $rangeEnd; $i++) {
    if (isPrime($i)) echo $i . "\n";
}
function isPrime($num) {
    if ($num == 0 || $num == 1) return false;
    for ($i = 2; $i <= $num/2; $i++) {
        if ($num % $i == 0) return false;
    }
    return true;
}
?>
