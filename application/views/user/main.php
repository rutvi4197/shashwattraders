
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
              <?php if(count($brand_name) ){ 
               foreach($brand_name as $brand_name){ ?>
              <li><a href="index.php/home/brandsearch/<?php echo $brand_name->pk_brand_id?>" class="hyper "><span><?php echo $brand_name->brand_name; ?></span></a></li> 
              <?php }
                    }
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
      <h3>Special Offers</h3>
      <div class="ser-t">
        <b></b>
        <span><i></i></span>
        <b class="line"></b>
      </div>
    </div>
      <div class="tab-head ">
        <nav class="nav-sidebar">
          <ul class="nav tabs ">
            <li class="active"><a href="#tab1" data-toggle="tab">Staples</a></li>
            <li class=""><a href="#tab2" data-toggle="tab">Snacks</a></li> 
            <li class=""><a href="#tab3" data-toggle="tab">Fruits & Vegetables</a></li>  
            <li class=""><a href="#tab4" data-toggle="tab">Breakfast & Cereal</a></li>
          </ul>
        </nav>
        <div class=" tab-content tab-content-t ">
          <div class="tab-pane active text-style" id="tab1">
            <div class=" con-w3l">
              <div class="col-md-3 m-wthree">
                <div class="col-m">               
                  <a href="#" data-toggle="modal" data-target="#myModal1" class="offer-img">
                    <img src="<?php echo  base_url(); ?>/assets/images/of.png" class="img-responsive" alt="">
                    <div class="offer"><p><span>Offer</span></p></div>
                  </a>
                  <div class="mid-1">
                    <div class="women">
                      <h6><a href="single.html">Moong</a>(1 kg)</h6>              
                    </div>
                    <div class="mid-2">
                      <p ><label>$2.00</label><em class="item_price">$1.50</em></p>
                        <div class="block">
                        <div class="starbox small ghosting"> </div>
                      </div>
                      <div class="clearfix"></div>
                    </div>
                    <div class="add">
                       <button class="btn btn-danger my-cart-btn my-cart-b " data-id="1" data-name="Moong" data-summary="summary 1" data-price="1.50" data-quantity="1" data-image="images/of.png">Add to Cart</button>
                    </div>
                    
                  </div>
                </div>
              </div>
              <div class="col-md-3 m-wthree">
                <div class="col-m">
                  <a href="#" data-toggle="modal" data-target="#myModal2" class="offer-img">
                    <img src="<?php echo  base_url(); ?>/assets/images/of1.png" class="img-responsive" alt="">
                    <div class="offer"><p><span>Offer</span></p></div>
                  </a>
                  <div class="mid-1">
                    <div class="women">
                      <h6><a href="single.html">Sunflower Oil</a>(5 kg)</h6>              
                    </div>
                    <div class="mid-2">
                      <p ><label>$10.00</label><em class="item_price">$9.00</em></p>
                        <div class="block">
                        <div class="starbox small ghosting"> </div>
                      </div>
                      <div class="clearfix"></div>
                    </div>
                        <div class="add">
                       <button class="btn btn-danger my-cart-btn my-cart-b" data-id="2" data-name="Sunflower Oil" data-summary="summary 2" data-price="9.00" data-quantity="1" data-image="images/of1.png">Add to Cart</button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-3 m-wthree">
                <div class="col-m">
                  <a href="#" data-toggle="modal" data-target="#myModal3" class="offer-img">
                    <img src="<?php echo  base_url(); ?>/assets/images/of2.png" class="img-responsive" alt="">
                    <div class="offer"><p><span>Offer</span></p></div>
                  </a>
                  <div class="mid-1">
                    <div class="women">
                      <h6><a href="single.html">Kabuli Chana</a>(1 kg)</h6>             
                    </div>
                    <div class="mid-2">
                      <p ><label>$3.00</label><em class="item_price">$2.00</em></p>
                        <div class="block">
                        <div class="starbox small ghosting"> </div>
                      </div>
                      <div class="clearfix"></div>
                    </div>
                      <div class="add">
                       <button class="btn btn-danger my-cart-btn my-cart-b" data-id="3" data-name="Kabuli Chana" data-summary="summary 3" data-price="2.00" data-quantity="1" data-image="images/of2.png">Add to Cart</button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-3 m-wthree">
                <div class="col-m">
                  <a href="#" data-toggle="modal" data-target="#myModal4" class="offer-img">
                    <img src="<?php echo  base_url(); ?>/assets/images/of3.png" class="img-responsive" alt="">
                    <div class="offer"><p><span>Offer</span></p></div>
                  </a>
                  <div class="mid-1">
                    <div class="women">
                      <h6><a href="single.html">Soya Chunks</a>(1 kg)</h6>              
                    </div>
                    <div class="mid-2">
                      <p ><label>$4.00</label><em class="item_price">$3.50</em></p>
                        <div class="block">
                        <div class="starbox small ghosting"> </div>
                      </div>
                      <div class="clearfix"></div>
                    </div>
                      <div class="add">
                       <button class="btn btn-danger my-cart-btn my-cart-b" data-id="4" data-name="Soya Chunks" data-summary="summary 4" data-price="3.50" data-quantity="1" data-image="images/of3.png">Add to Cart</button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="clearfix"></div>
             </div>
          </div>
          <div class="tab-pane  text-style" id="tab2">
            <div class=" con-w3l">
              <div class="col-md-3 m-wthree">
                <div class="col-m">
                  <a href="#" data-toggle="modal" data-target="#myModal5" class="offer-img">
                    <img src="<?php echo  base_url(); ?>/assets/images/of4.png" class="img-responsive" alt="">
                    <div class="offer"><p><span>Offer</span></p></div>
                  </a>
                  <div class="mid-1">
                    <div class="women">
                      <h6><a href="single.html">Lays</a>(100 g)</h6>              
                    </div>
                    <div class="mid-2">
                      <p ><label>$1.00</label><em class="item_price">$0.70</em></p>
                        <div class="block">
                        <div class="starbox small ghosting"> </div>
                      </div>
                      <div class="clearfix"></div>
                    </div>
                      <div class="add">
                       <button class="btn btn-danger my-cart-btn my-cart-b" data-id="5" data-name="Lays" data-summary="summary 5" data-price="0.70" data-quantity="1" data-image="images/of4.png">Add to Cart</button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-3 m-wthree">
                <div class="col-m">
                  <a href="#" data-toggle="modal" data-target="#myModal6" class="offer-img">
                    <img src="<?php echo  base_url(); ?>/assets/images/of5.png" class="img-responsive" alt="">
                    <div class="offer"><p><span>Offer</span></p></div>
                  </a>
                  <div class="mid-1">
                    <div class="women">
                      <h6><a href="single.html">Kurkure</a>(100 g)</h6>             
                    </div>
                    <div class="mid-2">
                      <p ><label>$1.00</label><em class="item_price">$0.70</em></p>
                        <div class="block">
                        <div class="starbox small ghosting"> </div>
                      </div>
                      <div class="clearfix"></div>
                    </div>
                      <div class="add">
                       <button class="btn btn-danger my-cart-btn my-cart-b" data-id="6" data-name="Kurkure" data-summary="summary 6" data-price="0.70" data-quantity="1" data-image="images/of5.png">Add to Cart</button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-3 m-wthree">
                <div class="col-m">
                  <a href="#" data-toggle="modal" data-target="#myModal7" class="offer-img">
                    <img src="<?php echo  base_url(); ?>/assets/images/of6.png" class="img-responsive" alt="">
                    <div class="offer"><p><span>Offer</span></p></div>
                  </a>
                  <div class="mid-1">
                    <div class="women">
                      <h6><a href="single.html">Popcorn</a>(250 g)</h6>             
                    </div>
                    <div class="mid-2">
                      <p ><label>$2.00</label><em class="item_price">$1.00</em></p>
                        <div class="block">
                        <div class="starbox small ghosting"> </div>
                      </div>
                      <div class="clearfix"></div>
                    </div>
                      <div class="add">
                       <button class="btn btn-danger my-cart-btn my-cart-b" data-id="7" data-name="Popcorn" data-summary="summary 7" data-price="1.00" data-quantity="1" data-image="images/of6.png">Add to Cart</button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-3 m-wthree">
                <div class="col-m">
                  <a href="#" data-toggle="modal" data-target="#myModal8" class="offer-img">
                    <img src="<?php echo  base_url(); ?>/assets/images/of7.png" class="img-responsive" alt="">
                    <div class="offer"><p><span>Offer</span></p></div>
                  </a>
                  <div class="mid-1">
                    <div class="women">
                      <h6><a href="single.html">Nuts</a>(250 g)</h6>              
                    </div>
                    <div class="mid-2">
                      <p ><label>$4.00</label><em class="item_price">$3.50</em></p>
                        <div class="block">
                        <div class="starbox small ghosting"> </div>
                      </div>
                      <div class="clearfix"></div>
                    </div>
                      <div class="add">
                       <button class="btn btn-danger my-cart-btn my-cart-b" data-id="8" data-name="Nuts" data-summary="summary 8" data-price="3.50" data-quantity="1" data-image="images/of7.png">Add to Cart</button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="clearfix"></div>
             </div>     
          </div>
          <div class="tab-pane  text-style" id="tab3">
            <div class=" con-w3l">
              <div class="col-md-3 m-wthree">
                <div class="col-m">
                <a href="#" data-toggle="modal" data-target="#myModal9" class="offer-img">
                    <img src="<?php echo  base_url(); ?>/assets/images/of8.png" class="img-responsive" alt="">
                    <div class="offer"><p><span>Offer</span></p></div>
                  </a>
                  <div class="mid-1">
                    <div class="women">
                      <h6><a href="single.html">Banana</a>(6 pcs)</h6>              
                    </div>
                    <div class="mid-2">
                      <p ><label>$2.00</label><em class="item_price">$1.50</em></p>
                        <div class="block">
                        <div class="starbox small ghosting"> </div>
                      </div>
                      <div class="clearfix"></div>
                    </div>
                      <div class="add">
                       <button class="btn btn-danger my-cart-btn my-cart-b" data-id="9" data-name="Banana" data-summary="summary 9" data-price="1.50" data-quantity="1" data-image="images/of8.png">Add to Cart</button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-3 m-wthree">
                <div class="col-m">
                  <a href="#" data-toggle="modal" data-target="#myModal10" class="offer-img">
                    <img src="<?php echo  base_url(); ?>/assets/images/of9.png" class="img-responsive" alt="">
                    <div class="offer"><p><span>Offer</span></p></div>
                  </a>
                  <div class="mid-1">
                    <div class="women">
                      <h6><a href="single.html">Onion</a>(1 kg)</h6>              
                    </div>
                    <div class="mid-2">
                      <p ><label>$1.00</label><em class="item_price">$0.70</em></p>
                        <div class="block">
                        <div class="starbox small ghosting"> </div>
                      </div>
                      <div class="clearfix"></div>
                    </div>
                      <div class="add">
                       <button class="btn btn-danger my-cart-btn my-cart-b" data-id="10" data-name="Onion" data-summary="summary 10" data-price="0.70" data-quantity="1" data-image="images/of9.png">Add to Cart</button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-3 m-wthree">
                <div class="col-m">
                  <a href="#" data-toggle="modal" data-target="#myModal11" class="offer-img">
                    <img src="<?php echo  base_url(); ?>/assets/images/of10.png" class="img-responsive" alt="">
                    <div class="offer"><p><span>Offer</span></p></div>
                  </a>
                  <div class="mid-1">
                    <div class="women">
                      <h6><a href="single.html"> Bitter Gourd</a>(1 kg)</h6>              
                    </div>
                    <div class="mid-2">
                      <p ><label>$2.00</label><em class="item_price">$1.00</em></p>
                        <div class="block">
                        <div class="starbox small ghosting"> </div>
                      </div>
                      <div class="clearfix"></div>
                    </div>
                      <div class="add">
                       <button class="btn btn-danger my-cart-btn my-cart-b" data-id="11" data-name="Bitter Gourd" data-summary="summary 11" data-price="1.00" data-quantity="1" data-image="images/of10.png">Add to Cart</button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-3 m-wthree">
                <div class="col-m">
                  <a href="#" data-toggle="modal" data-target="#myModal12" class="offer-img">
                    <img src="<?php echo  base_url(); ?>/assets/images/of11.png" class="img-responsive" alt="">
                    <div class="offer"><p><span>Offer</span></p></div>
                  </a>
                  <div class="mid-1">
                    <div class="women">
                      <h6><a href="single.html">Apples</a>(1 kg)</h6>             
                    </div>
                    <div class="mid-2">
                      <p ><label>$4.00</label><em class="item_price">$3.50</em></p>
                        <div class="block">
                        <div class="starbox small ghosting"> </div>
                      </div>
                      <div class="clearfix"></div>
                    </div>
                      <div class="add">
                       <button class="btn btn-danger my-cart-btn my-cart-b" data-id="12" data-name="Apples" data-summary="summary 12" data-price="3.50" data-quantity="1" data-image="images/of11.png">Add to Cart</button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="clearfix"></div>
             </div>     
          </div>
          <div class="tab-pane text-style" id="tab4">
              <div class=" con-w3l">
              <div class="col-md-3 m-wthree">
                <div class="col-m">
                <a href="#" data-toggle="modal" data-target="#myModal13" class="offer-img">
                    <img src="<?php echo  base_url(); ?>/assets/images/of12.png" class="img-responsive" alt="">
                    <div class="offer"><p><span>Offer</span></p></div>
                  </a>
                  <div class="mid-1">
                    <div class="women">
                      <h6><a href="single.html">Honey</a>(500 g)</h6>             
                    </div>
                    <div class="mid-2">
                      <p ><label>$7.00</label><em class="item_price">$6.00</em></p>
                        <div class="block">
                        <div class="starbox small ghosting"> </div>
                      </div>
                      <div class="clearfix"></div>
                    </div>
                      <div class="add">
                       <button class="btn btn-danger my-cart-btn my-cart-b" data-id="13" data-name="Honey" data-summary="summary 13" data-price="6.00" data-quantity="1" data-image="images/of12.png">Add to Cart</button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-3 m-wthree">
                <div class="col-m ">
                  <a href="#" data-toggle="modal" data-target="#myModal14" class="offer-img">
                    <img src="images/of13.png" class="img-responsive" alt="">
                    <div class="offer"><p><span>Offer</span></p></div>
                  </a>
                  <div class="mid-1">
                    <div class="women">
                      <h6><a href="single.html">Chocos</a>(250 g)</h6>              
                    </div>
                    <div class="mid-2">
                      <p ><label>$5.00</label><em class="item_price">$4.50</em></p>
                        <div class="block">
                        <div class="starbox small ghosting"> </div>
                      </div>
                      <div class="clearfix"></div>
                    </div>
                      <div class="add">
                       <button class="btn btn-danger my-cart-btn my-cart-b" data-id="14" data-name="Chocos" data-summary="summary 14" data-price="4.50" data-quantity="1" data-image="images/of13.png">Add to Cart</button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-3 m-wthree">
                <div class="col-m ">
                  <a href="#" data-toggle="modal" data-target="#myModal15" class="offer-img">
                    <img src="images/of14.png" class="img-responsive" alt="">
                    <div class="offer"><p><span>Offer</span></p></div>
                  </a>
                  <div class="mid-1">
                    <div class="women">
                      <h6><a href="single.html">Oats</a>(1 kg)</h6>             
                    </div>
                    <div class="mid-2">
                      <p ><label>$4.00</label><em class="item_price">$3.50</em></p>
                        <div class="block">
                        <div class="starbox small ghosting"> </div>
                      </div>
                      <div class="clearfix"></div>
                    </div>
                      <div class="add">
                       <button class="btn btn-danger my-cart-btn my-cart-b" data-id="15" data-name="Oats" data-summary="summary 15" data-price="3.50" data-quantity="1" data-image="images/of14.png">Add to Cart</button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-3 m-wthree">
                <div class="col-m">
                  <a href="#" data-toggle="modal" data-target="#myModal16" class="offer-img">
                    <img src="images/of15.png" class="img-responsive" alt="">
                    <div class="offer"><p><span>Offer</span></p></div>
                  </a>
                  <div class="mid-1">
                    <div class="women">
                      <h6><a href="single.html">Bread</a>(500 g)</h6>             
                    </div>
                    <div class="mid-2">
                      <p ><label>$1.00</label><em class="item_price">$0.80</em></p>
                        <div class="block">
                        <div class="starbox small ghosting"> </div>
                      </div>
                      <div class="clearfix"></div>
                    </div>
                      <div class="add">
                       <button class="btn btn-danger my-cart-btn my-cart-b" data-id="16" data-name="Bread" data-summary="summary 16" data-price="0.80" data-quantity="1" data-image="<?php echo  base_url(); ?>/assets/images/of15.png">Add to Cart</button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="clearfix"></div>
             </div>
          </div>
        </div>
      </div>
    
  </div>
  </div>
  </div>

