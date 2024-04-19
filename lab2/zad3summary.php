<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Podsumowanie Rezerwacji</title>
</head>
<body>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $people = $_POST['people'];
    $address = $_POST['address'];
    $checkinDate = $_POST['checkinDate'];
    $checkoutDate = $_POST['checkoutDate'];
    $extraBed = isset($_POST['extraBed']) ? "Tak" : "Nie";
    $amenities = isset($_POST['amenities']) ? implode(", ", $_POST['amenities']) : "Brak";

    echo "<h2>Podsumowanie Rezerwacji</h2>";
    echo "<p><strong>Ilość gości:</strong> $people</p>";
    echo "<p><strong>Adres:</strong> $address</p>";
    echo "<p><strong>Data zameldowania:</strong> $checkinDate</p>";
    echo "<p><strong>Data wymeldowania:</strong> $checkoutDate</p>";
    echo "<p><strong>Dostawka:</strong> $extraBed</p>";
    echo "<p><strong>Udogodnienia:</strong> $amenities</p>";

    for ($i = 1; $i <= $people; $i++) {
        $firstName = $_POST["firstName$i"];
        $lastName = $_POST["lastName$i"];

        echo "<h3>Gość $i:</h3>";
        echo "<p><strong>Imię:</strong> $firstName</p>";
        echo "<p><strong>Nazwisko:</strong> $lastName</p>";
    }
}
?>

</body>
</html>
