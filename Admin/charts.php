<?php
session_start();
if($_SESSION["admin"]=="")
{
	?>
<script type="text/javascript">
window.location="admin_login.php";
</script>
<?php
	
}
	include "check_session.php";
	include "header.php";
	include "menu.php";
?>
	<div id="content-wrapper">

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Charts</li>
          </ol>

         
        </div>
        <!-- /.container-fluid -->

<?php 
	include "footer.php";
?>