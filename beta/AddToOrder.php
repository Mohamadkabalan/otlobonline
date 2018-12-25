<?php
include('admin/config.php');
$clientID      = mysqli_escape_string($con,trim($_POST["clientID"]));
$itemID        = mysqli_escape_string($con,trim($_POST["itemID"]));
$itemQunantity = mysqli_escape_string($con,trim($_POST["itemQunantity"]));
$itemColor     = mysqli_escape_string($con,trim($_POST["itemColor"]));

$result = $con->query("SELECT * FROM orders where ClientID ='$clientID'   and status='Pending'");
$count=$result->num_rows;
if($count > 0){
    $row = $result->fetch_array();
    $orderID=$row['ID'];
}else{
    $date=date("Y-m-d-H-i-s");
    $stmt = $con->query("INSERT INTO `orders`( `OrderDate`, `status`, `ClientID`) VALUES ('$date','Pending','$clientID')");
    $orderID=$con->insert_id;
}

$stmt = $con->query("INSERT INTO `order_item`( `order_ID`, `item_ID`, `quantity`, `color`) VALUES ('$orderID','$itemID','$itemQunantity','$itemColor')");
$orderItemID=$con->insert_id;


if($orderItemID  > 0){
    $response['status']=true;
}else{
    $response['status']=false;
}


echo json_encode(array("response"=>$response));