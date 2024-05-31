<?php
include 'database.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Portal Samochodowy</title>
</head>
<body>
<table border="1">
    <tr>
        <td><a href="index.php">Strona główna</a></td>
        <td><a href="wszystkie_samochody.php">Wszystkie samochody</a></td>
        <td><a href="dodaj_samochod.php">Dodaj samochód</a></td>
    </tr>
</table>

<h1>Najtańsze samochody</h1>
<table border="1">
    <tr>
        <th>ID</th>
        <th>Marka</th>
        <th>Model</th>
        <th>Cena</th>
    </tr>

    <?php
    $sql = "select id, marka, model, cena from samochody order by cena asc LIMIT 5";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td><a href='szczegoly_samochodu.php?id=" . $row["id"] . "'>" . $row["id"] . "</a></td>";
            echo "<td>" . $row["marka"] . "</td>";
            echo "<td>" . $row["model"] . "</td>";
            echo "<td>" . $row["cena"] . "</td>";
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='4'>Brak danych</td></tr>";
    }
    $conn->close();
    ?>
</table>
</body>
</html>
