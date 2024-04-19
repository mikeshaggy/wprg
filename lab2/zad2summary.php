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
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $checkinDate = $_POST['checkinDate'];
    $checkoutDate = $_POST['checkoutDate'];
    $extraBed = isset($_POST['extraBed']) ? "Tak" : "Nie";
    $amenities = isset($_POST['amenities']) ? implode(", ", $_POST['amenities']) : "Brak";

    echo "<h2>Podsumowanie Rezerwacji</h2>";
    echo "<p><strong>Ilość gości:</strong> $people</p>";
    echo "<p><strong>Imię:</strong> $firstName</p>";
    echo "<p><strong>Nazwisko:</strong> $lastName</p>";
    echo "<p><strong>Adres:</strong> $address</p>";
    echo "<p><strong>E-mail:</strong> $email</p>";
    echo "<p><strong>Numer telefonu:</strong> $phone</p>";
    echo "<p><strong>Data zameldowania:</strong> $checkinDate</p>";
    echo "<p><strong>Data wymeldowania:</strong> $checkoutDate</p>";
    echo "<p><strong>Dostawka:</strong> $extraBed</p>";
    echo "<p><strong>Udogodnienia:</strong> $amenities</p>";
}
?>

</body>
</html>
