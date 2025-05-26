<?php 
$id=$_GET['id'];

class activate{
  function __construct($id){
     include("../../code/connection.php");
     $type="approve";
     try{
     $output=250000;//ml
     $update="UPDATE `production` SET `output` = '$output' WHERE `pr_id` = '$id'";
     $query=mysqli_query($con2,$update);
 
      if($query==TRUE){header("location:../production.php");}
      else{echo "<script>window.alert('Fail to Approve ');window.location='../production.php'</script>'";}
    }catch(PDOException $e){echo"connection problem";}
  }
}
$obj=new activate($id);
?>