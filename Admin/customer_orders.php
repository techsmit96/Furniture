<?php
session_start();

include "check_session.php";
	include "header.php";
	include "menu.php";
	include "../connect/connection.php";
?>
	<div id="content-wrapper">

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Customer Order Items</li>
          </ol>
          <div class="block">
          	<?php
			  $id = isset($_GET["id"]) ? $_GET["id"] : '';
			  $res = mysqli_query($link, "select * from confirm_order_product where order_id='$id'"); 
			  echo "<table border='1'>";
			  echo "<tr>";
			  echo "<th >"; echo "product image"; echo "</th>";
			  echo "<th >"; echo "product name"; echo "</th>";
			  echo "<th >"; echo "product price"; echo "</th>";
		      echo "<th >"; echo "product qty"; echo "</th>";
			  echo "<th >"; echo "product total"; echo "</th>";
			  echo "</tr>";
			  while($row = mysqli_fetch_array($res))
			  {
				  echo "<tr>";
				  echo "<td valign='top'>"; ?> <img src="<?php echo $row["product_image"]; ?>" height="100" width="100"> <?php echo "</td>";
				  echo "<td valign='top'>"; echo $row["product_name"]; echo "</td>";
				  echo "<td valign='top'>"; echo $row["product_price"]; echo "</td>";
				  echo "<td valign='top'>"; echo $row["product_qty"]; echo "</td>";
				  echo "<td valign='top'>"; echo $row["product_total"]; echo "</td>";
				  echo "</tr>";
			  }
			  echo "</table>";
			  ?>
         
          </div>

         
        </div>
        <!-- /.container-fluid -->

<?php
	include "footer.php";
?>