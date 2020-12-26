<?php
//session_start();

include "check_session.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>Admin Panel</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="ckeditor/ckeditor.js"></script>
	<!--<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/k.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
-->
	<style>
		.col-lg-7 {
			position: relative;
			min-height: 1px;
			padding-right: 15px;
			padding-left: 15px;
			float: left;
		}

		.col-lg-5 {
			position: relative;
			min-height: 1px;
			padding-right: 15px;
			padding-left: 15px;
			float: right;
		}

		@media (min-width: 1200px) .col-lg-5 {
			/*width: 41.66666667%;
	*/
		}

		@media (min-width: 1200px) .col-lg-5 {
			float: left;

		}

		.panel-body {
			padding: 15px;

		}

		.well {
			min-height: 20px;
			padding: 19px;
			margin-bottom: 20px;
			background-color: #f5f5f5;
			border: 1px solid #e3e3e3;
			border-radius: 4px;
			/*-webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.05);*/
			box-shadow: inset 0 1px 1px rgba(0, 0, 0, .05);
	</style>
</head>

<body>
	<?php
	//session_start();

	include "../connect/connection.php";
	?>
	<div class="panel-body">
		<form action="add_product.php" method="post" name="form" enctype="multipart/form-data">
			<div class="col-lg-7">
				<div class="well">
					<h3>Product Info</h3>
					<p>Title</p>
					<input class="input-lg thumbnail form-control" type="text" name="product_name" id="product_name" autofocus style="width:100%" placeholder="Product Name" required>
					<p>Description</p>
					<textarea class="thumbnail form-control" name="details" id="details" style="width:100%; height:100px" placeholder="write here..." required></textarea>
					<p>Quantity</p>
					<input class="input-lg thumbnail form-control" type="text" name="product_qty" id="product_qty" style="width:100%" pattern="[0-9]+" title="Please enter valid quantity[0-9 digit only]" placeholder="Product Quantity" required>
					<p>Add Image</p>
					<div style="background-color:#CCC">
						<input type="file" onchange="showImage(event)" style="width:100%" name="picture" class="btn thumbnail" id="picture" accept=".png,.jpg,.jpeg" required>
					</div><br>
					<center><img src="" height="200" id="image"></center>
				</div>
				<div class="well">
					<h3>Pricing</h3>
					<p>Price</p>
					<div class="input-group">
						<div class="input-group-addon">Rs</div>
						<input type="text" class="form-control" name="price" id="price" pattern="[0-9]+" title="Please enter valid price[0-9 digit only]" placeholder="0.00" required>
					</div><br>
					<p>Compare at price</p>
					<div class="input-group">
						<div class="input-group-addon">Rs</div>
						<input type="text" name="c_price" id="c_price" class="form-control" pattern="[0-9]+" title="Please enter valid comaprison price[0-9 digit only]" placeholder="0.00" required>
					</div>
				</div>
			</div>
			<div class="col-lg-5">
				<div class="well">
					<h3>Offers Panel</h3>
					<div class="container">
						<label class="checkbox-inline" style="cursor: pointer;">
							<input type="checkbox" name="offers1" id="latest" value="Latest">Latest
						</label>&nbsp;
						<label class="checkbox-inline" style="cursor: pointer;">
							<input type="checkbox" name="offers2" id="bestseller" value="BestSeller">Best Seller
						</label>&nbsp;
						<label class="checkbox-inline" style="cursor: pointer;">
							<input type="checkbox" name="offers3" id="special" value="special">Special
						</label>
					</div>
				</div>
				<div class="well">

					<!-- Three ComboBox-->
					<h3>Categories</h3>
					<p>Category</p>
					<select name="category" id="input-cat" class="form-control " onChange="populate(this.id,'input-primary')" required>
						<option value=""> --- Please Select ---</option>
						<option value="Furniture">Furniture</option>
						<option value="Home Furnishings">Home Furnishings</option>
						<option value="Home Decor">Home Decor</option>
						<option value="TableWare">TableWare</option>
						<option value="KitchenWare">KitchenWare</option>
					</select>
					<p>Primary</p>
					<select name="primary" id="input-primary" class="form-control " onChange="populatee(this.id,'input-secondary')" required>

					</select>
					<p>Secondary</p>
					<select name="secondary" id="input-secondary" class="form-control " required>

					</select>
					<!-- End ComboBox-->

					<p>Product type</p>
					<input type="text" name="product_type" id="product_type" class="form-control" placeholder="zigzag,teak wood" required>
					<br>
					<p>Vendor / Brand</p>
					<input type="text" name="brand" id="brand" class="form-control" placeholder="Apolo, Bliss Home" required>
					<br>
					<p>Other tags</p>
					<input type="text" name="tags" id="tags" class="form-control" placeholder="Mango, Soft, Cotton etc" required>
				</div>
			</div>

			<div align="center">
				<button type="submit" name="submit" id="submit" class="btn btn-success" style="width:150px; height:60px">Add Product</button>
			</div>
		</form>
		<script>
			function showImage(event) {
				var reader = new FileReader();
				var image = document.getElementById("image")

				reader.onload = function() {

					if (reader.readyState == 2) {

						image.src = reader.result;
					}
				}

				reader.readAsDataURL(event.target.files[0]);
			}
		</script>

		<?php
		if (isset($_POST["submit"])) {


			$v1 = rand(11111, 99999);
			$v2 = rand(11111, 99999);

			$v3 = $v1 . $v2;

			$v3 = md5($v3);


			$fnm = $_FILES["picture"]["name"];
			$dst = "./product_image/" . $v3 . $fnm;
			$dst1 = "product_image/" . $v3 . $fnm;
			move_uploaded_file($_FILES["picture"]["tmp_name"], $dst);
			/*image validation*/

			/*end*/


			mysqli_query($link, "insert into product values('','$_POST[product_name]',$_POST[price],$_POST[c_price],$_POST[product_qty],'$_POST[details]','$dst1','$_POST[category]','$_POST[primary]','$_POST[secondary]','$_POST[product_type]','$_POST[brand]','$_POST[tags]','$_POST[offers1]','$_POST[offers2]','$_POST[offers3]')");

		?>
			<script type="text/javascript">
				alert("Product Added Successfully");
				window.location = location.href;
			</script>
		<?php
		}

		?>




	</div>
	<script>
		function populate(s1, s2) {
			var s1 = document.getElementById(s1);
			var s2 = document.getElementById(s2);

			s2.innerHTML = "";
			if (s1.value == "Furniture") {
				var optionArray = ["|", "livingroom|Living Room", "bedroom|Bedroom", "diningroom|Dining Room", "studyoffice|Study & Office", "outdoor|Outdoor", "wardrobes|Wardrobes"];
			} else if (s1.value == "Home Furnishings") {
				var optionArray = ["|", "bedsheets|Bed Sheets", "bedding|Bedding", "pillowscovers|Pillows & Covers", "bathessentails|Bath Essentials"];
			} else if (s1.value == "Home Decor") {
				var optionArray = ["|", "walldecor|Wall Decor", "candlesfragrances|Candles & Fragrances", "othershome|Others"];
			} else if (s1.value == "TableWare") {
				var optionArray = ["|", "cofeetea|Cofee & Tea", "serving|Serving", "tableessentials|Table Essentials", "otherstables|Others"];
			} else if (s1.value == "KitchenWare") {
				var optionArray = ["|", "kitchen|Kitchen Storage", "kitchentoollinen|Kitchen Tools & Linen", "appliances|Appliances", "otherskitchen|Others"];
			}
			for (var option in optionArray) {
				var pair = optionArray[option].split("|");
				var newOption = document.createElement("option");
				newOption.value = pair[0];
				newOption.innerHTML = pair[1];
				s2.options.add(newOption);
			}

		}

		function populatee(s2, s3) {
			var s2 = document.getElementById(s2);
			var s3 = document.getElementById(s3);

			s3.innerHTML = "";
			/* Furniture*/

			if (s2.value == "livingroom") {
				var optionArray2 = ["|", "sofasets|Sofa Sets", "sofacumbeds|Sofa Cum Beds", "seating|Seating", "chairs|Chairs", "tables|Tables"];
			} else if (s2.value == "bedroom") {
				var optionArray2 = ["|", "allbeds|All Beds", "singlesizebeds|Single Size Beds", "doublesizebeds|Double Size Beds", "kingsizebeds|King Size Beds", "bedswithstorage|Beds With Storage", "kidsbeds|Kids Bed", "mattresses|Mattresses", "dressingtable|Dressing Table", "bedsidetables|Bedside Tables"];
			} else if (s2.value == "diningroom") {
				var optionArray2 = ["|", "alldiningsets|All Dining Sets", "4seater|4 Seater Dining Sets", "6seater|6 Seater Dining Sets", "8seater|8 Seater Dining Sets", "diningtables|Dining Tables", "diningchairs|Dining Chairs", "diningbenches|Dining Benches", "storage|Storage"];
			} else if (s2.value == "studyoffice") {
				var optionArray2 = ["|", "bookshelves|Book Shelves", "magazinefileracks|Magazine & File Racks", "studytables|Study Tables", "officeTables|Office Tables", "officechairs|Office Chairs", "studychairs|Study Chairs"];
			} else if (s2.value == "outdoor") {
				var optionArray2 = ["|", "swings|Swings", "outdoorchairs|Outdoor Chairs", "outdoortables|Outdoor Tables"];
			} else if (s2.value == "wardrobes") {
				var optionArray2 = ["|", "allwardrobes|All Wardrobes", "2doorw|2 Door Wardrobes", "3doorw|3 Door Wardrobes", "4doorw|4 Door Wardrobes", "slidingdoorw|Sliding Door Wardrobes"];
			}
			/* end furniture */

			/* Home Furnishings*/
			else if (s2.value == "bedsheets") {
				var optionArray2 = ["|", "allbedsheets|All Bed Sheets", "kingsizebedsheets|King Size Bed Sheets", "singlebedsheets|Single Bed Sheets", "fittedbedsheets|Fitted Bed Sheets", "doublebedsheets|Double Bed Sheets"];
			} else if (s2.value == "bedding") {
				var optionArray2 = ["|", "bedcovers|Bed Covers", "conforters|Conforters", "a/c_quiltsblankets|A/C Quilts & Blankets", "quilts&blankets|Quilts & Blankets"];
			} else if (s2.value == "pillowscovers") {
				var optionArray2 = ["|", "bedpillows|Bed Pillows", "pillowcovers|Pillow Covers", "covers&inserts|Covers & Inserts"];
			} else if (s2.value == "bathessentails") {
				var optionArray2 = ["|", "towels|Towels", "bathmats&rugs|Bath Mats & Rugs", "bathrobes|Bath Robes", "showercurtains|Shower Curtains"];
			}
			/* end Home Furnishings*/

			/*Home Decor*/
			else if (s2.value == "walldecor") {
				var optionArray2 = ["|", "paintings|Paintings", "wallart|Wall Art", "wallaccents|Wall Accents"];
			} else if (s2.value == "candlesfragrances") {
				var optionArray2 = ["|", "candles|Candles", "candleholders|Candle Holders", "homefragrances|Home Fragrances"];
			} else if (s2.value == "othershome") {
				var optionArray2 = ["|", "potsplanters|Pots & Planters", "lampslightning|Lamps & Lightning", "showpieces|Showpieces", "clocks|Clocks"];
			}
			/*end Home Decor*/

			/*TableWare*/
			else if (s2.value == "cofeetea") {
				var optionArray2 = ["|", "cofeeteaacc|Cofee & Tea Accessories", "mugscups|Mugs Cups", "cofeeteasets|Cofee & Tea sets", "saucers|Saucers"];
			} else if (s2.value == "serving") {
				var optionArray2 = ["|", "candles|Candles", "candleholders|Candle Holders", "homefragrances|Home Fragrances"];
			} else if (s2.value == "tableessentials") {
				var optionArray2 = ["|", "tablecloths|Table Cloths", "napkinsholders|Napkins & Holders", "showpieces|Showpieces"];
			} else if (s2.value == "otherstables") {
				var optionArray2 = ["|", "dinnerssets|Dinners Sets", "trays|Trays", "plates|Plates", "bowls|Bowls"];
			}
			/*end TableWare*/

			/*KitchenWare*/
			else if (s2.value == "kitchen") {
				var optionArray2 = ["|", "foodstorage|Food Storage", "kitchenorganizers|Kitchen Organizers", "containers|Containers", "thermoware|Thermoware"];
			} else if (s2.value == "kitchentoollinen") {
				var optionArray2 = ["|", "ctools|Cooking Tools", "ptools|Preparation Tools", "kgears|Kitchen Gears", "Kitchenlinen|Kitchen Linen"];
			} else if (s2.value == "appliances") {
				var optionArray2 = ["|", "chimney|Chimney", "oven|Oven/Microwave", "ctopsburners|Cooktops & Burners", "cooking|Cooking"];
			} else if (s2.value == "otherskitchen") {
				var optionArray2 = ["|", "cleaning|Cleaning", "laundry|Laundry", "dustbins|Dustbins", "showercurtains|Shower Curtains"];
			}
			/*end KitchenWare*/

			for (var option in optionArray2) {
				var pair = optionArray2[option].split("|");
				var newOption = document.createElement("option");
				newOption.value = pair[0];
				newOption.innerHTML = pair[1];
				s3.options.add(newOption);
			}
		}
	</script>


	<!--CKEDITOR CODING-->

	<!--	<script>
				ClassicEditor
					.create( document.querySelector( '#details' ))
					.catch( error =>{
						console.error(error);
				});
			</script> -->


</body>

</html>