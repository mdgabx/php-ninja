<?php
    session_start();

    //$_SESSION['name'] = 'test';

    if($_SERVER['QUERY_STRING'] === 'noname') {
        // unset($_SESSION['name']);

        session_unset();
    }

    $name = $_SESSION['name'];



?>

<head>
    <title>Pizza Project</title>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <style type="text/css">
        .brand {
            background: brown;
        }

        .brand-text {
            color: brown !important;
        }

        form {
            max-width: 460px;
            margin: 20px auto;
            padding: 20px;
        }

    </style>

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

</head>

<body class="grey lighten-4">
    <nav class="white z-depth-0">
        <div class="container">
            <a href="index.php" class="brand-logo brand-text">Pizza House</a>
            <ul id="nav-mobile" class="right hide-on-small-and-down">
                <li class="grey-text">Hello <?= htmlspecialchars(($name))  ?></li>
                <li><a href="add.php" class="btn brand z-depth-0">Add a Pizza</a></li>
            </ul>
        </div>
    </nav>