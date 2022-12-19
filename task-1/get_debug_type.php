<?php

// get_debug_type — Gets the type name of a variable in a way that is suitable for debugging
echo get_debug_type(null) . "<br>";
echo get_debug_type(true) . "<br>";
echo get_debug_type(1) . "<br>";
echo get_debug_type(0.1) . "<br>";
echo get_debug_type("foo") . "<br>";
echo get_debug_type([]) . "<br>";

$fp = fopen(__FILE__, 'rb');
echo get_debug_type($fp) . "<br>";

fclose($fp);
echo get_debug_type($fp) . "<br>";

echo get_debug_type(new stdClass) . "<br>";
echo get_debug_type(new class {}) . "<br>";
?>