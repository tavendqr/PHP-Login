<?php

$host="127.0.0.1";
$user="root";
$pass="root";
$db="login1";
$conn=new mysqli($host,$user,$pass,$db,3307);
if($conn->connect_error){
    echo "Failed to connect DB".$conn->connect_error;
}
?>