<?php
    // connect to database

    $conn = mysqli_connect('localhost', 'mark', 'phptest', 'pizza_house');

    // check the connection
    if(!$conn) {
        echo "Connection error: " . mysqli_connect_error();
    } 

    // query to fetch all pizzas

    $sql = "SELECT title, ingredients, id FROM pizza_house.pizzas ORDER BY created_at DESC";

    // get the result

    $result = mysqli_query($conn, $sql);

    // fetch the resulting rows as an array as per format
    $pizzas = mysqli_fetch_all($result, MYSQLI_ASSOC);

    // free result from memory
    mysqli_free_result($result);
    //close connection
    mysqli_close($conn);

?>

<!DOCTYPE html>
<html>

    <?php include('./templates/header.php'); ?>

    <h4 class="center grey-text">Pizzas!</h4>

    <div class="container">
        <div class="row">
            <?php foreach($pizzas as $pizza){ ?>
                <div class="col s6 md3">
                    <div class="card z-depth-0">
                        <div class="card-content center">
                            <h6><?= htmlspecialchars($pizza['title']) ; ?></h6>
                            <div><?= htmlspecialchars($pizza['ingredients']) ;  ?></div>
                        </div>

                        <div class="card-action right-align">
                            <a href="#" class="brand-text">more info</a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>

    <?php include('./templates/footer.php'); ?>
</html>