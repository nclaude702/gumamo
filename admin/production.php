<?php
 session_start();
   $name=$_SESSION["Admin"];
   $username=$_SESSION["username"];
   //$username=$_SESSION["username"];
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
                
                  <div class="table_section padding_infor_info">
                                 <div class="table-responsive-sm">              
                            <?php $retrive1=mysqli_query($con2,"SELECT * FROM `production` where output='' ORDER BY pr_id DESC"); 
                               while($row=mysqli_fetch_array($retrive1)) {
                                  $idd=$row['pr_id']; ?>
                                <table class="table"border="5g" style="border-radius: 10px;" > 
                                    
                                    <thead >
                                       <tr>
                                             
                                             <th colspan="2"><button class="btn success">In Process Production Number <?php echo $row['pr_id']; ?></button></th>
                                             
                                       </tr>
                                       <tr>
                                             
                                             <th colspan="2" ><button class="btn success"> <?php echo "For  ",$row['production_user']; ?></button></th>
                                             
                                       </tr>
                                       <tr>
                                             
                                             <th>Raw Name</th>
                                             <th>Qty</th>
                                          </tr>
                                       </thead>
                                       <tbody>
                                          <tr> <td>Sugar</td>
                                             <td><?php echo $row['sugar']; ?></td>
                                          </tr>
                                          <tr><td>tea</td>
                                          <td><?php echo $row['tea']; ?></td>
                                          </tr>
                                          <tr><td>food split</td>
                                             <td><?php echo $row['foodsplit']; ?></td>
                                          </tr>
                                          <tr><td>tangawizi</td>
                                             <td><?php echo $row['tangawizi']; ?></td>
                                          </tr>
                                          
                                            <td><input type="text" width="10%" value="<?php echo $row['pr_id']; ?>" name="id" readonly> </td>
                                             <td>
                                             <a href="code/approve_production.php?id=<?php echo $idd ?> "><input type="submit" value="Click to approve" onclick="return confirm('Are You Sure To Approve')">
                                              </a> 
                                           </td>
                                          </tr>
                                        </tbody>
                                    </table>
                                    <?php }  ?>
                                            
                                      
                                 </div>
                              </div>
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