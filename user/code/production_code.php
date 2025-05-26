<?php
session_start();
    $responsibility=$_SESSION["responsibility"];
$prod1=$_POST['sugar'];
$prod2=$_POST['tea'];
$prod3="food split";
$prod4=$_POST['tangawizi'];
$date=$_POST['date'];
$p_name=$_POST['production_name'];
$users=$_POST['users'];
include("../../code/connection.php");




if($responsibility=='Stock'){
   if($p_name!="no choice"){
   echo "hello world";
   echo $responsibility;
    if($prod1=="sugar"){
       $prod1="20kg";
      }
    if($prod2=="tea"){
      $prod2="2kg";
     }
    if($prod3=="food split"){
       $prod3="150mg";
     }
    if($prod4=="tangawizi"){
       $prod4="15kg";
    }

    else{
      echo "<script> window.alert('please fill correct information');window.location='../production.php'</script>";
	
      }


     $query=mysqli_query($con2,"insert into`production`value('','$prod1','$prod2','$prod3','$prod4','$date','$users','$p_name','','','')");


   if($query==TRUE){
       echo "<script> window.alert('well Done');window.location='../production.php'</script>";

     }
   else{echo "<script>window.alert('Fail to Add In Production proccess ');window.location='../production.php'</script>'";}

       }
   else{
     echo "<script>window.alert('Please select production users ');window.location='../production.php'</script>'";
   }
    }
else{
     echo "<script>window.alert('please Storekeeper only allowed ');window.location='../production.php'</script>'";
   }
?>