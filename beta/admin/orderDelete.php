
<?php

include("config.php");
$id = mysqli_escape_string($con,trim($_POST['id']));
$sql = "DELETE FROM `orders` WHERE `id`='$id'";
mysqli_query($con, $sql);
echo $sql2="delete from order_item where order_ID='$id'";
mysqli_query($con, $sql2);
?>