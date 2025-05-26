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
                     
                     
                     <div class="row column1 social_media_section">
                        <div class="col-md-6 col-lg-5">
                           
                           <div class="table_section padding_infor_info">
                                 <div class="table-responsive-sm">
                                   
                                    
                                       
                                         
                                          
                            <?php
                               
                              $retrive1=mysqli_query($con2,"SELECT * FROM `production` WHERE received='' and production_user='$usernameu' and output='' ORDER BY pr_id DESC");

 
                               while($row=mysqli_fetch_array($retrive1))
                                 {
                                  $idd=$row['pr_id'];
                               ?>
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
                        <div class="col-md-6 col-lg-6">
                           <div class="full socile_icons tw margin_bottom_30">
                              <div class="heading1 margin_0">
                                    <h2>StockOut Raw Material Of One Proccess</h2>
                              </div>
<div class="container">
  <form action="code/production_code.php" method="POST">
   

    <label for="lname"> Date</label>
    <input type="text" id="lname" name="date" value="<?php echo $d=date('d-m-y');?>">
 
    <?Php
   include("../code/connection.php");
    $retr=mysqli_query($con2,"SELECT * FROM `raw_mateial`"); 
    $retruser=mysqli_query($con2,"SELECT Username FROM `users` where responsibility='production'"); 
    
class product_type{
  function product4($retr){
  $d=date("d-m-yy");

         while($row=mysqli_fetch_array($retr))
           {
             $id=$row['r_id'];?>
          
             <label for="lname"><?php echo $row['r_name'];?></label>
               <input type="text" id="lname" name="<?php echo $row['r_name'];?>" value="<?php echo $row['r_name'];?>" readonly>
 
     <?php }
  }
  function product5($retruser){
  $d=date("d-m-y");
         ?>
          <label for="lname">Select_Production User</label>
             <select name="production_name" required>
               <option>no choice</option>
         <?php
         while($rowa=mysqli_fetch_array($retruser))
           {
             //$idd=$rowa['Id'];?>
          
                <option><?php echo $rowa['Username'];?></option>
            
            <?php }
            ?>
           </select>
            <?php
  }
}
$obj=new product_type();
$obj->product4($retr);
$obj->product5($retruser);
?>
    <label for="lname"> Users</label>
    <input type="text" id="user" name="users" value="<?php echo $usernameu;?>">
    <input type="submit" value="StockOut">
  </form>
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