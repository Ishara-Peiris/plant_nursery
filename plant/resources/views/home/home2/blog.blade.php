<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Alazea - Gardening &amp; Landscaping HTML Template</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="home2/style.css">

</head>

<body>
     <!-- Preloader -->
     <div class="preloader d-flex align-items-center justify-content-center">
        <div class="preloader-circle"></div>
        <div class="preloader-img">
            <img src="img/core-img/leaf.png" alt="">
        </div>
    </div>

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">

        <!-- ***** Top Header Area ***** -->
        <div class="top-header-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="top-header-content d-flex align-items-center justify-content-between">
                            <!-- Top Header Content -->
                            <div class="top-header-meta">
                                <a href="#" data-toggle="tooltip" data-placement="bottom" title="infodeercreative@gmail.com"><i class="fa fa-envelope-o" aria-hidden="true"></i> <span>Email:vijithaplantnursery@gmail.com</span></a>
                                <a href="#" data-toggle="tooltip" data-placement="bottom" title="+1 234 122 122"><i class="fa fa-phone" aria-hidden="true"></i> <span>Call Us: +98 714 122 122</span></a>
                            </div>

                            <!-- Top Header Content -->
                            <div class="top-header-meta d-flex">
                                <!-- Language Dropdown -->

                                <!-- Login -->

                                <!-- Cart -->
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- ***** Navbar Area ***** -->
        <div class="alazea-main-menu">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Menu -->
                    <nav class="classy-navbar justify-content-between" id="alazeaNav">

                        <!-- Nav Brand -->
                        <a href="index.html" class="nav-brand"><img src="img/core-img/logo3.png" alt=""></a>

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">

                            <!-- Close Button -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Navbar Start -->
                            <div class="classynav">
                                <ul>
                                    <li><a href="{{ route('landing') }}">Home</li>
                                    <li><a href="{{ url('/about') }}">About</a></li>
                                    <li><a href="#">Pages</a>
                                        <ul class="dropdown">
                                            <li><a href="{{ url('/forum') }}">Forum</a></li>
                                            <li><a href="{{ url('/chatify') }}">chat</a></li>
                                            <li><a href="{{ route('shop') }}">Shop</a>
                                                <ul class="dropdown">
                                                    <li><a href="{{ route('shop') }}">Shop</a></li>
                                                    <li><a href="{{ route('shop') }}">Shop Details</a></li>
                                                    <li><a href="{{ route('shop') }}">Shopping Cart</a></li>
                                                    <li><a href="{{ route('shop') }}">Checkout</a></li>
                                                </ul>
                                            </li>
                                            
                                            <li><a href="{{ url('/blog') }}">Blog</a>
                                                <ul class="dropdown">
                                                    <li><a href="{{ url('/blog') }}">Blog</a></li>
                                                    <li><a href="{{ url('/blog') }}">Blog Details</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="{{ url('/forum') }}">Forum</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="{{ route('shop') }}">Shop</a></li>
                                    <li><a href="{{ url('/chatify') }}">Chat</a></li>
                                    <li><a href="{{ url('/forum') }}">Discussion forum</a></li>

                                </ul>

                                <!-- Search Icon -->
                                <div id="searchIcon">
                                    <i class="fa fa-search" aria-hidden="true"></i>
                                </div>

                            </div>
                            <!-- Navbar End -->
                        </div>
                    </nav>

                    <!-- Search Form -->
                    <div class="search-form">
                        <form action="#" method="get">
                            <input type="search" name="search" id="search" placeholder="Type keywords &amp; press enter...">
                            <button type="submit" class="d-none"></button>
                        </form>
                        <!-- Close Icon -->
                        <div class="closeIcon"><i class="fa fa-times" aria-hidden="true"></i></div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Breadcrumb Area Start ##### -->
    <div class="breadcrumb-area">
        <!-- Top Breadcrumb Area -->
        <div class="top-breadcrumb-area bg-img bg-overlay d-flex align-items-center justify-content-center" style="background-image: url(img/bg-img/24.jpg);">
            <h2>Discover, Learn, and Inspire: Welcome to Our Blog!</h2>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i> Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Blog</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Breadcrumb Area End ##### -->
