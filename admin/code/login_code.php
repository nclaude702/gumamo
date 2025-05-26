<?php 
session_start();
if (isset($_POST['login'])) 
{
include("../../code/connection.php");
$my=$_POST['username'];
$your=$_POST['password'];
$sql="SELECT * FROM users WHERE Username='$my' and Password='$your'";
$result=mysqli_query($con1,$sql);

$fetch=mysqli_fetch_array($result);
$name=$fetch['Name'];
$username=$fetch['Username'];
$password=$fetch['Password'];
$phone=$fetch['Phone'];
$type=$fetch['Type'];
$idd=$fetch['id'];
$responsibility=$fetch['responsibility'];

$count=mysqli_num_rows($result);
if($count==1)
{
	$_SESSION["Admin"]=$name;
	$_SESSION["username"]=$username;
	$_SESSION["password"]=$password;
	$_SESSION["phone"]=$phone;
	$_SESSION["type"]=$type;

    $_SESSION["User"]=$name;
	$_SESSION["usernameu"]=$username;
	$_SESSION["passwordu"]=$password;
	$_SESSION["phoneu"]=$phone;
	$_SESSION["typeu"]=$type;
	$_SESSION["responsibility"]=$responsibility;
	if($fetch['Type']=="User"){
	  
    header("location:../../user/?msg=You%20have%20login%20to%20users!");
}

	elseif($fetch['Type']=="Admin"){
	header("location:../index.php");}
	else{
	   echo"<script>window.alert('Incorrect Password,Username!')</script>";
	   header("location:../../login.php?msg=Your%20Username%20and%20password%20incorect!");
    }
}
else{
	echo"<script>window.alert('Incorrect Password,Username!')</script>";
	header("location:../../login.php");

	}
}
?>