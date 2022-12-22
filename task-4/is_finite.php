<!-- is_finite — Finds whether a value is a legal finite number -->

<?php
$finite = 42;
$infinite = log(0);
$nan = acos(2);

var_dump(is_finite($finite), is_infinite($finite), is_nan($finite));  // true, false, false
var_dump(is_finite($infinite), is_infinite($infinite), is_nan($infinite));  // false, true, false
var_dump(is_finite($nan), is_infinite($nan), is_nan($nan)); // false, false, true
