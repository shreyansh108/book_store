<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
  <title>SIGN UP</title>
  <link href="<?php echo base_url('Assests/User_template/css/bootstrap.css');?>" rel="stylesheet" type="text/css" media="all" />
  <!--theme-style-->
  <link href="<?php echo base_url('Assests/User_template/css/style.css');?>" rel="stylesheet" type="text/css" media="all" />
  <!--//theme-style-->
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
  <!--fonts-->
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
  <!--//fonts-->
  <script src="<?php echo base_url('Assests/User_template/js/jquery.min.js'); ?>"></script>
</head>
<body>
  <!--header-->
  <?php echo include_once('user_header.php'); ?>
  <!---->
  <div class="container">
    <div class="register">
      <form>
        <div class="  register-top-grid">
          <h3>PERSONAL INFORMATION</h3>
          <div class="mation">
            <span>First Name<label>*</label></span>
            <input type="text">

            <span>Last Name<label>*</label></span>
            <input type="text">

            <span>Email Address<label>*</label></span>
            <input type="text">
          </div>
          <div class="clearfix"> </div>
          <a class="news-letter" href="#">
            <label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i> </i>Sign Up</label>
          </a>
        </div>
        <div class="  register-bottom-grid">
          <h3>LOGIN INFORMATION</h3>
          <div class="mation">
            <span>Password<label>*</label></span>
            <input type="text">
            <span>Confirm Password<label>*</label></span>
            <input type="text">
          </div>
        </div>
      </form>
      <div class="clearfix"> </div>
      <div class="register-but">
        <form>
          <input type="submit" value="submit">
          <div class="clearfix"> </div>
        </form>
      </div>
    </div>
          <!--- MENU-->
          <?php echo include_once('user_menu.php'); ?>
          <!--MENU-->
          <div class="clearfix"> </div>
        </div>



        <!-- footer-->
        <?php include_once('user_footer.php'); ?>
        <!-- footer-->
      </div>
    </body>
    </html>
