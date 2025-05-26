<!DOCTYPE html>
<html lang="en">
   <head>
     <?php include("head.php");?>
   </head>
   <body class="dashboard dashboard_1">
      <div class="full_container">
         <div class="inner_container">
            <!-- Sidebar  -->
            <nav id="sidebar">
               <?php include("sidenav.php");?>
            </nav>
            <!-- end sidebar -->
            <!-- right content -->
            <div id="content">
               <!-- topbar -->
               <?php include("topnav.php");?>
               <!-- end topbar -->
               <!-- dashboard inner -->
               <div class="midde_cont">
                  <div class="container-fluid">
                     
                     
                     <div class="row column4 graph">
                        <div class="col-md-6">
                           
                           <img src="image/drink/8.jpg" alt="#" style="width: 430px;height: 500px; border-radius: 10px;" />
                        </div>
                        <div class="col-md-6">
                           <div class="dash_blog">
                              <div class="dash_blog_inner">
                                 <div class="dash_head">
                                    <h3><span><i class="fa fa-exchange"></i> Order Gumamo Product</span></h3>
                                 </div>
                                 <form method="POST" action="code/order_code.php">
                                 <div class="list_cont">
                                    <p>Please Customer Fill This Form Carefully</p>
                                 </div>
                                 <div class="col-md-6 col-lg-3" >
                                    <?php
                              
                              $available=0;
                              $retrive=mysqli_query($con2,"SELECT id,douzen,rest FROM `output_stock`");
                               while($row=mysqli_fetch_array($retrive))
                                 {
                                  $rest=$row['rest'];
                                  $id=$row['id'];
                                  $doz=$row['douzen'];
                                  //$available=$available+$doz+$rest;
                                  $available=$available+$doz;
                                }  ?>
                                  
                                       Names:<input type="text" name="name" required style="width: 350px; height: 35px; border-color: green; border-radius: 10px;" >
                                       Location:<input type="text" name="location" required style="width: 350px; height: 35px; border-color: green; border-radius: 10px; ">
                                       Phone:<input type="text" name="phone" required style="width: 350px; height: 35px; border-color: green; border-radius: 10px;">

                                       E_mail:<input type="text" name="mail" required style="width: 350px; height: 35px; border-color: green; border-radius: 10px;">

                                       Available:<input type="text" value="<?php echo $available;  ?>" name="avail" readonly style="width: 350px; height: 35px; border-color: green; border-radius: 10px; text-align: center;">
                                       Enter_Quantity_you_want:<input type="text" name="quantity" required style="width: 350px; height: 35px; border-color: green; border-radius: 10px;">
                                    
                                    
                                 </div>
                                 <div class="read_more">
                                    <div class="center">
                                       <button class="main_bt read_bt">Order</button></div>
                                 </div>
                                 </form>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                     
                  
               </div>
               <!-- end dashboard inner -->
            </div>
         </div>
      </div>
         <!-- jQuery -->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <!-- wow animation -->
      <script src="js/animate.js"></script>
      <!-- select country -->
      <script src="js/bootstrap-select.js"></script>
      <!-- owl carousel -->
      <script src="js/owl.carousel.js"></script> 
      <!-- chart js -->
      <script src="js/Chart.min.js"></script>
      <script src="js/Chart.bundle.min.js"></script>
      <script src="js/utils.js"></script>
      <script src="js/analyser.js"></script>
      <!-- nice scrollbar -->
      <script src="js/perfect-scrollbar.min.js"></script>
      <script>
         var ps = new PerfectScrollbar('#sidebar');
      </script>
      <!-- custom js -->
      <script src="js/custom.js"></script>
      <script src="js/chart_custom_style1.js"></script>
     
   </body>
</html>
<style type="text/css">
   .form{
      
   }
</style>