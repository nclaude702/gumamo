<?php

$host="localhost";
$user="root";
$pass="";
$db="gumamo";

$con1=mysqli_connect($host,$user,$pass);
mysqli_select_db($con1,"gumamo");

$con2=mysqli_connect($host,$user,$pass,$db);

$con3=new pdo("mysql:host=$host;dbname=$db;",$user,$pass);

?>