<html lang="en">
<?php include_once 'views/admin/include/header.php' ?>

<body id="page-top" class="">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->

    <?php include_once 'views/admin/include/main_header.php' ?>

    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->

        <?php include_once 'views/admin/include/nav_top.php' ?>

        <!-- End of Topbar -->


        <!-- nội dung ở đây=========================================================== -->
        <div class="container-fluid">

          <?php 
            require_once 'views/' .$page. '.php' 
          ?>

        </div>

        <!-- ================================================================================== -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->


      <?php include_once 'views/admin/include/main_footer.php' ?>

      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top" style="display: none;">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->

  <?php include_once 'views/admin/include/logout.php' ?>

  <!-- Bootstrap core JavaScript-->
  <?php include_once 'views/admin/include/footer.php' ?>

</body></html>