<!-- ##### Blog Area Start ##### -->
<section class="alazea-blog-area mb-100">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-8">
                <div class="row">

                    <!-- Single Blog Post Area -->
                    <div class="col-12 col-lg-6">
                        <div class="single-blog-post mb-50">
                            <div class="post-thumbnail mb-30">
                                <a href="single-post.html"><img src="img/bg-img/6.jpg" alt=""></a>
                            </div>
                            <div class="post-content">
                                <a href="https://medium.com/@kristina_78350/the-ultimate-guide-to-indoor-plant-care-45b706eae5f7" class="post-title">
                                    <h5>Essential Plant Care Tips for Tropical Gardens in Sri Lanka</h5>
                                </a>
                                <div class="post-meta">
                                    <a href="#"><i class="fa fa-clock-o" aria-hidden="true"></i> 23 Dec 2024</a>
                                    <a href="#"><i class="fa fa-user" aria-hidden="true"></i> Vijitha Nursery</a>
                                </div>
                                <p class="post-excerpt">Caring for plants in tropical climates can be a rewarding experience. Learn the basics of watering, soil preparation, and pest control to maintain a thriving garden in Sri Lanka.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Single Blog Post Area -->
                    <div class="col-12 col-lg-6">
                        <div class="single-blog-post mb-50">
                            <div class="post-thumbnail mb-30">
                                <a href="single-post.html"><img src="img/bg-img/7.jpg" alt=""></a>
                            </div>
                            <div class="post-content">
                                <a href="single-post.html" class="post-title">
                                    <h5>Top 5 Sri Lankan Plants for a Low-Maintenance Garden</h5>
                                </a>
                                <div class="post-meta">
                                    <a href="#"><i class="fa fa-clock-o" aria-hidden="true"></i> 22 Dec 2024</a>
                                    <a href="#"><i class="fa fa-user" aria-hidden="true"></i> Vijitha Nursery</a>
                                </div>
                                <p class="post-excerpt">If you're looking for easy-to-care-for plants, this guide will introduce you to the best options native to Sri Lanka. Perfect for busy gardeners who want a beautiful, hassle-free garden.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Single Blog Post Area -->
                    <div class="col-12 col-lg-6">
                        <div class="single-blog-post mb-50">
                            <div class="post-thumbnail mb-30">
                                <a href="single-post.html"><img src="img/bg-img/8.jpg" alt=""></a>
                            </div>
                            <div class="post-content">
                                <a href="single-post.html" class="post-title">
                                    <h5>How to Protect Your Plants During the Rainy Season in Sri Lanka</h5>
                                </a>
                                <div class="post-meta">
                                    <a href="#"><i class="fa fa-clock-o" aria-hidden="true"></i> 21 Dec 2024</a>
                                    <a href="#"><i class="fa fa-user" aria-hidden="true"></i> Vijitha Nursery</a>
                                </div>
                                <p class="post-excerpt">The rainy season in Sri Lanka can be challenging for gardeners. Learn how to prevent waterlogging, deal with pests, and protect your plants from the excess moisture.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Single Blog Post Area -->
                    <div class="col-12 col-lg-6">
                        <div class="single-blog-post mb-50">
                            <div class="post-thumbnail mb-30">
                                <a href="single-post.html"><img src="img/bg-img/6.jpg" alt=""></a>
                            </div>
                            <div class="post-content">
                                <a href="single-post.html" class="post-title">
                                    <h5>Organic Fertilizers for Healthy Plants in Sri Lankan Gardens</h5>
                                </a>
                                <div class="post-meta">
                                    <a href="#"><i class="fa fa-clock-o" aria-hidden="true"></i> 20 Dec 2024</a>
                                    <a href="#"><i class="fa fa-user" aria-hidden="true"></i> Vijitha Nursery</a>
                                </div>
                                <p class="post-excerpt">Learn how organic fertilizers can boost the health of your plants. This post covers different types of natural fertilizers suitable for Sri Lankan soil and how to use them effectively.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Single Blog Post Area -->
                    <div class="col-12 col-lg-6">
                        <div class="single-blog-post mb-50">
                            <div class="post-thumbnail mb-30">
                                <a href="single-post.html"><img src="img/bg-img/7.jpg" alt=""></a>
                            </div>
                            <div class="post-content">
                                <a href="single-post.html" class="post-title">
                                    <h5>Choosing the Right Soil for Your Plants in Sri Lanka</h5>
                                </a>
                                <div class="post-meta">
                                    <a href="#"><i class="fa fa-clock-o" aria-hidden="true"></i> 19 Dec 2024</a>
                                    <a href="#"><i class="fa fa-user" aria-hidden="true"></i> Vijitha Nursery</a>
                                </div>
                                <p class="post-excerpt">The right soil is crucial for plant growth. Discover the types of soil suitable for different plants in Sri Lanka and how to improve soil quality for a healthier garden.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Single Blog Post Area -->
                    <div class="col-12 col-lg-6">
                        <div class="single-blog-post mb-50">
                            <div class="post-thumbnail mb-30">
                                <a href="single-post.html"><img src="img/bg-img/8.jpg" alt=""></a>
                            </div>
                            <div class="post-content">
                                <a href="single-post.html" class="post-title">
                                    <h5>Winter Care Tips for Your Tropical Plants in Sri Lanka</h5>
                                </a>
                                <div class="post-meta">
                                    <a href="#"><i class="fa fa-clock-o" aria-hidden="true"></i> 18 Dec 2024</a>
                                    <a href="#"><i class="fa fa-user" aria-hidden="true"></i> Vijitha Nursery</a>
                                </div>
                                <p class="post-excerpt">Even in tropical climates, winter can affect plant growth. Here's how to take care of your plants during the cooler months to ensure they thrive all year round.</p>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="row">
                    <div class="col-12">
                        <nav aria-label="Page navigation">
                            <ul class="pagination">
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#"><i class="fa fa-angle-right"></i></a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-4">
                <div class="post-sidebar-area">

                    <!-- ##### Single Widget Area ##### -->
                    <div class="single-widget-area">
                        <form action="#" method="get" class="search-form">
                            <input type="search" name="search" id="widgetsearch" placeholder="Search...">
                            <button type="submit"><i class="icon_search"></i></button>
                        </form>
                    </div>

                    <!-- ##### Single Widget Area ##### -->
                    <div class="single-widget-area">
                        <div class="widget-title">
                            <h4>Recent Posts</h4>
                        </div>

                        <div class="single-latest-post d-flex align-items-center">
                            <div class="post-thumb">
                                <img src="img/bg-img/30.jpg" alt="">
                            </div>
                            <div class="post-content">
                                <a href="#" class="post-title">
                                    <h6>New Plant Varieties for Sri Lankan Gardens</h6>
                                </a>
                                <a href="#" class="post-date">20 Dec 2024</a>
                            </div>
                        </div>

                        <div class="single-latest-post d-flex align-items-center">
                            <div class="post-thumb">
                                <img src="img/bg-img/31.jpg" alt="">
                            </div>
                            <div class="post-content">
                                <a href="#" class="post-title">
                                    <h6>Best Practices for Indoor Gardening in Sri Lanka</h6>
                                </a>
                                <a href="#" class="post-date">19 Dec 2024</a>
                            </div>
                        </div>

                        <div class="single-latest-post d-flex align-items-center">
                            <div class="post-thumb">
                                <img src="img/bg-img/32.jpg" alt="">
                            </div>
                            <div class="post-content">
                                <a href="#" class="post-title">
                                    <h6>Watering Techniques for Dry Seasons</h6>
                                </a>
                                <a href="#" class="post-date">18 Dec 2024</a>
                            </div>
                        </div>
                    </div>

                    <!-- ##### Single Widget Area ##### -->
                    <div class="single-widget-area">
                        <div class="widget-title">
                            <h4>Categories</h4>
                        </div>

                        <ul class="list-unstyled">
                            <li><a href="#">Plant Care</a></li>
                            <li><a href="#">Gardening Tips</a></li>
                            <li><a href="#">Sri Lankan Flora</a></li>
                            <li><a href="#">Indoor Plants</a></li>
                            <li><a href="#">Organic Gardening</a></li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- ##### Blog Area End ##### -->

