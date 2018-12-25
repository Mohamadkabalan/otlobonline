<?php

include("config.php");
$id = mysqli_escape_string($con,trim($_POST['id']));
$sql = "DELETE FROM `items` WHERE `id`=$id";
mysqli_query($con, $sql);
