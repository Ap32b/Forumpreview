<?php

    $server = "localhost";
    $user = "root";
    $pw = "root";
    $db = "moosicdb";
    

    $conn = mysqli_connect($server, $user, $pw, $db);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }