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

if($this->session->flashdata('success'))
{
  

echo '<script langauge="javascript">;
                alert("Something went Wrong ..Please Try Again!!");
               
                </script>';

}


?>

  <br>

    <script>window.jQuery || document.write('<script src="<?php echo  base_url(); ?>/application/assets/js/vendor/jquery-1.11.1.min.js"><\/script>')</script>
    <script src="<?php echo  base_url(); ?>/application/assets/js/jquery.vide.min.js"></script>

    <div class="container-fluid">
      <div class="row">
        <div class="col-md-8 col-sm-8">
          <center>
          <div class="heading">
                <h1>Confirm Purchase</h1>
          </div>
          <br>
            <form>
              <div class="col-md-8 col-sm-8">
              <label>Name</label> 
              <input type="text" class="form-control" name="name">
              </div>

              <div class="col-md-4 col-sm-4">
              <label>CVV</label>          
              <input type="text" class="form-control" name="cvv">
              </div>

              <div class="col-md-12 col-sm-12">
                <br>
              </div>

              <div class="col-md-12 col-sm-12">
              <label>Card Number</label> 
              <input type="text" class="form-control" name="cardno">
              </div>

              <div class="col-md-5 col-sm-5 form-group">
              <br>
              <label>Expiration Date</label>  
              <br>
              <select class ="form-control" name="month" style="height: 35px; width:50%;float: left">
                            <option value="01">January</option>
                            <option value="02">February </option>
                            <option value="03">March</option>
                            <option value="04">April</option>
                            <option value="05">May</option>
                            <option value="06">June</option>
                            <option value="07">July</option>
                            <option value="08">August</option>
                            <option value="09">September</option>
                            <option value="10">October</option>
                            <option value="11">November</option>
                            <option value="12">December</option>
                        </select>
                        <div style="margin-left: 50px">
                        <select  class ="form-control" name="month" style="height: 35px; width:50%;">
                            <option value="2018">2018</option>
                            <option value="2019">2019</option>
                            <option value="2020">2020</option>
                            <option value="2021">2021</option>
                            <option value="2022">2022</option>
                        </select>
                      </div>
              </div>

              <div class="col-md-2 col-sm-2">
              
              </div>

              <div class="col-md-5 col-sm-5">
                <br>
                <img src="application/assets/images/mastercard.jpg">
                <img src="application/assets/images/visa.jpg">
                <img src="application/assets/images/amex.jpg">
              </div>

              <div class="col-md-12 col-sm-12">
              <div class="form-group">
              
        
                <a href="<?php echo site_url('cartview/placeorder'); ?>">
                <button type="button" class="btn btn-info" name="confirm" >Confirm Payment</button>
                </a>

              </div>
              </div>
            </form>
          </center>
        </div>

        <div class="col-md-4 col-sm-4">
          <center>
          <div class="heading">
                <h1>Payment Summary</h1>
          </div>
          <br>
          <div class="col-md-12 col-sm-12">

             <?php $tot=0; ?>

            <?php if(count($buy_now) ):
               foreach($buy_now as $buy_now):?>

                <?php $tot=$tot+$buy_now->product_price ?>

             <?php endforeach;
                  endif; ?>

                  <?php $amt=$tot+$tot; ?>
            <h3>Amount <?php echo '<i style="margin-left:70px;">INR '.$amt.'</i>'; ?></h3><br>
            <h3>- Discount <?php echo '<i style="margin-left:70px;">INR '.$tot.'</i>'; ?></h3><br>
            <h3>Total Amount <?php echo '<i style="margin-left:70px;">INR '.$tot.'</i>'; ?></h3><br>
  
              
              
          </div>
          </center>
        </div>

      </div>
    </div>
<!--content-->
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