<?php
include("config.php");

$result = $con->query("SELECT * FROM clients order by `id` desc");
$i=0;
while($row = $result->fetch_array()) {
    $response[$i]['clientID']=$row['id'];
    $response[$i]['clientFirstName']=$row['first_name'];
    $response[$i]['clientLastName']=$row['last_name'];
    $response[$i]['clientEmail']=$row['email'];
    $response[$i]['clientPhone']=$row['phone'];
    $response[$i]['clientAddress']=$row['address'];
  //  $response[$i]['clientPassword']=$row['password'];
    $i+=1; }
echo json_encode(array("response"=>$response));
?>