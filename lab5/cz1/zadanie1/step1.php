<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dane ogólne</title>
</head>
<body>
<h2>Dane ogólne</h2>
<form action="step2.php" method="post">
    <label for="cardNumber">Numer karty:</label>
    <input type="text" id="cardNumber" name="cardNumber" required><br><br>

    <label for="customerName">Dane zamawiającego:</label>
    <input type="text" id="customerName" name="customerName" required><br><br>

    <label for="peopleAmount">Ilość osób:</label>
    <input type="number" id="peopleAmount" name="peopleAmount" required><br><br>

    <input type="submit" value="Zatwierdź">
</form>
</body>
</html>
