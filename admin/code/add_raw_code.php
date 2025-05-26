<?php
$rname=$_POST['rname'];
$type=$_POST['type'];
   include("../../code/connection.php");
   mysqli_query($con2,"insert into`raw_mateial`value('','$rname','$type')");
   echo "<script> window.alert('another product has been added');window.location='../add_raw_material.php'</script>";
?>

