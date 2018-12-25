<?php
include("config.php");
$id = mysqli_escape_string($con,trim($_POST['id']));
$sql = "DELETE FROM `brands` WHERE `id`=$id";
mysqli_query($con, $sql);
