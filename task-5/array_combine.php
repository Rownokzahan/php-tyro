<!-- array_combine — Creates an array by using one array for keys and another for its values -->

<?php
    $a = array('green', 'red', 'yellow');
    $b = array('avocado', 'apple', 'banana');
    $c = array_combine($a, $b);
    
    echo "<pre>";
    print_r($c);
    echo "</pre>";

?>