<!--content-->
<div class="content-mid">
  <div class="container">
    
    <div class="col-md-4 m-w3ls">
      <div class="col-md1 ">
        <a href="kitchen.html">
          <img src="<?php echo  base_url(); ?>/assets/images/co1.jpg" class="img-responsive img" alt="">
          <div class="big-sa">
            <h6>New Collections</h6>
            <h3>Season<span>ing </span></h3>
            <p>There are many variations of passages of Lorem Ipsum available, but the majority </p>
          </div>
        </a>
      </div>
    </div>
    <div class="col-md-4 m-w3ls1">
      <div class="col-md ">
        <a href="hold.html">
          <img src="<?php echo  base_url(); ?>/assets/images/co.jpg" class="img-responsive img" alt="">
          <div class="big-sale">
            <div class="big-sale1">
              <h3>Big <span>Sale</span></h3>
              <p>It is a long established fact that a reader </p>
            </div>
          </div>
        </a>
      </div>
    </div>
    <div class="col-md-4 m-w3ls">
      <div class="col-md2 ">
        <a href="kitchen.html">
          <img src="<?php echo  base_url(); ?>/assets/images/co2.jpg" class="img-responsive img1" alt="">
          <div class="big-sale2">
            <h3>Cooking <span>Oil</span></h3>
            <p>It is a long established fact that a reader </p>   
          </div>
        </a>
      </div>
      <div class="col-md3 ">
        <a href="hold.html">
          <img src="<?php echo  base_url(); ?>/assets/images/co3.jpg" class="img-responsive img1" alt="">
          <div class="big-sale3">
            <h3>Vegeta<span>bles</span></h3>
            <p>It is a long established fact that a reader </p>
          </div>
        </a>
      </div>
    </div>
    <div class="clearfix"></div>
  </div>
