<?php 
    require_once('controller/headerController.php');
?>
<!DOCTYPE html>
<html class="no-js" lang="zxx">


<!-- Mirrored from htmldemo.net/gengar/gengar/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 03 Jun 2023 07:12:36 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="meta description">
    <title>Gengar - Multipurpose eCommerce Bootstrap 5 Template</title>

    <!--=== Favicon ===-->
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon" />

    <!-- Google fonts include -->
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,300i,400,400i,500,500i,700,900" rel="stylesheet">

    <!-- All Vendor & plugins CSS include -->
    <link href="assets/css/vendor.css" rel="stylesheet">
    <!-- Main Style CSS -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!--[if lt IE 9]>
<script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

</head>

<body>

    <!-- Start Header Area -->
    <header class="header-area">
        <!-- main header start -->
        <div class="main-header d-none d-lg-block">
            <!-- header top start -->
            <div class="header-top theme-color-2">
                <div class="container bdr-bottom-2">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="header-top-settings">
                                <ul class="nav align-items-center">
                                    <li class="language">
                                        <span>Language:</span>
                                        English
                                        <i class="fa fa-angle-down"></i>
                                        <ul class="dropdown-list">
                                            <li><a href="#"><img src="assets/img/icon/en.png" alt=""> english</a></li>
                                            <li><a href="#"><img src="assets/img/icon/fr.png" alt=""> french</a></li>
                                        </ul>
                                    </li>
                                    <li class="curreny-wrap">
                                        <span>Currency:</span>
                                        $ USD
                                        <i class="fa fa-angle-down"></i>
                                        <ul class="dropdown-list curreny-list">
                                            <li><a href="#">$ usd</a></li>
                                            <li><a href="#"> € EURO</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="header-links">
                                <ul class="nav justify-content-end">
                                    <li>Welcome to Gengar</li>
                                    <li><a href="login-register.html">Sign In</a></li>
                                    <li><a href="login-register.html">Create an Account</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- header top end -->

            <!-- header middle area start -->
            <div class="header-middle-area theme-color-2">
                <div class="container">
                    <div class="row align-items-center">
                        <!-- start logo area -->
                        <div class="col-lg-3">
                            <div class="logo">
                                <a href="index.html">
                                    <img src="<?php echo $logo ?>" alt="">
                                </a>
                            </div>
                        </div>
                        <!-- start logo area -->

                        <!-- start search box area -->
                        <div class="col-lg-5">
                            <div class="search-box-wrapper">
                                <form class="search-box-inner">
                                    <input type="text" class="search-field" placeholder="Enter your search key">
                                    <button class="search-btn"><i class="ion-ios-search"></i></button>
                                </form>
                            </div>
                        </div>
                        <!-- start search box end -->

                        <!-- mini cart area start -->
                        <div class="col-lg-4">
                            <div class="header-configure-wrapper">
                                <div class="header-configure-area">
                                    <ul class="nav justify-content-end">
                                        <li>
                                            <a href="wishlist.html">
                                                <i class="ion-android-favorite-outline"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="compare.html">
                                                <i class="ion-stats-bars"></i>
                                            </a>
                                        </li>
                                        <li class="mini-cart-wrap">
                                            <a href="cart.html">
                                                <i class="ion-bag"></i>
                                            </a>
                                            <ul class="cart-list">
                                                <li>
                                                    <div class="cart-img">
                                                        <a href="product-details.html"><img src="assets/img/cart/cart-1.jpg" alt=""></a>
                                                    </div>
                                                    <div class="cart-info">
                                                        <h4><a href="product-details.html">simple product</a></h4>
                                                        <span class="cart-qty">Qty: 1</span>
                                                        <span>$60.00</span>
                                                    </div>
                                                    <div class="del-icon">
                                                        <i class="fa fa-times"></i>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="cart-img">
                                                        <a href="product-details.html"><img src="assets/img/cart/cart-2.jpg" alt=""></a>
                                                    </div>
                                                    <div class="cart-info">
                                                        <h4><a href="product-details.html">virtual product</a></h4>
                                                        <span class="cart-qty">Qty: 2</span>
                                                        <span>$100.00</span>
                                                    </div>
                                                    <div class="del-icon">
                                                        <i class="fa fa-times"></i>
                                                    </div>
                                                </li>
                                                <li class="mini-cart-price">
                                                    <span class="subtotal">subtotal : </span>
                                                    <span class="subtotal-price ml-auto">$110.00</span>
                                                </li>
                                                <li>
                                                    <div class="mini-cart-button">
                                                        <a class="check-btn" href="cart.html">View Cart</a>
                                                        <a class="check-btn" href="checkout.html">checkout</a>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- mini cart area end -->
                    </div>
                </div>
            </div>
            <!-- header middle area end -->

            <!-- main menu area start -->
            <div class="main-menu-area bg-white">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-3">
                            <div class="category-toggle-wrap">
                                <div class="category-toggle">
                                    <i class="ion-android-menu"></i>
                                    shop by categories
                                </div>
                                <nav class="category-menu category-menu-style_2">
                                    <ul class="categories-list">
                                        <li class="menu-item-has-children"><a href="shop.html">Fruits & Vegetables</a>
                                            <!-- Mega Category Menu Start -->
                                            <ul class="category-mega-menu dropdown">
                                                <li class="menu-item-has-children">
                                                    <a href="shop.html">Smartphone</a>
                                                    <ul class="dropdown">
                                                        <li><a href="shop.html">Samsome</a></li>
                                                        <li><a href="shop.html">GL Stylus</a></li>
                                                        <li><a href="shop.html">Uawei</a></li>
                                                        <li><a href="shop.html">Cherry Berry</a></li>
                                                    </ul>
                                                </li>
                                                <li class="menu-item-has-children">
                                                    <a href="shop.html">headphone</a>
                                                    <ul class="dropdown">
                                                        <li><a href="shop.html">Desktop Headphone</a></li>
                                                        <li><a href="shop.html">Mobile Headphone</a></li>
                                                        <li><a href="shop.html">Wireless Headphone</a></li>
                                                        <li><a href="shop.html">LED Headphone</a></li>
                                                    </ul>
                                                </li>
                                                <li class="menu-item-has-children">
                                                    <a href="shop.html">accessories</a>
                                                    <ul class="dropdown">
                                                        <li><a href="shop.html">Power Bank</a></li>
                                                        <li><a href="shop.html">Data Cable</a></li>
                                                        <li><a href="shop.html">Power Cable</a></li>
                                                        <li><a href="shop.html">Battery</a></li>
                                                    </ul>
                                                </li>
                                                <li class="menu-item-has-children">
                                                    <a href="shop.html">headphone</a>
                                                    <ul class="dropdown">
                                                        <li><a href="shop.html">Desktop Headphone</a></li>
                                                        <li><a href="shop.html">Mobile Headphone</a></li>
                                                        <li><a href="shop.html">Wireless Headphone</a></li>
                                                        <li><a href="shop.html">LED Headphone</a></li>
                                                    </ul>
                                                </li>
                                            </ul><!-- Mega Category Menu End -->
                                        </li>
                                        <li class="menu-item-has-children"><a href="shop.html">Fresh Meat</a>
                                            <!-- Mega Category Menu Start -->
                                            <ul class="category-mega-menu dropdown three-column">
                                                <li class="menu-item-has-children">
                                                    <a href="shop.html">Smartphone</a>
                                                    <ul class="dropdown">
                                                        <li><a href="shop.html">Samsome</a></li>
                                                        <li><a href="shop.html">GL Stylus</a></li>
                                                        <li><a href="shop.html">Uawei</a></li>
                                                        <li><a href="shop.html">Cherry Berry</a></li>
                                                        <li><a href="shop.html">uPhone</a></li>
                                                    </ul>
                                                </li>
                                                <li class="menu-item-has-children">
                                                    <a href="shop.html">headphone</a>
                                                    <ul class="dropdown">
                                                        <li><a href="shop.html">Desktop Headphone</a></li>
                                                        <li><a href="shop.html">Mobile Headphone</a></li>
                                                        <li><a href="shop.html">Wireless Headphone</a></li>
                                                        <li><a href="shop.html">LED Headphone</a></li>
                                                        <li><a href="shop.html">Over-ear</a></li>
                                                    </ul>
                                                </li>
                                                <li class="menu-item-has-children">
                                                    <a href="shop.html">accessories</a>
                                                    <ul class="dropdown">
                                                        <li><a href="shop.html">Power Bank</a></li>
                                                        <li><a href="shop.html">Data Cable</a></li>
                                                        <li><a href="shop.html">Power Cable</a></li>
                                                        <li><a href="shop.html">Battery</a></li>
                                                        <li><a href="shop.html">OTG Cable</a></li>
                                                    </ul>
                                                </li>
                                            </ul><!-- Mega Category Menu End -->
                                        </li>
                                        <li class="menu-item-has-children"><a href="shop.html">dairy & eggs</a>
                                            <!-- Mega Category Menu Start -->
                                            <ul class="category-mega-menu dropdown two-column">
                                                <li class="menu-item-has-children">
                                                    <a href="shop.html">Smartphone</a>
                                                    <ul class="dropdown">
                                                        <li><a href="shop.html">Samsome</a></li>
                                                        <li><a href="shop.html">GL Stylus</a></li>
                                                        <li><a href="shop.html">Uawei</a></li>
                                                        <li><a href="shop.html">Cherry Berry</a></li>
                                                    </ul>
                                                </li>
                                                <li class="menu-item-has-children">
                                                    <a href="shop.html">headphone</a>
                                                    <ul class="dropdown">
                                                        <li><a href="shop.html">Desktop Headphone</a></li>
                                                        <li><a href="shop.html">Mobile Headphone</a></li>
                                                        <li><a href="shop.html">Wireless Headphone</a></li>
                                                        <li><a href="shop.html">LED Headphone</a></li>
                                                    </ul>
                                                </li>
                                            </ul><!-- Mega Category Menu End -->
                                        </li>
                                        <li><a href="shop.html">Frozen</a></li>
                                        <li><a href="shop.html">Grocery</a></li>
                                        <li><a href="shop.html">Kitchenware</a></li>
                                        <li><a href="shop.html">Tools</a></li>
                                        <li><a href="shop.html">Electronics</a></li>
                                        <li><a href="shop.html">Kitchenware</a></li>
                                        <li><a href="shop.html">Tools</a></li>
                                        <li><a href="shop.html">Electronics</a></li>
                                        <li><a href="shop.html">Electronics</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="main-menu home-main">
                                <!-- main menu navbar start -->
                                <nav class="desktop-menu">
                                    <ul>
                                        <li class="active"><a href="index.html">Home <i class="fa fa-angle-down"></i></a>
                                            <ul class="dropdown">
                                                <li><a href="index.html">Home version 01</a></li>
                                                <li><a href="index-2.html">Home version 02</a></li>
                                                <li><a href="index-3.html">Home version 03</a></li>
                                                <li><a href="index-4.html">Home version 04</a></li>
                                                <li><a href="index-5.html">Home version 05</a></li>
                                                <li><a href="index-6.html">Home version 06</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">pages <i class="fa fa-angle-down"></i></a>
                                            <ul class="megamenu dropdown">
                                                <li class="mega-title"><a href="#">column 01</a>
                                                    <ul>
                                                        <li><a href="shop.html">shop grid left sidebar</a></li>
                                                        <li><a href="shop-grid-right-sidebar.html">shop grid right sidebar</a></li>
                                                        <li><a href="shop-grid-full-4-col.html">shop grid no sidebar</a></li>
                                                        <li><a href="shop-list-left-sidebar.html">shop list left sidebar</a></li>
                                                        <li><a href="shop-list-right-sidebar.html">shop list right sidebar</a></li>
                                                    </ul>
                                                </li>
                                                <li class="mega-title"><a href="#">column 02</a>
                                                    <ul>
                                                        <li><a href="product-details.html">product details</a></li>
                                                        <li><a href="product-details-affiliate.html">product details affiliate</a></li>
                                                        <li><a href="product-details-variable.html">product details variable</a></li>
                                                        <li><a href="product-details-group.html">product details group</a></li>
                                                        <li><a href="product-details-box.html">product details box</a></li>
                                                    </ul>
                                                </li>
                                                <li class="mega-title"><a href="#">column 03</a>
                                                    <ul>
                                                        <li><a href="cart.html">cart</a></li>
                                                        <li><a href="checkout.html">checkout</a></li>
                                                        <li><a href="compare.html">compare</a></li>
                                                        <li><a href="wishlist.html">wishlist</a></li>
                                                    </ul>
                                                </li>
                                                <li class="mega-title"><a href="#">column 04</a>
                                                    <ul>
                                                        <li><a href="my-account.html">my-account</a></li>
                                                        <li><a href="login-register.html">login-register</a></li>
                                                        <li><a href="about-us.html">about us</a></li>
                                                        <li><a href="contact-us.html">contact us</a></li>
                                                        <li><a href="404.html">404 page</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a href="shop.html">shop <i class="fa fa-angle-down"></i></a>
                                            <ul class="dropdown">
                                                <li><a href="#">shop grid layout <i class="fa fa-angle-right"></i></a>
                                                    <ul class="dropdown">
                                                        <li><a href="shop.html">shop grid left sidebar</a></li>
                                                        <li><a href="shop-grid-right-sidebar.html">shop grid right sidebar</a></li>
                                                        <li><a href="shop-grid-full-3-col.html">shop grid full 3 col</a></li>
                                                        <li><a href="shop-grid-full-4-col.html">shop grid full 4 col</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#">shop list layout <i class="fa fa-angle-right"></i></a>
                                                    <ul class="dropdown">
                                                        <li><a href="shop-list-left-sidebar.html">shop list left sidebar</a></li>
                                                        <li><a href="shop-list-right-sidebar.html">shop list right sidebar</a></li>
                                                        <li><a href="shop-list-full-width.html">shop list full width</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#">products details <i class="fa fa-angle-right"></i></a>
                                                    <ul class="dropdown">
                                                        <li><a href="product-details.html">product details</a></li>
                                                        <li><a href="product-details-affiliate.html">product details affiliate</a></li>
                                                        <li><a href="product-details-variable.html">product details variable</a></li>
                                                        <li><a href="product-details-group.html">product details group</a></li>
                                                        <li><a href="product-details-box.html">product details box</a></li>
                                                        <li><a href="product-details-sticky-left.html">product details sticky left</a></li>
                                                        <li><a href="product-details-sticky-right.html">product details sticky right</a></li>
                                                        <li><a href="product-details-gallery-left.html">product details gallery left</a></li>
                                                        <li><a href="product-details-gallery-right.html">product details gallery right</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a href="blog-left-sidebar.html">Blog <i class="fa fa-angle-down"></i></a>
                                            <ul class="dropdown">
                                                <li><a href="blog-left-sidebar.html">blog left sidebar</a></li>
                                                <li><a href="blog-left-sidebar-2-col.html">blog left sidebar 2 col</a></li>
                                                <li><a href="blog-right-sidebar.html">blog right sidebar</a></li>
                                                <li><a href="blog-right-sidebar-2-col.html">blog right sidebar 2 col</a></li>
                                                <li><a href="blog-grid-full-width.html">blog grid full width</a></li>
                                                <li><a href="blog-list-full-width.html">blog list full width</a></li>
                                                <li><a href="blog-details.html">blog details</a></li>
                                                <li><a href="blog-details-left-sidebar.html">blog details left sidebar</a></li>
                                                <li><a href="blog-details-audio.html">blog details audio</a></li>
                                                <li><a href="blog-details-video.html">blog details video</a></li>
                                                <li><a href="blog-details-image.html">blog details image</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="contact-us.html">Contact us</a></li>
                                    </ul>
                                </nav>
                                <!-- main menu navbar end -->
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="header-support2">
                                <p><i class="ion-android-call"></i> <?php echo $hotline ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- main menu area end -->
        </div>
        <!-- main header start -->

        <!-- mobile header start -->
        <div class="mobile-header d-lg-none d-md-block sticky">
            <!--mobile header top start -->
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12">
                        <div class="mobile-main-header">
                            <div class="mobile-logo">
                                <a href="index.html">
                                    <img src="assets/img/logo/logo-black.png" alt="Brand Logo">
                                </a>
                            </div>
                            <div class="mobile-menu-toggler">
                                <div class="mini-cart-wrap">
                                    <a href="cart.html">
                                        <i class="ion-bag"></i>
                                    </a>
                                </div>
                                <div class="mobile-menu-btn">
                                    <div class="off-canvas-btn">
                                        <i class="ion-android-menu"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="category-toggle-wrap">
                            <div class="category-toggle">
                                <i class="ion-android-menu"></i>
                                all categories
                                <span><i class="ion-android-arrow-dropdown"></i></span>
                            </div>
                            <nav class="category-menu">
                                <ul class="categories-list">
                                    <li class="menu-item-has-children"><a href="shop.html">Fruits & Vegetables</a>
                                        <!-- Mega Category Menu Start -->
                                        <ul class="category-mega-menu dropdown">
                                            <li class="menu-item-has-children">
                                                <a href="shop.html">Smartphone</a>
                                                <ul class="dropdown">
                                                    <li><a href="shop.html">Samsome</a></li>
                                                    <li><a href="shop.html">GL Stylus</a></li>
                                                    <li><a href="shop.html">Uawei</a></li>
                                                    <li><a href="shop.html">Cherry Berry</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item-has-children">
                                                <a href="shop.html">headphone</a>
                                                <ul class="dropdown">
                                                    <li><a href="shop.html">Desktop Headphone</a></li>
                                                    <li><a href="shop.html">Mobile Headphone</a></li>
                                                    <li><a href="shop.html">Wireless Headphone</a></li>
                                                    <li><a href="shop.html">LED Headphone</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item-has-children">
                                                <a href="shop.html">accessories</a>
                                                <ul class="dropdown">
                                                    <li><a href="shop.html">Power Bank</a></li>
                                                    <li><a href="shop.html">Data Cable</a></li>
                                                    <li><a href="shop.html">Power Cable</a></li>
                                                    <li><a href="shop.html">Battery</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item-has-children">
                                                <a href="shop.html">headphone</a>
                                                <ul class="dropdown">
                                                    <li><a href="shop.html">Desktop Headphone</a></li>
                                                    <li><a href="shop.html">Mobile Headphone</a></li>
                                                    <li><a href="shop.html">Wireless Headphone</a></li>
                                                    <li><a href="shop.html">LED Headphone</a></li>
                                                </ul>
                                            </li>
                                        </ul><!-- Mega Category Menu End -->
                                    </li>
                                    <li class="menu-item-has-children"><a href="shop.html">Fresh Meat</a>
                                        <!-- Mega Category Menu Start -->
                                        <ul class="category-mega-menu dropdown three-column">
                                            <li class="menu-item-has-children">
                                                <a href="shop.html">Smartphone</a>
                                                <ul class="dropdown">
                                                    <li><a href="shop.html">Samsome</a></li>
                                                    <li><a href="shop.html">GL Stylus</a></li>
                                                    <li><a href="shop.html">Uawei</a></li>
                                                    <li><a href="shop.html">Cherry Berry</a></li>
                                                    <li><a href="shop.html">uPhone</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item-has-children">
                                                <a href="shop.html">headphone</a>
                                                <ul class="dropdown">
                                                    <li><a href="shop.html">Desktop Headphone</a></li>
                                                    <li><a href="shop.html">Mobile Headphone</a></li>
                                                    <li><a href="shop.html">Wireless Headphone</a></li>
                                                    <li><a href="shop.html">LED Headphone</a></li>
                                                    <li><a href="shop.html">Over-ear</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item-has-children">
                                                <a href="shop.html">accessories</a>
                                                <ul class="dropdown">
                                                    <li><a href="shop.html">Power Bank</a></li>
                                                    <li><a href="shop.html">Data Cable</a></li>
                                                    <li><a href="shop.html">Power Cable</a></li>
                                                    <li><a href="shop.html">Battery</a></li>
                                                    <li><a href="shop.html">OTG Cable</a></li>
                                                </ul>
                                            </li>
                                        </ul><!-- Mega Category Menu End -->
                                    </li>
                                    <li class="menu-item-has-children"><a href="shop.html">dairy & eggs</a>
                                        <!-- Mega Category Menu Start -->
                                        <ul class="category-mega-menu dropdown two-column">
                                            <li class="menu-item-has-children">
                                                <a href="shop.html">Smartphone</a>
                                                <ul class="dropdown">
                                                    <li><a href="shop.html">Samsome</a></li>
                                                    <li><a href="shop.html">GL Stylus</a></li>
                                                    <li><a href="shop.html">Uawei</a></li>
                                                    <li><a href="shop.html">Cherry Berry</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item-has-children">
                                                <a href="shop.html">headphone</a>
                                                <ul class="dropdown">
                                                    <li><a href="shop.html">Desktop Headphone</a></li>
                                                    <li><a href="shop.html">Mobile Headphone</a></li>
                                                    <li><a href="shop.html">Wireless Headphone</a></li>
                                                    <li><a href="shop.html">LED Headphone</a></li>
                                                </ul>
                                            </li>
                                        </ul><!-- Mega Category Menu End -->
                                    </li>
                                    <li><a href="shop.html">Frozen</a></li>
                                    <li><a href="shop.html">Grocery</a></li>
                                    <li><a href="shop.html">Kitchenware</a></li>
                                    <li><a href="shop.html">Tools</a></li>
                                    <li><a href="shop.html">Electronics</a></li>
                                    <li><a href="shop.html">Kitchenware</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- mobile header top start -->
        </div>
        <!-- mobile header end -->
    </header>
    <!-- end Header Area -->

    <!-- off-canvas menu start -->
    <aside class="off-canvas-wrapper">
        <div class="off-canvas-overlay"></div>
        <div class="off-canvas-inner-content">
            <div class="btn-close-off-canvas">
                <i class="ion-android-close"></i>
            </div>

            <div class="off-canvas-inner">
                <!-- search box start -->
                <div class="search-box-offcanvas">
                    <form>
                        <input type="text" placeholder="Search Here...">
                        <button class="search-btn"><i class="ion-ios-search-strong"></i></button>
                    </form>
                </div>
                <!-- search box end -->

                <!-- mobile menu start -->
                <div class="mobile-navigation">

                    <!-- mobile menu navigation start -->
                    <nav>
                        <ul class="mobile-menu">
                            <li class="menu-item-has-children active"><a href="#">Home</a>
                                <ul class="dropdown">
                                    <li><a href="index.html">Home version 01</a></li>
                                    <li><a href="index-2.html">Home version 02</a></li>
                                    <li><a href="index-3.html">Home version 03</a></li>
                                    <li><a href="index-4.html">Home version 04</a></li>
                                    <li><a href="index-5.html">Home version 05</a></li>
                                    <li><a href="index-6.html">Home version 06</a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children"><a href="#">pages</a>
                                <ul class="megamenu dropdown">
                                    <li class="mega-title has-children"><a href="#">column 01</a>
                                        <ul class="dropdown">
                                            <li><a href="shop.html">shop grid left
                                                    sidebar</a></li>
                                            <li><a href="shop-grid-right-sidebar.html">shop grid right
                                                    sidebar</a></li>
                                            <li><a href="shop-list-left-sidebar.html">shop list left sidebar</a></li>
                                            <li><a href="shop-list-right-sidebar.html">shop list right sidebar</a></li>
                                        </ul>
                                    </li>
                                    <li class="mega-title has-children"><a href="#">column 02</a>
                                        <ul class="dropdown">
                                            <li><a href="product-details.html">product details</a></li>
                                            <li><a href="product-details-affiliate.html">product
                                                    details
                                                    affiliate</a></li>
                                            <li><a href="product-details-variable.html">product details
                                                    variable</a></li>
                                            <li><a href="product-details-group.html">product details
                                                    group</a></li>
                                        </ul>
                                    </li>
                                    <li class="mega-title has-children"><a href="#">column 03</a>
                                        <ul class="dropdown">
                                            <li><a href="cart.html">cart</a></li>
                                            <li><a href="checkout.html">checkout</a></li>
                                            <li><a href="compare.html">compare</a></li>
                                            <li><a href="wishlist.html">wishlist</a></li>
                                        </ul>
                                    </li>
                                    <li class="mega-title has-children"><a href="#">column 04</a>
                                        <ul class="dropdown">
                                            <li><a href="my-account.html">my-account</a></li>
                                            <li><a href="login-register.html">login-register</a></li>
                                            <li><a href="about-us.html">about us</a></li>
                                            <li><a href="contact-us.html">contact us</a></li>
                                            <li><a href="404.html">404 page</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children "><a href="#">shop</a>
                                <ul class="dropdown">
                                    <li class="has-children"><a href="#">shop grid layout</a>
                                        <ul class="dropdown">
                                            <li><a href="shop.html">shop grid left sidebar</a></li>
                                            <li><a href="shop-grid-right-sidebar.html">shop grid right sidebar</a></li>
                                            <li><a href="shop-grid-full-3-col.html">shop grid full 3 col</a></li>
                                            <li><a href="shop-grid-full-4-col.html">shop grid full 4 col</a></li>
                                        </ul>
                                    </li>
                                    <li class="has-children"><a href="#">shop list layout</a>
                                        <ul class="dropdown">
                                            <li><a href="shop-list-left-sidebar.html">shop list left sidebar</a></li>
                                            <li><a href="shop-list-right-sidebar.html">shop list right sidebar</a></li>
                                            <li><a href="shop-list-full-width.html">shop list full width</a></li>
                                        </ul>
                                    </li>
                                    <li class="has-children"><a href="#">products details</a>
                                        <ul class="dropdown">
                                            <li><a href="product-details.html">product details</a></li>
                                            <li><a href="product-details-affiliate.html">product details affiliate</a></li>
                                            <li><a href="product-details-variable.html">product details variable</a></li>
                                            <li><a href="product-details-group.html">product details group</a></li>
                                            <li><a href="product-details-box.html">product details box</a></li>
                                            <li><a href="product-details-sticky-left.html">product details sticky left</a></li>
                                            <li><a href="product-details-sticky-right.html">product details sticky right</a></li>
                                            <li><a href="product-details-gallery-left.html">product details gallery left</a></li>
                                            <li><a href="product-details-gallery-right.html">product details gallery right</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children "><a href="#">Blog</a>
                                <ul class="dropdown">
                                    <li><a href="blog-left-sidebar.html">blog left sidebar</a></li>
                                    <li><a href="blog-left-sidebar-2-col.html">blog left sidebar 2 col</a></li>
                                    <li><a href="blog-right-sidebar.html">blog right sidebar</a></li>
                                    <li><a href="blog-right-sidebar-2-col.html">blog right sidebar 2 col</a></li>
                                    <li><a href="blog-grid-full-width.html">blog grid full width</a></li>
                                    <li><a href="blog-list-full-width.html">blog list full width</a></li>
                                    <li><a href="blog-details.html">blog details</a></li>
                                    <li><a href="blog-details-left-sidebar.html">blog details left sidebar</a></li>
                                    <li><a href="blog-details-audio.html">blog details audio</a></li>
                                    <li><a href="blog-details-video.html">blog details video</a></li>
                                    <li><a href="blog-details-image.html">blog details image</a></li>
                                </ul>
                            </li>
                            <li><a href="contact-us.html">Contact us</a></li>
                        </ul>
                    </nav>
                    <!-- mobile menu navigation end -->
                </div>
                <!-- mobile menu end -->

                <div class="mobile-settings">
                    <ul class="nav">
                        <li>
                            <div class="dropdown mobile-top-dropdown">
                                <a class="dropdown-toggle" id="currency" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Currency
                                    <i class="fa fa-angle-down"></i>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="currency">
                                    <a class="dropdown-item" href="#">$ USD</a>
                                    <a class="dropdown-item" href="#">$ EURO</a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="dropdown mobile-top-dropdown">
                                <a class="dropdown-toggle" id="myaccount" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    My Account
                                    <i class="fa fa-angle-down"></i>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="myaccount">
                                    <a class="dropdown-item" href="my-account.html">my account</a>
                                    <a class="dropdown-item" href="login-register.html"> login</a>
                                    <a class="dropdown-item" href="login-register.html">register</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>

                <!-- offcanvas widget area start -->
                <div class="offcanvas-widget-area">
                    <div class="off-canvas-contact-widget">
                        <ul>
                            <li><i class="fa fa-mobile"></i>
                                <a href="#">0123456789</a>
                            </li>
                            <li><i class="fa fa-envelope-o"></i>
                                <a href="#">info@yourdomain.com</a>
                            </li>
                        </ul>
                    </div>
                    <div class="off-canvas-social-widget">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-pinterest-p"></i></a>
                        <a href="#"><i class="fa fa-linkedin"></i></a>
                        <a href="#"><i class="fa fa-youtube-play"></i></a>
                    </div>
                </div>
                <!-- offcanvas widget area end -->
            </div>
        </div>
    </aside>
    <!-- off-canvas menu end -->

