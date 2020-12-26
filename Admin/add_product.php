<?php
session_start();

include "check_session.php";
include "header.php";
include "menu.php";
?>
<?php
include "../connect/connection.php";
?>
<div id="content-wrapper">

  <div class="container-fluid">

    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="#">Dashboard</a>
      </li>
      <li class="breadcrumb-item active">Add Products</li>
    </ol>

    <?php
    include "add_product_file.php";

    ?>
  </div>
  <!-- /.container-fluid -->



  <!-- /.container-fluid -->



  <?php
  include "footer.php";

  ?>

  </body>

  </html>