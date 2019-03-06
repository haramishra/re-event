<?php
  
    require_once "databaseLinker.php";

    $roll = $_POST["roll"];
    $cat1 = $_POST["cat1"];
    $cat2 = $_POST["cat2"];
    $cat3 = $_POST["cat3"];
    $cat4 = $_POST["cat4"];
    $cat5 = $_POST["cat5"];
    $remarks = $_POST["remarks"];
    $total = $cat1+$cat2+$cat3+$cat4+$cat5;

    $insert_sql = "INSERT INTO `result`(`roll`, `cat1`, `cat2`, `cat3`, `cat4`, `cat5`, `total`, `remarks`) VALUES ('$roll','$cat1','$cat2','$cat3','$cat4','$cat5','$total','$remarks')";
    //$rollcheck_sql = "SELECT r.roll from result AS r INNER JOIN candidates AS c on r.roll = c.roll";
    $rollcheck_sql = 0;
    $rollcheck = mysqli_query($conn, $rollcheck_sql);
    if(mysqli_num_rows($rollcheck)==0){
        mysqli_query($conn, $insert_sql);
        echo "evaluated for   " . $roll;
        exit;
    }
    

?>
