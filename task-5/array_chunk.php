<!-- array_chunk — Split an array into chunks -->
<?php
$input_array = array('a', 'b', 'c', 'd', 'e');
print_r(array_chunk($input_array, 2));
echo "<br>";
echo "<pre>";
print_r(array_chunk($input_array, 2, true));
echo "</pre>";
?>