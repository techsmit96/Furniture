<!-- databse connection -->

<?php
include "./connect/connection.php"
?>
<!-- end database connection -->

<!DOCTYPE html>
<!--[if IE]><![endif]-->
<!--[if IE 8 ]><html dir="ltr" lang="en" class="ie8"><![endif]-->
<!--[if IE 9 ]><html dir="ltr" lang="en" class="ie9"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html dir="ltr" class="ltr" lang="en">
<!--<![endif]-->

<!-- Mirrored from demopavothemes.com/pav_furniture/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 05 Aug 2018 09:55:05 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Furniture</title>
	<base />
	<?php include "link.php" ?>
	<style>
		.js .animate-box {
			opacity: 0;
		}

		.row {
			margin-left: -15px;
			margin-right: -15px;
		}

		.fadeInUp {
			-webkit-animation-name: fadeInUp;
			animation-name: fadeInUp;
		}

		.animated {
			-webkit-animation-duration: 1s;
			animation-duration: 1s;
			-webkit-animation-fill-mode: both;
			animation-fill-mode: both;
		}

		.schedule-content.active {
			opacity: 1;
			visibility: visible;
		}

		.schedule-content {
			position: absolute;
			top: 0;
			left: 0;
			width: 100%;
			opacity: 0;
			visibility: hidden;
			-webkit-transition: 0.3s;
			-o-transition: 0.3s;
			transition: 0.3s;
		}

		.program.program-schedule {
			margin-bottom: 2em;
			padding: 40px;
			background: #fff;
			-webkit-border-radius: 4px;
			-moz-border-radius: 4px;
			-ms-border-radius: 4px;
			border-radius: 4px;
			-webkit-transition: 0.3s;
			-o-transition: 0.3s;
			transition: 0.3s;
		}

		.program {
			margin-bottom: 4em;
		}

		.banner-btn a {
			background: green;
			font-size: 1em;
			padding: 9px 30px;
			color: #fff;
			cursor: pointer;
			outline: none;
			-webkit-appearance: none;
			transition: all 0.3s;
			text-transform: uppercase;
			font-weight: 100;
			border: 1px solid;
		}

		a {
			color: #4CB648;
			-webkit-transition: 0.5s;
			-o-transition: 0.5s;
			transition: 0.5s;
		}

		.ca-nav span {
			width: 70px;
			height: 70px;
			background: url(../User/image/cache/image/img-sprite.png)no-repeat -137px -119px;
			position: absolute;
			top: 50%;
			margin-top: -43px;
			text-indent: -9000px;
			cursor: pointer;
			z-index: 100;
			left: 5px;
		}

		* {
			-webkit-box-sizing: border-box;
			-moz-box-sizing: border-box;
			box-sizing: border-box;
		}

		.banner-btn a {
			background: green;
			font-size: 1em;
			padding: 9px 30px;
			color: #fff;
			cursor: pointer;
			outline: none;
			-webkit-appearance: none;
			transition: all 0.3s;
			text-transform: uppercase;
			font-weight: 100;
			border: 1px solid;
		}
	</style>

</head>

