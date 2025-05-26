<?php
$p_name=0;
$p_username=0;
$p_password=0;
$p_mail=0;
$p_phone=0;
$p_id=0;
$p_profile=0;
$p_type=0;
$p_responsibility=0;

$profile_retr=mysqli_query($con2,"SELECT * FROM `users` WHERE username='$usernameu' && type='$typeu'");
                               while($row=mysqli_fetch_array($profile_retr))
                                 {
                                  $p_name=$row['Name'];
                                  $p_username=$row['Username'];
                                  $p_password=$row['Password'];
                                  $p_mail=$row['e_mail'];
                                  $p_phone=$row['Phone'];
                                 $p_profile=$row['profile'];
                                  $p_type=$row['Type'];
                                  $p_responsibility=$row['responsibility'];
                                  $p_id=$row['Id'];
                                }
?>
<div class="sidebar_blog_1">
                  <div class="sidebar-header">
                     <div class="logo_section">
                        <a href="index.html"><img class="logo_icon img-responsive" src="../image/layout_img/user_im.jpg" alt="#" /></a>
                     </div>
                  </div>
                  <div class="sidebar_user_info">
                     <div class="icon_setting"></div>
                     <div class="user_profle_side">
                        <div class="user_img"><img class="img-responsive"src="../image/profile/<?php echo $p_profile;?>"  /></div>
                        <div class="user_info">
                           <h6><?php echo $nameu; ?></h6>
                           <p><span class="online_animation"></span> Online</p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="sidebar_blog_2">
                  <h4>Gumamo</h4>
                  <ul class="list-unstyled components">
                     
                     <li><a href="index.php"><i class="fa fa-dashboard yellow_color"></i> <span>Dashboard</span></a></li>
                     
                     <li><a href="raw_material.php"><i class="fa fa-briefcase blue1_color"></i> <span>Raw material</span></a></li>
                     <li><a href="production.php"><i class="fa fa-table purple_color2"></i> <span>Production</span></a></li>
                     <li><a href="parking_and_market.php"><i class="fa-newspaper-o purple_color"></i> <span>Pachaging</span></a></li>
                    
                   
                     <li><a href="profile.php"><i class="fa fa-users green_color"></i> <span>Client management</span></a></li>
                  </ul>
               </div>