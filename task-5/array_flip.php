<!-- array_flip — Exchanges all keys with their associated values in an array -->

<?php
$input = array("oranges", "apples", "pears");
$flipped = array_flip($input);


echo "<pre>";
print_r($flipped);
echo "</pre>";
?>