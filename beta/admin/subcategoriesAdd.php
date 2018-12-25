<?php
include("config.php");
$SubCategoryName=mysqli_escape_string($con,trim($_POST['SubCategoryName']));
$catID=mysqli_escape_string($con,trim($_POST['catID']));
    $result = $con->query("insert into subcategories( `name`, `category_ID`) VALUES ('".$SubCategoryName."','".$catID."')");
$count=$con->affected_rows;
if($con > 0){
    $response['status']=true;
}else{
    $response['status']=false;
}
echo json_encode(array("response"=>$response));

?>