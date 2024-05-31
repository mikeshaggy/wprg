<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $_SESSION['people'] = $_POST['people'];
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Podsumowanie</title>
</head>
<body>
<h2>Podsumowanie</h2>
<h3>Dane ogólne</h3>
<p>Numer karty: <?php echo $_SESSION['card_number']; ?></p>
<p>Dane zamawiającego: <?php echo $_SESSION['customer_name']; ?></p>
<p>Ilość osób: <?php echo $_SESSION['num_people']; ?></p>

<h3>Dane osób</h3>
<?php
foreach ($_SESSION['people'] as $index => $person) {
    echo "<h4>Osoba $index</h4>";
    echo "<p>Imię i nazwisko: " . htmlspecialchars($person['name']) . "</p>";
    echo "<p>Wiek: " . htmlspecialchars($person['age']) . "</p>";
}
?>

<form action="step1.php" method="post">
    <input type="submit" value="Zakończ">
</form>
</body>
</html>
