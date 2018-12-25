<?php
include("config.php");
$result = $con->query("SELECT * FROM brands  order by `brand` asc");
$i=0;
while($row = $result->fetch_array()) {
    $response[$i]['brandID']=$row['id'];
    $response[$i]['brandName']=$row['brand'];
    $response[$i]['brandImage']=$row['image'];

    $i+=1; }
echo json_encode(array("response"=>$response));
?>