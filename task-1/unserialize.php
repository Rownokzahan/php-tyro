<!-- unserialize — Creates a PHP value from a stored representation -->
<?php
$serialized_object='O:1:"a":1:{s:5:"value";s:3:"100";}';

ini_set('unserialize_callback_func', 'mycallback'); // set your callback_function

function mycallback($classname) 
{
    // just include a file containing your class definition
    // you get $classname to figure out which class definition is required
}
?>