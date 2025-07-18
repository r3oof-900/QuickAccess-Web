<?php

$conn = new mysqli("localhost","root","","quickfix");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// echo "Connected successfully";

?>