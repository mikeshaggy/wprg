<?php
include 'database.php';

$id = $_GET['id'];

$sql = "SELECT * FROM samochody WHERE id=$id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Szczegóły samochodu</title>
</head>
<body>
<table border="1">
    <tr>
        <td><a href="index.php">Strona główna</a></td>
        <td><a href="wszystkie_samochody.php">Wszystkie samochody</a></td>
        <td><a href="dodaj_samochod.php">Dodaj samochód</a></td>
    </tr>
</table>

<h1>Szczegóły samochodu</h1>
<p>ID: <?php echo $row['id']; ?></p>
<p>Marka: <?php echo $row['marka']; ?></p>
<p>Model: <?php echo $row['model']; ?></p>
<p>Cena: <?php echo $row['cena']; ?></p>
<p>Rok: <?php echo $row['rok']; ?></p>
<p>Opis: <?php echo $row['opis']; ?></p>
<a href="index.php">Powrót do strony głównej</a>
</body>
</html>

<?php
$conn->close();
?>
