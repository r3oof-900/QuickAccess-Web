<?php
$id =  $_GET["id"];
require "db.php";
$sql = "DELETE FROM users WHERE user_id=$id";
if($conn->query($sql)){
    header("location:dashboard.php");
}
?>
