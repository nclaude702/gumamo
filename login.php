<!DOCTYPE html>
<html lang="en">
   <head>
      <?php include("head.php");?>
   </head>
   <body class="inner_page login">
      <div class="full_container">
         <div class="container">
            <div class="center verticle_center full_height">
               <div class="login_section">
                  <div class="logo_login">
                     
                     <img width="100%" height="110%" src="image/logo/logo_black.png" alt="#" />
                  </div>
                  <a href="index.php"><button class="main_bt" name="login">Back Home</button> </a>
                  <a href="login.php"><button class="main_bt" name="login">Admin Login</button> </a>
                  <a href="login.php"><button class="main_bt" name="login">User Login</button> </a>
                  <div class="login_form">
                     <form action="admin/code/login_code.php" method="POST">
                        <fieldset>
                           <div class="field">
                              <label class="label_field">Username</label>
                              <input type="text" name="username" placeholder="Username" />
                           </div>
                           <div class="field">
                              <label class="label_field">Password</label>
                              <input type="password" name="password" placeholder="Password" />
                           </div>
                           
                           <div class="field margin_0">
                              <label class="label_field hidden">hidden label</label>
                              
                              <button class="main_bt" name="login">Log In</button>
                           </div>
                           
                        </fieldset>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <?php include("footerjs.php");?>
     
   </body>
</html>