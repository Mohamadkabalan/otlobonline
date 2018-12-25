<?php
include('admin/config.php');

$username=mysqli_escape_string($con,trim($_POST["username"]));


$stmt = $con->prepare("SELECT * FROM clients WHERE email = ?");
$stmt->bind_param("s",$username);
$stmt->execute();
$result = $stmt->get_result();
$count=$result->num_rows;



if($count  > 0){
    $response['status']=true;
}else{
    $response['status']=false;
}
$stmt->close();

echo json_encode(array("response"=>$response));