<?php
session_start();
 $nameu=$_SESSION["User"];
   $usernameu=$_SESSION["usernameu"];
   $passwordu=$_SESSION["passwordu"];
   $phoneu=$_SESSION["phoneu"];
   $typeu=$_SESSION["typeu"];
    $responsibility=$_SESSION["responsibility"];
   include("../code/connection.php");
if (!isset($_SESSION['User'])) {
  header('location:../login.php');
}
else
{
?>
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
                        <!-- tab style 1 -->
                        <div class="col-md-6">
                           
                                

                                      <img src="../image/drink/8.jpg" alt="#" style="width: 430px;height: 600px; border-radius: 10px;" />
                              
                              
                        </div>
                    
                     
                     <div class="col-md-6">
                           <div class="white_shd full margin_bottom_30">
                              
                              <div class="full inner_elements">
                                 <div class="row">
                                    <div class="col-md-12">
                                       <div class="tab_style2">
                                          <div class="tabbar padding_infor_info">
                                             <nav>
                                                <div class="nav nav-tabs" id="nav-tab1" role="tablist">
                                                   <a class="nav-item nav-link active" id="nav-home-tab2" data-toggle="tab" href="#nav-home_s2" role="tab" aria-controls="nav-home_s2" aria-selected="true">Profile</a>
                                                   <a class="nav-item nav-link" id="nav-profile-tab2" data-toggle="tab" href="#nav-profile_s2" role="tab" aria-controls="nav-profile_s2" aria-selected="false">Update Profile</a>
                                                   <a class="nav-item nav-link" id="nav-contact-tab2" data-toggle="tab" href="#nav-contact_s2" role="tab" aria-controls="nav-contacts_s2" aria-selected="false">appove client order</a>
                                                </div>
                                             </nav>
                                             <div class="tab-content" id="nav-tabContent_2">
                                                <div class="tab-pane fade show active" id="nav-home_s2" role="tabpanel" aria-labelledby="nav-home-tab">
                                                   <p>
                                    <div class="full price_table padding_infor_info">
                                    <div class="row">
                                    <!-- user profile section --> 
                                    <!-- profile image -->
                                    <div class="col-lg-12">
                                       <div class="full dis_flex center_text">
                                          
                                          <div class="profile_contant">
                                             <div class="profile_img"><img width="180" class="rounded-circle" src="../image/profile/<?php echo $p_profile;?>" alt="#" /></div>
                                             <div class="contact_inner">
                                                <h3><strong>NAME: </strong><?php echo $p_name; ?></h3>
                                                <p><strong>PONE N: </strong><?php echo $p_phone; ?></p>
                                                <ul class="list-unstyled">
                                                   <li><i class="fa fa-envelope-o"></i> : <?php echo $p_mail; ?></li>
                                                   <li><i class="fa fa-phone"></i> : <?php echo $p_phone; ?></li>
                                                </ul>
                                                <p><strong>Responsibility: </strong><?php echo $p_responsibility; ?></p>
                                             </div>
                                 <form enctype="multipart/form-data" method="POST" action="code/update_profile_picture.php">
                                 <div class="list_cont">
                                    <br>
                                    
                                 </div>
                                 <div class="col-md-6 col-lg-3" >
                                    <p>Update_Profile_Picture</p>
                                    
                                  
                                       ID:<input type="text" name="id" value="<?php echo $p_id; ?>" required style="width: 30px; height: 20px; border-color: green; border-radius: 10px;" readonly>
                                       
                                       Profile_picture:<input type="file" name="myfile" style="width: 200px; height: 35px; border-color: green; border-radius: 10px;" >
                                       
                                      
                                    
                                 </div>
                                 <div class="read_more">
                                    <div class="center">
                                       <button class="main_bt read_bt" name="profile_update">Update Profile Picture</button></div>
                                 </div>
                                 </form>
                                          </div>
                                       </div>
                                       <!-- profile contant section -->
                                     
                                       <!-- end user profile section -->
                                    </div>
                                 </div>
                              </div>
                                                   </p>
                                       </div>
                                 <div class="tab-pane fade" id="nav-profile_s2" role="tabpanel" aria-labelledby="nav-profile-tab">
                                                   
                                 <form method="POST" action="code/update_profile.php">
                                 <div class="list_cont">
                                    <p>Please be Carefully when you make change</p>
                                 </div>
                                 <div class="col-md-6 col-lg-3" >
                                    
                                  
                                       ID:<input type="text" name="id" value="<?php echo $p_id; ?>" required style="width: 350px; height: 35px; border-color: green; border-radius: 10px;" readonly>
                                       Names:<input type="text" name="name" value="<?php echo $p_name; ?>" required style="width: 350px; height: 35px; border-color: green; border-radius: 10px;" >
                                       Username:<input type="text" name="username" value="<?php echo $p_username; ?>" required style="width: 350px; height: 35px; border-color: green; border-radius: 10px; ">
                                       Password:<input type="password" name="password" value="<?php echo $p_password; ?>" required style="width: 350px; height: 35px; border-color: green; border-radius: 10px; ">
                                       Phone:<input type="text" name="phone" value="<?php echo $p_phone; ?>" required style="width: 350px; height: 35px; border-color: green; border-radius: 10px;">
                                       Type:<select name="type" style="width: 350px; height: 35px; border-color: green; border-radius: 10px;">
                                          <option value="<?php echo $p_type; ?>"></option>
                                          <option>User</option>
                                          <option>Admin</option>
                                       </select>

                                       E_mail:<input type="text" name="mail" value="<?php echo $p_mail; ?>" required style="width: 350px; height: 35px; border-color: green; border-radius: 10px;">

                                       Resiponsibility:
                                       <select name="resiponsible" style="width: 350px; height: 35px; border-color: green; border-radius: 10px;">
                                          <option value="<?php echo $p_responsibility; ?>"></option>
                                          <option>Production</option>
                                          <option>Seller</option>
                                          <option>All</option>
                                       </select>

                                      
                                    
                                 </div>
                                 <div class="read_more">
                                    <div class="center">
                                       <button class="main_bt read_bt">Update</button></div>
                                 </div>
                                 </form>
                                                </div>
                                                <div class="tab-pane fade" id="nav-contact_s2" role="tabpanel" aria-labelledby="nav-contact-tab">
                                    <form method="POST" action="code/add_user.php">
                                 <div class="list_cont">
                                    <p>Please be Carefully when you make change</p>
                                 </div>
                                 <div class="col-md-6 col-lg-3" >
                                    
                                  
                                       Names:<input type="text" name="name" required style="width: 350px; height: 35px; border-color: green; border-radius: 10px;" >
                                       Username:<input type="text" name="username" required style="width: 350px; height: 35px; border-color: green; border-radius: 10px; ">
                                       Password:<input type="password" name="password"  required style="width: 350px; height: 35px; border-color: green; border-radius: 10px; ">
                                       Phone:<input type="text" name="phone" required style="width: 350px; height: 35px; border-color: green; border-radius: 10px;" required>
                                       Type:<select name="type" style="width: 350px; height: 35px; border-color: green; border-radius: 10px;" required>
                                          <option value="<?php echo $p_type; ?>"></option>
                                          <option>User</option>
                                          <option>Admin</option>
                                       </select>

                                       E_mail:<input type="text" name="mail" required style="width: 350px; height: 35px; border-color: green; border-radius: 10px;">

                                       Resiponsibility:
                                       <select name="resiponsible" style="width: 350px; height: 35px; border-color: green; border-radius: 10px;" required>
                                          <option value="<?php echo $p_responsibility; ?>"></option>
                                          <option>Production</option>
                                          <option>Seller</option>
                                          <option>All</option>
                                       </select>

                                      
                                    
                                 </div>
                                 <div class="read_more">
                                    <div class="center">
                                       <button class="main_bt read_bt">Add User</button></div>
                                 </div>
                                 </form>
                                                   </p>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                    
               </div>
                        
                  <!-- footer -->
                  
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