<!-- is_resource — Finds whether a variable is a resource -->

<?php

$handle = fopen("php://stdout", "w");
if (is_resource($handle)) {
    echo '$handle is a resource';
}

?>