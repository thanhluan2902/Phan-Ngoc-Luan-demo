<!DOCTYPE html>
<html lang="en">

<?php include_once '../include/header.php' ?>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <?php include_once '../include/nav_bar.php'?>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <?php
        // require_once 'views/'.$page.'.php' 
    ?>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <?php include_once '../include/logout.php'?>

  <!-- Bootstrap core JavaScript-->
  <?php include_once '../include/footer.php'?>

</body>

</html>
