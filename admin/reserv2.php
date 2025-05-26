<?php
 session_start();
   $name=$_SESSION["Admin"];
   $username=$_SESSION["username"];
   $password=$_SESSION["password"];
   $phone=$_SESSION["phone"];
   $type=$_SESSION["type"];

if (!isset($_SESSION['Admin'])) {
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
                        <div class="col-md-6 col-lg-4">
                           <div class="full graph_head">
                                 <div class="heading1 margin_0">
                                    <h2>Raw Material</h2>
                                 </div>
                           </div>
                           <div class="table_section padding_infor_info">
                                 <div class="table-responsive-sm">
                                    <table class="table">
                                       <thead>
                                          <tr>
                                             <th>Raw Id</th>
                                             <th>Raw Name</th>
                                             <th>Raw type</th>
                                          </tr>
                                       </thead>
                                       <tbody>
                            <?php
                            include("../code/connection.php");
                              $retrive=mysqli_query($con2,"SELECT * FROM `raw_mateial`");

 
                               while($row=mysqli_fetch_array($retrive))
                                 {
                                  $id=$row['r_id'];
                               ?>
                                          <tr>
                                             <td><?php echo $id; ?></td>
                                             <td><?php echo $row['r_name']; ?></td>
                                             <td><?php echo $row['r_type']; ?></td>
                                          </tr>
                                           <?php }  ?>
                                       </tbody>
                                    </table>
                                 </div>
                              </div>
     
                        </div>
                        <div class="col-md-6 col-lg-8">
                           <div class="full socile_icons tw margin_bottom_30">
                              <div class="heading1 margin_0">
                                    <h2>Choose Raw Material Used</h2>
                                 </div
<div class="container">
  <form action="code/production_code.php" method="">
   

    <label for="lname"> Date</label>
    <input type="text" id="lname" name="lastname" value="<?php echo $d=date("d-m-y");?>">
 
    <?Php
   include("../code/connection.php");
    $retr1=mysqli_query($con2,"SELECT * FROM `raw_mateial` where p_id=1"); 
    $retr2=mysqli_query($con2,"SELECT * FROM `raw_mateial` where p_id=2"); 
    $retr3=mysqli_query($con2,"SELECT * FROM `raw_mateial` where p_id=3"); 
    $retr4=mysqli_query($con2,"SELECT * FROM `raw_mateial` where p_id=4"); 
class product_type{
  function __construct($retr){
  $d=date("d-m-y");
  ?>
     <label for="country">Product1</label>
     <select id="country" name="Product1">
        <?php
         while($row=mysqli_fetch_array($retr))
           {
                $id=$row['r_id'];?>
             <option value="<?php $row['r_name'];?>"><?php echo $row['r_name'];?></option>
            <?php }?>
            </select>  
     <?php}
  function product2($retr){ ?>
      </select>
      <label for="country">Product2</label>
      <select id="country" name="Product2">
        <?php
         while($rowa=mysqli_fetch_array($retr))
           {
                $ida=$rowa['r_id'];?>
             <option value="<?php $rowa['r_name'];?>"><?php echo $rowa['r_name'];?></option>
            <?php }?>
      </select>
     <?php }
  function product3($retr){
  $d=date("d-m-y");
  ?>
     <label for="country">Product3</label>
     <select id="country" name="Product3">
        <?php
         while($row=mysqli_fetch_array($retr))
           {
             $id=$row['r_id'];?>
             <option value="<?php $row['r_name'];?>"><?php echo $row['r_name'];?></option>
            <?php }?>
            </select>  
     <?php }
  function product4($retr){
  $d=date("d-m-y");
  ?>
     <label for="country">Product4</label>
     <select id="country" name="Product4">
        <?php
         while($row=mysqli_fetch_array($retr))
           {
             $id=$row['r_id'];?>
             <option value="<?php $row['r_name'];?>"><?php echo $row['r_name'];?></option>
            <?php }?>
            </select>  
     <?php}
}
$obj=new product_type($retr1);
$obj->product2($retr2);
$obj->product3($retr3);
$obj->product3($retr4);
?>

    <input type="submit" value="Submit">
  </form>
</div>



                           </div>
                        </div>
                        
                     </div>
                     <!-- graph -->
                    
                     <!-- end graph -->
                     
                     
                  <!-- footer -->
                  <div class="container-fluid">
                     <div class="footer">
                        <p>Copyright © 2023. All rights reserved.<br><br>
                           Distributed By:Claude & Kwizera 
                        </p>
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
</style>