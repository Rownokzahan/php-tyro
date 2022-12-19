<?php
// gettype — Get the type of a variable
$data = array(1, 1., NULL, new stdClass, 'foo');

foreach ($data as $value) {
    echo gettype($value), "<br>";
}

?>