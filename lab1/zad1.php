<?php
$fruit = array("apple", "banana", "orange", "pear");
foreach ($fruit as $key => $value) {
    echo reverseString($value);
    if ($value[0] == "p") {
        echo " ---> fruit starts with p\n";
    } else {
        echo "\n";
    }
}
function reverseString($string) {
    $result = "";
    for ($i = strlen($string) - 1; $i >= 0; $i--) {
        $result .= $string[$i];
    }
    return $result;
}
?>
