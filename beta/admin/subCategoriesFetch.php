<?php
include("config.php");
$CatID=mysqli_escape_string($con,trim($_POST['CatID']));
$result = $con->query("SELECT * FROM subcategories where category_ID='$CatID'  order by `name` asc");
$i=0;
while($row = $result->fetch_array()) {
    $response[$i]['subCatID']=$row['id'];
    $response[$i]['subCatName']=$row['name'];
    $i+=1; }
echo json_encode(array("response"=>$response));
?>