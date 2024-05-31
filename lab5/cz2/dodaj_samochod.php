<?php
include 'database.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $marka = $_POST["marka"];
    $model = $_POST["model"];
    $cena = $_POST["cena"];
    $rok = $_POST["rok"];
    $opis = $_POST["opis"];

    $sql = "INSERT INTO samochody (marka, model, cena, rok, opis)
            VALUES ('$marka', '$model', '$cena', '$rok', '$opis')";

    if ($conn->query($sql) === TRUE) {
        echo "Nowy samochód został dodany pomyślnie!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dodaj samochód</title>
</head>
<body>
<table border="1">
    <tr>
        <td><a href="index.php">Strona główna</a></td>
        <td><a href="wszystkie_samochody.php">Wszystkie samochody</a></td>
        <td><a href="dodaj_samochod.php">Dodaj samochód</a></td>
    </tr>
</table>

<h1>Dodaj nowy samochód</h1>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    Marka: <input type="text" name="marka"><br>
    Model: <input type="text" name="model"><br>
    Cena: <input type="text" name="cena"><br>
    Rok: <input type="text" name="rok"><br>
    Opis: <textarea name="opis"></textarea><br>
    <input type="submit" value="Dodaj samochód">
</form>
</body>
</html>
