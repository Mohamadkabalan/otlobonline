<?php
include("config.php");
$result = $con->query("SELECT * FROM categories  order by `Name` asc");
$i=0;
while($row = $result->fetch_array()) {
    $response[$i]['CatID']=$row['id'];
    $response[$i]['CatName']=$row['name'];
    $response[$i]['CatImage']=$row['image'];

    $i+=1; }
echo json_encode(array("response"=>$response));
?>