<!-- ##### Blog Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area bg-img" style="background-image: url(img/bg-img/3.jpg);">
        <!-- Main Footer Area -->
        <div class="main-footer-area">
            <div class="container">
                <div class="row">

                    <!-- Single Footer Widget -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="single-footer-widget">
                            <div class="footer-logo mb-30">
                                <a href="#"><img src="img/core-img/leaf.png" alt=""></a>
                            </div>
                            <p>The Sri Lanka's Number one Plant station-Vijitha Plants </p>
                            <div class="social-info">
                                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>

                    <!-- Single Footer Widget -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="single-footer-widget">
                            <div class="widget-title">
                                <h5>QUICK LINK</h5>
                            </div>
                            <nav class="widget-nav">
                                <ul>
                                    <li><a href="#">Purchase</a></li>
                                    <li><a href="#">Blog</a></li>
                                    <li><a href="#">Shop</a></li>
                                    <li><a href="#">News</a></li>
                                    <li><a href="#">Return</a></li>
                                    <li><a href="#">Advertise</a></li>
                                    <li><a href="#">Shipping</a></li>
                                    <li><a href="#">Payment</a></li>
                                    <li><a href="#">Chat</a></li>
                                    <li><a href="#">Discussion</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>

                    <!-- Single Footer Widget -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="single-footer-widget">
                            <div class="widget-title">
                                <h5>BEST SELLER</h5>
                            </div>

                            <!-- Single Best Seller Products -->
                            <div class="single-best-seller-product d-flex align-items-center">
                                <div class="product-thumbnail">
                                    <a href="shop-details.html"><img src="img/bg-img/4.jpg" alt=""></a>
                                </div>
                                <div class="product-info">
                                    <a href="shop-details.html">Orchid Flower</a>
                                    <p>Rs.1000</p>
                                </div>
                            </div>

                            <!-- Single Best Seller Products -->
                            <div class="single-best-seller-product d-flex align-items-center">
                                <div class="product-thumbnail">
                                    <a href="shop-details.html"><img src="img/bg-img/5.jpg" alt=""></a>
                                </div>
                                <div class="product-info">
                                    <a href="shop-details.html">Tulip Flower</a>
                                    <p>Rs.2000</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Single Footer Widget -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="single-footer-widget">
                            <div class="widget-title">
                                <h5>CONTACT</h5>
                            </div>

                            <div class="contact-information">
                                <p><span>Address:</span> Bandaragama</p>
                                <p><span>Phone:</span> +777 122 122</p>
                                <p><span>Email:</span> vijithaplant@gmail.com</p>
                                <p><span>Open hours:</span> Mon - Sun: 8 AM to 9 PM</p>
                                <p><span>Happy hours:</span> Sat: 2 PM to 4 PM</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer Bottom Area -->
        <div class="footer-bottom-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="border-line"></div>
                    </div>
                    <!-- Copywrite Text -->
                    <div class="col-12 col-md-6">
                        <div class="copywrite-text">
                            <p>&copy; <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
</p>
                        </div>
                    </div>
                    <!-- Footer Nav -->
                    <div class="col-12 col-md-6">
                        <div class="footer-nav">
                            <nav>
                                <ul>
                                    <li><a href="#">Home</a></li>
                                    <li><a href="#">About</a></li>
                                    <li><a href="#">Service</a></li>
                                    <li><a href="#">Chat</a></li>
                                    <li><a href="#">Blog</a></li>
                                    <li><a href="#">Contact</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ##### Footer Area End ##### -->
    <!-- ##### Footer Area End ##### -->

    <!-- ##### All Javascript Files ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="home2/js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="home2/js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="home2/js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="home2/js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="home2/js/active.js"></script>
</body>

</html>
