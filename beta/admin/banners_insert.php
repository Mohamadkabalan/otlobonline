<?php
include("config.php");

$path=mysqli_escape_string($con,trim($_POST['path']));
$Description=mysqli_escape_string($con,trim($_POST['Description']));
$title=mysqli_escape_string($con,trim($_POST['title']));
$sourcePath = $_FILES['file']['tmp_name'];       // Storing source path of the file in a variable
$targetPath = $path.date("Y-m-d-H-i-s").$_FILES['file']['name']; // Target path where file is to be stored

if(move_uploaded_file($sourcePath,$targetPath)) {    // Moving Uploaded file
echo "INSERT INTO banners( `Title`, `Description`, `Image`) VALUES ('$title','$Description','$targetPath')";
    $result = $con->query("INSERT INTO banners( `Title`, `Description`, `Image`) VALUES ('$title','$Description','$targetPath')");
}

?>