<?php

    $score = 50;

    // if($score > 40) {
    //     echo 'High score';
    // } else {
    //     echo "low score";
    // }

    // $val = $score > 40 ? "High score" : "Low score";
    // echo $val;


    // super globals

    echo $_SERVER['SERVER_NAME'] . "<br />";
    echo $_SERVER['REQUEST_METHOD'] . "<br />";
    echo $_SERVER['SCRIPT_FILENAME'] . "<br />";
    echo $_SERVER['PHP_SELF'] . "<br />";
     
    
    
?>

<!DOCTYPE html>
<html>
    <head>
        <title>php tuts</title>
    </head>
    <body>

        <?php  echo $score > 40 ? 'high score' : 'low score'; ?>

    </body>
</html>