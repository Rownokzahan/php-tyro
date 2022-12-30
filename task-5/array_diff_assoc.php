<!-- array_diff_assoc — Computes the difference of arrays with additional index check -->

<?php
    $array1 = array("a" => "green", "b" => "brown", "c" => "blue", "red");
    $array2 = array("a" => "green", "yellow", "red");
    $result = array_diff_assoc($array1, $array2);
    
    echo "<pre>";
    print_r($result);
    echo "</pre>";

?>