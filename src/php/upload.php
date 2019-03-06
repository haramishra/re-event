<?php

$jsonfile = file_get_contents("../../newJSON.json", true);
$file = json_decode($jsonfile, true);

$target_dir = "../../uploads/".$file['dir']."/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$fileName =$_FILES["fileToUpload"]["name"];
$fileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
$status;
$success;

if(isset($_POST["submit"])){

}
// check for empty file
if(empty($_FILES["fileToUpload"]["name"])){
    $status = "please select file";
    $uploadOk = 0;
}
// Check if file already exists
else if (file_exists($target_file)) {
    $status = "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
else if ($_FILES["fileToUpload"]["size"] > 50000000) {
    $status = "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
else if($fileType != "pdf" && $fileType != "pptx" && $fileType != "ppt" && $fileType != "ppsx" ) {
    $status = "Sorry, only .ppx, .ppt, .ppsx or .pdf files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
else if ($uploadOk == 0) {
    $status = "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        $success = "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        $status = "Sorry, there was an error uploading your file.";
    }
}

if($uploadOk == 0){
    include_once 'failed.php';
}
else{
    include_once "success.php";
}
?>
