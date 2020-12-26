<!-- databse connectin -->

<?php
$id = $_GET["id"];

include "./connect/connection.php";

if(isset($_POST["submit1"]))
{
	$d=0;
	if(isset($_COOKIE['item']))
	{
		foreach($_COOKIE['item'] as $name => $value)
		{
			$d = $d+1;
		}
		$d = $d+1;
	}
	else
	{
		$d = $d+1;
	}
	
	//to get item description from table
	$res3=mysqli_query($link,"select * from product where id=$id");
	while($row3=mysqli_fetch_array($res3))
	{
		$img1 = $row3["product_image"];
		$nm = $row3["product_name"];
		$prize = $row3["product_price"];
		$qty = $_POST['input-quantity'];
		$total = $prize*$qty;
	
	}
	if(isset($_COOKIE['item']))   //this is for check cookies are available or not
	{
		foreach ($_COOKIE['item'] as $name1 => $value) //this is for looping as per cookies if 3 cookies then loop move
		{
			$values11 = explode("__",$value);
			$found = 0;
			if($img1 == $values11[0]) //this is for check same cookies available or not if available then increase
			{
				//check here for quantity add in the cart for more than available quantity
				$found = $found + 1;
				$qty = $values11[3] + $qty;
				
				$tb_qty;
				$res = mysqli_query($link,"select * from product where product_image='$img1'");
				while($row=mysqli_fetch_array($res))
				{
					$tb_qty = $row["product_qty"];
				}
				if($tb_qty < $qty){
				?>
					<script type="text/javascript">
						alert("This much quantity not available");
					</script>	
				<?php
					
				}else{
					
				$total = $values11[2]*$qty;
				setcookie("item[$name1]",$img1."__".$nm."__".$prize."__".$qty."__".$total,time()+1800);
				}
			}
		}
		if($found==0)
		{
			$tb_qty;
			$res = mysqli_query($link,"select * from product where product_image='$img1'");
			while($row=mysqli_fetch_array($res))
			{
				$tb_qty = $row["product_qty"];
			}
			if($tb_qty < $qty){
			?>
				<script type="text/javascript">
					alert("This much quantity not available");
				</script>	
			<?php
				
			}else{
					
				setcookie("item[$d]",$img1."__".$nm."__".$prize."__".$qty."__".$total,time()+1800); //new
			}
		}
			
	}
	else
	{
		$tb_qty;
		$res = mysqli_query($link,"select * from product where product_image='$img1'");
		while($row=mysqli_fetch_array($res))
		{
			$tb_qty = $row["product_qty"];
		}
		if($tb_qty < $qty){
		?>
			<script type="text/javascript">
				alert("This much quantity not available");
			</script>	
		<?php
				
		}else{
					
			setcookie("item[$d]",$img1."__".$nm."__".$prize."__".$qty."__".$total,time()+1800); //new
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
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Product Details</title>
<base  />
    
<?php include "link.php"; ?>
<!--<link href="catalog/view/css/bootstrap.min.css" rel="stylesheet">
<link href="catalog/view/css/font-awesome.min.css" rel="stylesheet">
<link href="catalog/view/css/prettyPhoto.css" rel="stylesheet">
<link href="catalog/view/css/price-range.css" rel="stylesheet">
<link href="catalog/view/css/animate.css" rel="stylesheet">
<link href="catalog/view/css/main.css" rel="stylesheet">
<link href="catalog/view/css/responsive.css" rel="stylesheet">-->



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
      				<li><a href="chair.php?route=product/category&amp;path=24" style="color:white">Product_details</a></li>
     			</ul>
    		<div class="row">
              <section>
              	<div style="padding-right:33px;padding-left:33px">
				 <div class="row">
               	  <div class="hidden-sm hidden-xs">
               	   <div class="col-lg-3 col-sm-3">
				 	<div class="left-sidebar">
				     <div class="panel-group category-products" id="accordian"><!--category-productsr-->
        			  <div class="brands_products">
        			<!--brands_products-->
					   <h2 style="color: #FE980F; text-transform: uppercase;"><center>Brands</center></h2>
					   <div class="brands-name">
					    <ul class="nav nav-pills nav-stacked">
						 <li><a href="link_form.php?link=oriflame"><img class="img-responsive" src="image/brands/oriflame.png" style="width:200px"></a></li>
						 <li><a href="link_form.php?link=nishat"><img class="img-responsive" src="image/brands/nishat-linen-logo.png" style="width:200px"></a></li>
						 <li><a href="link_form.php?link=mariab"><img class="img-responsive" src="image/brands/MARIAB-Logo.png" style="width:200px"></a></li>
						 <li><a href="link_form.php?link=sana safinaz"><img class="img-responsive" src="image/brands/sana-safinaz.png" style="width:200px"></a></li>
						 <li><a href="link_form.php?link=sobia nazir"><img class="img-responsive" src="image/brands/sobia-nazir.png" style="width:200px"></a></li>
   					    </ul>
					   </div>
					  </div>
					  <!--/brands_products-->
					  <div class="paging clearfix"><h2>Price Filter</h2></div>
				   	 </div>
                  	</div>
             	   </div>
				  </div>
            	   
            	   <?php
					$res=mysqli_query($link,"select * from product where id=$id");
					while($row=mysqli_fetch_array($res))
					{
					?>
           	   		
           	   		<!-- product info here-->
           	   	
           	   		<div class="col-lg-9 col-sm-9">
           	   		 <div class="product-info">
    				 <div class="row">
        			  <div class="col-lg-5 col-md-6 col-sm-6 col-xs-12 image-container">
        			   <div id="img-detail" class="image">
						<div class="product-label-special label">Sale</div>
      					<a href="./Admin/<?php echo $row["product_image"];?>" class="info-view colorbox product-zoom cboxElement" title="<?php echo $row["product_name"];?>">
            			 <img src="./Admin/<?php echo $row["product_image"];?>" title="<?php echo $row["product_name"];?>" alt="<?php echo $row["product_name"];?>" id="image" class="img-responsive"/>
        				</a>
					   </div>   
					  </div>    
					 <form name="form1" action="" method="post">      
					  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-7"> <!-- product information-->
					   <h1><?php echo $row["product_name"];?></h1>
                        <div class="review">
                         <p>
                          <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                          <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                          <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                          <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                          <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                          <a href="#review-form" class="popup-with-form" onclick="$('a[href=\'#tab-review\']').trigger('click'); return false;" >0 reviews</a> / <a href="#review-form"  class="popup-with-form" onclick="$('a[href=\'#tab-review\']').trigger('click'); return false;" >Write a review</a>
                         </p>
            			</div>
                		<div class="share clearfix"><!-- AddThis Button BEGIN -->
            			 <div class="addthis_default_style">
                         	<a class="addthis_button_compact"></a>
                         	<a class="addthis_button_email"></a><a class="addthis_button_print"></a>
                         	<a class="addthis_button_facebook"></a>
                         	<a class="addthis_button_twitter"></a>
                         </div>
            			 <script type="text/javascript" src="../../s7.addthis.com/js/250/addthis_widget.js"></script>
            <!-- AddThis Button END -->
        				</div>
        				<ul class="list-unstyled description">
                         <li><b>Brand:</b> <?php echo $row["product_brand"];?></li>
                         <li><b>Product Type:</b> <?php echo $row["product_type"]; ?></li>
                         <li><b>Reward Points:</b> 200</li>
                         <li><b class="availability">Availability:</b> <?php echo $row["product_qty"];?></li>
        				</ul>
						<div class="price">
                         <ul class="list-unstyled">
                           <li> 
                           <span class="text-price"> <?php echo $row["product_price"];?> </span> 
                           <span class="price-old" style="text-decoration: line-through;"><?php echo $row["product_c_price"];?></span> </li>
                           <li class="price-tax">Ex Tax: $90.00</li>
                         </ul>
          				</div>
                		<!--<div id="product" class="product-extra ">
                         
						 <div class="quantity-adder clearfix">
                			             
             			 </div>     
						<div class="product-action">
                			<div class="cart">
                    			<button type="submit" name="submit1" id="button-cart" data-loading-text="Loading..." class="button"><span>Add to Cart</span></button>
                			</div>
            			</div>
            		   </div>-->
            		   Qty<input type="text" name="input-quantity" value="1" size="2" id="input-quantity"/>
            		   <button type="submit" name="submit1" id="button-cart" data-loading-text="Loading..." class="button btn btn-fefault cart"><span><i class="fa fa-shopping-cart"></i> Add to Cart</span></button>
            		  </div>
					</form>
					 </div>
					</div>
           	   	
           	   		<!--end product-info-->
           	   
           	   
     				<div class="box product-box-bottom">
    				 <ul class="nav nav-tabs border">
        				<li class="active"><a href="#tab-description" data-toggle="tab">Description</a></li>
                            <li><a href="#tab-review" data-toggle="tab">Reviews (0)</a></li>
                     </ul>
    				 <div class="tab-content">
        			 <div class="tab-pane active" id="tab-description"><p><?php echo $row["product_desc"];?></p>
					</div>
                    <div class="tab-pane" id="tab-review">
					 <div id="review"></div>
                	  <p><a href="#review-form"  class="popup-with-form btn btn-sm btn-danger" onclick="$('a[href=\'#tab-review\']').trigger('click'); return false;" >Write a review</a></p>
					  <div class="hide">
               		   <div id="review-form" class="panel review-form-width">
               		   	<div class="panel-body">
                		 <form class="form-horizontal ">
                 		  <h2>Write a review</h2>
                    		<div class="form-group required">
                        		<div class="col-sm-12">
                            		<label class="control-label" for="input-name">Your Name</label>
                            		<input type="text" name="name" value="" id="input-name" class="form-control" />
                        		</div>
                   		 	</div>
                    		<div class="form-group required">
                        		<div class="col-sm-12">
                            		<label class="control-label" for="input-review">Your Review</label>
                            		<textarea name="text" rows="5" id="input-review" class="form-control"></textarea>
                           	 		<div class="help-block"><span class="text-danger">Note:</span> HTML is not translated!</div>
                        		</div>
                    		</div>
                    		<div class="form-group required">
                        		<div class="col-sm-12">
                            		<label class="control-label">Rating</label>&nbsp;&nbsp;&nbsp; Bad&nbsp;
                            		<input type="radio" name="rating" value="1" />&nbsp;
                            		<input type="radio" name="rating" value="2" />&nbsp;
                            		<input type="radio" name="rating" value="3" />&nbsp;
                            		<input type="radio" name="rating" value="4" />&nbsp;
                            		<input type="radio" name="rating" value="5" />&nbsp;Good</div>
                    		</div>
                     		<div class="form-group required">
    							<div class="col-sm-offset-2 col-sm-10">
    								<div class="g-recaptcha" data-sitekey="6LcTyAYTAAAAAD3hKJNuJVIZbRjJRo33MbF4qF7n"></div>
      							</div>
  							</div>
                			<div class="buttons clearfix">
                        		<div class="pull-right">
                           			<button type="button" id="button-review" data-loading-text="Loading..." class="btn btn-primary">Continue</button>
                        		</div>
                    		</div>
                		  </div>
                		 </div>
                		</div>
					   </div>
                      </div>
             	   </div>
            	   <?php
					
					}
					?>
					<!-- Garbage Dscription 
   				 		
   				 		<div class="box product-box-bottom">
    				 <ul class="nav nav-tabs border">
        				<li class="active"><a href="#tab-description" data-toggle="tab">Description</a></li>
                            <li><a href="#tab-review" data-toggle="tab">Reviews (0)</a></li>
                     </ul>
    				 <div class="tab-content">
        			 <div class="tab-pane active" id="tab-description"><p><?php echo $row["product_c_price"];?></p>
					</div>
                    <div class="tab-pane" id="tab-review">
					 <div id="review"></div>
                	  <p><a href="#review-form"  class="popup-with-form btn btn-sm btn-danger" onclick="$('a[href=\'#tab-review\']').trigger('click'); return false;" >Write a review</a></p>
					  <div class="hide">
               		   <div id="review-form" class="panel review-form-width">
               		   	<div class="panel-body">
                		 <form class="form-horizontal ">
                 		  <h2>Write a review</h2>
                    		<div class="form-group required">
                        		<div class="col-sm-12">
                            		<label class="control-label" for="input-name">Your Name</label>
                            		<input type="text" name="name" value="" id="input-name" class="form-control" />
                        		</div>
                   		 	</div>
                    		<div class="form-group required">
                        		<div class="col-sm-12">
                            		<label class="control-label" for="input-review">Your Review</label>
                            		<textarea name="text" rows="5" id="input-review" class="form-control"></textarea>
                           	 		<div class="help-block"><span class="text-danger">Note:</span> HTML is not translated!</div>
                        		</div>
                    		</div>
                    		<div class="form-group required">
                        		<div class="col-sm-12">
                            		<label class="control-label">Rating</label>&nbsp;&nbsp;&nbsp; Bad&nbsp;
                            		<input type="radio" name="rating" value="1" />&nbsp;
                            		<input type="radio" name="rating" value="2" />&nbsp;
                            		<input type="radio" name="rating" value="3" />&nbsp;
                            		<input type="radio" name="rating" value="4" />&nbsp;
                            		<input type="radio" name="rating" value="5" />&nbsp;Good</div>
                    		</div>
                     		<div class="form-group required">
    							<div class="col-sm-offset-2 col-sm-10">
    								<div class="g-recaptcha" data-sitekey="6LcTyAYTAAAAAD3hKJNuJVIZbRjJRo33MbF4qF7n"></div>
      							</div>
  							</div>
                			<div class="buttons clearfix">
                        		<div class="pull-right">
                           			<button type="button" id="button-review" data-loading-text="Loading..." class="btn btn-primary">Continue</button>
                        		</div>
                    		</div>
                		   </form>
                		  </div>
                		 </div>
                		</div>
					   </div>
                      </div>
             	   </div>
             	   
             	  			 End-->
				  </div>
			    </form>
			
				 </div>
				</div>
			   </section>    
			</div>
  </div>
                
  <?php
	 	include "footer.php";
	 ?>
	</div>
</body>
<!-- Mirrored from demopavothemes.com/pav_furniture/index.php?route=product/category&path=24&sort=rating&order=ASC by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 05 Aug 2018 10:07:56 GMT -->
</html>