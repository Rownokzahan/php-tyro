<?php
$result ="";

if (isset($_POST['submit'])) {
    $num1 = $_POST['val1'];
    $num2 = $_POST['val2'];
    $operation = $_POST['operation'];

    if (is_numeric($num1) && is_numeric($num2)) {
        if ($operation == "add") {
            $result = $num1 + $num2;
        } elseif ($operation == "sub") {
            $result = $num1 - $num2;
        } elseif ($operation == "mul") {
            $result = $num1 * $num2;
        } elseif ($operation == "div") {
            if ($num2 == 0) {
                $result = "<small>Cann't Divide by 0</small>";
            } else {
                $result = $num1 / $num2;
            }
        }
    } else {
        $result = "<small>Invalid Input</small>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <form action="calculator.php" method="post" id="form">
            <div class="row">
                <div class="left-col">
                    <h1><?= $result;?></h1>
                </div>
                <div class="right-col">
                    <label>Number 1</label>
                    <input type="text" name="val1" required><br>
                    <label>Number 2</label>
                    <input type="text" name="val2" required><br>
                    <label>Opration</label>
                    <select name="operation">
                        <option value="add">Addition</option>
                        <option value="sub">Substraction</option>
                        <option value="mul">Multiplication</option>
                        <option value="div">Division</option>
                    </select>
                </div>
            </div>
            <button type="submit" name="submit">Calculate</button>
        </form>
    </div>

    <script>
    </script>
</body>

</html>