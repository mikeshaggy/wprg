<?php
function isAllowedIP($ip) {
    $allowedIPs = file("ip.txt", FILE_IGNORE_NEW_LINES);
    return in_array($ip, $allowedIPs);
}

$userIP = $_SERVER['REMOTE_ADDR'];
if (isAllowedIP($userIP)) {
    require_once 'zad4allowed.php';
} else {
    require_once 'zad4denied.php';
}
