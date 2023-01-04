<?php

function sum($num1, $num2)
{
    return $num1 + $num2;
}

function sub($num1, $num2)
{
    return $num1 - $num2;
}

function mul($num1, $num2)
{
    return round($num1 * $num2, 2);
}

function div($num1, $num2)
{
    return round($num1 / $num2, 2);
}

$result = "";
$num1 = $_POST['val1'];
$num2 = $_POST['val2'];
$operation = $_POST['operation'];

if (is_numeric($num1) && is_numeric($num2)) {
    switch ($operation) {
        case "add":
            $result = sum($num1, $num2);
            break;
        case "sub":
            $result = sub($num1, $num2);
            break;
        case "mul":
            $result = mul($num1, $num2);
            break;
        case "div":
            if ($num2 == 0) {
                $result = "<small>Cann't Divide by 0</small>";
            } else {
                $result = div($num1, $num2);
            }
            break;
        default:
            $result = "<small>Invalid Input</small>";
            break;
    }
} else {
    $result = "<small>Invalid Input</small>";
}



echo json_encode($result);
