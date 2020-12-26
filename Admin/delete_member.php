<?php
session_start();

include "check_session.php";

include "../connect/connection.php";

$id=$_GET["id"];

$res= mysqli_query($link, "select * from admin_login where id='$id'");


mysqli_query($link,"delete from admin_login where id ='$id'");
?>


<script type="text/ecmascript">
	alert("Delete successfully");
	window.location="add_member.php";
</script>