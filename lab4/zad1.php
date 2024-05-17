<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadanie 1</title>
</head>
<body>
<h2>Odwracanie kolejności wierszy w pliku tekstowym</h2>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data">
    <input type="file" name="file" id="file"><br><br>
    <button type="submit" name="submit">Submit</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    if (isset($_FILES["file"])) {
        $file = $_FILES["file"]["tmp_name"];

        $lines = file($file, FILE_IGNORE_NEW_LINES);

        $reversedLines = array_reverse($lines);

        $reversedFile = 'reversed_' . basename($_FILES["file"]["name"]);
        file_put_contents($reversedFile, implode("\n", $reversedLines));

        echo "Odwrócony plik: <a href='$reversedFile'>$reversedFile</a>";
    } else {
        echo "Błąd: Nie wybrano pliku!";
    }
}
?>

</body>
</html>
