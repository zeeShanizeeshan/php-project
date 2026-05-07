<?php
$host='localhost';
$username="root";
$password="";
$database="phpproject";

$conn=new mysqli($host,$username,$password,$database);
if($conn->connect_error){
    die("not connected with db" .$conn->connect_error);
}

?>