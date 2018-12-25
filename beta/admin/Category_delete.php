<?php

include("config.php");
$id = mysqli_escape_string($con,trim($_POST['id']));
$sql = "DELETE FROM `categories` WHERE `id`=$id";
mysqli_query($con, $sql);
