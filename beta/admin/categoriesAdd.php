<?php
include("config.php");
//$columns=$_POST['columns'];
//$array=explode('-',$columns);
//foreach ($array as $element){
//    $myObj->$element = $_POST[$element];
//}
//$myJSON = json_encode($myObj);

$CategoryName=$_POST['CategoryName'];

$path=$_POST['path'];

$path=$_POST['path'];
$sourcePath = $_FILES['file']['tmp_name'];       // Storing source path of the file in a variable
$NewFileName=str_replace(' ', '', $_FILES['file']['name']);
$targetPath =$path.date("Y-m-d-H-i-s").$NewFileName; // Target path where file is to be stored
if(move_uploaded_file($sourcePath,$targetPath)) {    // Moving Uploaded file

        $result = $con->query("insert into categories( `Name`, `image`) VALUES ('".$CategoryName."','".$targetPath."')");

$response['status']=true;
}else{
    $response['status']=false;
}
echo json_encode(array("response"=>$response));

?>