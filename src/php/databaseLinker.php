<?php

    $dbServer = "localhost";
    $dbUsername = "hp";
    $dbPassword = "ophp";
    $dbName = "seminar";
    //database connection
    $conn = mysqli_connect("$dbServer", "$dbUsername", "$dbPassword", "$dbName");
    //check for errors
    if (!$conn) {
        die('Connection Error (' . mysqli_connect_errno() . ')  ' . mysqli_connect_error());
    }
