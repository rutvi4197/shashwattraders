<!DOCTYPE html>
<html>
<head>
  <title>Shashwat Traders </title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta property="og:title" content="Vide" />
<meta name="keywords" content="Big store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
</head>
<body>

  <!-- header -->

<?php 

if($this->session->userdata('email_id'))
{
include_once('header.php'); 
}
else
{
  include_once('main_header.php');
}


if($this->session->flashdata('loginerror'))
{
  echo '<script langauge="javascript">;
                alert("Invalid Email/Password..Please try again!!");
               
                </script>';
}
?>

        
   <div class="banner-top">
  <div class="container">
    <h3 >Login</h3>
     <h4><a href="<?php echo site_url('home'); ?>">Home</a><label>/</label>Login</h4>
    <div class="clearfix"> </div>
  </div>
</div>
<!--login-->

  <div class="login">
  
    <div class="main-agileits">
        <div class="form-w3agile">
          <h3>Login</h3>
          <form action="<?php echo site_url('login/userlogin') ?>" method="post">
            <div class="key">
              <i class="fa fa-envelope" aria-hidden="true"></i>
              <input  type="text" value="Email" name="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required>
              <div class="clearfix"></div>
            </div>
            <div class="key">
              <i class="fa fa-lock" aria-hidden="true"></i>
              <input  type="password" value="Password" name="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required>
              <div class="clearfix"></div>
            </div>
            <input type="submit" value="Login">
          </form>
        </div>
        <div class="forg">
          <a href="#" class="forg-left">Forgot Password</a>
          <a href="<?php echo site_url('register'); ?>" class="forg-right">Register</a>
        <div class="clearfix"></div>
        </div>
      </div>
    </div>

<!--footer-->
<?php include_once('footer.php'); ?>
<!-- smooth scrolling -->
  <script type="text/javascript">
    $(document).ready(function() {
    /*
      var defaults = {
      containerID: 'toTop', // fading element id
      containerHoverID: 'toTopHover', // fading element hover id
      scrollSpeed: 1200,
      easingType: 'linear' 
      };
    */                
    $().UItoTop({ easingType: 'easeOutQuart' });
    });
  </script>
 

                   <div class="clearfix"> </div>
              </div>
            </div>
          </div>
        </div>

</body>
</html>