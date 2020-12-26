<?php
$connect = new PDO("mysql:host=localhost;dbname=furniture","root", "");

if(isset($_POST["action"]))
{
	$query = "select * from product";
	if(isset($_POST["minimum_price"], $_POST["maximum_price"]) && !empty($_POST["minimum_price"]) && !empty($_POST["maximum_price"]))
	{
		$query .= "product_price between '".$_POST["minimum_price"]."' AND '".$_POST["maximum_price"]."'";
	}
	if(isset($_POST["brand"]))
	{
		$brand_filter = implode("','", $_POST["brand"]);
		$query .="AND product_brand IN('".$brand_filter."')";
	}
	
	$statemnt = $connect->prepare($query);
	$statemnt->execute();
	$result = $statemnt->fetchAll();
	$total_row = $statemnt->rowCount();
	$output = '';
	if($total_row > 0)
	{
		foreach($result as $row)
		{
			$output .='
				<div id="products" class="product-grid filter_data"> 
					<div class="products-block">
				     <div class="row products-row">
				     <?php
						 
					 	include("pagination/function.php");
 						$page = (int) (!isset($_GET["page"]) ? 1 : $_GET["page"]);
						 	$limit = 12; //if you want to dispaly 10 records per page then you have to change here
    						$startpoint = ($page * $limit) - $limit;
						 	$statement = "product"; //you have to pass your query over here
						 
						$res = mysqli_query($link,"select * from {$statement} LIMIT {$startpoint} , {$limit}");
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
				  </div>';
		}
	}
	else
	{
		$output = '<h3>No Data Found</h3>';
	}
	echo $output;
}

?>