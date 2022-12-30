<!-- array_count_values — Counts all the values of an array -->

<?php
    $array = array(1, "hello", 1, "world", "hello");

    echo "<pre>";
    print_r(array_count_values($array));
    echo "</pre>";
    
?>