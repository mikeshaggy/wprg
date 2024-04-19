<!DOCTYPE html>
<html>
<head>
    <title>Liczby pierwsze</title>
</head>
<body>
<h2>Sprawdź, czy liczba jest liczbą pierwszą</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    Podaj liczbę: <input type="text" name="num">
    <input type="submit" value="Sprawdź">
</form>

<?php
function isPrime($num) {
    $count = 0;
    if ($num <= 1) {
        echo "iteracje: $count<br>";
        return false;
    }
    for ($i = 2; $i <= sqrt($num); $i++) {
        $count++;
        if ($num % $i == 0) {
            echo "iteracje: $count<br>";
            return false;
        }
    }
    echo "iteracje: $count<br>";
    return true;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num = $_POST["num"];

    if (is_numeric($num) && $num > 0 && intval($num) == floatval($num)) {
        $num = intval($num);
        if (isPrime($num)) {
            echo "<h2>$num jest liczbą pierwszą</h2>";
        } else {
            echo "<h2>$num nie jest liczbą pierwszą</h2>";
        }
    } else {
        echo "<h2>Proszę podać poprawną liczbę całkowitą dodatnią</h2>";
    }
}
?>

</body>
</html>
