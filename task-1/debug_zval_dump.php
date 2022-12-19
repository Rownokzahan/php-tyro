<?php
$var1 = 'Hello';
$var1 .= ' World';
$var2 = $var1;

echo debug_zval_dump($var1);
?>