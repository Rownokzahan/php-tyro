<?php
// get_defined_vars — Returns an array of all defined variables

    $b = array(1, 1, 2, 3, 5, 8);

    $arr = get_defined_vars();

    // print $b
    print_r($arr["b"]);

    // print all the available keys for the arrays of variables
    print_r(array_keys(get_defined_vars()));
?>