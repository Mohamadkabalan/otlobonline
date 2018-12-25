<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Shopping Cart || OurStore</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500,700" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,600,700,800i" rel="stylesheet">

        <!-- favicon icon -->
        <link rel="shortcut icon" type="images/png" href="images/favicon.ico">

		<!-- all css here -->
		<link rel="stylesheet" href="style.css">
		<!-- modernizr css -->
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <!-- Add your site or application content here -->
        <!--Start-Preloader-area-->
        <div class="preloader">
            <div class="loading-center">
                <div class="loading-center-absolute">
                    <div class="object object_one"></div>
                    <div class="object object_two"></div>
                    <div class="object object_three"></div>
                </div>
            </div>
        </div>
        <!--end-Preloader-area-->
        <!--header-area-start-->
        <!--Start-main-wrapper-->
        <div class="page-1 shopping-cart">
            <!--Start-Header-area-->
            <?php include("header.php"); ?>
            <!--End-Header-area-->
            <!--start-single-heading-banner-->
            <div class="single-banner-top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                            <div class="single-ban-top-content">
                                <p>Shopping Cart</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end-single-heading-banner-->
            <!--start-single-heading-->
            <div class="signle-heading">
                <div class="container">
                    <div class="row">
                        <!--start-shop-head -->
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="shop-head-menu">
                                <ul>
                                    <li><i class="fa fa-home"></i><a class="shop-home" href="index.php"><span>Home</span></a><span><i class="fa fa-angle-right"></i></span></li>
                                    <li class="shop-pro">Shopping Cart</li>
                                </ul>
                            </div>
                        </div>
                        <!--end-shop-head-->
                    </div>
                </div>
            </div>
            <!--end-single-heading-->
            <!-- cart-main-area start-->
            <div class="cart-main-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <form action="#">
                                <div class="table-content table-responsive">
                                    <table>
                                        <thead>
                                            <tr>
                                                <th class="product-thumbnail">Image</th>
                                                <th class="product-name">Product</th>
                                                <th class="product-price">Price</th>
                                                <th class="product-quantity">Quantity</th>
                                                <th class="product-subtotal">Total</th>
                                                <th class="product-remove">Remove</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="product-thumbnail"><a href="#"><img src="images/cart/3.jpg" alt="" /></a></td>
                                                <td class="product-name"><a href="#">Sample Product</a></td>
                                                <td class="product-price"><span class="amount">£125.00</span></td>
                                                <td class="product-quantity"><input type="number" value="1" /></td>
                                                <td class="product-subtotal">£125.00</td>
                                                <td class="product-remove"><a href="#"><i class="fa fa-times"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td class="product-thumbnail"><a href="#"><img src="images/cart/4.jpg" alt="" /></a></td>
                                                <td class="product-name"><a href="#">Sample Product</a></td>
                                                <td class="product-price"><span class="amount">£90.00</span></td>
                                                <td class="product-quantity"><input type="number" value="1" /></td>
                                                <td class="product-subtotal">£90.00</td>
                                                <td class="product-remove"><a href="#"><i class="fa fa-times"></i></a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="row">
                                    <div class="col-lg-8 col-md-8 col-sm-7 col-xs-12">
                                        <div class="buttons-cart">
                                            <input class="banner-r-b" type="submit" value="Update Cart" />
                                            <a href="#">Continue Shopping</a>
                                        </div>
                                        <div class="coupon">
                                            <h3>Coupon</h3>
                                            <p>Enter your coupon code if you have one.</p>
                                            <input type="text" placeholder="Coupon code" />
                                            <input type="submit" value="Apply Coupon" />
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-5 col-xs-12">
                                        <div class="cart_totals">
                                            <h2>Cart Totals</h2>
                                            <table>
                                                <tbody>
                                                    <tr class="cart-subtotal">
                                                        <th>Subtotal</th>
                                                        <td><span class="amount">£215.00</span></td>
                                                    </tr>
                                                    <tr class="shipping">
                                                        <th>Shipping</th>
                                                        <td>
                                                            <ul id="shipping_method">
                                                                <li>
                                                                    <input type="radio" />
                                                                    <label>
                                                                        Flat Rate: <span class="amount">£7.00</span>
                                                                    </label>
                                                                </li>
                                                                <li>
                                                                    <input type="radio" />
                                                                    <label>
                                                                        Free Shipping
                                                                    </label>
                                                                </li>
                                                                <li></li>
                                                            </ul>
                                                            <p><a class="shipping-calculator-button" href="#">Calculate Shipping</a></p>
                                                        </td>
                                                    </tr>
                                                    <tr class="order-total">
                                                        <th>Total</th>
                                                        <td>
                                                            <strong><span class="amount">£215.00</span></strong>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <div class="wc-proceed-to-checkout">
                                                <a href="#">Proceed to Checkout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- cart-main-area end -->
            <!--Start-brand-area-->
            <div class="brands-area brand-cart">
                <div class="container">
                    <!--barand-heading-->
                    <div class="brand-heading text-center">
                        <h2>Popular brands</h2>
                    </div>
                    <!--brand-heading-end-->
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="brands-carousel">
                                <!--start-single-brand-->
                                <div class="single-brand">
                                    <a href="#"><img src="images/brands/1.png" alt=""></a>
                                </div>
                                <!--end-single-brand-->
                                <!--start-single-brand-->
                                <div class="single-brand">
                                    <a href="#"><img src="images/brands/2.png" alt=""></a>
                                </div>
                                <!--end-single-brand-->
                                <!--start-single-brand-->
                                <div class="single-brand">
                                    <a href="#"><img src="images/brands/3.png" alt=""></a>
                                </div>
                                <!--end-single-brand-->
                                <!--start-single-brand-->
                                <div class="single-brand">
                                    <a href="#"><img src="images/brands/4.png" alt=""></a>
                                </div>
                                <!--end-single-brand-->
                                <!--start-single-brand-->
                                <div class="single-brand">
                                    <a href="#"><img src="images/brands/1.png" alt=""></a>
                                </div>
                                <!--end-single-brand-->
                                <!--start-single-brand-->
                                <div class="single-brand">
                                    <a href="#"><img src="images/brands/2.png" alt=""></a>
                                </div>
                                <!--end-single-brand-->
                                <!--start-single-brand-->
                                <div class="single-brand">
                                    <a href="#"><img src="images/brands/3.png" alt=""></a>
                                </div>
                                <!--end-single-brand-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End-brand-area-->
            <!--Start-footer-wrap-->
            <?php include("footer.php"); ?>
            <!--End-footer-wrap-->

        </div>
        <!--End-main-wrapper-->

		<!-- all js here -->
		<!-- jquery latest version -->
        <script src="js/vendor/jquery-1.12.0.min.js"></script>
		<!-- bootstrap js -->
        <script src="js/bootstrap.min.js"></script>
		<!-- owl.carousel js -->
        <script src="js/owl.carousel.min.js"></script>
		<!-- meanmenu.js -->
        <script src="js/jquery.meanmenu.js"></script>
		<!-- nivo.slider.js -->
        <script src="lib/js/jquery.nivo.slider.js" type="text/javascript"></script>
        <script src="lib/home.js" type="text/javascript"></script>
		<!-- jquery-ui js -->
        <script src="js/jquery-ui.min.js"></script>
		<!-- scrollUp.min.js -->
        <script src="js/jquery.scrollUp.min.js"></script>
		<!-- jquery.parallax.js -->
        <script src="js/jquery.parallax.js"></script>
		<!-- sticky.js -->
        <script src="js/jquery.sticky.js"></script>
		<!-- jquery.simpleGallery.min.js -->
        <script src="js/jquery.simpleGallery.min.js"></script>
        <script src="js/jquery.simpleLens.min.js"></script>
		<!-- countdown.min.js -->
        <script src="js/jquery.countdown.min.js"></script>
        <!-- isotope.pkgd.min -->
        <script src="js/isotope.pkgd.min.js"></script>
		<!-- wow js -->
        <script src="js/wow.min.js"></script>
		<!-- plugins js -->
        <script src="js/plugins.js"></script>
		<!-- main js -->
        <script src="js/main.js"></script>
    </body>
</html>
