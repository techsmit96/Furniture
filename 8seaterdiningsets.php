<!-- databse connectin -->

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

<!-- Mirrored from demopavothemes.com/pav_furniture/index.php?route=product/category&path=24&sort=rating&order=ASC by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 05 Aug 2018 10:07:52 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>8 Seater Dining Sets</title>
<base  />
    
<?php include "link.php"; ?>

<script>  
         $(function() {  
            $( "#slider-3" ).slider({  
               range:true,  
               min: 0,  
               max: 500,  
               values: [ 50, 300 ],  
               slide: function( event, ui ) {  
                  $( "#price" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );  
               }  
           });  
         $( "#price" ).val( "$" + $( "#slider-3" ).slider( "values", 0 ) +  
            " - $" + $( "#slider-3" ).slider( "values", 1 ) );  
         });  
      </script>


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
    
<!-- /sys-notification -->
    <div class="dj">

     			<ul class="breadcrumb">
      				<li><a href="index.php?route=common/home"><i class="fa fa-home"></i></a></li>
      				<li><a href="allfurniture.php?route=product/category&amp;path=24" style="color:white">All Furniture</a></li>
      				<li><a href="8seaterdiningsets.php?route=product/category&amp;path=24" style="color:white">8 Seater Dining Sets</a></li>
     			</ul>
    		<div class="row">
     	
		   <!--   <section id="sidebar-main">
               <div class="content-product">
                <div id="content">
                 <div class="category-info clearfix">
                  <div class="image"><img src="image/cache/catalog/demo/category-bedroom-880x320.png" alt="Chair" class="img-responsive breadcrumb imgown" /></div>
                  <div class="category-description wrapper">
                   <p><br></p>
                  </div>
                 </div>
                </div>
			   </div>	
              </section> -->
			  <section style="margin-top: 30px;">
               <div style="padding-right:33px;padding-left:33px">
				 <div class="row">
               	  <div class="">
               	   <div class="col-lg-3 col-sm-3">
				 	<div class="left-sidebar">
				     <!--<div class="panel-group category-products" id="accordian">category-productsr-->
       			  	  <!-- <div class="list-group"><h2 style="color: #FE980F; text-transform: uppercase;"><center>Price Filter</center></h2><br>
					  	<input type="hidden" id="hidden_minimum_price" value="0" />
					  	<input type="hidden" id="hidden_maximum_price" value="65000" /> -->
					  	<p>  
         					<label for="price">Price range:</label>  
         						<input type="text" id="price" style="border:0; color:red; font-weight:bold;">  
      					</p>  
      						<div id="slider-3"></div> 
					  
					  
					  <!-- </div> -->
        			<!--  <div class=" brands_products list-group">
        <!--brands_products
					   <h2 style="color: #FE980F; text-transform: uppercase;"><center>Brands</center></h2>
					   <div style="height: 180px; overflow-y: auto; overflow-x: hidden;">
					   	<//?php
						   $query = "select distinct(product_brand) from product order by id desc";
						   $statemnt = $connect->prepare($query);
						   $statemnt->execute();
						   $result = $statemnt->fetchAll();
						   foreach($result as $row)
						   {
							   ?>
						   <div class="list-group-item checkbox">
						   		<label><input type="checkbox" class="common_selector brand" value="<//?php echo $row['product_brand']; ?>"><// ?php echo $row['product_brand']; ?></label>
						   	
						   </div>
						   <//?php
						   }
						   
						   
						   ?>
					   	
					   </div>
					   
					  </div> --><!--/brands_products-->
					  
				  <!--  </div>-->
                  </div>
				</div>
               	</div>
                 	
                  	<div class="col-lg-9 col-sm-9 padding-right">
                  	 <div class="product-filter clearfix">
                      <div class="inner clearfix">
                  <div class="display">
                   <span>Display</span>
                   <div class="btn-group group-switch">
                     <button type="button" id="list-view" class="btn btn-switch" data-toggle="tooltip" title="List"><i class="fa fa-th-list"></i></button>
                         <button type="button" id="grid-view" class="btn btn-switch active" data-toggle="tooltip" title="Grid"><i class="fa fa-th"></i></button>
                   </div>
                  </div>    
                 
                   </div>
                  </div>
                  <div id="products" class="product-grid filter_data"> 
					<div class="products-block">
				     <div class="row products-row">
				     <?php
						 
					 	include("pagination/function.php");
 						$page = (int) (!isset($_GET["page"]) ? 1 : $_GET["page"]);
						 	$limit = 12; //if you want to dispaly 10 records per page then you have to change here
    						$startpoint = ($page * $limit) - $limit;
						 	$statement = "product"; //you have to pass your query over here
						 
						$res = mysqli_query($link,"select * from {$statement} WHERE product_secondary_category='8seater' LIMIT {$startpoint} , {$limit}");
						while($row = mysqli_fetch_array($res))
						{
					 ?>
					 <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 product-col">			
			           <div class="product-block" itemtype="http://schema.org/Product" itemscope>
                        <div class="image">
    	                  <span class="product-label-special label">Sale</span>
                          <div class="face">
                            <a class="img" href="product_details.php?id=<?php echo $row["id"]; ?>"><img src="./Admin/<?php echo $row["product_image"];?>" alt="<?php echo $row["product_name"];?>" class="img-responsive" width="300" height="352" /></a>
                          </div>
                          <a href="./Admin/<?php echo $row["product_image"];?>" class="info-view colorbox product-zoom cboxElement" title="<?php echo $row["product_name"];?>"><span class="fa fa-search-plus"></span></a>
			              <div class="product_quickview">
			               <a class="pav-colorbox iframe-link" href="index99bb.html?route=themecontrol/product&amp;product_id=46"  title="Quick View" ><span class="fa fa-eye"></span>Quick View</a>
		                  </div>
				         </div>
		                <div class="product-meta">
		                  <h3 class="name"><a href="product_details.php?id=<?php echo $row["id"]; ?>"><?php echo $row["product_name"];?></a></h3>
                          <div class="description hidden" itemprop="description">
							<?php echo $row["product_desc"];?>
						  </div>
						  <div class="rating">
						    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
												<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
												<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
												<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
												<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
						  </div>
		                  <div class="price" itemtype="http://schema.org/Offer" itemscope itemprop="offers">
						    <span class="price-new">$<?php echo $row["product_price"];?></span>&nbsp;
				            <span class="price-old">$<?php echo $row["product_c_price"]; ?></span> 
				            <meta content="26.00" itemprop="price">
							<meta content="" itemprop="priceCurrency">
		                  </div>
		                  <div class="cart">
				               <input type="button" value="Add to Cart" onclick="cart.addcart('46');" class="button" />			
			              </div>
			              <div class="wishlist">
	  	                         <a class="fa fa-heart" onclick="wishlist.addwishlist('46');"  title="Add to Wish List" >
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
                <div><br></div>
                 <ul class = "pagination">
                 	<?php
                        echo pagination($statement,$limit,$page);
                    ?>
                 </ul>
                 
                  </div>
				  </div>
					</div>
				</div>
               </div>
			  </section>
          <!-- <div class="paging clearfix"></div>-->
          		<div><br></div>
    		</div>
     </div>
 <!-- 
  $ospans: allow overrides width of columns base on thiers indexs. format array( column-index=>span number ), example array( 1=> 3 )[value from 1->12]
 -->
   <!--javascript and jquery code for price filter and brand filter -->
    <script type="text/javascript">
		//brand filter javascript
	 /* $(document).ready(function(){
		filter_data();
		
		function filter_data()
		{
			$('.filter_data').html('<div id="loading" style="" ></div>');
			var action = 'fetch_data';
			var minimum_price = $('#hidden_minimum_price').val();
			var maximum_price = $('#hidden_maximum_price').val();
			var brand = get_filter('brand');
			$.ajax({
				url:"fetch_data.php",
				method:"POST",
				data:{action:action, minimum_price:minimum_price, maximum_price:maximum_price, brand:brand},
				   success:function(data){
						$('.filter_data').html(data);
			}
			});
		}
	
		function get_filter(class_name)
		{
			var filter = [];
			$('.'+class_name+':checked').each(function(){
				filter.push($(this).val());
			});
			return filter;
			
		}
		
		$('.common_selector').click(function(){
				filter_data();
		});
	  });*/
		
	  </script>
 	
    <?php
	 	include "footer.php";
	 ?>
	</div>
</body>
<!-- Mirrored from demopavothemes.com/pav_furniture/index.php?route=product/category&path=24&sort=rating&order=ASC by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 05 Aug 2018 10:07:56 GMT -->
</html>