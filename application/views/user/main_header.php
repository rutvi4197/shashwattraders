<!DOCTYPE html>
<html>
<head>

<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta property="og:title" content="Vide" />
<meta name="keywords" content="Big store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="<?php echo  base_url(); ?>/assets/css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="<?php echo  base_url(); ?>/assets/css/shashwattraders.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="<?php echo  base_url(); ?>/assets/css/style.css" rel='stylesheet' type='text/css' />
<!-- js -->
   <script src="<?php echo  base_url(); ?>/assets/js/jquery-1.11.1.min.js"></script>
<!-- //js -->
 <script src="<?php echo base_url(); ?>/assets/js/bootstrap.js"></script>
<!-- //for bootstrap working -->
<script type='text/javascript' src="<?php echo base_url(); ?>/assets/js/jquery.mycart.js"></script>

<!-- start-smoth-scrolling -->
<script type="text/javascript" src="<?php echo  base_url(); ?>/assets/js/move-top.js"></script>
<script type="text/javascript" src="<?php echo  base_url(); ?>/assets/js/easing.js"></script>
<script type="text/javascript">
  jQuery(document).ready(function($) {
    $(".scroll").click(function(event){   
      event.preventDefault();
      $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
    });
  });
</script>
<!-- start-smoth-scrolling -->
<link href="<?php echo  base_url(); ?>/assets/css/font-awesome.css" rel="stylesheet"> 
<link href='<?php echo  base_url(); ?>/assets///fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href='<?php echo  base_url(); ?>/assets///fonts.googleapis.com/css?family=Noto+Sans:400,700' rel='stylesheet' type='text/css'>
<!--- start-rate---->
<script src="<?php echo  base_url(); ?>/assets/js/jstarbox.js"></script>
  <link rel="stylesheet" href="<?php echo  base_url(); ?>/assets/css/jstarbox.css" type="text/css" media="screen" charset="utf-8" />
    <script type="text/javascript">
      jQuery(function() {
      jQuery('.starbox').each(function() {
        var starbox = jQuery(this);
          starbox.starbox({
          average: starbox.attr('data-start-value'),
          changeable: starbox.hasClass('unchangeable') ? false : starbox.hasClass('clickonce') ? 'once' : true,
          ghosting: starbox.hasClass('ghosting'),
          autoUpdateAverage: starbox.hasClass('autoupdate'),
          buttons: starbox.hasClass('smooth') ? false : starbox.attr('data-button-count') || 5,
          stars: starbox.attr('data-star-count') || 5
          }).bind('starbox-value-changed', function(event, value) {
          if(starbox.hasClass('random')) {
          var val = Math.random();
          starbox.next().text(' '+val);
          return val;
          } 
        })
      });
    });
    </script>
<!---//End-rate---->

</head>
<body>
<a href="offer.html"><img src="<?php echo  base_url(); ?>/assets/images/download.png" class="img-head" alt=""></a>
<div class="header">

    <div class="container">
      
      <div class="logo">
       <h1 ><a href="index.html">Shashwat Traders<span>The Best Choice for AGgarbatti</span></a></h1>
      </div>
      <div class="head-t">
        <ul class="card">
          <li><a href="wishlist.html" ><i class="fa fa-heart" aria-hidden="true"></i>Wishlist</a></li>
          <li><a href="login.html" ><i class="fa fa-user" aria-hidden="true"></i>Login</a></li>
          <li><a href="register.html" ><i class="fa fa-arrow-right" aria-hidden="true"></i>Register</a></li>
          <li><a href="about.html" ><i class="fa fa-file-text-o" aria-hidden="true"></i>Order History</a></li>
          <li><a href="shipping.html" ><i class="fa fa-ship" aria-hidden="true"></i>Shipping</a></li>
        </ul> 
      </div>
      
      <div class="header-ri">
        <ul class="social-top">
          <li><a href="#" class="icon facebook"><i class="fa fa-facebook" aria-hidden="true"></i><span></span></a></li>
          <li><a href="#" class="icon twitter"><i class="fa fa-twitter" aria-hidden="true"></i><span></span></a></li>
          <li><a href="#" class="icon pinterest"><i class="fa fa-pinterest-p" aria-hidden="true"></i><span></span></a></li>
          <li><a href="#" class="icon dribbble"><i class="fa fa-dribbble" aria-hidden="true"></i><span></span></a></li>
        </ul> 
      </div>
 </div>
</div>
</body>
</html>