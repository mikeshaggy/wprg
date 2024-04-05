<?php
$text = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.";

$array = explode(" ", $text);

$cleanArray = array();
$marks = array('.', ',', ':', ';', '!', '?', '-', '"', '\'');

foreach($array as $index => $value) {
    $isForbidden = false;
    foreach(str_split($value) as $char) {
        if (in_array($char, $marks)) {
            $isForbidden = true;
            break;
        }
    }

    if (!$isForbidden) {
        $cleanArray[] = $value;
    }
}

$ascArray = array();

foreach($cleanArray as $index => $value) {
    if ($index % 2 == 0 && isset($cleanArray[$index + 1])) {
//        if (isset($ascArray[$value])) {
//            continue;
//        }
        $ascArray[$value] = $cleanArray[$index + 1];
    }
}

foreach($ascArray as $key => $value) {
    echo "$key => $value\n";
}