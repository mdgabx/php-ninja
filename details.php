<?php

    include('config/db_connect.php');
    
    // check get request id param
    if(isset($_GET['id'])) {

        $id = mysqli_real_escape_string($conn, $_GET['id']);

        // make sql

        $sql = "SELECT * FROM pizzas WHERE id = $id";

        // get the query results

        $result = mysqli_query($conn, $sql);

        // fetch the results in array format

        $pizza = mysqli_fetch_assoc($result);

        mysqli_free_result($result);
        mysqli_close($conn);

        // print_r($pizza);
    }
?>

<!DOCTYPE html>
<html>

    <?php include('templates/header.php') ?>

    <div class="container center">
        <?php if($pizza): ?>
            
            <h4><?=  htmlspecialchars(($pizza['title'])) ;  ?></h4>
            <p>created by: <?= htmlspecialchars($pizza['email']) ; ?></p>
            <p><?= date($pizza['created_at']) ;  ?></p>
            <h5>Ingredients</h5>
            <p><?= 
                htmlspecialchars($pizza['ingredients']) ;
            ?></p>

        <?php else : ?>
            <h5>No such pizza exist</h5>     
        <?php endif ; ?>
    </div>

    <?php include('template/footer.php') ?>

</html>