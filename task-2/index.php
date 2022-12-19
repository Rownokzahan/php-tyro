<?php
    // $keys = array_keys($_GET);
    // if(!empty($keys)){
    //     $name = array_values($_GET);     
    //     echo "Hello ".$name[0];   
    // }else{
    //     echo "Please enter a name in a query in the url";
    // }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>  
    
    <div>
        <h1>
            <?php  
                $keys = array_keys($_GET);
                if(!empty($keys)){
                    $name = array_values($_GET);     
                    echo "Hello, ".$name[0];   
                }
            ?>
        </h1>
    </div>
    <div class="container">
        <form action="index.php">
            <span class="outline">
                <p>Enter any name</p>
                <input type="text" name="name" autocomplete="off">
            </span>
            <button type="submit">Submit</button>
        </form>
    </div>    

</body>
</html>
    