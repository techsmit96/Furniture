 <footer id="footer">
 	<div class="footer-top " id="pavo-footer-top">
 		<div class="dj">
 			<div class="inner">
 				<div class="row">
 					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
 						<div class="pav-carousel hidden-xs">
 							<div class="box-heading">
 								<span>Top Services</span>
 							</div>
 							<div id="pavcarousel1" class="carousel slide box pavcarousel">
 								<div class="carousel-inner">
 									<div class="item active">
 										<div class="row">
 											<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
 												<div class="item-inner">
 													<a href="#"><img src="image/Brands/godrejinterio.jpg" alt="Godrej Interio" class="img-responsive" /></a>
 												</div>
 											</div>
 											<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
 												<div class="item-inner">
 													<a href="#"><img src="image/Brands/ushalexus1.jpg" alt="Usha Lexus" class="img-responsive" /></a>
 												</div>
 											</div>
 											<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
 												<div class="item-inner">
 													<a href="#"><img src="image/Brands/zuari1.png" alt="Zuari" class="img-responsive" /></a>
 												</div>
 											</div>
 											<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
 												<div class="item-inner">
 													<a href="#"><img src="image/Brands/durian1.png" alt="Durian" class="img-responsive" /></a>
 												</div>
 											</div>
 											<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
 												<div class="item-inner">
 													<a href="#"><img src="image/Brands/damro1.jpg" alt="Damro" class="img-responsive" /></a>
 												</div>
 											</div>
 											<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
 												<div class="item-inner">
 													<a href="#"><img src="image/Brands/Evok1.jpg" alt="Evok" class="img-responsive" /></a>
 												</div>
 											</div>
 										</div>
 									</div>
 									<div class="item ">
 										<div class="row">
 											<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
 												<div class="item-inner">
 													<a href="#"><img src="image/Brands/stylespa1.png" alt="Style Spa" class="img-responsive" /></a>
 												</div>
 											</div>
 											<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
 												<div class="item-inner">
 													<a href="#"><img src="image/Brands/hulsta1.png" alt="Hulsta" class="img-responsive" /></a>
 												</div>
 											</div>
 											<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
 												<div class="item-inner">
 													<a href="#"><img src="image/Brands/IKEA1.png" alt="IKEA" class="img-responsive" /></a>
 												</div>
 											</div>
 											<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
 												<div class="item-inner">
 													<a href="#"><img src="image/Brands/wipro1.jpg" alt="Wipro Furniture" class="img-responsive" /></a>
 												</div>
 											</div>
 										</div>
 									</div>
 								</div>
 								<a class="carousel-control left" href="#pavcarousel1" data-slide="prev">&lsaquo;</a>
 								<a class="carousel-control right" href="#pavcarousel1" data-slide="next">&rsaquo;</a>
 							</div>
 						</div>
 						<script type="text/javascript">
 							<!--
 							$('#pavcarousel1').carousel({
 								interval: false
 							});
 							-->
 						</script>
 					</div>
 				</div>
 			</div>
 		</div>
 	</div>

 	<div class="footer-center">
 		<div class="dj">
 			<div class="footer-center-wrap">
 				<div class="row">
 					<div class="column col-xs-12 col-sm-6 col-lg-3 col-md-3">
 						<div class="box contact-us">
 							<div class="box-heading"><span>Contact</span></div>
 							<?php
								$link = mysqli_connect("localhost", "root", "");
								mysqli_select_db($link, "furniture");

								$res1 = mysqli_query($link, "select * from admin_contact");

								while ($row = mysqli_fetch_array($res1)) {
								?>

 								<ul>
 									<li>
 										<i class="icon fa fa-phone">&nbsp;</i>
 										<span><?php echo $row['mobile']; ?></span>
 									</li>

 									<li>
 										<i class="icon fa fa-phone">&nbsp; </i>
 										<span><?php echo $row['phone']; ?></span>
 									</li>
 									<li>
 										<i class="icon fa fa-envelope-o">&nbsp; </i>
 										<span><?php echo $row['email'] ?></span>
 									</li>
 								</ul>
 							<?php
								}
								?>
 						</div>

 					</div>
 					<div class="column col-xs-12 col-sm-6 col-lg-2 col-md-2">
 						<div class="box">
 							<div class="box-heading"><span>Customer Service</span></div>
 							<ul class="list">
 								<li><a href="contactus.php?route=information/contact">Contact Us</a></li>
 								<li><a href="index.php?route=account/return/add">Returns</a></li>
 								<li><a href="index.php?route=information/sitemap">Site Map</a></li>
 								<li><a href="index.php?route=product/manufacturer">Brands</a></li>
 								<li><a href="index.php?route=account/voucher">Gift Vouchers</a></li>
 							</ul>
 						</div>
 					</div>
 					<div class="column col-xs-12 col-sm-6 col-lg-2 col-md-2">
 						<div class="box info">
 							<div class="box-heading"><span>Information</span></div>
 							<ul class="list">
 								<li><a href="index.php?route=information/information&amp;information_id=4">About Us</a></li>
 								<li><a href="index.php?route=information/information&amp;information_id=6">Del</a></li>
 								<li><a href="index.php?route=information/information&amp;information_id=3">Privacy Policy</a></li>
 								<li><a href="index.php?route=information/information&amp;information_id=5">Terms &amp; Conditions</a></li>
 							</ul>
 						</div>
 					</div>
 					<div class="column col-xs-12 col-sm-6 col-lg-2 col-md-2">
 						<div class="box">
 							<div class="box-heading"><span>My Account</span></div>
 							<ul class="list">
 								<li><a href="login.html?route=account/account">My Account</a></li>
 								<li><a href="login.html?route=account/order">Order History</a></li>
 								<li><a href="login.html?route=account/wishlist">Wish List</a></li>
 								<li><a href="login.html?route=account/newsletter">Newsletter</a></li>
 								<li><a href="index.php?route=product/special">Specials</a></li>
 							</ul>
 						</div>
 					</div>
 					<div class="column col-xs-12 col-sm-6 col-lg-3 col-md-3">
 						<div class=" box newsletter" id="newsletter_660885929">
 							<div class="box-heading">Newsletter</div>

 						</div>


 						<script type="text/javascript">
 							<!--
 							$(document).ready(function() {
 								var id = 'newsletter_660885929';
 								$('#' + id + ' .box-heading').bind('click', function() {
 									$('#' + id).toggleClass('active');
 								});

 								$('#formNewLestter').on('submit', function() {
 									var email = $('.inputNew').val();
 									$(".success_inline, .warning_inline, .error").remove();
 									if (!isValidEmailAddress(email)) {
 										$('.valid').html("<div class=\"error alert alert-danger\">Email is not valid!<button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button></div></div>");
 										$('.inputNew').focus();
 										return false;
 									}

 									var url = "indexa811.html?route=module/pavnewsletter/subscribe";
 									$.ajax({
 										type: "post",
 										url: url,
 										data: $("#formNewLestter").serialize(),
 										dataType: 'json',
 										success: function(json) {
 											$(".success_inline, .warning_inline, .error").remove();
 											if (json['error']) {
 												$('.valid').html("<div class=\"warning_inline alert alert-danger\">" + json['error'] + "<button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button></div>");
 											}
 											if (json['success']) {
 												$('.valid').html("<div class=\"success_inline alert alert-success\">" + json['success'] + "<button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button></div>");
 											}
 										}
 									});
 									return false;
 								});
 							});

 							function isValidEmailAddress(emailAddress) {
 								var pattern = new RegExp(/^(("[\w-\s]+")|([\w-]+(?:\.[\w-]+)*)|("[\w-\s]+")([\w-]+(?:\.[\w-]+)*))(@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][0-9]\.|1[0-9]{2}\.|[0-9]{1,2}\.))((25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\.){2}(25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\]?$)/i);
 								return pattern.test(emailAddress);
 							}

 							<
 							/script>         <
 							/div> <
 							/div> <
 							/div> <
 							/div> <
 							/div>  <
 							/footer> <
 							div id = "powered" >
 								<
 								div class = "dj" >
 								<
 								div class = "wrap-powered clearfix" >
 								<
 								div class = "copyright pull-left" >
 								Copyrirght & copy;
 							2018. Developed By < a href = ""
 							title = "Whatsapp NO: 9405264157" > Sumit < /a> <
 								/div>   <
 								div class = "paypal pull-right" >
 								<
 								img alt = ""
 							src = "image/catalog/paypal.png" >
 								<
 								/div>

 								<
 								/div>    <
 								/div> <
 								/div> <
 								!-- < div class = "sidebar-offcanvas visible-xs visible-sm " >
 								<
 								div class = "offcanvas-inner panel panel-offcanvas" >
 								<
 								div class = "offcanvas-heading panel-heading" >
 								<
 								button type = "button"
 							class = "btn btn-primary"
 							data - toggle = "offcanvas" > < span class = "fa fa-times" > < /span></button >
 								<
 								/div> <
 								div class = "offcanvas-body panel-body" >
 								<
 								div class = "box category highlighted" >
 								<
 								div class = "box-heading" > < span > Categories < /span></div >
 								<
 								div class = "box-content" >
 								<
 								ul id = "accordion"
 							class = "box-category list-group accordion level1" >

 								<
 								li class = "list-group-item accordion-group" >
 								<
 								a href = "index.php?route=product/category&amp;path=38" > < b > HOME < /b></a >
 								<
 								/li> <
 								li class = "list-group-item accordion-group" >
 								<
 								a data - toggle = "collapse"
 							href = "#collapse1" > < b > FURNITURE < /b></a >
 								<
 								div id = "collapse1"
 							class = "panel-collapse collapse" >
 								<
 								ul class = "list-group" >
 								<
 								li class = "list-group-item accordion-group" >
 								<
 								a data - toggle = "collapse"
 							href = "#collapse2" > < b > Living Room < /b></a >
 								<
 								div id = "collapse2"
 							class = "panel-collapse collapse" >
 								<
 								ul class = "list-group" >
 								<
 								li class = "list-group-item" > < a href = "index.php?route=product/category&amp;path=18" > < span class = "title" > Sofa Sets < /span></a > < /li> <
 								li class = "list-group-item" > < a href = "index.php?route=product/category&amp;path=24" > < span class = "title" > Sofa Cum Beds < /span></a > < /li> <
 								li class = "list-group-item" > < a href = "index.php?route=product/category&amp;path=25" > < span class = "title" > Seating < /span></a > < /li> <
 								li class = "list-group-item" > < a href = "index.php?route=product/category&amp;path=29" > < span class = "title" > Chairs < /span> </a > < /li> <
 								li class = "list-group-item" > < a href = "index.php?route=product/category&amp;path=34" > < span class = "title" > Tables < /span></a > < /li> <
 								/ul> <
 								/div> <
 								/li> <
 								li class = "list-group-item accordion-group" >
 								<
 								a data - toggle = "collapse"
 							href = "#collapse3" > < b > Bedroom < /b></a >
 								<
 								div id = "collapse3"
 							class = "panel-collapse collapse" >
 								<
 								ul class = "list-group" >
 								<
 								li > < a href = "index.php?route=product/category&amp;path=17" > < span class = "title" > All Beds < /span></a > < /li> <
 								li > < a href = "index.php?route=product/category&amp;path=20" > < span class = "title" > Single size Beds < /span></a > < /li> <
 								li > < a href = "index.php?route=product/category&amp;path=33" > < span class = "title" > Double size Beds < /span></a > < /li> <
 								li > < a href = "index.php?route=product/category&amp;path=38" > < span class = "title" > King Size Beds < /span></a > < /li> <
 								li > < a href = "index.php?route=product/category&amp;path=41" > < span class = "title" > Beds With Storage < /span></a > < /li> <
 								li > < a href = "index.php?route=product/category&amp;path=42" > < span class = "title" > Kids Bed < /span></a > < /li> <
 								li > < a href = "index.php?route=product/category&amp;path=49" > < span class = "title" > Mattresses < /span></a > < /li> <
 								li > < a href = "index.php?route=product/category&amp;path=49" > < span class = "title" > Dressing Tables < /span></a > < /li> <
 								li > < a href = "index.php?route=product/category&amp;path=49" > < span class = "title" > Bedside Tables < /span></a > < /li> <
 								/ul> <
 								/div> <
 								/li> <
 								li class = "list-group-item accordion-group" >
 								<
 								a data - toggle = "collapse"
 							href = "#collapse4" > < b > Dining Room < /b></a >
 								<
 								div id = "collapse4"
 							class = "panel-collapse collapse" >
 								<
 								ul class = "list-group" >
 								<
 								li > < a href = "index.php?route=product/category&amp;path=17" > < span class = "title" > All Dining Sets < /span></a > < /li> <
 								li > < a href = "index.php?route=product/category&amp;path=20" > < span class = "title" > 4 Seater Dining Sets < /span></a > < /li> <
 								li > < a href = "index.php?route=product/category&amp;path=33" > < span class = "title" > 6 Seater Dining Sets < /span></a > < /li> <
 								li > < a href = "index.php?route=product/category&amp;path=38" > < span class = "title" > 8 Seater Dining Sets < /span></a > < /li> <
 								li > < a href = "index.php?route=product/category&amp;path=41" > < span class = "title" > Dining Tables < /span></a > < /li> <
 								li > < a href = "index.php?route=product/category&amp;path=42" > < span class = "title" > Dining Chairs < /span></a > < /li> <
 								li > < a href = "index.php?route=product/category&amp;path=49" > < span class = "title" > Dining Benches < /span></a > < /li> <
 								li > < a href = "index.php?route=product/category&amp;path=49" > < span class = "title" > Storage < /span></a > < /li>					 <
 								/ul> <
 								/div> <
 								/li> <
 								li class = "list-group-item accordion-group" >
 								<
 								a data - toggle = "collapse"
 							href = "#collapse5" > < b > Study & Office < /b></a >
 								<
 								div id = "collapse5"
 							class = "panel-collapse collapse" >
 								<
 								ul class = "list-group" >
 								<
 								li > < a href = "index.php?route=product/category&amp;path=17" > < span class = "title" > Book Shelves < /span></a > < /li> <
 								li > < a href = "index.php?route=product/category&amp;path=20" > < span class = "title" > Magazine & File Racks < /span></a > < /li> <
 								li > < a href = "index.php?route=product/category&amp;path=33" > < span class = "title" > Study Tables < /span></a > < /li> <
 								li > < a href = "index.php?route=product/category&amp;path=38" > < span class = "title" > Office Tables < /span></a > < /li> <
 								li > < a href = "index.php?route=product/category&amp;path=41" > < span class = "title" > Office Chairs < /span></a > < /li> <
 								li > < a href = "index.php?route=product/category&amp;path=42" > < span class = "title" > Study Chairs < /span></a > < /li>		 <
 								/ul> <
 								/div> <
 								/li> <
 								li class = "list-group-item accordion-group" >
 								<
 								a data - toggle = "collapse"
 							href = "#collapse6" > < b > Outdoor < /b></a >
 								<
 								div id = "collapse6"
 							class = "panel-collapse collapse" >
 								<
 								ul class = "list-group" >
 								<
 								li > < a href = "index.php?route=product/category&amp;path=17" > < span class = "title" > Swings < /span></a > < /li> <
 								li > < a href = "index.php?route=product/category&amp;path=20" > < span class = "title" > Outdoor Chairs < /span></a > < /li> <
 								li > < a href = "index.php?route=product/category&amp;path=33" > < span class = "title" > Outdoor Tables < /span></a > < /li>				 <
 								/ul> <
 								/div> <
 								/li> <
 								li class = "list-group-item accordion-group" >
 								<
 								a data - toggle = "collapse"
 							href = "#collapse7" > < b > Wardrobes < /b></a >
 								<
 								div id = "collapse7"
 							class = "panel-collapse collapse" >
 								<
 								ul class = "list-group" >
 								<
 								li > < a href = "index.php?route=product/category&amp;path=17" > < span class = "title" > All Wardrobes < /span></a > < /li> <
 								li > < a href = "index.php?route=product/category&amp;path=20" > < span class = "title" > 2 Door Wardrobes < /span></a > < /li> <
 								li > < a href = "index.php?route=product/category&amp;path=33" > < span class = "title" > 3 Door Wardrobes < /span></a > < /li> <
 								li > < a href = "index.php?route=product/category&amp;path=38" > < span class = "title" > 4 Door Wardrobes < /span></a > < /li> <
 								li > < a href = "index.php?route=product/category&amp;path=41" > < span class = "title" > Sliding Door Wardrobes < /span></a > < /li> <
 								/ul> <
 								/div> <
 								/li>

 								<
 								/ul>	 <
 								/div> <
 								/li> <
 								li class = "list-group-item accordion-group" >
 								<
 								a data - toggle = "collapse"
 							href = "#collapse8" > < b > HOME FURNISHINGS < /b></a >
 								<
 								div id = "collapse8"
 							class = "panel-collapse collapse" >
 								<
 								div class = "panel-body" >
 								<
 								ul class = "list-group" >
 								<
 								li class = "list-group-item accordion-group" >
 								<
 								a data - toggle = "collapse"
 							href = "#collapse9" > < b > Bed Sheets < /b></a >
 								<
 								div id = "collapse9"
 							class = "panel-collapse collapse" >
 								<
 								ul class = "list-group" >
 								<
 								li > < a href = "index.php?route=product/category&amp;path=18" > < span class = "title" > All Bed Sheets < /span></a > < /li> <
 								li > < a href = "index.php?route=product/category&amp;path=24" > < span class = "title" > King Size Bed Sheets < /span></a > < /li> <
 								li > < a href = "index.php?route=product/category&amp;path=25" > < span class = "title" > Single Bed Sheets < /span></a > < /li> <
 								li > < a href = "index.php?route=product/category&amp;path=29" > < span class = "title" > Fitted Bed Sheets < /span> </a > < /li> <
 								li > < a href = "index.php?route=product/category&amp;path=34" > < span class = "title" > Double Bed Sheets < /span></a > < /li>				 <
 								/ul> <
 								/div> <
 								/li> <
 								li class = "list-group-item accordion-group" >
 								<
 								a data - toggle = "collapse"
 							href = "#collapse10" > < b > Bedding < /b></a >
 								<
 								div id = "collapse10"
 							class = "panel-collapse collapse" >
 								<
 								ul class = "list-group" >
 								<
 								li > < a href = "index.php?route=product/category&amp;path=17" > < span class = "title" > Bed Covers < /span></a > < /li> <
 								li > < a href = "index.php?route=product/category&amp;path=20" > < span class = "title" > Conforters < /span></a > < /li> <
 								li > < a href = "index.php?route=product/category&amp;path=33" > < span class = "title" > A / C Quilts & Blankets < /span></a > < /li> <
 								li > < a href = "index.php?route=product/category&amp;path=38" > < span class = "title" > Quilts / Blanket < /span></a > < /li> <
 								/ul> <
 								/div> <
 								/li> <
 								li class = "list-group-item accordion-group" >
 								<
 								a data - toggle = "collapse"
 							href = "#collapse11" > < b > Pillows & Covers < /b></a >
 								<
 								div id = "collapse11"
 							class = "panel-collapse collapse" >
 								<
 								ul class = "list-group" >
 								<
 								li > < a href = "index.php?route=product/category&amp;path=17" > < span class = "title" > Bed Pillows < /span></a > < /li> <
 								li > < a href = "index.php?route=product/category&amp;path=20" > < span class = "title" > Pillow Covers < /span></a > < /li> <
 								li > < a href = "index.php?route=product/category&amp;path=33" > < span class = "title" > Covers & Inserts < /span></a > < /li> <
 								/ul> <
 								/div> <
 								/li> <
 								li class = "list-group-item accordion-group" >
 								<
 								a data - toggle = "collapse"
 							href = "#collapse12" > < b > Bath Essentials < /b></a >
 								<
 								div id = "collapse12"
 							class = "panel-collapse collapse" >
 								<
 								ul class = "list-group" >
 								<
 								li > < a href = "index.php?route=product/category&amp;path=17" > < span class = "title" > Towels < /span></a > < /li> <
 								li > < a href = "index.php?route=product/category&amp;path=20" > < span class = "title" > Bath Mats & Rugs < /span></a > < /li> <
 								li > < a href = "index.php?route=product/category&amp;path=33" > < span class = "title" > Bath Robes < /span></a > < /li> <
 								li > < a href = "index.php?route=product/category&amp;path=38" > < span class = "title" > Shower Curtains < /span></a > < /li>	 <
 								/ul> <
 								/div> <
 								/li> <
 								/ul>	 <
 								/div> <
 								/div> <
 								/li> <
 								li class = "list-group-item accordion-group" >
 								<
 								a data - toggle = "collapse"
 							href = "#collapse13" > < b > HOME DECOR < /b></a >
 								<
 								div id = "collapse13"
 							class = "panel-collapse collapse" >
 								<
 								div class = "panel-body" >
 								<
 								ul class = "list-group" >
 								<
 								li class = "list-group-item accordion-group" >
 								<
 								a data - toggle = "collapse"
 							href = "#collapse14" > < b > Wall Decor < /b></a >
 								<
 								div id = "collapse14"
 							class = "panel-collapse collapse" >
 								<
 								ul class = "list-group" >
 								<
 								li > < a href = "index.php?route=product/category&amp;path=18" > < span class = "title" > Paintings < /span></a > < /li> <
 								li > < a href = "index.php?route=product/category&amp;path=24" > < span class = "title" > Wall Art < /span></a > < /li> <
 								li > < a href = "index.php?route=product/category&amp;path=25" > < span class = "title" > Wall Accents < /span></a > < /li> <
 								/ul> <
 								/div> <
 								/li> <
 								li class = "list-group-item accordion-group" >
 								<
 								a data - toggle = "collapse"
 							href = "#collapse15" > < b > Candles & Fragrances < /b></a >
 								<
 								div id = "collapse15"
 							class = "panel-collapse collapse" >
 								<
 								ul class = "list-group" >
 								<
 								li > < a href = "index.php?route=product/category&amp;path=17" > < span class = "title" > Candles < /span></a > < /li> <
 								li > < a href = "index.php?route=product/category&amp;path=20" > < span class = "title" > Candle Holders < /span></a > < /li> <
 								li > < a href = "index.php?route=product/category&amp;path=33" > < span class = "title" > Home Fregrances < /span></a > < /li> <
 								/ul> <
 								/div> <
 								/li> <
 								li class = "list-group-item accordion-group" >
 								<
 								a data - toggle = "collapse"
 							href = "#collapse16" > < b > Others < /b></a >
 								<
 								div id = "collapse16"
 							class = "panel-collapse collapse" >
 								<
 								ul class = "list-group" >
 								<
 								li > < a href = "index.php?route=product/category&amp;path=17" > < span class = "title" > Pots & Planters < /span></a > < /li> <
 								li > < a href = "index.php?route=product/category&amp;path=20" > < span class = "title" > Lamps & Lightning < /span></a > < /li> <
 								li > < a href = "index.php?route=product/category&amp;path=33" > < span class = "title" > Showpieces < /span></a > < /li> <
 								li > < a href = "index.php?route=product/category&amp;path=33" > < span class = "title" > Clocks < /span></a > < /li> <
 								/ul> <
 								/div> <
 								/li> <
 								/ul>	 <
 								/div> <
 								/div> <
 								/li> <
 								li class = "list-group-item accordion-group" >
 								<
 								a data - toggle = "collapse"
 							href = "#collapse17" > < b > TABLEWARE < /b></a >
 								<
 								div id = "collapse17"
 							class = "panel-collapse collapse" >
 								<
 								div class = "panel-body" >
 								<
 								ul class = "list-group" >
 								<
 								li class = "list-group-item accordion-group" >
 								<
 								a data - toggle = "collapse"
 							href = "#collapse18" > < b > Cofee & Tea < /b></a >
 								<
 								div id = "collapse18"
 							class = "panel-collapse collapse" >
 								<
 								ul class = "list-group" >
 								<
 								li > < a href = "index.php?route=product/category&amp;path=18" > < span class = "title" > Cofee & Tea Accessories < /span></a > < /li> <
 								li > < a href = "index.php?route=product/category&amp;path=24" > < span class = "title" > Mugs Cups < /span></a > < /li> <
 								li > < a href = "index.php?route=product/category&amp;path=25" > < span class = "title" > Cofee & Tea sets < /span></a > < /li> <
 								li > < a href = "index.php?route=product/category&amp;path=25" > < span class = "title" > Saucers < /span></a > < /li> <
 								/ul> <
 								/div> <
 								/li> <
 								li class = "list-group-item accordion-group" >
 								<
 								a data - toggle = "collapse"
 							href = "#collapse19" > < b > Serving < /b></a >
 								<
 								div id = "collapse19"
 							class = "panel-collapse collapse" >
 								<
 								ul class = "list-group" >
 								<
 								li > < a href = "index.php?route=product/category&amp;path=17" > < span class = "title" > Candles < /span></a > < /li> <
 								li > < a href = "index.php?route=product/category&amp;path=20" > < span class = "title" > Candle Holders < /span></a > < /li> <
 								li > < a href = "index.php?route=product/category&amp;path=33" > < span class = "title" > Home Fregrances < /span></a > < /li> <
 								/ul> <
 								/div> <
 								/li> <
 								li class = "list-group-item accordion-group" >
 								<
 								a data - toggle = "collapse"
 							href = "#collapse20" > < b > Table Essentials < /b></a >
 								<
 								div id = "collapse20"
 							class = "panel-collapse collapse" >
 								<
 								ul class = "list-group" >
 								<
 								li > < a href = "index.php?route=product/category&amp;path=17" > < span class = "title" > Table Cloths < /span></a > < /li> <
 								li > < a href = "index.php?route=product/category&amp;path=20" > < span class = "title" > Napkins & Holders < /span></a > < /li> <
 								li > < a href = "index.php?route=product/category&amp;path=33" > < span class = "title" > Showpieces < /span></a > < /li> <
 								li > < a href = "index.php?route=product/category&amp;path=33" > < span class = "title" > Clocks < /span></a > < /li>	 <
 								/ul> <
 								/div> <
 								/li> <
 								li class = "list-group-item accordion-group" >
 								<
 								a data - toggle = "collapse"
 							href = "#collapse21" > < b > Others < /b></a >
 								<
 								div id = "collapse21"
 							class = "panel-collapse collapse" >
 								<
 								ul class = "list-group" >
 								<
 								li > < a href = "index.php?route=product/category&amp;path=17" > < span class = "title" > Dinners Sets < /span></a > < /li> <
 								li > < a href = "index.php?route=product/category&amp;path=20" > < span class = "title" > Trays < /span></a > < /li> <
 								li > < a href = "index.php?route=product/category&amp;path=33" > < span class = "title" > Plates < /span></a > < /li> <
 								li > < a href = "index.php?route=product/category&amp;path=38" > < span class = "title" > Bowls < /span></a > < /li>					 <
 								/ul> <
 								/div> <
 								/li> <
 								/ul>	 <
 								/div> <
 								/div> <
 								/li> <
 								li class = "list-group-item accordion-group" >
 								<
 								a data - toggle = "collapse"
 							href = "#collapse22" > < b > KITCHENWARE < /b></a >
 								<
 								div id = "collapse22"
 							class = "panel-collapse collapse" >
 								<
 								div class = "panel-body" >
 								<
 								ul class = "list-group" >
 								<
 								li class = "list-group-item accordion-group" >
 								<
 								a data - toggle = "collapse"
 							href = "#collapse23" > < b > Kitchen Storage < /b></a >
 								<
 								div id = "collapse23"
 							class = "panel-collapse collapse" >
 								<
 								ul class = "list-group" >
 								<
 								li > < a href = "index.php?route=product/category&amp;path=18" > < span class = "title" > Food Storage < /span></a > < /li> <
 								li > < a href = "index.php?route=product/category&amp;path=24" > < span class = "title" > Kitchen Organizers < /span></a > < /li> <
 								li > < a href = "index.php?route=product/category&amp;path=25" > < span class = "title" > Containers < /span></a > < /li> <
 								li > < a href = "index.php?route=product/category&amp;path=25" > < span class = "title" > Thermoware < /span></a > < /li> <
 								/ul> <
 								/div> <
 								/li> <
 								li class = "list-group-item accordion-group" >
 								<
 								a data - toggle = "collapse"
 							href = "#collapse24" > < b > Kitchen Tools & Linen < /b></a >
 								<
 								div id = "collapse24"
 							class = "panel-collapse collapse" >
 								<
 								ul class = "list-group" >
 								<
 								li > < a href = "index.php?route=product/category&amp;path=17" > < span class = "title" > Cooking Tools < /span></a > < /li> <
 								li > < a href = "index.php?route=product/category&amp;path=20" > < span class = "title" > Preparation Tools < /span></a > < /li> <
 								li > < a href = "index.php?route=product/category&amp;path=33" > < span class = "title" > Kitchen Gears < /span></a > < /li> <
 								li > < a href = "index.php?route=product/category&amp;path=33" > < span class = "title" > Kitchen Linen < /span></a > < /li>					 <
 								/ul> <
 								/div> <
 								/li> <
 								li class = "list-group-item accordion-group" >
 								<
 								a data - toggle = "collapse"
 							href = "#collapse25" > < b > Appliances < /b></a >
 								<
 								div id = "collapse25"
 							class = "panel-collapse collapse" >
 								<
 								ul class = "list-group" >
 								<
 								li > < a href = "index.php?route=product/category&amp;path=17" > < span class = "title" > Chimney < /span></a > < /li> <
 								li > < a href = "index.php?route=product/category&amp;path=20" > < span class = "title" > Oven / Microwave < /span></a > < /li> <
 								li > < a href = "index.php?route=product/category&amp;path=33" > < span class = "title" > Cooktops & Burners < /span></a > < /li> <
 								li > < a href = "index.php?route=product/category&amp;path=33" > < span class = "title" > Cooking < /span></a > < /li>	 <
 								/ul> <
 								/div> <
 								/li> <
 								li class = "list-group-item accordion-group" >
 								<
 								a data - toggle = "collapse"
 							href = "#collapse26" > < b > Others < /b></a >
 								<
 								div id = "collapse26"
 							class = "panel-collapse collapse" >
 								<
 								ul class = "list-group" >
 								<
 								li > < a href = "index.php?route=product/category&amp;path=17" > < span class = "title" > Cleaning < /span></a > < /li> <
 								li > < a href = "index.php?route=product/category&amp;path=20" > < span class = "title" > Laundry < /span></a > < /li> <
 								li > < a href = "index.php?route=product/category&amp;path=33" > < span class = "title" > Dustbins < /span></a > < /li> <
 								li > < a href = "index.php?route=product/category&amp;path=38" > < span class = "title" > Shower Curtains < /span></a > < /li>	 <
 								/ul> <
 								/div> <
 								/li> <
 								/ul>	 <
 								/div> <
 								/div> <
 								/li> <
 								li class = "list-group-item accordion-group" >
 								<
 								a href = "index.php?route=product/category&amp;path=38" > < b > BLOGS < /b></a >
 								<
 								/li> <
 								li class = "list-group-item accordion-group" >
 								<
 								a href = "index.php?route=product/category&amp;path=38" > < b > ABOUT US < /b></a >
 								<
 								/li> <
 								/ul> <
 								/div> <
 								/div> <
 								script type = "text/javascript" >
 								$(document).ready(function() {
 									var active = $('.collapse.in').attr('id');
 									$('span[data-target=#' + active + ']').html("-");
 									$('.collapse').on('show.bs.collapse', function() {
 										$('span[data-target=#' + $(this).attr('id') + ']').html("-");
 									});
 									$('.collapse').on('hide.bs.collapse', function() {
 										$('span[data-target=#' + $(this).attr('id') + ']').html("+");
 									});
 								}); <
 							/script> <
 							/div> <
 							div class = "offcanvas-footer panel-footer" >
 								<
 								div class = "input-group"
 							id = "offcanvas-search" >
 								<
 								input type = "text"
 							class = "form-control"
 							placeholder = "Search"
 							value = ""
 							name = "search" >
 								<
 								span class = "input-group-btn" >
 								<
 								button class = "btn btn-default"
 							type = "button" > < i class = "fa fa-search" > < /i></button >
 								<
 								/span> <
 								/div> <
 								/div> <
 								/div>  <
 								/div> 
 							-->