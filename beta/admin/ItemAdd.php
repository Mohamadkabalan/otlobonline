<?php
include("config.php");
$NewArrival=mysqli_escape_string($con,trim($_POST['NewArrival']));
$NewArrivalStopDate=mysqli_escape_string($con,trim($_POST['NewArrivalStopDate']));
$discountStopDate=mysqli_escape_string($con,trim($_POST['discountStopDate']));
$path=mysqli_escape_string($con,trim($_POST['path']));
$CategoryID=mysqli_escape_string($con,trim($_POST['CategoryID']));
$SubCategoryID=mysqli_escape_string($con,trim($_POST['SubCategoryID']));
$description=mysqli_escape_string($con,trim($_POST['description']));
$discount=mysqli_escape_string($con,trim($_POST['discount']));
$name=mysqli_escape_string($con,trim($_POST['name']));
$outOfStock=mysqli_escape_string($con,trim($_POST['outOfStock']));
$price=mysqli_escape_string($con,trim($_POST['price']));
$colors=mysqli_escape_string($con,trim($_POST['colors']));
$brandID=mysqli_escape_string($con,trim($_POST['brandID']));
$sourcePath = $_FILES['file']['tmp_name'];       // Storing source path of the file in a variable
$NewFileName=str_replace(' ', '', $_FILES['file']['name']);




$targetPath =$path.date("Y-m-d-H-i-s").$NewFileName; // Target path where file is to be stored
if(move_uploaded_file($sourcePath,$targetPath)) {    // Moving Uploaded file

    $result = $con->query("INSERT INTO `items`(`name`, `price`, `discount`, `text`, `OutOfStock`, `category_ID`, `subCategory_ID`, `NewArrival`, `NewArrivalStopDate`, `discountStopDate`,`brandID`)
 VALUES ('$name','$price','$discount','$description','$outOfStock','$CategoryID','$SubCategoryID','$NewArrival','$NewArrivalStopDate','$discountStopDate','$brandID')");
    $itemID=$con->insert_id;
    if($itemID){
        $result = $con->query("INSERT INTO `itemimages`(`link`, `itemID`, `main`)
VALUES ('$targetPath','$itemID',1)");
        $itemImageID=$con->insert_id;

        $NumberOfImages=mysqli_escape_string($con,trim($_POST['NumberOfImages']));
        for ($i=1;$i <= $NumberOfImages;$i++){
            $sourcePath= $_FILES['file'.$i]['tmp_name'];       // Storing source path of the file in a variable
            $NewFileName=str_replace(' ', '', $_FILES['file'.$i]['name']);
            $targetPath =$path.date("Y-m-d-H-i-s").$NewFileName;
            if(move_uploaded_file($sourcePath,$targetPath)) {
                $result = $con->query("INSERT INTO `itemimages`(`link`, `itemID`, `main`)
VALUES ('$targetPath','$itemID',0)");
            }
        }


        $colorArray=explode(",",$colors);
        foreach($colorArray as $color){
            $result = $con->query("INSERT INTO `itemscolor`( `color`, `itemID`) VALUES ('$color',$itemID)");
        }



        if($itemImageID){
            $response['itemID']=$itemID;
            $response['itemImage']=$targetPath;
            $response['status']=true;
        }else{
            $response['status']=false;
        }

    }

}else{
    $response['status']=false;
}
echo json_encode(array("response"=>$response));

