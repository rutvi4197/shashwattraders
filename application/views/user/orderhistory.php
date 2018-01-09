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
      <h3>Your Order History</h3>
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
                  
                </tr>

                <?php $tot=0; ?>
              <?php if(count($order_history) ):
              foreach($order_history as $order_history):?>
              
  
                <tr>
                  <td><img height=70 width=100 src="<?php echo  base_url().'/application/assets/'.$order_history->product_photo ?>"></td>
                  <td><?php echo $order_history->product_name ?></td>
                  <td>Rs.<?php echo $order_history->product_price ?></td>
                 
                  <td><?php echo $order_history->qty ?></td>
                  <?php $sum=$order_history->product_price*$order_history->qty?>
                  <td>Rs.<?php echo $sum ?></td>
                   <?php $tot=$tot+$sum?>
                  </tr>
                 <?php endforeach;
                  endif;
                    
               ?>
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