<?php
session_start();

if (isset($_COOKIE['item'])) // this is for check cookies are available or nor
{
	foreach ($_COOKIE['item'] as $name1 => $value)
	//this is for looping as per cookies if 3 cookies then loop moves 3 times
	{

		if (isset($_POST["delete$name1"]))
		// this is for checking update button pressed or not
		{
			setcookie("item[$name1]", "", time() - 1800);
			?>
			<script type="text/javascript">
				window.location.href = window.location.href;
			</script>
<?php
		}
	}
}
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
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Cart</title>
	<base />

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
	<div class="row-offcanvas row-offcanvas-left">
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
					<li><a href="chair.php?route=product/category&amp;path=24" style="color:white">Shopping Cart</a></li>
				</ul>
				<div class="row">

					<section id="cart_items" style="padding-top: 80px">
						<div class="container">
							<div class="table-responsive cart_info">
								<table class="table table-condensed">
									<form name="form1" action="" method="post">
										<?php
										$d = 0;
										if (isset($_COOKIE['item'])) {
											$d = $d + 1;
										}
										if ($d == 0) {
											echo "no record available in cart";
											echo "<br>";
											echo "<br>";
											echo "<br>";
											echo "<br>";
										} else {
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
														$values11 = explode("__", $value);

														?>
													<tr>
														<td class="cart_product">
															<a href=""><img src="./Admin/<?php echo $values11[0]; ?>" alt="" width="100" height="100"></a>
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
														<td>
															<input type="submit" name="delete<?php echo $name1; ?>" value="del" id="s3">
														</td>
														<td class="cart_delete">
															<a class="cart_quantity_delete" href=""><i class="fa fa-times"></i></a>
														</td>
													</tr>
												<?php

													}
													?>


											</tbody>
									</form>
								</table>
							<?php
							}
							$tot = 0;

							if (isset($_COOKIE['item']))  //this is for check cookies are available or nor
							{
								foreach ($_COOKIE['item'] as $name1 => $value)   //this is for looping as per cookies if 3 cookies then loop move
								{
									$values11 = explode("__", $value);
									$tot = $tot + $values11[4];
								}

								echo "$" . $tot;
								$_SESSION["pay"] = $tot;
							}
							?>

							</div>
						</div>
					</section>
					<!--/#cart_items-->

					<center style="margin-bottom:25px">
						<a href="checkout.php">
							<input type="button" class="btn btn-default" value="Checkout" style="background-color: orange; color:white; font-weight: bold; width: 350px"></a>
					</center>

					<!--/#do_action-->
				</div>
			</div>

			<?php
			include "footer.php";
			?>
		</div>
</body>
<!-- Mirrored from demopavothemes.com/pav_furniture/index.php?route=product/category&path=24&sort=rating&order=ASC by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 05 Aug 2018 10:07:56 GMT -->

</html>