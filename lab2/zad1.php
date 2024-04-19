<!doctype html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <title>Zadanie 1</title>
    </head>
    <body>
        <h2>Prosty kalkulator</h2>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <label for="num1">Liczba pierwsza:</label>
            <input type="number" id="num1" name="num1" required><br><br>

            <label for="num2">Liczba druga:</label>
            <input type="number" id="num2" name="num2" required><br><br>

            <label for="operation">Wybierz działanie:</label>
            <select id="operation" name="operation">
                <option value="addition">Dodawanie</option>
                <option value="subtraction">Odejmowanie</option>
                <option value="multiplication">Mnożenie</option>
                <option value="division">Dzielenie</option>
            </select><br><br>

            <input type="submit" value="Oblicz">
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
            $operation = $_POST['operation'];

            switch ($operation) {
                case "addition":
                    $result = $num1 + $num2;
                    break;
                case "subtraction":
                    $result = $num1 - $num2;
                    break;
                case "multiplication":
                    $result = $num1 * $num2;
                    break;
                case "division":
                    if ($num2 != 0) {
                        $result = $num1 / $num2;
                    } else {
                        echo "<h2>Nie można dzielić przez zero!</h2>";
                        exit();
                    }
                    break;
                default:
                    echo "<h2>Niepoprawne działanie</h2>";
                    exit();
            }
            echo "<h2>Wynik: $result</h2>";
        }
        ?>
    </body>
</html>
