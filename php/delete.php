<?php
$id =  $_GET["user_id"];
require "../connection/conn.php";
$sql = "DELETE FROM users WHERE user_id=$id";
if($conn->query($sql)){
    header("location:dashboard.php");
}
?>