<body class="common-home page-home layout-">
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
			<!-- /sys-notification -->

			<div class="slideshow " id="pavo-slideshow">
				<div class="dj">
					<div class="row">
						<div class="col-lg-12 col-md-12  ">
							<div class="box layerslider-wrapper" style="width:100%;">
								<div class="bannercontainer banner-boxed" style="padding: 0px;margin: 0px 0px 20px;">
									<div id="sliderlayer578295359" class="rev_slider boxedbanner" style="width:100%;height:595px; ">
										<ul>
											<li data-masterspeed="300" data-transition="random" data-slotamount="7" data-thumb="image/catalog/demo/Slide/slide.jpg">
												<img src="image/catalog/demo/Slide/slide.jpg" alt="" />
											</li>
											<li data-masterspeed="300" data-transition="random" data-slotamount="7" data-thumb="image/catalog/demo/Slide/slide2.jpg"> <img src="image/catalog/demo/Slide/slide2.jpg" alt="" />
											</li>
											<li data-masterspeed="300" data-transition="random" data-slotamount="7" data-thumb="image/catalog/demo/Slide/slide3.jpg">
												<img src="image/catalog/demo/Slide/slide3.jpg" alt="" />
											</li>
										</ul>
										<div class="tp-bannertimer tp-bottom"></div>
									</div>
								</div>
							</div>

							<!--
			##############################
			 - ACTIVATE THE BANNER HERE -
			##############################
	-->
							<script type="text/javascript">
								var tpj = jQuery;
								if (tpj.fn.cssOriginal != undefined)
									tpj.fn.css = tpj.fn.cssOriginal;

								tpj('#sliderlayer578295359').revolution({
									delay: 9000,
									startheight: 595,
									startwidth: 1170,


									hideThumbs: 0,

									thumbWidth: 100,
									thumbHeight: 50,
									thumbAmount: 5,

									navigationType: "bullet",
									navigationArrows: "verticalcentered",
									navigationStyle: "round",

									navOffsetHorizontal: 0,
									navOffsetVertical: 20,

									touchenabled: "on",
									onHoverStop: "on",
									shuffle: "off",
									stopAtSlide: -1,
									stopAfterLoops: -1,

									hideCaptionAtLimit: 0,
									hideAllCaptionAtLilmit: 0,
									hideSliderAtLimit: 0,
									fullWidth: "off",
									shadow: 2


								});
							</script>
						</div>
					</div>
				</div>
			</div>
			<div class="showcase " id="pavo-showcase">
				<div class="dj">
					<div class="row">
						<div class="col-lg-12 col-md-12  ">
							<!-- aaaaaaaa -->
							<div id="pts-bannerbuilder" class="clearfix box hidden-xs">
								<div class="pts-dj ">
									<div class="pts-inner">
										<div class="row row-level-1">
											<div class="row-inner clearfix">
												<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
													<div class="col-inner">
														<div class="banner-wrapper">
															<a href="#"><img src="image/catalog/demo/banners/banner1.png" class="img-responsive" alt=""></a>
														</div>
													</div>
												</div>
												<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
													<div class="col-inner">
														<div class="banner-wrapper">
															<a href="#"><img src="image/catalog/demo/banners/banner2.png" class="img-responsive" alt=""></a>
														</div>
													</div>
												</div>
												<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
													<div class="col-inner">
														<div class="banner-wrapper">
															<a href="#"><img src="image/catalog/demo/banners/banner3.png" class="img-responsive" alt=""></a>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>

							<!-- aaaaaaaa -->
						</div>
					</div>
				</div>
			</div>
			<div class="promotion " id="pavo-promotion">
				<div class="dj">
					<div class="row">
						<div class="col-lg-12 col-md-12  ">
							<div class="box producttabs  module_class ">
								<div class="module-desc">
									<p><br></p>
								</div>
								<div class="tab-nav">
									<ul class="nav nav-tabs bullet" id="producttabs1526277156">
										<li><a href="#tab-latest1526277156" data-toggle="tab">Latest</a></li>
										<li><a href="#tab-bestseller1526277156" data-toggle="tab">Best Seller</a></li>
										<li><a href="#tab-special1526277156" data-toggle="tab">Special</a></li>

									</ul>
								</div>
								<div class="tab-content box-content">
									<div class="tab-pane box-products  tabcarousel1526277156 slide" id="tab-latest1526277156">
										<div class="carousel-inner">
											<div class=" products-block item active">
												<div class="row products-row">
													<?php

													include("pagination/function.php");
													$page = (int) (!isset($_GET["page"]) ? 1 : $_GET["page"]);
													$limit = 12; //if you want to dispaly 10 records per page then you have to change here
													$startpoint = ($page * $limit) - $limit;
													$statement = "product"; //you have to pass your query over here

													$res = mysqli_query($link, "select * from {$statement} WHERE latest='Latest' LIMIT {$startpoint} , {$limit}");
													// $res = mysqli_query($link,"SELECT * FROM `product` WHERE `product_secondary_category`='chairs';");
													while ($row = mysqli_fetch_array($res)) {
													?>
														<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 product-col">
															<div class="product-block" itemtype="http://schema.org/Product" itemscope>
																<div class="image">
																	<span class="product-label-special label">Sale</span>
																	<div class="face">
																		<a class="img" href="product_details.php?id=<?php echo $row["id"]; ?>"><img src="./Admin/<?php echo $row["product_image"]; ?>" alt="<?php echo $row["product_name"]; ?>" class="img-responsive" width="300" height="352" /></a>
																	</div>
																	<a href="./Admin/<?php echo $row["product_image"]; ?>" class="info-view colorbox product-zoom cboxElement" title="<?php echo $row["product_name"]; ?>"><span class="fa fa-search-plus"></span></a>

																</div>
																<div class="product-meta">
																	<h3 class="name"><a href="product_details.php?id=<?php echo $row["id"]; ?>"><?php echo $row["product_name"]; ?></a></h3>
																	<div class="description hidden" itemprop="description">
																		<?php echo $row["product_desc"]; ?>
																	</div>
																	<div class="rating">
																		<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
																		<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
																		<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
																		<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
																		<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
																	</div>
																	<div class="price" itemtype="http://schema.org/Offer" itemscope itemprop="offers">
																		<span class="price-new">$<?php echo $row["product_price"]; ?></span>&nbsp;
																		<span class="price-old">$<?php echo $row["product_c_price"]; ?></span>
																		<meta content="26.00" itemprop="price">
																		<meta content="" itemprop="priceCurrency">
																	</div>
																	<div class="cart">
																		<input type="button" value="Add to Cart" onclick="cart.addcart('46');" class="button" />
																	</div>
																	<div class="wishlist">
																		<a class="fa fa-heart" onclick="wishlist.addwishlist('46');" title="Add to Wish List">
																			<span>Add to Wish List</span>
																		</a>
																	</div>

																</div>
															</div>
														</div>

													<?php

													}
													?>


												</div>
											</div>
										</div>


									</div>
									<div class="tab-pane box-products  tabcarousel1526277156 slide" id="tab-bestseller1526277156">
										<div class="carousel-inner">
											<div class=" products-block item active">
												<div class="row products-row">
													<?php


													$page = (int) (!isset($_GET["page"]) ? 1 : $_GET["page"]);
													$limit = 12; //if you want to dispaly 10 records per page then you have to change here
													$startpoint = ($page * $limit) - $limit;
													$statement = "product"; //you have to pass your query over here

													$res = mysqli_query($link, "select * from {$statement} WHERE bestseller='BestSeller' LIMIT {$startpoint} , {$limit}");
													// $res = mysqli_query($link,"SELECT * FROM `product` WHERE `product_secondary_category`='chairs';");
													while ($row = mysqli_fetch_array($res)) {
													?>
														<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 product-col">
															<div class="product-block" itemtype="http://schema.org/Product" itemscope>
																<div class="image">
																	<span class="product-label-special label">Sale</span>
																	<div class="face">
																		<a class="img" href="product_details.php?id=<?php echo $row["id"]; ?>"><img src="./Admin/<?php echo $row["product_image"]; ?>" alt="<?php echo $row["product_name"]; ?>" class="img-responsive" width="300" height="352" /></a>
																	</div>
																	<a href="./Admin/<?php echo $row["product_image"]; ?>" class="info-view colorbox product-zoom cboxElement" title="<?php echo $row["product_name"]; ?>"><span class="fa fa-search-plus"></span></a>

																</div>
																<div class="product-meta">
																	<h3 class="name"><a href="product_details.php?id=<?php echo $row["id"]; ?>"><?php echo $row["product_name"]; ?></a></h3>
																	<div class="description hidden" itemprop="description">
																		<?php echo $row["product_desc"]; ?>
																	</div>
																	<div class="rating">
																		<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
																		<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
																		<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
																		<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
																		<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
																	</div>
																	<div class="price" itemtype="http://schema.org/Offer" itemscope itemprop="offers">
																		<span class="price-new">$<?php echo $row["product_price"]; ?></span>&nbsp;
																		<span class="price-old">$<?php echo $row["product_c_price"]; ?></span>
																		<meta content="26.00" itemprop="price">
																		<meta content="" itemprop="priceCurrency">
																	</div>
																	<div class="cart">
																		<input type="button" value="Add to Cart" onclick="cart.addcart('46');" class="button" />
																	</div>
																	<div class="wishlist">
																		<a class="fa fa-heart" onclick="wishlist.addwishlist('46');" title="Add to Wish List">
																			<span>Add to Wish List</span>
																		</a>
																	</div>

																</div>
															</div>
														</div>

													<?php

													}
													?>

												</div>
											</div>
										</div>
									</div>
									<div class="tab-pane box-products  tabcarousel1526277156 slide" id="tab-special1526277156">
										<div class="carousel-inner">
											<div class=" products-block item active">
												<div class="row products-row">
													<?php

													$page = (int) (!isset($_GET["page"]) ? 1 : $_GET["page"]);
													$limit = 12; //if you want to dispaly 10 records per page then you have to change here
													$startpoint = ($page * $limit) - $limit;
													$statement = "product"; //you have to pass your query over here

													$res = mysqli_query($link, "select * from {$statement} WHERE special='special' LIMIT {$startpoint} , {$limit}");
													// $res = mysqli_query($link,"SELECT * FROM `product` WHERE `product_secondary_category`='chairs';");
													while ($row = mysqli_fetch_array($res)) {
													?>
														<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 product-col">
															<div class="product-block" itemtype="http://schema.org/Product" itemscope>
																<div class="image">
																	<span class="product-label-special label">Sale</span>
																	<div class="face">
																		<a class="img" href="product_details.php?id=<?php echo $row["id"]; ?>"><img src="./Admin/<?php echo $row["product_image"]; ?>" alt="<?php echo $row["product_name"]; ?>" class="img-responsive" width="300" height="352" /></a>
																	</div>
																	<a href="./Admin/<?php echo $row["product_image"]; ?>" class="info-view colorbox product-zoom cboxElement" title="<?php echo $row["product_name"]; ?>"><span class="fa fa-search-plus"></span></a>

																</div>
																<div class="product-meta">
																	<h3 class="name"><a href="product_details.php?id=<?php echo $row["id"]; ?>"><?php echo $row["product_name"]; ?></a></h3>
																	<div class="description hidden" itemprop="description">
																		<?php echo $row["product_desc"]; ?>
																	</div>
																	<div class="rating">
																		<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
																		<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
																		<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
																		<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
																		<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
																	</div>
																	<div class="price" itemtype="http://schema.org/Offer" itemscope itemprop="offers">
																		<span class="price-new">$<?php echo $row["product_price"]; ?></span>&nbsp;
																		<span class="price-old">$<?php echo $row["product_c_price"]; ?></span>
																		<meta content="26.00" itemprop="price">
																		<meta content="" itemprop="priceCurrency">
																	</div>
																	<div class="cart">
																		<input type="button" value="Add to Cart" onclick="cart.addcart('46');" class="button" />
																	</div>
																	<div class="wishlist">
																		<a class="fa fa-heart" onclick="wishlist.addwishlist('46');" title="Add to Wish List">
																			<span>Add to Wish List</span>
																		</a>
																	</div>

																</div>
															</div>
														</div>

													<?php

													}
													?>

												</div>
											</div>
										</div>
									</div>

								</div>


							</div>

							<script>
								$(function() {
									$('#producttabs1526277156 a:first').tab('show');
								})
								$('.tabcarousel1526277156').carousel({
									interval: false,
									auto: false,
									pause: 'hover'
								});
							</script>
						</div>
					</div>
				</div>
			</div>

			<div class="dj">
				<div class="row">
					<div id="sidebar-main">
						<div id="content">
							<div id="carousel0" class="box-banner box hidden-xs">
								<ul class="slides">
									<li><a href="#"><img src="image/cache/catalog/demo/banners/banner4-1170x93.png" alt="banner" class="img-responsive" style="width: 100%" /></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- 
  $ospans: allow overrides width of columns base on thiers indexs. format array( column-index=>span number ), example array( 1=> 3 )[value from 1->12]
 -->

			<?php
			include "footer.php";
			?>


		</div>
	</div>
</body>
<!-- Mirrored from demopavothemes.com/pav_furniture/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 05 Aug 2018 09:56:26 GMT -->

</html>