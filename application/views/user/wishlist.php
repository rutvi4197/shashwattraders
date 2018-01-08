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
  echo redirect('login');
 
}
?>

        
   <div class="banner-top">
  <div class="container">
    <h3 >Wishlist</h3>
     <h4><a href="<?php echo site_url('home'); ?>">Home</a><label>/</label>Wishlist</h4>
    <div class="clearfix"> </div>
  </div>
</div>
<!--wishlist-->
<table class="table" border="1">
          <tr>
            <td></td>
          </tr>
          <tr>
            <td>Weight</td>
            <td> </td>
          </tr>
          <tr>
            <td>Burning Time </td>
            <td> </td>
          </tr>
          <tr>
            <td>Fragrance </td>
            <td> 
                    
               </td>
          </tr>

          <tr>
            <td>Bathi Type </td>
            <td> </td>
          </tr>
        </table>
 

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