<?php
    // connect to database

    $conn = mysqli_connect('localhost', 'mark', 'phptest', 'pizza_house');

    // check the connection
    if(!$conn) {
        echo "Connection error: " . mysqli_connect_error();
    } 

    // query to fetch all pizzas

    $sql = "SELECT title, ingredients, id FROM pizza_house.pizzas";

    // get the result

    $result = mysqli_query($conn, $sql);

    // fetch the resulting rows as an array as per format
    $pizzas = mysqli_fetch_all($result, MYSQLI_ASSOC);

    // free result from memory
    mysqli_free_result($result);
    //close connection
    mysqli_close($conn);

    print_r($pizzas);


?>

<!DOCTYPE html>
<html>

    <?php include('./templates/header.php'); ?>

    <?php include('./templates/footer.php'); ?>
</html>