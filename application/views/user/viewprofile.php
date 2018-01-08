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
?>

         
   <div class="banner-top">
  <div class="container">
    <h3 >View Profile</h3>
     <h4><a href="<?php echo site_url('home'); ?>">Home</a><label>/</label>View Profile</h4>
    <div class="clearfix"> </div>
  </div>
</div>
<!--login-->

  <div class="login">
  
    <div class="main-agileits">
        <div class="form-w3agile">
          <h3>My Profile</h3>
          
            <?php 
              if(count($user_data) ):
               foreach($user_data as $user_data):
                $name=$user_data->user_name;
                $email_id=$user_data->pk_user_email_id;

                endforeach;
                endif;
            ?> 
            <div class="key">
              <i class="fa fa-envelope" aria-hidden="true"></i>
              <input  type="text" value="<?php echo $email_id; ?>" name="Email" readonly>
              <div class="clearfix"></div>
            </div>
            <div class="key">
              <i class="fa fa-user" aria-hidden="true"></i>
              <input  type="text" value="Name" name="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" >
              <div class="clearfix"></div>
            </div>
               <div class="key">
              <i class="fa fa-map-marker" aria-hidden="true"></i>
              <input  type="text" value="Address1" name="Address1" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" >
              <div class="clearfix"></div>
            </div>
               <div class="key">
              <i class="fa fa-map-marker" aria-hidden="true"></i>
              <input  type="text" value="Address2" name="Address2" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" >
              <div class="clearfix"></div>
            </div>
               <div class="key">
              <i class="fa fa-globe" aria-hidden="true"></i>
              <input  type="text" value="City" name="City" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" >
              <div class="clearfix"></div>
            </div>
              
            
          
        </div>
        <div class="forg">
          <a href="register.html" class="forg-right">Edit Profile</a>
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