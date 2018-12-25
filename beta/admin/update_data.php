<?php
include('config.php');

$id =mysqli_escape_string($con,trim($_POST["id"]));
$text = mysqli_escape_string($con,trim($_POST["text"]));
$column_name =mysqli_escape_string($con,trim($_POST["column_name"]));
$table=mysqli_escape_string($con,trim($_POST["table"]));
if($text=="Date"){
    $text=date("Y-m-d h:i:s");
}

$stmt = $con->query("UPDATE `$table` set `$column_name` ='$text' WHERE id=$id");
$count=$con->affected_rows;
if($count  > 0){
    $response['status']=true;
}else{
    $response['status']=false;
}


echo json_encode(array("response"=>$response));