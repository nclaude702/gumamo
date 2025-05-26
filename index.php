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
                     <div class="row column_title">
                        <div class="col-md-12">
                           <div class="page_title">
                              <h2>Dashboard</h2>
                           </div>
                        </div>
                     </div>
                     <div class="row column1">
                        <div class="col-md-6 col-lg-3">
                           <img src="image/drink/6.jpg" alt="#" style="" />
                        </div>
                        <div class="col-md-6 col-lg-3">
                          <img src="image/drink/13.jpg" alt="#" style="" /> 
                        </div>
                        <div class="col-md-6 col-lg-3">
                           
                           <img src="image/drink/3.jpg" alt="#" style="" />
                        </div>
                        <div class="col-md-6 col-lg-3">
                           <img src="image/drink/8.jpg" alt="#" />
                        </div>
                     </div>
                     <div class="row column1 social_media_section">
                        <div class="col-md-6 col-lg-3">
                           <img src="image/drink/5.jpg" alt="#" />
                        </div>
                        <div class="col-md-6 col-lg-3">
                           <img src="image/drink/10.jpg" alt="#" />
                        </div>
                        <div class="col-md-6 col-lg-3">
                           <img src="image/drink/12.jpg" alt="#" />
                        </div>
                        <div class="col-md-6 col-lg-3">
                           <img src="image/drink/11.jpg" alt="#" />
                        </div>
                     </div>
                     <!-- graph -->
 
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