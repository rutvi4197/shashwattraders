
<!DOCTYPE html>
<html>
<head>
<title>Shashwat Traders</title>

</head>
<body>
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
<!--banner-->
		<div class="single">
			<div class="container">
						<div class="single-top-main">
							 <?php if(count($product_detail) ):
               foreach($product_detail as $product_detail):?>
	   		<div class="col-md-5 single-top" >
	   		<div class="single-w3agile" >
							
<div id="picture-frame">



			
			<img src="<?php echo  base_url().'/application/assets/'.$product_detail->product_photo; ?>" data-src="<?php echo  base_url().'/application/assets/'.$product_detail->product_photo; ?>" alt="" class="img-responsive" />
		</div>
										<script src="<?php echo base_url();?>/application/assets/js/jquery.zoomtoo.js"></script>
								<script>
			$(function() {
				$("#picture-frame").zoomToo({
					magnify: 1
				});
			});
		</script>
		
		
		
			</div>
			</div>
			<div class="col-md-7 single-top-left ">
								<div class="single-right">
				<h3><?php echo $product_detail->product_name ?></h3>
				
					
				 <div class="pr-single">
				 	<h3>
				  <p class="reduced "><del>Rs.<?php echo $product_detail->product_price*2 ?></del>
				  	Rs.<?php echo $product_detail->product_price ?>
				  </p></h3>
				</div>
				
				<br>
				<table class="table" border="1">
					<tr>
						<td  colspan="2"><b><center><font color="Red" size="5">Description</font></center></b></td>
					</tr>
					<tr>
						<td>Weight</td>
						<td> <?php echo $product_detail->Weight ?></td>
					</tr>
					<tr>
						<td>Burning Time </td>
						<td> <?php echo $product_detail->burning_time ?></td>
					</tr>
					<tr>
						<td>Fragrance </td>
						<td> <?php if(count($fragrance_detail) ):
               foreach($fragrance_detail as $fragrance_detail):?>

               		<?php echo $fragrance_detail->fragrance_name ?>,
		<?php 
			$id=$product_detail->pk_product_id;
			endforeach;
           	endif;
        ?>
               		  
               </td>
					</tr>

					<tr>
						<td>Bathi Type </td>
						<td> <?php echo $product_detail->type_name ?></td>
					</tr>
				</table>
		
				<ul class="social-top">
					<li><a href="#" class="icon facebook"><i class="fa fa-facebook" aria-hidden="true"></i><span></span></a></li>
					<li><a href="#" class="icon twitter"><i class="fa fa-twitter" aria-hidden="true"></i><span></span></a></li>
					<li><a href="#" class="icon pinterest"><i class="fa fa-pinterest-p" aria-hidden="true"></i><span></span></a></li>
					<li><a href="#" class="icon dribbble"><i class="fa fa-dribbble" aria-hidden="true"></i><span></span></a></li>
				</ul>
					<div class="add add-3">
											<a href="<?php echo site_url('singlepage/addtocart/'.$id); ?>">
										   <button class="btn btn-danger my-cart-btn my-cart-b">Add to Cart</button></a>

										   <a href="<?php echo site_url('singlepage/addtowish/'.$id); ?>">
										   <button class="btn btn-danger my-cart-btn my-cart-b " ><i class="fa fa-heart" aria-hidden="true"></i></button></a>
										
											<button class="btn btn-danger my-cart-btn my-cart-b">Buy Now</button>
						 
			   </div>
			<div class="clearfix"> </div>
			</div>
		 


			</div>
		   <div class="clearfix"> </div>
	   </div>	
				 
				   <?php endforeach;
                  endif;
                    
               ?>
	</div>
</div>
		<!---->
<div class="content-top offer-w3agile">
	<div class="container ">
			<div class="spec ">
				<h3>Related Products</h3>
					<div class="ser-t">
						<b></b>
						<span><i></i></span>
						<b class="line"></b>
					</div>
			</div>
						<div class=" con-w3l wthree-of">
							
							<?php if(count($brand_product_name) ):
               				foreach($brand_product_name as $brand_product_name):?>

							<div class="col-md-3 pro-1">
								<div class="col-m">
									<a href="<?php echo site_url('singlepage/productdetail/'.$brand_product_name->pk_product_id); ?>" class="offer-img">
													<img src="<?php echo  base_url().'/application/assets/'.$brand_product_name->product_photo; ?>" data-src="<?php echo  base_url().'/application/assets/'.$brand_product_name->product_photo; ?>" alt="" class="img-responsive"/>

										<div class="offer"><p><span>Flat 50% Off</span></p></div>
									</a>
									<div class="mid-1">
										<div class="women">
											<h6><a href="<?php echo site_url('singlepage/productdetail/'.$brand_product_name->pk_product_id); ?>">
												<?php echo $brand_product_name->product_name ?></a><br>Burning Time : <?php echo $brand_product_name->burning_time ?></h6>							
										</div>
										<div class="mid-2">
											<p ><label>Rs.<?php echo $brand_product_name->product_price*2 ?></label><em class="item_price">Rs.<?php echo $brand_product_name->product_price ?></em></p>
											  <div class="block">
												<div class="starbox small ghosting"> </div>
											</div>
											<div class="clearfix"></div>
										</div>
											<div class="add">
												<a href="<?php echo site_url('singlepage/addtocart/'.$brand_product_name->pk_product_id); ?>">
										   <button class="btn btn-danger my-cart-btn my-cart-b" data-id="16" data-name="Bread" data-summary="summary 16" data-price="0.80" data-quantity="1" data-image="images/of15.png">Add to Cart</button></a>
										</div>
									</div>
								</div>
							</div>
							<?php endforeach;
			                  endif;
			                    ?>
							<div class="clearfix"></div>

							  
						</div>
					</div>
				</div>
<!--footer-->
<?php include_once('footer.php'); ?>
<!-- smooth scrolling -->
	
							
</body>
</html>