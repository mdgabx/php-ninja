<?php
        // connect to database

        $conn = mysqli_connect('localhost', 'mark', 'phptest', 'pizza_house');

        // check the connection
        if(!$conn) {
            echo "Connection error: " . mysqli_connect_error();
        } 
?>