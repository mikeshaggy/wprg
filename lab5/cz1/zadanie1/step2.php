<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $_SESSION['cardNumber'] = $_POST['cardNumber'];
    $_SESSION['customerName'] = $_POST['customerName'];
    $_SESSION['peopleAmount'] = $_POST['peopleAmount'];
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dane osób</title>
</head>
<body>
<h2>Dane osób</h2>
<form action="step3.php" method="post">
    <?php
    for ($i = 1; $i <= $_SESSION['peopleAmount']; $i++) {
        echo "<h3>Osoba $i</h3>";
        echo "<label for='person_{$i}_name'>Imię i nazwisko:</label>";
        echo "<input type='text' id='person_{$i}_name' name='people[$i][name]' required><br><br>";
        echo "<label for='person_{$i}_age'>Wiek:</label>";
        echo "<input type='number' id='person_{$i}_age' name='people[$i][age]' required><br><br>";
    }
    ?>
    <input type="submit" name="save" value="Zatwierdź i przejdź do podsumowania">
</form>
</body>
</html>
