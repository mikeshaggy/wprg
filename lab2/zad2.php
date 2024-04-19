<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Formularz Rezerwacji Hotelu</title>
</head>
<body>

<h2>Formularz Rezerwacji Hotelu</h2>
<form action="zad2summary.php" method="post">
    <label for="people">Ilość gości:</label>
    <select id="people" name="people" required>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
    </select><br><br>

    <label for="firstName">Imię:</label>
    <input type="text" id="firstName" name="firstName" placeholder="Janusz" required><br><br>

    <label for="lastName">Nazwisko:</label>
    <input type="text" id="lastName" name="lastName" placeholder="Kowalski" required><br><br>

    <label for="address">Adres:</label>
    <input type="text" id="address" name="address" placeholder="Targ Drzewny 9/11, 80-894 Gdańsk" required><br><br>

    <label for="email">E-mail:</label>
    <input type="email" id="email" name="email" placeholder="jkowalski@mail.pl" required><br><br>

    <label for="phone">Numer telefonu:</label>
    <input type="tel" id="phone" name="phone" placeholder="123456789" required><br><br>

    <label for="checkinDate">Data zameldowania:</label>
    <input type="date" id="checkinDate" name="checkinDate" required><br><br>

    <label for="checkoutDate">Data wymeldowania:</label>
    <input type="date" id="checkoutDate" name="checkoutDate" required><br><br>

    <input type="checkbox" id="extraBed" name="extraBed">
    <label for="extraBed">Dostawka (dodatkowe łóżko)</label><br><br>

    <label for="amenities">Udogodnienia:</label><br>
    <select id="amenities" name="amenities[]" multiple>
        <option value="Parking">Parking</option>
        <option value="Śniadanie">Śniadanie</option>
        <option value="Pakiet dla zwierzaków">Pakiet dla zwierzaka</option>
    </select><br><br>

    <input type="submit" value="Wyślij Rezerwację" onclick="submitForm()">
</form>

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

    echo "<div class='summary'>";
    echo "<h2>Podsumowanie Rezerwacji</h2>";
    echo "<p><span class='label'>Ilość osób:</span> $people</p>";
    echo "<p><span class='label'>Imię:</span> $firstName</p>";
    echo "<p><span class='label'>Nazwisko:</span> $lastName</p>";
    echo "<p><span class='label'>Adres:</span> $address</p>";
    echo "<p><span class='label'>E-mail:</span> $email</p>";
    echo "<p><span class='label'>Numer telefonu:</span> $phone</p>";
    echo "<p><span class='label'>Data zameldowania:</span> $checkinDate</p>";
    echo "<p><span class='label'>Data wymeldowania:</span> $checkoutDate</p>";
    echo "<p><span class='label'>Dostawka:</span> $extraBed</p>";
    echo "<p><span class='label'>Udogodnienia:</span> $amenities</p>";
    echo "</div>";
}
?>

</body>
</html>
