<?php
session_start();

?>
<!-- end database connection -->
<!DOCTYPE html>
<!--[if IE]><![endif]-->
<!--[if IE 8 ]><html dir="ltr" lang="en" class="ie8"><![endif]-->
<!--[if IE 9 ]><html dir="ltr" lang="en" class="ie9"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html dir="ltr" class="ltr" lang="en">
<!--<![endif]-->

<!-- Mirrored from demopavothemes.com/pav_furniture/index.php?route=product/category&path=24&sort=rating&order=ASC by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 05 Aug 2018 10:07:52 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Checkout</title>
<base  />
    
<link href="indexc957.html?route=product/category&amp;path=24" rel="canonical" />
<link href="image/catalog/cart.png" rel="icon" />
<link href="catalog/view/theme/pav_furniture/stylesheet/bootstrap.css" rel="stylesheet" />
<link href="catalog/view/theme/pav_furniture/stylesheet/style.css" rel="stylesheet" />
<link href="catalog/view/theme/pav_furniture/stylesheet/font.css" rel="stylesheet" />
<link href="catalog/view/javascript/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
<link href="catalog/view/javascript/jquery/magnific/magnific-popup.css" rel="stylesheet" />
<link href="catalog/view/javascript/jquery/owl-carousel/owl.carousel.css" rel="stylesheet" />
<link href="catalog/view/javascript/jquery/owl-carousel/owl.transitions.css" rel="stylesheet" />
<link href="catalog/view/theme/pav_furniture/stylesheet/pavcarousel.css" rel="stylesheet" />
<link href="catalog/view/theme/pav_furniture/stylesheet/pavnewsletter.css" rel="stylesheet" />

<!-- pagination css-->
<link href="pagination/css/pagination.css" rel="stylesheet" type="text/css" />
<link href="pagination/css/A_green.css" rel="stylesheet" type="text/css" />
<!-- end pagination -->

<script type="text/javascript" src="catalog/view/javascript/jquery/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="catalog/view/javascript/jquery/magnific/jquery.magnific-popup.min.js"></script>
<script type="text/javascript" src="catalog/view/javascript/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="catalog/view/javascript/common.js"></script>
<script type="text/javascript" src="catalog/view/theme/pav_furniture/javascript/common.js"></script>
<script type="text/javascript" src="catalog/view/javascript/jquery/owl-carousel/owl.carousel.min.js"></script>

<!--<link href="catalog/view/css/bootstrap.min.css" rel="stylesheet">
<link href="catalog/view/css/font-awesome.min.css" rel="stylesheet">
<link href="catalog/view/css/prettyPhoto.css" rel="stylesheet">
<link href="catalog/view/css/price-range.css" rel="stylesheet">
<link href="catalog/view/css/animate.css" rel="stylesheet">

<link href="catalog/view/css/responsive.css" rel="stylesheet">-->
<link href="catalog/view/css/main.css" rel="stylesheet">


</head>
<body class="product-category-24 page-category layout-">
 <div  class="row-offcanvas row-offcanvas-left">
  <div id="page">

<!-- header -->
   <?php
	 include "nav.php";
	 include "header.php";
	?>
<!-- /header -->



