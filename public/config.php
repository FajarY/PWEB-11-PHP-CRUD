<?php
    $server = "php-database";
    $user = "user";
    $password = "password";
    $database = "phpdatabase";
    $port = "3306";
    $db = mysqli_connect($server, $user, $password, $database, $port);

    if(!$db)
    {
        die("Error when connecting to database!".mysqli_connect_error());
    }
?>