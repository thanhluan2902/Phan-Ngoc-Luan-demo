<header class="header-area">

<!-- Top Header Area -->
<div class="top-header">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <!-- Breaking News Area -->
            <div class="col-12 col-sm-8">
                <div class="breaking-news-area">
                    <div id="breakingNewsTicker" class="ticker">
                        <ul>
                            <li><a href="#">Hello World!</a></li>
                            <li><a href="#">Hello Universe!</a></li>
                            <li><a href="#">Hello Original!</a></li>
                            <li><a href="#">Hello Earth!</a></li>
                            <li><a href="#">Hello Colorlib!</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Top Social Area -->
            <div class="col-12 col-sm-4">
                <div class="top-social-area">
                    <a href="#" data-toggle="tooltip" data-placement="bottom" title="Pinterest"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                    <a href="#" data-toggle="tooltip" data-placement="bottom" title="Facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                    <a href="#" data-toggle="tooltip" data-placement="bottom" title="Twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                    <a href="#" data-toggle="tooltip" data-placement="bottom" title="Dribbble"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
                    <a href="#" data-toggle="tooltip" data-placement="bottom" title="Behance"><i class="fa fa-behance" aria-hidden="true"></i></a>
                    <a href="#" data-toggle="tooltip" data-placement="bottom" title="Linkedin"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Logo Area -->
<div class="logo-area text-center">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12">
                <a href="index.html" class="original-logo"><img src="<?php echo URL ?>img/core-img/logo.png" alt=""></a>
            </div>
        </div>
    </div>
</div>

<!-- Nav Area -->
<div class="original-nav-area" id="stickyNav">
    <div class="classy-nav-container breakpoint-off">
        <div class="container">
            <!-- Classy Menu -->
            <nav class="classy-navbar justify-content-between">

                <!-- Subscribe btn -->
                <div class="subscribe-btn">
                    <a href="#" class="btn subscribe-btn" data-toggle="modal" data-target="#subsModal">Subscribe</a>
                </div>

                <!-- Navbar Toggler -->
                <div class="classy-navbar-toggler">
                    <span class="navbarToggler"><span></span><span></span><span></span></span>
                </div>

                <!-- Menu -->
                <div class="classy-menu" id="originalNav">
                    <!-- close btn -->
                    <div class="classycloseIcon">
                        <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                    </div>

                    <!-- Nav Start -->
                    <div class="classynav">
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li><a href="#">Pages</a>
                                <ul class="dropdown">
                                    <li><a href="index.html">Home</a></li>
                                    <li><a href="about-us.html">About Us</a></li>
                                    <li><a href="single-post.html">Single Post</a></li>
                                    <li><a href="contact.html">Contact</a></li>
                                    <li><a href="coming-soon.html">Coming Soon</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Catagory</a>
                                <ul class="dropdown">
                                    <?php foreach($home as $value) { ?>
                                        <li><a href="#"><?php echo $value['name'] ?></a></li>
                                    <?php } ?>
                                </ul>
                            </li>
                        </ul>

                        <!-- Search Form  -->
                        <div id="search-wrapper">
                            <form action="#">
                                <input type="text" id="search" placeholder="Search something...">
                                <div id="close-icon"></div>
                                <input class="d-none" type="submit" value="">
                            </form>
                        </div>
                    </div>
                    <!-- Nav End -->
                </div>
            </nav>
        </div>
    </div>
</div>
</header>