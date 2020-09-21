<!DOCTYPE html>
<html lang="en">

<?php include_once 'views/client/include/header.php' ?>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="preload-content">
            <div id="original-load"></div>
        </div>
    </div>

    <!-- Subscribe Modal -->
    <div class="subscribe-newsletter-area">
        <div class="modal fade" id="subsModal" tabindex="-1" role="dialog" aria-labelledby="subsModal" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <div class="modal-body">
                        <h5 class="title">Subscribe to my newsletter</h5>
                        <form action="#" class="newsletterForm" method="post">
                            <input type="email" name="email" id="subscribesForm2" placeholder="Your e-mail here">
                            <button type="submit" class="btn original-btn">Subscribe</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- ##### Header Area Start ##### -->
    <?php include_once 'views/client/include/main_header.php' ?>
    <!-- ##### Header Area End ##### -->

    <!-- home cắt ở đây -->  
    <?php require_once 'views/' .$page. '.php' ?>
    <!-- home đến đây -->
    <?php include_once 'views/client/include/newPost.php' ?>


    <!-- ##### Instagram Feed Area Start ##### -->
    <?php include_once 'views/client/include/instagram.php' ?>
    <!-- ##### Instagram Feed Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
    <?php include_once 'views/client/include/main_footer.php' ?>
    <!-- ##### Footer Area End ##### -->

    <?php include_once 'views/client/include/footer.php' ?>

</body>

</html>