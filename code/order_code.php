<?php
$name=$_POST['name'];
$location=$_POST['location'];
$phone=$_POST['phone'];
$location=$_POST['location'];
$quantity=$_POST['quantity'];
$quant=$quantity;
$avail=$_POST['avail'];
$mail=$_POST['mail'];
$approve="Pending";
$d=date('d-m-y');
if($avail>=$quantity){
 include("connection.php");
   $available=0;
   $retrive=mysqli_query($con2,"SELECT * FROM `output_stock`");
   while($row=mysqli_fetch_array($retrive))
    {
        $rest=$row['rest'];
        $id=$row['id'];
        $doz=$row['douzen'];
        // $available=$available+$doz+$rest;
        if($quantity>0 && $quantity>=$doz  ){
        	$quantity=$quantity-$doz;
            mysqli_query($con2,"UPDATE `output_stock` SET `douzen`=0 WHERE `id`='$id'");
            echo "error1";

        }elseif ($quantity<$doz) {
        	$doz_rest=$doz-$quantity;
        	$quantity=0;
            mysqli_query($con2,"UPDATE `output_stock` SET `douzen`='$doz_rest' WHERE `id`='$id'");	
             echo "error2";
        }else{ echo "error3";}

     }
     
   $querry=mysqli_query($con2,"insert into orders(order_id,cust_name,cust_locat,phone,mail,quantity,date,approve)value('','$name','$location','$phone','$mail','$quant','$d','$approve')");
   if($querry=true){
   echo "<script> window.alert('order saved');window.location='../ordering.php'</script>";
    }
   else{
	echo "<script> window.alert('order Fail Please try again');window.location='../ordering.php'</script>";
  }
}else{
   echo "<script>window.alert('Please order Available ');window.location='../ordering.php'</script>'";
}
?>

