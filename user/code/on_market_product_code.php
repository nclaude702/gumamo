<?php 
session_start();
$id=$_GET['id'];


  include("../../code/connection.php");

    $result=mysqli_query($con2,"SELECT * FROM `production` where `pr_id`='$id'");
     $fetch=mysqli_fetch_array($result);
     $output=$fetch['output'];
    if(!empty($output)){
     $name=$_SESSION["Admin"];
     $totalbattle=$output/330;//ml
     $douzen=$totalbattle/12;
     $rest=$totalbattle%12;
     $parking="done";
     $d=date('d-m-y');
    
      $update=mysqli_query($con2,"UPDATE `production` SET received='$name', received_date='$d', parking='$parking' WHERE `pr_id` = '$id'");

      $insert=mysqli_query($con2,"insert into`output_stock`value('','$id','$output','$douzen','$rest','$name','$d')");

   if($update==TRUE AND $insert==TRUE){
      //header("location:../parking_and_market.php");
    echo "<script>window.alert('Successfull ');window.location='../parking_and_market.php'</script>'";
   }
   else{echo "<script>window.alert('Fail ');window.location='../parking_and_market.php'</script>'";}
}else{
     echo "<script>window.alert('Please Check production Approved ');window.location='../production.php'</script>'";
   }
    

?>