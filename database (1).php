<?php

$servername="localhost";
$username="root";
$password="";
$dbname="first_pro";

$conn= new mysqli($servername,$username,$password,$dbname);
$conn->set_charset("utf8");
if($conn->connect_error){
       
    die("Connection faild".$conn->connect_error);
}


?>