<?php
include("config.php");
$itemID=mysqli_escape_string($con,trim($_POST['itemID']));
$colors=mysqli_escape_string($con,trim($_POST['colors']));
$colorArray=explode(",",$colors);
$stmt = $con->query("DELETE FROM `itemscolor` WHERE `itemID`=$itemID");
foreach($colorArray as $color){
$result = $con->query("INSERT INTO `itemscolor`( `color`, `itemID`) VALUES ('$color',$itemID)");
}