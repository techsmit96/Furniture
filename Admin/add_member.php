<?php
session_start();
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
            <li class="breadcrumb-item active">Member info</li>
          </ol>
           <?php include "add_member_file.php";?>
        </div>
        <!-- /.container-fluid -->
   
<?php
	include "footer.php";
?>
		</body>
</html>