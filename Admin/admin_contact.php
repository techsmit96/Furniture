<?php
session_start();

	include "check_session.php";
	include "header.php";
	include "menu.php";
$page = $_SERVER['PHP_SELF'];
$sec = "10";
include "../connect/connection.php";
$id = isset($_GET["id"]) ? $_GET["id"] : '';
$res1= mysqli_query($link, "select * from admin_contact where id='$id'");
while($row = mysqli_fetch_array($res1))
{
	$mobile = $row["mobile"];
	$phone = $row["phone"];
	$email = $row["email"];
	$address = $row["address"];

}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<style>
	.col-lg-7{
		    position: relative;
    min-height: 1px;
    padding-right: 15px;
    padding-left: 15px;
	float: right;
	}
	.col-lg-5{
		position: relative;
    min-height: 1px;
    padding-right: 15px;
    padding-left: 15px;
			float:left;
	}
	@media (min-width: 1200px)
	.col-lg-5 {
		/*width: 41.66666667%;
	*/}
	@media (min-width: 1200px)
	.col-lg-5 {
    float:left;
		
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
    box-shadow: inset 0 1px 1px rgba(0,0,0,.05);
	</style>
	
	</head>
<body>
	<div id="content-wrapper">

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Member Info</li>
          </ol>
		
        	
		
         	<div class="panel-body">
  		<form action="" method="post" name="form" id="form" enctype="multipart/form-data">
   		 <div class="col-lg-5">
   		  <div class="well" id="showdt">
   		  	<h2>Add Member</h2>
   			<p>Please enter your username and password</p>
			<div class="form-group">
			 <input type="text" class="form-control" name="mobile" id="mobile" value="<?php echo $mobile; ?>" pattern="[789][0-9]{9}" title="Please enter valid contact number[0-9 and 10 digit only] & number must be indian." placeholder="Mobile" maxlength="10" required>
		    </div>
		    <div class="form-group">
			 <input type="text" class="form-control" name="phone" id="phone" value="<?php echo $phone; ?>" pattern="[789][0-9]{9}" title="Please enter valid contact number[0-9 and 10 digit only] & number must be indian." placeholder="Alternate Phone" maxlength="10" required>
		    </div>
			<div class="form-group" >
			 <input type="email" class="form-control" name="email" id="email" value="<?php echo $email; ?>" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" title="Please enter valid email address" placeholder="Enter Valid Email" required>
			</div>
       		<div class="form-group" >
			 <input type="text" class="form-control" name="email" id="email" value="<?php echo $address; ?>" placeholder="Enter Address" required>
			</div>
        	
        		<button type="submit" name="submit" id="submit" class="btn btn-primary">Update</button>

   		  </div>
	     </div>	
	     
	     	 
	     	 	 <?php
					$res = mysqli_query($link,"select * from admin_contact");
					
					echo "<div style='vspa'>";
					echo "<h3>Contact Info</h3>";
					echo "<table border='1'>";
					echo "<tr>";
					echo "<th>"; echo "Mobile Number"; echo "</th>";
			  		echo "<th>"; echo "Phone Number"; echo "</th>";
					echo "<th>"; echo "Email"; echo "</th>";
					echo "<th>"; echo "Address"; echo "</th>";
			  		echo "</tr>";
					while($row = mysqli_fetch_array($res))
					{
						echo "<tr>";
						echo "<td >"; echo $row["mobile"]; echo "</td>";
			  			echo "<td >"; echo $row["phone"]; echo "</td>";
						echo "<td >"; echo $row["email"]; echo "</td>";
						echo "<td >"; echo $row["address"]; echo "</td>";
						//editing member
						echo "<td >"; ?> <a style="text-decoration: none;" href="admin_contact.php?id=<?php echo $row["id"]; ?>">&nbsp;<i class="fa fa-edit" onClick="myFunction()" style="font-size:20px"></i> </a><?php echo "</td>";
						//deleting member
						/*echo "<td>"; ?> <a style="text-decoration: none;" href="delete_member.php?id=<?php echo $row["id"]; ?>">&nbsp;&nbsp;&nbsp;<i class="fa fa-trash" style="font-size:20px"></i></a><?php echo "</td>";
						*/
			  			echo "</tr>";
						echo "</div>";
						
					}
		
				?>	 
		</form>
	
        </div>
  <!--      <script>
			function myFunction(){
				var x = document.getElementById("showdt");
				if(x.style.display === "none"){
					x.style.display = "block";
				}
			}
				
		</script>
        
       -->
        <!-- /.container-fluid -->
		</body>
	</html>
		
		<?php
			if(isset($_POST["submit"]))
			{
				
								
					mysqli_query($link, "update admin_contact set mobile='$_POST[mobile]',phone='$_POST[phone]',email='$_POST[email]' where id='$id'");
						
						
				
				
				?>
		<script type="text/javascript">
			alert("Update Successfully");
			//window.location = "admin_contact.php";
			/*setInterval("my_function();",1); 
 
    function my_function(){
        window.location = location.href;
    }*/
	window.location = location.href;
			//window.location.reload();
			//window.location = "add_member.php";
		</script>
		
		<?php
			}
		
		?>
		
	<!--CKEDITOR CODING-->

 		<!--	<script>
				ClassicEditor
					.create( document.querySelector( '#details' ))
					.catch( error =>{
						console.error(error);
				});
			</script> -->
<?php
include "footer.php";

?>