<?php
include("admin/config.php");
$itemID=mysqli_escape_string($con,trim($_POST['itemID']));
$orderID=mysqli_escape_string($con,trim($_POST['orderID']));
$result=$con->query("DELETE FROM `order_item` WHERE `order_ID`='$orderID' and `item_ID`='$itemID'");



?>