
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
<?php include_once('main_header.php'); ?>

        <div class="nav-top">
          <nav class="navbar navbar-default">
          
          <div class="navbar-header nav_2">
            <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            

          </div> 
          <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
            <ul class="nav navbar-nav ">
<<<<<<< HEAD
              <?php if(count($brand_name) ):
               foreach($brand_name as $brand_name):?>
              <li><a href="index.html" class="hyper "><span><?php echo $brand_name->brand_name; ?></span></a></li> 
              <?php endforeach;
                  endif;
                    
=======
              <?php if(count($brand_name) ){ 
               foreach($brand_name as $brand_name){ ?>
              <li><a href="index.php/home/brandsearch/<?php echo $brand_name->pk_brand_id?>" class="hyper "><span><?php echo $brand_name->brand_name; ?></span></a></li> 
              <?php }
                    }
>>>>>>> 23cb7300a9ccb53d1bd402ce1131f6294bf013b7
               ?>
            
            </ul>
          </div>
          </nav>
           <div class="cart" >
          
            <span class="fa fa-shopping-cart my-cart-icon"><span class="badge badge-notify my-cart-badge"></span></span>
          </div>
          <div class="clearfix"></div>
        </div>
          
        </div>      
</div>
  <!---->
<div class="video_height" data-vide-bg="<?php echo  base_url(); ?>/assets/video/agarbatti">
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

    <script>window.jQuery || document.write('<script src="<?php echo  base_url(); ?>/assets/js/vendor/jquery-1.11.1.min.js"><\/script>')</script>
    <script src="<?php echo  base_url(); ?>/assets/js/jquery.vide.min.js"></script>

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
               foreach($product_name as $product_name):?>
              
              <div class="col-md-3 m-wthree">
                <div class="col-m">               
                  <a href="#" data-toggle="modal" data-target="#myModal1" class="offer-img">
                    <img src="<?php echo  base_url()."/assets".$product_name->product_photo; ?>"
                     class="img-responsive" alt="">
                    <div class="offer"><p><span>Offer</span></p></div>
                  </a>
                  <div class="mid-1">
                    <div class="women">
                      <h6><a href="single.html"><?php echo $product_name->product_name ?></a></h6>              
                    </div>
                    <div class="mid-2">
                      <p ><?php echo $product_name->product_price ?></p>
                        
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
  <a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!-- //smooth scrolling -->
<!-- for bootstrap working -->
   
                   <div class="clearfix"> </div>
              </div>
            </div>
          </div>
        </div>

</body>
</html>