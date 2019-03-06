
<?php
// global variable declaration
$roll;
$topic;
$name = $class = $year = $email;
$error;

//json importing
$jsonfile = file_get_contents("../../newJSON.json", true);
$file = json_decode($jsonfile, true);
$tableName = $file["tableName"];
echo $tableName;

// ---- END ----
//-----database linker----
require_once "databaseLinker.php";

if (isset($_GET["roll"])) {
    $roll = $_GET["roll"];

}
if (isset($_GET["topic"])) {
    $topic = $_GET["topic"];

}
//check the fields
if (empty($roll) || empty($topic)) {
    $error = "sorry, please enter your roll number";
}
//mysql query 
$getStudRow = "SELECT * FROM student_info WHERE roll = " . "'$roll'";
$check_data_query = "SELECT * FROM $tableName WHERE roll = '$roll'";
$check_data = mysqli_query($conn, $check_data_query);
$studData = mysqli_query($conn, $getStudRow);
//check whether roll number already exits in the table
if (mysqli_num_rows($check_data) > 0) {
    $error = "Sorry, you are already registered";
}
//register the roll number in candidates table
elseif (mysqli_num_rows($studData) > 0) {
    $row = mysqli_fetch_array($studData);
    $candidates_query = "INSERT INTO $tableName (`roll`, `topic`) VALUES ('$roll','$topic')";
    $dat = mysqli_query($conn, $candidates_query);
    $rollnumber = $row['roll'];
    $name = $row['name'];
    $class = $row["class"];
    $year = $row["year"];
    $email = $row["email"];
    $error = "you are registered successfully";
    echo $error;
    mysqli_close($conn);
    exit;
}
//if the roll number is not present in the student database
else {
    $error = "sorry, you are not listed in student database please recheck your roll number";
}
echo $error;
//database connection close
mysqli_close($conn);