</div>
<!--content-->


<!--content-->
  <div class="product">
    <div class="container">
      <div class="spec ">
        <h3>Special Offers</h3>
        <div class="ser-t">
          <b></b>
          <span><i></i></span>
          <b class="line"></b>
        </div>
      </div>
        <div class=" con-w3l">
              <div class="col-md-3 pro-1">
                <div class="col-m">
                <a href="#" data-toggle="modal" data-target="#myModal17" class="offer-img">
                    <img src="<?php echo  base_url(); ?>/assets/images/of16.png" class="img-responsive" alt="">
                  </a>
                  <div class="mid-1">
                    <div class="women">
                      <h6><a href="single.html">Moisturiser</a>(500 g)</h6>             
                    </div>
                    <div class="mid-2">
                      <p ><label>$7.00</label><em class="item_price">$6.00</em></p>
                        <div class="block">
                        <div class="starbox small ghosting"> </div>
                      </div>
                      <div class="clearfix"></div>
                    </div>
                      <div class="add add-2">
                       <button class="btn btn-danger my-cart-btn my-cart-b" data-id="1" data-name="product 1" data-summary="summary 1" data-price="6.00" data-quantity="1" data-image="images/of16.png">Add to Cart</button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-3 pro-1">
                <div class="col-m">
                  <a href="#" data-toggle="modal" data-target="#myModal18" class="offer-img">
                    <img src="<?php echo  base_url(); ?>/assets/images/of17.png" class="img-responsive" alt="">
                  </a>
                  <div class="mid-1">
                    <div class="women">
                      <h6><a href="single.html">  Lady Finger</a>(250 g)</h6>             
                    </div>
                    <div class="mid-2">
                      <p ><label>$5.00</label><em class="item_price">$4.50</em></p>
                        <div class="block">
                        <div class="starbox small ghosting"> </div>
                      </div>
                      <div class="clearfix"></div>
                    </div>
                      <div class="add">
                       <button class="btn btn-danger my-cart-btn my-cart-b" data-id="1" data-name="product 1" data-summary="summary 1" data-price="4.50" data-quantity="1" data-image="images/of17.png">Add to Cart</button>
                    </div>
                  </div>
                </div>
              </div>
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