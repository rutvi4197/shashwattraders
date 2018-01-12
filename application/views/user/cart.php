<!DOCTYPE html>
<html>
<head>
  <title>Shashwat Traders </title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta property="og:title" content="Vide" />
<meta name="keywords" content="Big store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />

<style type="text/css">

tr:nth-child(odd){
  background-color: lightgray;
}

tbody{
  font-size: 160% !important;
}

</style>
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



    <script>window.jQuery || document.write('<script src="<?php echo  base_url(); ?>/application/assets/js/vendor/jquery-1.11.1.min.js"><\/script>')</script>
    <script src="<?php echo  base_url(); ?>/application/assets/js/jquery.vide.min.js"></script>

<!--content-->
<div class="content-top ">
  <div class="container ">
    <div class="spec ">
      <h3>Your Cart</h3>
      <div class="ser-t">
        <b></b>
        <span><i></i></span>
        <b class="line"></b>
      </div>
    </div>
      <div class="tab-head ">
       
        <div class=" tab-content tab-content-t ">
          <div class="tab-pane active text-style" id="tab1">
            <div class=" con-w3l">
            <!-- loop -->
              <table class="table">

                <tr>
                  <th> Image </th>
                  <th> Product Description </th>
                  <th> Price </th>
                  <th> Quantity </th>
                  <th> Total </th>
                  <th> Delete </th>
                </tr>

                <?php $tot=0; ?>
              <?php if(count($cart_view) ):
              foreach($cart_view as $cart_view):?>
              
  
                <tr>
                  <td><img height=70 width=100 src="<?php echo  base_url().'/application/assets/'.$cart_view->product_photo ?>"></td>
                  <td><?php echo $cart_view->product_name ?></td>
                  <td>Rs.<?php echo $cart_view->product_price ?></td>
                 
                  <td><input type="number" value="<?php echo $cart_view->qty ?>"></td>
                  <?php $sum=$cart_view->product_price*$cart_view->qty?>
                  <td>Rs.<?php echo $sum ?></td>
                   <?php $tot=$tot+$sum?>
                  <td><a href="<?php echo site_url('cartview/deleteorder/'.$cart_view->pk_product_id); ?>">
                    <button class="btn btn-danger">Delete</button></a>
                  </td>
                </tr>
                 <?php endforeach;
                  endif;
                    
               ?>
               <tr>

                <td colspan="6" style="text-align: right;" >Total Amount is <b>Rs.<?php echo $tot?></b></td>
               
               
               </tr>

              
                <tr>
                    <td colspan="6" style="text-align: right;">
                      <a href="<?php echo site_url('cartview/buynow/'); ?>">
                      
                    <button class="btn btn-primary">Check Out</button></a>
                    </td>
                </tr>
              
               

              </table>

              
 
             </div>
          </div>
        </div>

<!--content-->
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