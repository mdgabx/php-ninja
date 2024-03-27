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

    // echo $_SERVER['SERVER_NAME'] . "<br />";
    // echo $_SERVER['REQUEST_METHOD'] . "<br />";
    // echo $_SERVER['SCRIPT_FILENAME'] . "<br />";
    // echo $_SERVER['PHP_SELF'] . "<br />";
     
    // sessions

    if(isset($_POST['submit'])) {
        // set cookies for gender
     
        session_start();

        setcookie('gender', $_POST['gender']);

        var_dump($_POST);

        $_SESSION['name'] = $_POST['name'];

        // echo $_SESSION['name'];

        header('Location: index.php');
    }

    
?>

<!DOCTYPE html>
<html>
    <head>
        <title>php tuts</title>
    </head>
    <body>

        <!-- <?php  echo $score > 40 ? 'high score' : 'low score'; ?> -->

        <form action="sandbox.php" method="POST">
            <input type="text" name="name"> 

            <select name="gender">
                <option value="male">male</option>
                <option value="female">female</option>
            </select>

            <input type="submit"name="submit" value="submit">
        </form>

    </body>
</html>