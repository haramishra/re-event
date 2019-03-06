<?php
/*

convert the data to json (done)

create new table (done)

create a new directory inside upload

store uploaded file to upload

use json file to modify index

upload data to database

 */

require_once "../src/php/databaseLinker.php";



$date = $_POST['date'];
$topic = $_POST['topicName'];
$textArea = $_POST['textarea'];
$participents = $_POST['participents'];
$topic_type = $_POST['topic'];
$resultDate = $_POST["resultDate"];
$tableName = "candidate" . str_replace("-", "_", $date);
$dir = "files" . $date;
$zipName = "PPTfiles" . $date;

$dataArray = array("date" => $date, "topic" => $topic,
    "text" => $textArea, "topicType" => $topic_type,
    "partno" => $participents, "resultDate" => $resultDate,
    "tableName" => $tableName, "dir" => $dir, "zip" => $zipName
);
$create_table_sql = "CREATE TABLE $tableName (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    roll VARCHAR(30) NOT NULL,
    topic VARCHAR(30) NOT NULL,
    email_status int(1) DEFAULT 0,
    reg_date TIMESTAMP
)";

if (mkdir("../uploads/$dir")){
    echo "file created as " . $dir ;
}

if(mysqli_query($conn, $create_table_sql)){
    echo "table created";
}else{
    echo "failed to create table";
    die (mysqli_error());
}
$dataJSON = json_encode($dataArray);
file_put_contents("../newJSON.json", $dataJSON);

mysqli_close($conn);
exit;