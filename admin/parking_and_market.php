<?php
 session_start();
   $name=$_SESSION["Admin"];
   $username=$_SESSION["username"];
   $password=$_SESSION["password"];
   $phone=$_SESSION["phone"];
   $type=$_SESSION["type"];
include("../code/connection.php");
if (!isset($_SESSION['Admin'])) { header('location:../login.php');}else{ ?>
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
                     
                     
                     <div class="row column1 social_media_section">
                        
                        <div class="col-md-6 col-lg-12">
                           <div class="full socile_icons tw margin_bottom_30">
                              <div class="heading1 margin_0">
                                    <h2>you can click in order to park and purchase</h2>
                              </div>
                             <div class="container">
                              <div class="table_section padding_infor_info">
                                 <div class="table-responsive-sm">
                                    <table class="table">
                                       <thead>
                                          <tr>
                                             <th>Id</th>
                                             <th>SUGAR</th>
                                             <th>TEA</th>
                                             <th>FOOD SPLIT</th>
                                             <th>TANGAWIZI</th>
                                             <th>DATE</th>
                                             <th>OUTPUT</th>
                                             <th>BUTTON</th>
                                          </tr>
                                       </thead>
                                       <tbody>
                            <?php 
                              $retrive=mysqli_query($con2,"SELECT * FROM `production` where parking!='done'"); 
                               while($row=mysqli_fetch_array($retrive))
                                 { $id=$row['pr_id']; ?>
                                          <tr>
                                             <td><?php echo $id; ?></td>
                                             <td><?php echo $row['sugar']; ?></td>
                                             <td><?php echo $row['tea']; ?></td>
                                       
                                             <td><?php echo $row['foodsplit']; ?></td>
                                             <td><?php echo $row['tangawizi']; ?></td>
                                              <td><?php echo $row['date']; ?></td>
                                             <td><?php echo $row['output']; ?></td>
                                             <td><a href="code/on_market_product_code.php?id=<?php echo $id ?> "><input type="submit" value="Click Here To Park" onclick="return confirm('Are You Sure To Approve')">
                                              </a> </td>
                                          </tr>
                                           <?php }  ?>
                                       </tbody>
                                    </table>
                               </div>
                            </div>

                              </div>
                           </div>
                        </div>
                        
                     </div>
                     <!-- graph -->
                    
                     <!-- end graph -->
                     
                     
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
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

.success {
  border-color: #04AA6D;
  color: green;
}

.success:hover {
  background-color: #04AA6D;
  color: white;
}
.btn {
  border-radius: 5px;
}
</style>