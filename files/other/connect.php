<?php

$server="localhost";
$user='root';
$password='';
$database='touroopi';

$connect=mysqli_connect($server,$user,$password,$database);

if(mysqli_connect_errno()){
    die('Database Connect Error !' .mysqli_connect_error());
}


?>