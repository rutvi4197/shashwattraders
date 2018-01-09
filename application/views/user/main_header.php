

<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta property="og:title" content="Vide" />
<meta name="keywords" content="Big store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="<?php echo  base_url(); ?>/application/assets/css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="<?php echo  base_url(); ?>/application/assets/css/shashwattraders.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="<?php echo  base_url(); ?>/application/assets/css/style.css" rel='stylesheet' type='text/css' />
<!-- js -->
   <script src="<?php echo  base_url(); ?>/application/assets/js/jquery-1.11.1.min.js"></script>
<!-- //js -->
 <script src="<?php echo base_url(); ?>/application/assets/js/bootstrap.js"></script>
<!-- //for bootstrap working -->
<script type='text/javascript' src="<?php echo base_url(); ?>/application/assets/js/jquery.mycart.js"></script>

<!-- start-smoth-scrolling -->
<script type="text/javascript" src="<?php echo  base_url(); ?>/application/assets/js/move-top.js"></script>
<script type="text/javascript" src="<?php echo  base_url(); ?>/application/assets/js/easing.js"></script>
<script type="text/javascript">
  jQuery(document).ready(function($) {
    $(".scroll").click(function(event){   
      event.preventDefault();
      $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
    });
  });
</script>
<!-- start-smoth-scrolling -->
<link href="<?php echo  base_url(); ?>/application/assets/css/font-awesome.css" rel="stylesheet"> 
<link href='<?php echo  base_url(); ?>/application/assets///fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href='<?php echo  base_url(); ?>/application/assets///fonts.googleapis.com/css?family=Noto+Sans:400,700' rel='stylesheet' type='text/css'>
<!--- start-rate---->
<script src="<?php echo  base_url(); ?>/application/assets/js/jstarbox.js"></script>
  <link rel="stylesheet" href="<?php echo  base_url(); ?>/application/assets/css/jstarbox.css" type="text/css" media="screen" charset="utf-8" />
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


<a href="offer.html"><img src="<?php echo  base_url(); ?>/application/assets/images/download.png" class="img-head" alt=""></a>
<div class="header">

    <div class="container">
      
      <div class="logo">
       <h1 ><a href="index.html">Shashwat Traders<span>The Best Choice for Aggarbatti</span></a></h1>
      </div>
      <div class="head-t">
        <ul class="card">
          <li><a href="<?php echo site_url('wishlist') ?>" ><i class="fa fa-heart" aria-hidden="true"></i>Wishlist</a></li>
          <li><a href="<?php echo site_url('login'); ?>" ><i class="fa fa-user" aria-hidden="true"></i>Login</a></li>
          <li><a href="<?php echo site_url('register'); ?>" ><i class="fa fa-arrow-right" aria-hidden="true"></i>Register</a></li>
          <li><a href="<?php echo site_url('orderhistory'); ?>" ><i class="fa fa-file-text-o" aria-hidden="true"></i>Order History</a></li>
            <li><a href="<?php echo site_url('cartview'); ?>" ><i class="fa fa-ship" aria-hidden="true"></i>View Cart</a></li>
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
<!-- category -->
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
              <li class=" active"><a href="<?php echo site_url('home'); ?>" class="hyper "><span>Home</span></a></li>  
                
              <li class="dropdown ">
                <a href="#" class="dropdown-toggle  hyper" data-toggle="dropdown" ><span>Brand<b class="caret"></b></span></a>
                <ul class="dropdown-menu multi">
                  <div class="row">
                    <div class="col-sm-3">
                    
                      <ul class="multi-column-dropdown">
                        <?php 
                       
                        if(count($brand_name)):
                          foreach($brand_name as $brand_name):
                           
                        ?>

                        <li><a href="<?php echo site_url('searchfilter/brandsearch/'.$brand_name->pk_brand_id); ?>"><i class="fa fa-angle-right" aria-hidden="true"></i><?php echo $brand_name->brand_name; ?> </a></li>

                       
                       
                      <?php endforeach; 
                    endif;
                    ?>
                      </ul>
                    
                    </div>
                    
                    <div class="clearfix"></div>
                  </div>  
                </ul>
              </li>

              <li class="dropdown">
              
                <a href="#" class="dropdown-toggle hyper" data-toggle="dropdown" ><span> Category  <b class="caret"></b></span></a>
                <ul class="dropdown-menu multi multi1">
                  <div class="row">
                    <div class="col-sm-12">
                      
                      <ul class="multi-column-dropdown">
                         <?php 
                        if(count($category_name)):
                          foreach($category_name as $category_name):

                        ?>
                         <li><a href="<?php echo site_url('searchfilter/categorysearch/'.$category_name->pk_cat_id); ?>"><i class="fa fa-angle-right" aria-hidden="true"></i><?php echo $category_name->cat_name; ?> </a></li>

                       
                        <?php endforeach; 
                    endif;
                    ?>
                    
                      </ul>
                    </div>
                    
                    <div class="clearfix"></div>
                  </div>  
                </ul>
              </li>

              <li class="dropdown">
                <a href="#" class="dropdown-toggle hyper" data-toggle="dropdown" ><span>Packing Type<b class="caret"></b></span></a>
                <ul class="dropdown-menu multi multi1">
                  <div class="row">
                    
                    <div class="col-sm-9">
                    
                      <ul class="multi-column-dropdown">
                        <?php 
                        if(count($packing_name)):
                          foreach($packing_name as $packing_name):

                        ?>
                        <li><a href="<?php echo site_url('searchfilter/packingsearch/'.$packing_name->pk_pt_id); ?>"><i class="fa fa-angle-right" aria-hidden="true"></i><?php echo $packing_name->pt_name; ?> </a></li>

                      
                     <?php endforeach; 
                    endif;
                    ?>
                      </ul>
                    </div>
                  
                    <div class="clearfix"></div>
                  </div>  
                </ul>
              </li>
              
              <li class="dropdown">
                <a href="#" class="dropdown-toggle hyper" data-toggle="dropdown" ><span>Fragrance Type<b class="caret"></b></span></a>
                <ul class="dropdown-menu multi multi1">
                  <div class="row">
                    
                    <div class="col-sm-3">
                    
                      <ul class="multi-column-dropdown">
                        <?php 
                        $cnt=0;
                        if(count($fragrance_name)):
                          foreach($fragrance_name as $fragrance_name):
                            $cnt++;
                            if($cnt>5)
                            {
                              ?>
                            </ul>
                          </div>
                                 <div class="col-sm-3">
                      <ul class="multi-column-dropdown">
                        <?php    }
                        ?>
                        <li><a href="<?php echo site_url('searchfilter/fragrancesearch/'.$fragrance_name->fragrance_id); ?>"><i class="fa fa-angle-right" aria-hidden="true"></i><?php  echo $fragrance_name->fragrance_name ?></a></li>
                       
                     <?php endforeach; 
                    endif;
                    ?>
                      </ul>
                    </div>
                   
                    <div class="clearfix"></div>
                  </div>  
                </ul>
              </li>
              <li><a href="contact.php" class="hyper"><span>Contact Us</span></a></li>
            </ul>
          </div>
          </nav>
          
        
          <div class="clearfix"></div>
        </div>

<!-- //smooth scrolling -->
<!-- for bootstrap working -->
    
<!-- //for bootstrap working -->
<script type='text/javascript' src="<?php echo base_url();?>/application/assets/js/jquery.mycart.js"></script>
  