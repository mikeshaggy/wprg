<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadanie 3</title>
</head>
<body>
<form action="zad3result.php" method="post">
    <label for="path">Path:</label>
    <input type="text" id="path" name="path" required><br>

    <label for="directory_name">Directory name:</label>
    <input type="text" id="directory_name" name="directory_name"><br>

    <label for="operation">Operation:</label>
    <select id="operation" name="operation">
        <option value="read">Read</option>
        <option value="delete">Delete</option>
        <option value="create">Create</option>
    </select><br>

    <input type="submit" value="Submit">
</form>
</body>
</html>