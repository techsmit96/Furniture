<?php
session_start();

include "check_session.php";
include "header.php";
include "menu.php";
include "../connect/connection.php";
//$output = '';
/*if(isset($_POST['valueToSearch'])){
						$searchq = $_POST["valueToSearch"];
						$searchq = preg_replace("#[^0-9a-z]#i","",$searchq);
	
						$query = mysqli_query($link,"select * from product where product_name like '%$searchq%' or product_price like '%$searchq%'") or die("Could not search");
	
						$count = mysqli_num_rows($query);
						if($count == 0){
							$output = 'There was no search results!';
						}else{
						while($row = mysqli_fetch_array($query)){
							$fname = $row['product_name'];
							$lname = $row['product_price'];
			
							$output .= '<div>'.$fname.' '.$lname.'</div>';
						}
					}
				}
				
*/


?>
<div id="content-wrapper">

	<div class="container-fluid">

		<!-- Breadcrumbs-->
		<ol class="breadcrumb">
			<li class="breadcrumb-item">
				<a href="#">Dashboard</a>
			</li>
			<li class="breadcrumb-item active">Items</li>
			<form action="" method="post" class="d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
				<div class="input-group">
					<input type="text" class="form-control" size="40" name="valueToSearch" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
					<div class="input-group-append">
						<button class="btn btn-primary" type="submit" name="submit">
							<i name="search" class="fas fa-search"></i>
						</button>
					</div>
				</div>
			</form>
		</ol>
		<div class="block">
			<?php
			//print("$output");
			$res = mysqli_query($link, "select * from product");
			echo "<table border='1'>";
			echo "<tr>";
			echo "<th>";
			echo "Product Image";
			echo "</th>";
			echo "<th>";
			echo "Product Name";
			echo "</th>";
			echo "<th>";
			echo "Product Price";
			echo "</th>";
			echo "<th>";
			echo "Product C Price";
			echo "</th>";
			echo "<th>";
			echo "Product Qty";
			echo "</th>";
			echo "<th>";
			echo "Product Desc";
			echo "</th>";
			echo "<th>";
			echo "Product Main Category";
			echo "</th>";
			echo "<th>";
			echo "Product Primary Category";
			echo "</th>";
			echo "<th>";
			echo "Product Secondary Category";
			echo "</th>";
			echo "<th>";
			echo "Product Type ";
			echo "</th>";
			echo "<th>";
			echo "Product Brand";
			echo "</th>";
			echo "<th>";
			echo "Tag";
			echo "</th>";
			echo "<th>";
			echo "Latest";
			echo "</th>";
			echo "<th>";
			echo "Best Seller";
			echo "</th>";
			echo "<th>";
			echo "Special";
			echo "</th>";
			echo "<th>";
			echo "Edit";
			echo "</th>";
			echo "<th>";
			echo "Delete";
			echo "</th>";
			echo "</tr>";
			if (isset($_POST['valueToSearch'])) {
				$searchq = $_POST["valueToSearch"];
				$searchq = preg_replace("#[^0-9a-z]#i", "", $searchq);

				$res = mysqli_query($link, "select * from product where product_name like '%$searchq%' or product_price like '%$searchq%' or product_c_price like '%$searchq%' or product_qty like '%$searchq%' or product_desc like '%$searchq%' or product_image like '%$searchq%' or product_main_category like '%$searchq%' or product_primary_category like '%$searchq%' or product_secondary_category like '%$searchq%' or product_type like '%$searchq%' or product_brand like '%$searchq%' or tag like '%$searchq%' or latest like '%$searchq%' or bestseller like '%$searchq%' or special like '%$searchq%'") or die("Could not search");

				$count = mysqli_num_rows($res);
				if ($count == 0) {
					?>
					<script type="text/javascript">
						alert("There was no search results!");
					</script>
					<?php
						} else {
							while ($row = mysqli_fetch_array($res)) {

								echo "<tr>";
								echo "<td>"; ?> <img src="<?php echo $row["product_image"]; ?>" height="100" width="100"><?php echo "</td>";
																																		echo "<td >";
																																		echo $row["product_name"];
																																		echo "</td>";
																																		echo "<td >";
																																		echo $row["product_price"];
																																		echo "</td>";
																																		echo "<td >";
																																		echo $row["product_c_price"];
																																		echo "</td>";
																																		echo "<td >";
																																		echo $row["product_qty"];
																																		echo "</td>";
																																		echo "<td >";
																																		echo $row["product_desc"];
																																		echo "</td>";
																																		echo "<td >";
																																		echo $row["product_main_category"];
																																		echo "</td>";
																																		echo "<td >";
																																		echo $row["product_primary_category"];
																																		echo "</td>";
																																		echo "<td >";
																																		echo $row["product_secondary_category"];
																																		echo "</td>";
																																		echo "<td >";
																																		echo $row["product_type"];
																																		echo "</td>";
																																		echo "<td >";
																																		echo $row["product_brand"];
																																		echo "</td>";
																																		echo "<td >";
																																		echo $row["tag"];
																																		echo "</td>";
																																		echo "<td >";
																																		echo $row["latest"];
																																		echo "</td>";
																																		echo "<td >";
																																		echo $row["bestseller"];
																																		echo "</td>";
																																		echo "<td >";
																																		echo $row["special"];
																																		echo "</td>";
																																		//editing products
																																		echo "<td >"; ?> <a style="text-decoration: none;" href="edit.php?id=<?php echo $row["id"]; ?>">&nbsp;<i class="fa fa-edit" style="font-size:20px"></i></a><?php echo "</td>";
																																																																												//deleting products
																																																																												echo "<td>"; ?> <a style="text-decoration: none;" href="delete.php?id=<?php echo $row["id"]; ?>">&nbsp;&nbsp;&nbsp;<i class="fa fa-trash" style="font-size:20px"></i></a><?php echo "</td>";

																																																																																																																								echo "</tr>";
																																																																																																																							}
																																																																																																																						}
																																																																																																																					}

																																																																																																																					while ($row = mysqli_fetch_array($res)) {

																																																																																																																						echo "<tr>";
																																																																																																																						echo "<td>"; ?> <img src="<?php echo $row["product_image"]; ?>" height="100" width="100"><?php echo "</td>";
																																																																																																																				echo "<td >";
																																																																																																																				echo $row["product_name"];
																																																																																																																				echo "</td>";
																																																																																																																				echo "<td >";
																																																																																																																				echo $row["product_price"];
																																																																																																																				echo "</td>";
																																																																																																																				echo "<td >";
																																																																																																																				echo $row["product_c_price"];
																																																																																																																				echo "</td>";
																																																																																																																				echo "<td >";
																																																																																																																				echo $row["product_qty"];
																																																																																																																				echo "</td>";
																																																																																																																				echo "<td >";
																																																																																																																				echo $row["product_desc"];
																																																																																																																				echo "</td>";
																																																																																																																				echo "<td >";
																																																																																																																				echo $row["product_main_category"];
																																																																																																																				echo "</td>";
																																																																																																																				echo "<td >";
																																																																																																																				echo $row["product_primary_category"];
																																																																																																																				echo "</td>";
																																																																																																																				echo "<td >";
																																																																																																																				echo $row["product_secondary_category"];
																																																																																																																				echo "</td>";
																																																																																																																				echo "<td >";
																																																																																																																				echo $row["product_type"];
																																																																																																																				echo "</td>";
																																																																																																																				echo "<td >";
																																																																																																																				echo $row["product_brand"];
																																																																																																																				echo "</td>";
																																																																																																																				echo "<td >";
																																																																																																																				echo $row["tag"];
																																																																																																																				echo "</td>";
																																																																																																																				echo "<td >";
																																																																																																																				echo $row["latest"];
																																																																																																																				echo "</td>";
																																																																																																																				echo "<td >";
																																																																																																																				echo $row["bestseller"];
																																																																																																																				echo "</td>";
																																																																																																																				echo "<td >";
																																																																																																																				echo $row["special"];
																																																																																																																				echo "</td>";
																																																																																																																				//editing products
																																																																																																																				echo "<td >"; ?> <a style="text-decoration: none;" href="edit.php?id=<?php echo $row["id"]; ?>">&nbsp;<i class="fa fa-edit" style="font-size:20px"></i></a><?php echo "</td>";
																																																																																																																		//deleting products
																																																																																																																		echo "<td>"; ?> <a style="text-decoration: none;" href="delete.php?id=<?php echo $row["id"]; ?>">&nbsp;&nbsp;&nbsp;<i class="fa fa-trash" style="font-size:20px"></i></a><?php echo "</td>";

																																																																																																																		echo "</tr>";
																																																																																																																	}
																																																																																																																	?>
		</div>

	</div>
	<!-- /.container-fluid -->


	<?php
	include "footer.php";

	?>