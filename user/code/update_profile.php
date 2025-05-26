<?php
$id=$_POST['id'];
$names=$_POST['name'];
$phone=$_POST['phone'];
$username=$_POST['username'];
$password=$_POST['password'];
//$type=$_POST['type'];
//$resiponsible=$_POST['resiponsible'];
$mail=$_POST['mail'];

include("../../code/connection.php");
$update="UPDATE users SET Name='$names',Username='$username',Password='$password',e_mail='$mail',Phone='$phone' WHERE Id='$id' or Username='$username'";
$a=mysqli_query($con2,$update);
      if($a==true)
             {echo "<script>window.alert('Update successefully ');window.location='../profile.php'</script>'";
        // header('../announcement.php');
      }else{echo "<script>window.alert('pease try again  update Fail ');window.location='../profile.php'</script>'";}




?>