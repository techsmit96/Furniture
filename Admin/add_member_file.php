<?php
//session_start();

include "check_session.php";
?>
<?php
//session_start();

include "../connect/connection.php";

?>


<!-- Bootstrap core CSS-->
<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


<html>

<head>
	<style>
		.col-lg-7 {
			position: relative;
			min-height: 1px;
			padding-right: 15px;
			padding-left: 15px;
			float: right;
		}

		.col-lg-5 {
			position: relative;
			min-height: 1px;
			padding-right: 15px;
			padding-left: 15px;
			float: left;
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
	<!------ Include the above in your HEAD tag ---------->
</head>

<body>



	<div class="panel-body">
		<form action="add_member.php" method="post" name="form" enctype="multipart/form-data">
			<div class="col-lg-5">
				<div class="well">
					<h2>Add Member</h2>
					<p>Please enter your username and password</p>
					<div class="form-group">
						<input type="text" class="form-control" name="inputusername" id="inputusername" placeholder="Username" autofocus required>
					</div>
					<div class="form-group" style="vertical-align: middle">
						<input type="password" class="form-control" name="inputpassword" id="inputpassword" placeholder="Password" required>
					</div>

					<button type="submit" name="submit" id="submit" class="btn btn-primary">Add Member</button>

				</div>
			</div>

			<?php
			$res = mysqli_query($link, "select * from admin_login");

			echo "<div style='vspa'>";
			echo "<h3>Datatable</h3>";
			echo "<table border='1'>";
			echo "<tr>";
			echo "<th>";
			echo "Username";
			echo "</th>";
			echo "<th>";
			echo "Password";
			echo "</th>";
			echo "<th>";
			echo "Edit";
			echo "</th>";
			echo "<th>";
			echo "Delete";
			echo "</th>";
			echo "</tr>";
			while ($row = mysqli_fetch_array($res)) {
				echo "<tr>";
				echo "<td >";
				echo $row["username"];
				echo "</td>";
				echo "<td >";
				echo $row["password"];
				echo "</td>";
				//editing member
				echo "<td >"; ?> <a style="text-decoration: none;" href="edit_member.php?id=<?php echo $row["id"]; ?>">&nbsp;<i class="fa fa-edit" style="font-size:20px"></i></a><?php echo "</td>";
																																																//deleting member
																																																echo "<td>"; ?> <a style="text-decoration: none;" href="delete_member.php?id=<?php echo $row["id"]; ?>">&nbsp;&nbsp;&nbsp;<i class="fa fa-trash" style="font-size:20px"></i></a><?php echo "</td>";

																																																			echo "</tr>";
																																																			echo "</div>";
																																																		}

																																																		?>




			<?php
			if (isset($_POST["submit"])) {


				mysqli_query($link, "insert into admin_login values('','$_POST[inputusername]','$_POST[inputpassword]')");

				?>
				<script type="text/javascript">
					alert("Member Added Successfully");
					window.location = location.href;
				</script>
			<?php
			}

			?>
	</div>

</body>

</html>