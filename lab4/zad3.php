<!DOCTYPE html>
<html>
<head>
    <title>Zadanie 3</title>
</head>
<body>
<h1>Links</h1>
<ul>
    <?php
    $file = fopen("adresy.txt", "r");

    while (!feof($file)) {
        $line = fgets($file);
        $parts = explode(";", $line);

        if (!empty($line)) {
            $address = trim($parts[0]);
            $description = trim($parts[1]);

            echo "<li><a href='$address'>$description</a></li>";
        }
    }

    fclose($file);
    ?>
</ul>
</body>
</html>
