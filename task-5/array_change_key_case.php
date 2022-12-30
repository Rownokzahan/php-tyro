<!-- array_change_key_case — Changes the case of all keys in an array -->

<?php
    $input_array = array("FirSt" => 1, "SecOnd" => 4);
    print_r(array_change_key_case($input_array, CASE_UPPER));
    print_r(array_change_key_case($input_array, CASE_LOWER));
?>