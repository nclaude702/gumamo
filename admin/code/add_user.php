<?php

$names=$_POST['name'];
$phone=$_POST['phone'];
$username=$_POST['username'];
$password=$_POST['password'];
$type=$_POST['type'];
$resiponsible=$_POST['resiponsible'];
$mail=$_POST['mail'];

include("../../code/connection.php");
$insert="INSERT INTO users(Id,Name,Username,Password,e_mail,Phone,profile,Type,responsibility) values('','$names','$username','$password','$mail','$phone','','$type','$resiponsible')";
      $a=mysqli_query($con2,$insert);
      if($a==true)
      {echo "<script>window.alert('Insert User successefully ');window.location='../profile.php'</script>'";

      }else{echo "<script>window.alert('please try to insert again,  insert Fail ');window.location='../profile.php'</script>'";}
?>
