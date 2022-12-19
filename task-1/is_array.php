<?php
// is_array — Finds whether a variable is an array
$yes = array('this', 'is', 'an array');

echo is_array($yes) ? 'Array' : 'not an Array';
echo "<br>";

$no = 'this is a string';

echo is_array($no) ? 'Array' : 'not an Array';