<!DOCTYPE html>
<html lang="en">
<head>
    <title>Soal 3</title>
</head>
<body>
    <h1>Soal 3</h1>

    <form>
        <input type="number" name="num1" placeholder="Number 1">
        <input type="number" name="num2" placeholder="Number 2">
        <br>
        <input type="radio" name="operation" value="add"> +
        <input type="radio" name="operation" value="subtract"> -
        <input type="radio" name="operation" value="multiply"> ×
        <input type="radio" name="operation" value="divide"> ÷
        </br>
        <input type="submit" value="Calculate">
    </form>

    <?php
        if (isset($_GET['num1']) && isset($_GET['num2']) && isset($_GET['operation'])) {
            $num1 = $_GET['num1'];
            $num2 = $_GET['num2'];
            $operation = $_GET['operation'];

            switch ($operation) {
                case 'add': $result = $num1 + $num2; 
                break;
                case 'subtract': $result = $num1 - $num2; 
                break;
                case 'multiply': $result = $num1 * $num2; 
                break;
                case 'divide': $result = $num2 != 0 ? $num1 / $num2 : "Kesalahan !"; 
                break;
            }

            echo "Result: $result";
        }
    ?>
</body>
</html>