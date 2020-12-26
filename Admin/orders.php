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
            <li class="breadcrumb-item active">Orders Info</li>
          </ol>
		  <div class="block">
		  	<?php
			  $res = mysqli_query($link, "select * from checkout_address order by id desc");
			  echo "<table border='1'>";
			  echo "<tr>";
			  echo "<td style='font-weight:bold'>"; echo "firstname"; echo "</td>";
			  echo "<td style='font-weight:bold'>"; echo "lastname"; echo "</td>";
			  echo "<td style='font-weight:bold'>"; echo "email"; echo "</td>";
			  echo "<td style='font-weight:bold'>"; echo "address"; echo "</td>";
			  echo "<td style='font-weight:bold'>"; echo "city"; echo "</td>";
			  echo "<td style='font-weight:bold'>"; echo "pincode"; echo "</td>";
			  echo "<td style='font-weight:bold'>"; echo "contactno"; echo "</td>";
			  echo "<td style='font-weight:bold'>"; echo "view order"; echo "</td>";
			  echo "</tr>";
			  
			  while($row = mysqli_fetch_array($res))
			  {
			  		echo "<tr>";
			  		echo "<td>"; echo $row["firstname"]; echo "</td>";
			  		echo "<td>"; echo $row["lastname"]; echo "</td>";
			  		echo "<td>"; echo $row["email"]; echo "</td>";
			  		echo "<td>"; echo $row["address"]; echo "</td>";
			  		echo "<td>"; echo $row["city"]; echo "</td>";
			  		echo "<td>"; echo $row["pincode"]; echo "</td>";
			  		echo "<td>"; echo $row["contactno"]; echo "</td>";
				    echo "<td>"; ?> <a href="customer_orders.php?id=<?php echo $row["id"]; ?>">View Order</a><?php echo "</td>";
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