<!-- sys-notification -->
    <div id="sys-notification">
     <div class="container">
       <div id="notification"></div>
     </div>
    </div>
  <div class="dj">
     			<ul class="breadcrumb">
      				<li><a href="index.php?route=common/home"><i class="fa fa-home"></i></a></li>
      				<li><a href="checkout.php?route=product/category&amp;path=24" style="color:white">Check out</a></li>
     			</ul>
    		<div class="row">

	<section id="cart_items">
		<div class="container">

			<div class="step-one">
				<h2 class="heading">Step1</h2>
			</div>
			

			<div class="register-req">
				<p>Please give your proper details to easily get items at your delivered addresss.</p>
			</div><!--/register-req-->

			<div class="shopper-informations">
				<div class="row">
				<!--	<div class="col-sm-3">
						<div class="shopper-info">
							<p>Shopper Information</p>
							<form>
								<input type="text" placeholder="Display Name">
								<input type="text" placeholder="User Name">
								<input type="password" placeholder="Password">
								<input type="password" placeholder="Confirm password">
							</form>
							<a class="btn btn-primary" href="">Get Quotes</a>
							<a class="btn btn-primary" href="">Continue</a>
						</div>
					</div> -->
					<div class="col=sm-5 clearfix container">
						<div class="bill-to">
							<p>Bill To</p>
							<div class="form-one">
								<form name="form1" action="" method="post">
									<input type="text" placeholder="First Name *" name="firstname" style="width: 350px" required pattern="[A-Za-z]+" title="Please enter valid firstname[a-z only]" style="...">
									<input type="text" placeholder="Last Name *" name="lastname" style="width: 350px" required pattern="[A-Za-z]+" title="Please enter valid lastname[a-z only]" style="...">
									<input type="email" placeholder="Email" name="email" style="width: 350px" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" title="Please enter valid email address" style="...">
									<input type="text" placeholder="Resi. Address" name="resi" style="width: 350px" required style="...">
									<input type="text" placeholder="City" name="city" style="width: 350px" required pattern="[A-Za-z]+" title="Please enter valid city name[a-z only]" style="...">
									<input type="text" placeholder="Pincode" name="pincode" style="width: 350px" required pattern="[0-9]{6}" title="Please enter valid pincode [0-9 and 6 digit only]" style="...">
									<input type="text" placeholder="Contact Number" name="cno" style="width: 350px" maxlength="10" required pattern="[789][0-9]{9}" title="Please enter valid contact number[0-9 and 10 digit only]& number must be indian" style="...">
									<input type="submit" name="submit1" value="Save" style="background-color: orange; color:white; font-weight: bold; width: 350px" required style="...">
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<?php
				if(isset($_POST["submit1"]))
				{
					$link=mysqli_connect("localhost","root","");
					mysqli_select_db($link,"furniture");
					mysqli_query($link,"insert into checkout_address values('','$_POST[firstname]','$_POST[lastname]','$_POST[email]','$_POST[resi]','$_POST[city]','$_POST[pincode]','$_POST[cno]')");
					
					$res = mysqli_query($link,"select id from checkout_address order by id desc limit 1");
					while($row=mysqli_fetch_array($res))
					{
						$_SESSION["order_id"]=$row["id"];
					}
					
					?>
					
					<script type="text/javascript">
						alert("click ok to transferring to you in paypal");
						
						setTimeout(function(){
							window.location="paypal.php";
						},4000);
					</script>
					
				<?php
				
				
				}
			
			?>
			
			
			
			<div class="review-payment">
				<h2>Review & Payment</h2>
			</div>
			<div class="table-responsive cart_info">
				<table class="table table-condensed">
					
						<?php
							$d=0;
							if(isset($_COOKIE['item']))
							{
								$d=$d+1;
							}
							if($d==0)
							{
								echo "no record available in cart";
								echo "<br>";echo "<br>";echo "<br>";echo "<br>";
							}
							else
							{
								?>
								<thead>
									<tr class="cart_menu">
										<td class="image">Item</td>
										<td class="description"></td>
										<td class="price">Price</td>
										<td class="quantity">Quantity</td>
										<td class="total">Total</td>
										<td></td>
									</tr>
								</thead>
								
								<tbody>
								<?php
									foreach ($_COOKIE['item'] as $name1 => $value) //this is for looping as per cookies if 3 cookies then loop move
									{
										$values11 = explode("__",$value);
									
										?>
									<tr>
										<td class="cart_product">
											<a href=""><img src="../admin/<?php echo $values11[0]; ?>" alt="" width="100" height="100"></a>
										</td>
										<td class="cart_description">
											<h4><a href=""><?php echo $values11[1]; ?></a></h4>
								
										</td>
										<td class="cart_price">
											<p>$<?php echo $values11[2]; ?></p>
										</td>
										<td class="cart_quantity">
											<div class="cart_quantity_button">
									
												<input class="cart_quantity_input" type="text" name="quantity" value="<?php echo $values11[3]; ?>" autocomplete="off" size="2" readonly>
										
											</div>
										</td>
										<td class="cart_total">
											<p class="cart_total_price">$<?php echo $values11[4]; ?></p>
										</td>
										<td class="cart_delete">
											<a class="cart_quantity_delete" href=""><i class="fa fa-times"></i></a>
										</td>
									</tr>	
									<?php
										$tot=0;
										foreach ($_COOKIE['item'] as $name1 => $value) //this is for looping as per cookies if 3 cookies then loop move
										{
											$values11 = explode("__",$value);
											$tot=$tot+$values11[4];
										}
										
									}
								?>
									<tr>
									<td colspan="4">&nbsp;</td>
									<td colspan="2" style=" font-size: 20px">
										<table class="table table-condensed table-result" style="background-color: white;text-align: right">
										<tbody><tr>
											<td>Cart Sub Total</td>
											<td><?php echo "$".$tot; ?></td>
										</tr>
										<tr>
											<td>Extra Tax</td>
											<td>NO</td>
										</tr>
										<tr class="shipping-cost">
											<td>Shipping Cost</td>
											<td>Free</td>										
										</tr>
										<tr>
											<td style="color:orange">Total</td>
											<td><span style="color:orange"><?php echo "$".$tot; ?></span></td>
										</tr>
										</tbody></table>
									</td>
									</tr>
								</tbody>
							</table>
								<?php
							}
							
						?>
					
			</div>
		<!--	<div class="table-responsive cart_info">
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td class="image">Item</td>
							<td class="description"></td>
							<td class="price">Price</td>
							<td class="quantity">Quantity</td>
							<td class="total">Total</td>
							<td></td>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td class="cart_product">
								<a href=""><img src="images/cart/one.png" alt=""></a>
							</td>
							<td class="cart_description">
								<h4><a href="">Colorblock Scuba</a></h4>
								
							</td>
							<td class="cart_price">
								<p>$59</p>
							</td>
							<td class="cart_quantity">
								<div class="cart_quantity_button">
									<input class="cart_quantity_input" type="text" name="quantity" value="1" autocomplete="off" size="2" readonly>
									
								</div>
							</td>
							<td class="cart_total">
								<p class="cart_total_price">$59</p>
							</td>
							<td class="cart_delete">
								<a class="cart_quantity_delete" href=""><i class="fa fa-times"></i></a>
							</td>
						</tr>

						
						
						<tr>
									<td colspan="4">&nbsp;</td>
									<td colspan="2" style=" font-size: 20px">
										<table class="table table-condensed table-result" style="background-color: white;text-align: right">
										<tbody><tr>
											<td>Cart Sub Total</td>
											<td>789</td>
										</tr>
										<tr>
											<td>Extra Tax</td>
											<td>NO</td>
										</tr>
										<tr class="shipping-cost">
											<td>Shipping Cost</td>
											<td>Free</td>										
										</tr>
										<tr>
											<td style="color:orange">Total</td>
											<td><span style="color:orange">789</span></td>
										</tr>
										</tbody></table>
									</td>
									</tr>
					</tbody>
				</table>
			</div> -->
		<!--	<div class="payment-options">
					<span>
						<label><input type="checkbox"> Direct Bank Transfer</label>
					</span>
					<span>
						<label><input type="checkbox"> Check Payment</label>
					</span>
					<span>
						<label><input type="checkbox"> Paypal</label>
					</span>
				</div> -->
		</div>
	</section> <!--/#cart_items-->

	  		</div>
	  </div>
 <?php
	 	include "footer.php";
	 ?>
	</div>
</body>
<!-- Mirrored from demopavothemes.com/pav_furniture/index.php?route=product/category&path=24&sort=rating&order=ASC by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 05 Aug 2018 10:07:56 GMT -->
</html>
	