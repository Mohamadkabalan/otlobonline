<?php
include("config.php");
$brandName=$_POST['brandName'];

$path=$_POST['path'];

$path=$_POST['path'];
$sourcePath = $_FILES['file']['tmp_name'];       // Storing source path of the file in a variable
$NewFileName=str_replace(' ', '', $_FILES['file']['name']);
$targetPath =$path.date("Y-m-d-H-i-s").$NewFileName; // Target path where file is to be stored
if(move_uploaded_file($sourcePath,$targetPath)) {    // Moving Uploaded file

    $result = $con->query("insert into brands( `brand`, `image`) VALUES ('".$brandName."','".$targetPath."')");

    $response['status']=true;
}else{
    $response['status']=false;
}
echo json_encode(array("response"=>$response));

?>