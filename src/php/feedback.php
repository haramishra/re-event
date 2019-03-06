<?php

    require_once "databaseLinker.php";

    $email=$_POST["email"];
    $name = $_POST["name"];
    $message = $_POST["message"];

    $sql="INSERT INTO `feedback` (`email`, `name`, `message`, `time`) VALUES ('$email', '$name', '$message', CURRENT_TIMESTAMP)";
    mysqli_query($conn, $sql);
    include "thanks-feedback.html"; 
    
    mysqli_close($conn);
    exit;   

    ?>
