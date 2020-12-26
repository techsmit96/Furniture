<?php
session_start();

include "check_session.php";

include "../connect/connection.php";

$id=$_GET["id"];

$res= mysqli_query($link, "select * from product where id='$id'");
while($row=mysqli_fetch_array($res))
{
	$img=$row["product_image"];
}
unlink($img);


mysqli_query($link,"delete from product where id ='$id'");
?>


<script type="text/ecmascript">
	alert("Delete successfully");
	window.location="display_items.php";
</script>