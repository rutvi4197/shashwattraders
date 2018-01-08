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
    <h3 >Edit Profile</h3>
     <h4><a href="<?php echo site_url('home'); ?>">Home</a><label>/</label>Edit Profile</h4>
    <div class="clearfix"> </div>
  </div>
</div>
<!--login-->

  <div class="login">
  
    <div class="main-agileits">
        <div class="form-w3agile">
          <h3>Edit Profile</h3>
          <?php 
              if(count($user_data) ):
               foreach($user_data as $user_data):
                $name=$user_data->user_name;
                $email_id=$user_data->pk_user_email_id;
                $mobile_no=$user_data->user_mobile_no;
                $add1=$user_data->user_add1;
                $add2=$user_data->user_add2;
                $city=$user_data->user_city;


                endforeach;
                endif;
            ?> 
            
          <form action="<?php echo site_url('editprofile/edit') ?>" method="post">
             <div class="key">
              <i class="fa fa-envelope" aria-hidden="true"></i>
              <input  type="text" value="<?php echo $email_id; ?>" name="Email" readonly>
              <div class="clearfix"></div>
            </div>
            <div class="key">
              <i class="fa fa-user" aria-hidden="true"></i>
              <input  type="text" value="<?php echo $name; ?>" name="Name"  >
              <div class="clearfix"></div>
            </div>
            <div class="key">
              <i class="fa fa-mobile" aria-hidden="true"></i>
              <input  type="text" value="<?php echo $mobile_no; ?>" name="Mobileno" >
              <div class="clearfix"></div>
            </div>
               <div class="key">
              <i class="fa fa-map-marker" aria-hidden="true"></i>
              <input  type="text" value="<?php echo $add1; ?>" name="Address1" >
              <div class="clearfix"></div>
            </div>
               <div class="key">
              <i class="fa fa-map-marker" aria-hidden="true"></i>
              <input  type="text" value="<?php echo $add2; ?>" name="Address2" >
              <div class="clearfix"></div>
            </div>
               <div class="key">
              <i class="fa fa-globe" aria-hidden="true"></i>
              <input  type="text" value="<?php echo $city; ?>" name="City" >
              <div class="clearfix"></div>
            </div>
           <input type="submit" value="Edit">
          </form>
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