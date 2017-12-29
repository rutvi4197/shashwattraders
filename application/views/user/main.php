.<!DOCTYPE html>
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

<?php include_once('main_header.php'); ?>

        
          <!--video-->
       

<div class="video_height" data-vide-bg="<?php echo  base_url(); ?>/application/assets/video/agarbatti">
    <div class="container">
    <div class="banner-info">
     

      <div class="search-form">
        <form action="#" method="post">
          <input class="searchbox" type="text" placeholder="Search..." name="Search...">
          <input type="submit" value=" " >
        </form>
      </div>    
    </div>  
    </div>
</div>
<!-- video complete -->


    <script>window.jQuery || document.write('<script src="<?php echo  base_url(); ?>/application/assets/js/vendor/jquery-1.11.1.min.js"><\/script>')</script>
    <script src="<?php echo  base_url(); ?>/application/assets/js/jquery.vide.min.js"></script>

<!--content-->
<div class="content-top ">
  <div class="container ">
    <div class="spec ">
      <h3>Our Products</h3>
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
            <?php if(count($product_name) ):


               foreach($product_name as $product_name):
                $name=$product_name->product_name;
              $len=strlen($name);
                

                if($len>=15)
                {
                  $sortcontent=substr($name,0,15).' ...';
                }
                else
                {
                  $sortcontent=substr($name,0,15);
                }
              ?>               
               
              
              <div class="col-md-3 m-wthree">
                <div class="col-m">               
                  <a href="#" data-toggle="modal" data-target="#myModal1" class="offer-img">
                    <img class="img-responsive Images_main" src="<?php echo  base_url().'/application/assets/'.$product_name->product_photo; ?>"
                      alt="">
                   
                  </a>
                  <div class="mid-1">
                    <div class="women">
<<<<<<< HEAD
                      <h6><a href="<?php echo site_url('singlepage/productdetail/'.$product_name->pk_product_id); ?>"><?php echo $product_name->product_name ?></a></h6>              
=======
                      <h6><a href="singlepage/productdetail/<?php echo $product_name->pk_product_id; ?> " 
                      class="productname_main"><?php echo $sortcontent ?></a></h6>              
>>>>>>> 4378337721d4a3ffdbd323f14e6a82422b4995be
                    </div>
                    <div class="mid-2">
                      <p >Rs.<?php echo $product_name->product_price ?></p>
                        
                      <div class="clearfix"></div>
                    </div>
                    <div class="add">
                       <button class="btn btn-danger my-cart-btn my-cart-b " data-id="1" data-name="Moong" data-summary="summary 1" data-price="1.50" data-quantity="1" data-image="images/of.png">Add to Cart</button>
                    </div>
                    
                  </div>
                </div>
              </div>
              
               <?php endforeach;
                  endif;
                    
               ?>

              <!-- loop -->
              
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