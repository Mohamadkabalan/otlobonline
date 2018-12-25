<?php
include("config.php");
/*ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);*/
$itemID=$_POST['itemID'];
$table=$_POST['table'];
$path=$_POST['path'];
$main=$_POST['main'];
$imageID=$_POST['imageID'];
$columnName=$_POST['columnName'];
$sourcePath = $_FILES['file']['tmp_name'];       // Storing source path of the file in a variable
$NewFileName=str_replace(' ', '', $_FILES['file']['name']);
$targetPath =$path.date("Y-m-d-H-i-s").$NewFileName; // Target path where file is to be stored

if(move_uploaded_file($sourcePath,$targetPath)) {    // Moving Uploaded file
    $result = $con->query("SELECT * FROM itemimages WHERE id ='$imageID'");
    $count=$result->num_rows;


    if($count > 0){
        $result = $con->query("update `$table` set  `$columnName` ='$targetPath' WHERE id='$imageID' ");

    }else{
        $result = $con->query("INSERT INTO `itemimages`( `link`, `itemID`, `main`) VALUES ('$targetPath','$itemID',0)");

    }
    $response['status']=true;
    $response['ImagePath']=$targetPath;
}else{
    $response['status']=false;
}
echo json_encode(array("response"=>$response));

?>