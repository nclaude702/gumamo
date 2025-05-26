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
                  <div class="container-fluid">
                     
                     
                     <div class="row column1 social_media_section">
                        <div class="col-md-6 col-lg-5">
                           
                           
                           <img src="../image/drink/6.jpg" alt="#" style="width: 430px;height: 500px; border-radius: 10px;" />
                                       
                                         
                        </div>  
                        <div class="col-md-6 col-lg-6">
                           <div class="full socile_icons tw margin_bottom_30">
                              <div class="heading1 margin_0">
                                    <h2>View Raw Material Used in Production Process</h2>
                              </div>
<div class="container">
  <form action="code/production_code.php" method="POST">
   

    <label for="lname"> Date</label>
    <input type="text" id="lname" name="date" value="<?php echo $d=date('d-m-y');?>">
 
    <?Php
   include("../code/connection.php");
    $retr=mysqli_query($con2,"SELECT * FROM `raw_mateial`"); 
    $retruser=mysqli_query($con2,"SELECT Username FROM `users` where responsibility='Production'");
    
     class product_typee{
       function product4($retr){
         $d=date("d-m-y"); 
         while($row=mysqli_fetch_array($retr))
           { $id=$row['r_id'];?>
          
             <label for="lname"><?php echo $row['r_name'];?></label>
               <input type="text" id="lname" name="<?php echo $row['r_name'];?>" value="<?php echo $row['r_name'];?>" readonly> <?php }
        }
        function product5($retruser){
            $d=date("d-m-y"); ?>
          <label for="lname">Select_Production User</label>
             <select name="production_name">
               <option></option>
         <?php while($rowa=mysqli_fetch_array($retruser))
           { ?> 
                <option><?php echo $rowa['Username'];?></option>
            
            <?php } ?>
           </select>
            <?php
         }
     }
     $obj=new product_typee();
     $obj->product4($retr);
     
     $obj->product5($retruser); 
     ?>
    <label for="lname"> Users</label>
    <input type="text" id="user" name="users" value="<?php echo $username;?>">
    <input type="submit" value="Submit">
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