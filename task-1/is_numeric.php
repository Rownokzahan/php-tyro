<!-- is_numeric — Finds whether a variable is a number or a numeric string -->

<?php
$tests = array(
    "42",
    1337,
    0x539,
    02471,
    0b10100111001,
    1337e0,
    "0x539",
    "02471",
    "0b10100111001",
    "1337e0",
    "not numeric",
    array(),
    9.1,
    null,
    '',
);

foreach ($tests as $element) {
    if (is_numeric($element)) {
        echo var_export($element, true) . " is numeric", "<br>";
    } else {
        echo var_export($element, true) . " is NOT numeric", "<br>";
    }
}
?>