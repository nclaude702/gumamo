<?php
 session_start();
   $name=$_SESSION["Admin"];
   $username=$_SESSION["username"];
   $password=$_SESSION["password"];
   $phone=$_SESSION["phone"];
   $type=$_SESSION["type"];
include("../code/connection.php");
if (!isset($_SESSION['Admin'])) { header('location:../login.php'); } else { ?>
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
                     
                     
                     <div class="row column1">
                        <div class="col-md-12">
                           <div class="white_shd full margin_bottom_30">
                              <div class="full graph_head">
                                 <div class="heading1 margin_0">
                                    <h2>Raw Materials</h2>
                                 </div>
                              </div>
                              <div class="full price_table padding_infor_info">
                                 <div class="row">
                                    <!-- column price --> 
                                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                                       <div class="table_price full">
                                          <div class="inner_table_price">
                                             
                                             <?php
                                             $rname=$id=$stock=$quantity=$rtype=0;
                                             $sugar=mysqli_query($con2,"SELECT * FROM `raw_mateial` WHERE r_name='sugar'");

 
                                              while($row=mysqli_fetch_array($sugar))
                                                {
                                               $id=$row['r_id'];
                                               $rname=$row['r_name'];
                                               $stock=$row['stock'];
                                               $quantity=$row['quantity'];
                                               $rtype=$row['r_type'];
                                              }
                                           ?>
                                           <div class="price_table_head blue1_bg">
                                                <h2><?php echo $rname; ?></h2>
                                             </div>
                                             <div class="price_table_inner">
                                                <div class="cont_table_price_blog">
                                                   <p class="blue1_color"> KG<span class="price_no"><?php echo $stock; ?></span> Available</p>
                                                </div>
                                                <div class="cont_table_price">
                                                   <ul>
                                                      <li><a href="#">KG<?php echo $quantity; ?> needed in one production  </a></li>
                                                      <li><a href="#">KG<?php echo $quantity; ?></a></li>
                                                      <li><a href="#">participate in</a></li>
                                                      <li><a href="#">2500 lITRE</a></li>
                                                   </ul>
                                                </div>
                                             </div>
                                             
                                          </div>
                                       </div>
                                    </div>
                                    <!-- end column price -->
                                    <!-- column price --> 
                                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                                       <div class="table_price full">
                                          <div class="inner_table_price">
                                             <?php
                                             $rname=$id=$stock=$quantity=$rtype=0;
                                             $sugar=mysqli_query($con2,"SELECT * FROM `raw_mateial` WHERE r_name='tea'"); 
                                              while($row=mysqli_fetch_array($sugar)) {
                                               $id=$row['r_id'];
                                               $rname=$row['r_name'];
                                               $stock=$row['stock'];
                                               $quantity=$row['quantity'];
                                               $rtype=$row['r_type']; } ?>
                                           <div class="price_table_head green_bg">
                                                <h2><?php echo $rname; ?></h2>
                                             </div>
                                             <div class="price_table_inner">
                                                <div class="cont_table_price_blog">
                                                   <p class="green_color"> pack <span class="price_no"><?php echo $stock; ?></span> Available</p>
                                                </div>
                                                <div class="cont_table_price">
                                                   <ul>
                                                      <li><a href="#">pack <?php echo $quantity; ?> needed in one production  </a></li>
                                                      <li><a href="#">pack <?php echo $quantity; ?></a></li>
                                                      <li><a href="#">participate in</a></li>
                                                      <li><a href="#">2500 lITRE</a></li>
                                                   </ul>
                                                </div>
                                             </div>
                                             
                                          </div>
                                       </div>
                                    </div>
                                    <!-- end column price -->
                                    <!-- column price --> 
                                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                                       <div class="table_price full">
                                          <div class="inner_table_price">
                                             <?php
                                             $rname=$id=$stock=$quantity=$rtype=0;
                                             $sugar=mysqli_query($con2,"SELECT * FROM `raw_mateial` WHERE r_name='food split'"); 
                                              while($row=mysqli_fetch_array($sugar)) {
                                               $id=$row['r_id'];
                                               $rname=$row['r_name'];
                                               $stock=$row['stock'];
                                               $quantity=$row['quantity'];
                                               $rtype=$row['r_type']; } ?>
                                           <div class="price_table_head red_bg">
                                                <h2><?php echo $rname; ?></h2>
                                             </div>
                                             <div class="price_table_inner">
                                                <div class="cont_table_price_blog">
                                                   <p class="red_color"> MG <span class="price_no"><?php echo $stock; ?></span> Available</p>
                                                </div>
                                                <div class="cont_table_price">
                                                   <ul>
                                                      <li><a href="#">MG <?php echo $quantity; ?> needed in one production  </a></li>
                                                      <li><a href="#">MG<?php echo $quantity; ?></a></li>
                                                      <li><a href="#">participate in</a></li>
                                                      <li><a href="#">2500 lITRE</a></li>
                                                   </ul>
                                                </div>
                                             </div>
                                             
                                          </div>
                                       </div>
                                    </div>
                                    <!-- end column price -->
                                    <!-- column price --> 
                                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                                       <div class="table_price full">
                                          <div class="inner_table_price">
                                             <?php
                                             $rname=$id=$stock=$quantity=$rtype=0;
                                             $sugar=mysqli_query($con2,"SELECT * FROM `raw_mateial` WHERE r_name='tangawizi'");

 
                                              while($row=mysqli_fetch_array($sugar))
                                                {
                                               $id=$row['r_id'];
                                               $rname=$row['r_name'];
                                               $stock=$row['stock'];
                                               $quantity=$row['quantity'];
                                               $rtype=$row['r_type']; } ?>
                                           <div class="price_table_head yellow_bg">
                                                <h2><?php echo $rname; ?></h2>
                                             </div>
                                             <div class="price_table_inner">
                                                <div class="cont_table_price_blog">
                                                   <p class="yellow_color"> KG<span class="price_no"><?php echo $stock; ?></span> Available</p>
                                                </div>
                                                <div class="cont_table_price">
                                                   <ul>
                                                      <li><a href="#">KG<?php echo $quantity; ?> needed in one production  </a></li>
                                                      <li><a href="#">KG<?php echo $quantity; ?></a></li>
                                                      <li><a href="#">participate in</a></li>
                                                      <li><a href="#">2500 lITRE</a></li>
                                                   </ul>
                                                </div>
                                             </div>
                                             
                                          </div>
                                       </div>
                                    </div>
                                    <!-- end column price -->
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- end row -->
                  </div>
                     <!-- graph -->
                    
                     <!-- end graph -->
                     
                     
               </div>
               <!-- end dashboard inner -->
            </div>
         </div>
      </div>
      <!-- jQuery -->
      <script src="../js/jquery.min.js"></script>
      <script src="../js/popper.min.js"></script>
      <script src="../js/bootstrap.min.js"></script>
      <!-- wow animation -->
      <script src="../js/animate.js"></script>
      <!-- select country -->
      <script src="../js/bootstrap-select.js"></script>
      <!-- owl carousel -->
      <script src="../js/owl.carousel.js"></script> 
      <!-- chart js -->
      <script src="../js/Chart.min.js"></script>
      <script src="../js/Chart.bundle.min.js"></script>
      <script src="../js/utils.js"></script>
      <script src="../js/analyser.js"></script>
      <!-- nice scrollbar -->
      <script src="../js/perfect-scrollbar.min.js"></script>
      <script>
         var ps = new PerfectScrollbar('#sidebar');
      </script>
      <!-- custom js -->
      <script src="../js/custom.js"></script>
      <script src="../js/chart_custom_style1.js"></script>
   </body>
</html>
<?php }?>