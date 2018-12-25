<?php
session_start();
?>
<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Shop grid || Otlob Online</title>
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
<div class="shop-page shop-grid">
    <!--Start-Header-area-->
    <!--End-Header-area-->
    <?php  ?>
    <!--start-single-heading-banner-->
    <div class="single-banner-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                    <div class="single-ban-top-content">
                        <p>Shop grid</p>
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
                <div class="col-lg-12">
                    <div class="shop-head-menu">
                        <ul>
                            <li><i class="fa fa-home"></i><a class="shop-home" href="index.html"><span>Home</span></a><span><i class="fa fa-angle-right"></i></span></li>
                            <li class="shop-pro">Shop grid</li>
                        </ul>
                    </div>
                </div>
                <!--end-shop-head-->
            </div>
        </div>
    </div>
    <!--end-single-heading-->
    <!--start-shop-product-area-->
    <div class="shop-product-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                    <!-- Left-Sidebar-start-->
                    <div class="left-sidebar-title">
                        <h2>Shopping Options</h2>
                    </div>
                    <!-- Shop-Layout-start -->
                    <div class="left-sidebar">
                        <div class="shop-layout">
                            <div class="layout-title">
                                <h2>Category</h2>
                            </div>
                            <div class="layout-list">
                                <ul>
                                    <li><a href="#">Bags</a><span>(9)</span></li>
                                    <li><a href="#">Tops & Tees</a><span>(8)</span></li>
                                    <li><a href="#">Shirts</a><span>(10)</span></li>
                                    <li><a href="#">Polo Shirts</a><span>(12)</span></li>
                                    <li><a href="#">jeans pants</a><span>(15)</span></li>
                                </ul>
                            </div>
                        </div>
                        <!-- Shop-Layout-end -->
                        <!-- Price-Filter-start -->
                        <div class="price-filter-area shop-layout">
                            <div class="price-filter">
                                <div class="layout-title">
                                    <h2>Price</h2>
                                </div>
                                <p>
                                    <label class="range-text">Range:</label>
                                    <input type="text" style="border:0; color:#f6931f; font-weight:bold;" readonly="" id="amount">
                                </p>
                                <div id="slider-range" class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all"><div class="ui-slider-range ui-widget-header ui-corner-all" style="left: 0%; width: 100%;"></div><span tabindex="0" class="ui-slider-handle ui-state-default ui-corner-all" style="left: 0%;"></span><span tabindex="0" class="ui-slider-handle ui-state-default ui-corner-all" style="left: 100%;"></span></div>
                                <button class="btn btn-default">show</button>
                            </div>
                        </div>
                        <!-- Price-Filter-end -->
                        <!-- Shop-Layout-start -->
                        <div class="shop-layout">
                            <div class="layout-title">
                                <h2>Manufacturer</h2>
                            </div>
                            <div class="layout-list">
                                <ul>
                                    <li><a href="#">Adidas</a><span>(2)</span></li>
                                    <li><a href="#">Chanel</a><span>(2)</span></li>
                                    <li><a href="#">DKNY</a><span>(1)</span></li>
                                    <li><a href="#">Dolce</a><span>(2)</span></li>
                                    <li><a href="#">Gabbana</a><span>(3)</span></li>
                                    <li><a href="#">Nike</a><span>(4)</span></li>
                                    <li><a href="#">Vogue</a><span>(2)</span></li>
                                </ul>
                            </div>
                        </div>
                        <!-- Shop-Layout-end -->
                        <!-- Shop-Layout-start -->
                        <div class="shop-layout">
                            <div class="layout-title">
                                <h2>Color</h2>
                            </div>
                            <div class="layout-list">
                                <ul>
                                    <li><a href="#">Black</a><span>(1)</span></li>
                                    <li><a href="#">Blue</a><span>(2)</span></li>
                                    <li><a href="#">Brown</a><span>(3)</span></li>
                                    <li><a href="#">Pink</a><span>(3)</span></li>
                                    <li><a href="#">Red</a><span>(2)</span></li>
                                    <li><a href="#">White</a><span>(2)</span></li>
                                    <li><a href="#">Yellow</a><span>(3)</span></li>
                                </ul>
                            </div>
                        </div>
                        <!-- Shop-Layout-end -->
                    </div>
                    <!-- End-Left-Sidebar -->
                </div>
                <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
                    <!-- Shop-Product-View-start -->
                    <div class="shop-product-view">
                        <!-- Shop Product Tab Area -->
                        <div class="product-tab-area">
                            <!-- Tab Bar -->
                            <!--  <div class="tab-bar">
                                 <div class="tab-bar-inner">
                                     <ul role="tablist" class="nav nav-tabs">
                                         <li class="active"><a title="Grid" data-toggle="tab" href="#shop-product"><i class="fa fa-th-large"></i><span class="grid" title="Grid">Grid</span></a></li>
                                         <li><a  title="List" data-toggle="tab" href="#shop-list"><i class="fa fa-list"></i><span class="list">List</span></a></li>
                                     </ul>
                                 </div>
                                 <div class="toolbar">
                                    <div class="sorter">
                                         <div class="sort-by">
                                             <label class="sort-none">Sort By</label>
                                             <select>
                                                 <option value="position">Position</option>
                                                 <option value="name">Name</option>
                                                 <option value="price">Price</option>
                                             </select>
                                             <a class="up-arrow" href="#"><i class="fa fa-long-arrow-up"></i></a>
                                         </div>
                                     </div>-->
                                  <!--  <div class="pager-list">
                                        <div class="limiter">
                                            <label>Show</label>
                                            <select>
                                                <option value="9">9</option>
                                                <option value="12">12</option>
                                                <option value="24">24</option>
                                                <option value="36">36</option>
                                            </select>
                                            per page
                                        </div>
                                    </div>
                                </div>
                            </div>-->
                            <!-- End-Tab-Bar -->
                            <!-- Tab-Content -->
                            <div class="tab-content">
                                <!-- Shop Product-->
                                <div id="shop-product" class="tab-pane active">
                                    <div class="row">
                                        <!-- Start-single-product -->
                                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                            <div class="single-product shop-mar-bottom">
                                                <!--<div class="sale">Sale</div>-->
                                                <!--<div class="sale-border"></div>
                                                <div class="new">new</div>-->
                                                <div class="product-img-wrap">
                                                    <a class="product-img" href="#"> <img src="images/product/10.jpg" alt="product-image" /></a>
                                                    <div class="add-to-link">

                                                        <a data-toggle="modal" data-target="#productModal" href="#">
                                                            <div><i class="fa fa-eye"></i><span>view</span></div>
                                                        </a>

                                                    </div>
                                                    <div class="add-to-cart">
                                                        <a href="#" title="add to cart">
                                                            <div><i class="fa fa-shopping-cart"></i><span>Add to Order</span></div>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="product-info text-center">
                                                    <div class="product-content">
                                                        <a href="#"><h3 class="pro-name">Sample Product 1</h3></a>
                                                        <div class="pro-rating">
                                                            <ul>
                                                                <li><i class="fa fa-star"></i></li>
                                                                <li><i class="fa fa-star"></i></li>
                                                                <li><i class="fa fa-star"></i></li>
                                                                <li class="r-grey"><i class="fa fa-star"></i></li>
                                                                <li class="r-grey"><i class="fa fa-star-half-o"></i></li>
                                                            </ul>
                                                        </div>
                                                        <div class="pro-price">
                                                            <span class="price-text">Price:</span>
                                                            <span class="normal-price">$200.00</span>
                                                            <span class="old-price"><del>$220.00</del></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End-single-product -->
                                        <!-- Start-single-product -->
                                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                            <div class="single-product shop-mar-bottom">
                                                <div class="sale">Sale</div>
                                                <div class="sale-border"></div>
                                                <div class="product-img-wrap">
                                                    <a class="product-img" href="#"> <img src="images/product/1.jpg" alt="product-image" /></a>
                                                    <div class="add-to-link">
                                                        <a href="#">
                                                            <div><i class="fa fa-heart"></i><span>Add to Wishlist</span></div>
                                                        </a>
                                                        <a data-toggle="modal" data-target="#productModal" href="#">
                                                            <div><i class="fa fa-eye"></i><span>Quick view</span></div>
                                                        </a>
                                                        <a href="#">
                                                            <div><i class="fa fa-random"></i><span>Add to compare</span></div>
                                                        </a>
                                                    </div>
                                                    <div class="add-to-cart">
                                                        <a href="#" title="add to cart">
                                                            <div><i class="fa fa-shopping-cart"></i><span>Add to cart</span></div>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="product-info text-center">
                                                    <div class="product-content">
                                                        <a href="#"><h3 class="pro-name">Sample Product</h3></a>
                                                        <div class="pro-rating">
                                                            <ul>
                                                                <li><i class="fa fa-star"></i></li>
                                                                <li><i class="fa fa-star"></i></li>
                                                                <li><i class="fa fa-star"></i></li>
                                                                <li><i class="fa fa-star"></i></li>
                                                                <li class="r-grey"><i class="fa fa-star-half-o"></i></li>
                                                            </ul>
                                                        </div>
                                                        <div class="pro-price">
                                                            <span class="price-text">Price:</span>
                                                            <span class="normal-price">$250.00</span>
                                                            <span class="old-price"><del>$280.00</del></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End-single-product -->
                                        <!-- Start-single-product -->
                                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                            <div class="single-product shop-mar-bottom">
                                                <div class="new">new</div>
                                                <div class="product-img-wrap">
                                                    <a class="product-img" href="#"> <img src="images/product/16.jpg" alt="product-image" /></a>
                                                    <div class="add-to-link">
                                                        <a href="#">
                                                            <div><i class="fa fa-heart"></i><span>Add to Wishlist</span></div>
                                                        </a>
                                                        <a data-toggle="modal" data-target="#productModal" href="#">
                                                            <div><i class="fa fa-eye"></i><span>Quick view</span></div>
                                                        </a>
                                                        <a href="#">
                                                            <div><i class="fa fa-random"></i><span>Add to compare</span></div>
                                                        </a>
                                                    </div>
                                                    <div class="add-to-cart">
                                                        <a href="#" title="add to cart">
                                                            <div><i class="fa fa-shopping-cart"></i><span>Add to cart</span></div>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="product-info text-center">
                                                    <div class="product-content">
                                                        <a href="#"><h3 class="pro-name">Sample Product</h3></a>
                                                        <div class="pro-rating">
                                                            <ul>
                                                                <li><i class="fa fa-star"></i></li>
                                                                <li><i class="fa fa-star"></i></li>
                                                                <li class="r-grey"><i class="fa fa-star"></i></li>
                                                                <li class="r-grey"><i class="fa fa-star"></i></li>
                                                                <li class="r-grey"><i class="fa fa-star-half-o"></i></li>
                                                            </ul>
                                                        </div>
                                                        <div class="pro-price">
                                                            <span class="price-text">Price:</span>
                                                            <span class="normal-price">150.00</span>
                                                            <span class="old-price"><del>$200.00</del></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End-single-product -->
                                        <!-- Start-single-product -->
                                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                            <div class="single-product shop-mar-bottom">
                                                <div class="new">new</div>
                                                <div class="product-img-wrap">
                                                    <a class="product-img" href="#"> <img src="images/product/6.jpg" alt="product-image" /></a>
                                                    <div class="add-to-link">
                                                        <a href="#">
                                                            <div><i class="fa fa-heart"></i><span>Add to Wishlist</span></div>
                                                        </a>
                                                        <a data-toggle="modal" data-target="#productModal" href="#">
                                                            <div><i class="fa fa-eye"></i><span>Quick view</span></div>
                                                        </a>
                                                        <a href="#">
                                                            <div><i class="fa fa-random"></i><span>Add to compare</span></div>
                                                        </a>
                                                    </div>
                                                    <div class="add-to-cart">
                                                        <a href="#" title="add to cart">
                                                            <div><i class="fa fa-shopping-cart"></i><span>Add to cart</span></div>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="product-info text-center">
                                                    <div class="product-content">
                                                        <a href="#"><h3 class="pro-name">Sample Product</h3></a>
                                                        <div class="pro-rating">
                                                            <ul>
                                                                <li><i class="fa fa-star"></i></li>
                                                                <li><i class="fa fa-star"></i></li>
                                                                <li><i class="fa fa-star"></i></li>
                                                                <li class="r-grey"><i class="fa fa-star"></i></li>
                                                                <li class="r-grey"><i class="fa fa-star-half-o"></i></li>
                                                            </ul>
                                                        </div>
                                                        <div class="pro-price">
                                                            <span class="price-text">Price:</span>
                                                            <span class="normal-price">$200.00</span>
                                                            <span class="old-price"><del>$220.00</del></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End-single-product -->
                                        <!-- Start-single-product -->
                                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                            <div class="single-product shop-mar-bottom">
                                                <div class="sale">Sale</div>
                                                <div class="sale-border"></div>
                                                <div class="product-img-wrap">
                                                    <a class="product-img" href="#"> <img src="images/product/8.jpg" alt="product-image" /></a>
                                                    <div class="add-to-link">
                                                        <a href="#">
                                                            <div><i class="fa fa-heart"></i><span>Add to Wishlist</span></div>
                                                        </a>
                                                        <a data-toggle="modal" data-target="#productModal" href="#">
                                                            <div><i class="fa fa-eye"></i><span>Quick view</span></div>
                                                        </a>
                                                        <a href="#">
                                                            <div><i class="fa fa-random"></i><span>Add to compare</span></div>
                                                        </a>
                                                    </div>
                                                    <div class="add-to-cart">
                                                        <a href="#" title="add to cart">
                                                            <div><i class="fa fa-shopping-cart"></i><span>Add to cart</span></div>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="product-info text-center">
                                                    <div class="product-content">
                                                        <a href="#"><h3 class="pro-name">Sample Product</h3></a>
                                                        <div class="pro-rating">
                                                            <ul>
                                                                <li><i class="fa fa-star"></i></li>
                                                                <li><i class="fa fa-star"></i></li>
                                                                <li><i class="fa fa-star"></i></li>
                                                                <li><i class="fa fa-star"></i></li>
                                                                <li class="r-grey"><i class="fa fa-star-half-o"></i></li>
                                                            </ul>
                                                        </div>
                                                        <div class="pro-price">
                                                            <span class="price-text">Price:</span>
                                                            <span class="normal-price">$250.00</span>
                                                            <span class="old-price"><del>$280.00</del></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End-single-product -->
                                        <!-- Start-single-product -->
                                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                            <div class="single-product shop-mar-bottom">
                                                <div class="new">new</div>
                                                <div class="product-img-wrap">
                                                    <a class="product-img" href="#"> <img src="images/product/15.jpg" alt="product-image" /></a>
                                                    <div class="add-to-link">
                                                        <a href="#">
                                                            <div><i class="fa fa-heart"></i><span>Add to Wishlist</span></div>
                                                        </a>
                                                        <a data-toggle="modal" data-target="#productModal" href="#">
                                                            <div><i class="fa fa-eye"></i><span>Quick view</span></div>
                                                        </a>
                                                        <a href="#">
                                                            <div><i class="fa fa-random"></i><span>Add to compare</span></div>
                                                        </a>
                                                    </div>
                                                    <div class="add-to-cart">
                                                        <a href="#" title="add to cart">
                                                            <div><i class="fa fa-shopping-cart"></i><span>Add to cart</span></div>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="product-info text-center">
                                                    <div class="product-content">
                                                        <a href="#"><h3 class="pro-name">Sample Product</h3></a>
                                                        <div class="pro-rating">
                                                            <ul>
                                                                <li><i class="fa fa-star"></i></li>
                                                                <li><i class="fa fa-star"></i></li>
                                                                <li class="r-grey"><i class="fa fa-star"></i></li>
                                                                <li class="r-grey"><i class="fa fa-star"></i></li>
                                                                <li class="r-grey"><i class="fa fa-star-half-o"></i></li>
                                                            </ul>
                                                        </div>
                                                        <div class="pro-price">
                                                            <span class="price-text">Price:</span>
                                                            <span class="normal-price">150.00</span>
                                                            <span class="old-price"><del>$200.00</del></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End-single-product -->
                                        <!-- Start-single-product -->
                                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                            <div class="single-product shop-mar-bottom">
                                                <div class="sale">Sale</div>
                                                <div class="sale-border"></div>
                                                <div class="new">new</div>
                                                <div class="product-img-wrap">
                                                    <a class="product-img" href="#"> <img src="images/product/2.jpg" alt="product-image" /></a>
                                                    <div class="add-to-link">
                                                        <a href="#">
                                                            <div><i class="fa fa-heart"></i><span>Add to Wishlist</span></div>
                                                        </a>
                                                        <a data-toggle="modal" data-target="#productModal" href="#">
                                                            <div><i class="fa fa-eye"></i><span>Quick view</span></div>
                                                        </a>
                                                        <a href="#">
                                                            <div><i class="fa fa-random"></i><span>Add to compare</span></div>
                                                        </a>
                                                    </div>
                                                    <div class="add-to-cart">
                                                        <a href="#" title="add to cart">
                                                            <div><i class="fa fa-shopping-cart"></i><span>Add to cart</span></div>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="product-info text-center">
                                                    <div class="product-content">
                                                        <a href="#"><h3 class="pro-name">Sample Product</h3></a>
                                                        <div class="pro-rating">
                                                            <ul>
                                                                <li><i class="fa fa-star"></i></li>
                                                                <li><i class="fa fa-star"></i></li>
                                                                <li><i class="fa fa-star"></i></li>
                                                                <li class="r-grey"><i class="fa fa-star"></i></li>
                                                                <li class="r-grey"><i class="fa fa-star-half-o"></i></li>
                                                            </ul>
                                                        </div>
                                                        <div class="pro-price">
                                                            <span class="price-text">Price:</span>
                                                            <span class="normal-price">$200.00</span>
                                                            <span class="old-price"><del>$220.00</del></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End-single-product -->
                                        <!-- Start-single-product -->
                                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                            <div class="single-product shop-mar-bottom">
                                                <div class="sale">Sale</div>
                                                <div class="sale-border"></div>
                                                <div class="product-img-wrap">
                                                    <a class="product-img" href="#"> <img src="images/product/4.jpg" alt="product-image" /></a>
                                                    <div class="add-to-link">
                                                        <a href="#">
                                                            <div><i class="fa fa-heart"></i><span>Add to Wishlist</span></div>
                                                        </a>
                                                        <a data-toggle="modal" data-target="#productModal" href="#">
                                                            <div><i class="fa fa-eye"></i><span>Quick view</span></div>
                                                        </a>
                                                        <a href="#">
                                                            <div><i class="fa fa-random"></i><span>Add to compare</span></div>
                                                        </a>
                                                    </div>
                                                    <div class="add-to-cart">
                                                        <a href="#" title="add to cart">
                                                            <div><i class="fa fa-shopping-cart"></i><span>Add to cart</span></div>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="product-info text-center">
                                                    <div class="product-content">
                                                        <a href="#"><h3 class="pro-name">Sample Product</h3></a>
                                                        <div class="pro-rating">
                                                            <ul>
                                                                <li><i class="fa fa-star"></i></li>
                                                                <li><i class="fa fa-star"></i></li>
                                                                <li><i class="fa fa-star"></i></li>
                                                                <li><i class="fa fa-star"></i></li>
                                                                <li class="r-grey"><i class="fa fa-star-half-o"></i></li>
                                                            </ul>
                                                        </div>
                                                        <div class="pro-price">
                                                            <span class="price-text">Price:</span>
                                                            <span class="normal-price">$250.00</span>
                                                            <span class="old-price"><del>$280.00</del></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End-single-product -->
                                        <!-- Start-single-product -->
                                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                            <div class="single-product shop-mar-bottom">
                                                <div class="new">new</div>
                                                <div class="product-img-wrap">
                                                    <a class="product-img" href="#"> <img src="images/product/7.jpg" alt="product-image" /></a>
                                                    <div class="add-to-link">
                                                        <a href="#">
                                                            <div><i class="fa fa-heart"></i><span>Add to Wishlist</span></div>
                                                        </a>
                                                        <a data-toggle="modal" data-target="#productModal" href="#">
                                                            <div><i class="fa fa-eye"></i><span>Quick view</span></div>
                                                        </a>
                                                        <a href="#">
                                                            <div><i class="fa fa-random"></i><span>Add to compare</span></div>
                                                        </a>
                                                    </div>
                                                    <div class="add-to-cart">
                                                        <a href="#" title="add to cart">
                                                            <div><i class="fa fa-shopping-cart"></i><span>Add to cart</span></div>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="product-info text-center">
                                                    <div class="product-content">
                                                        <a href="#"><h3 class="pro-name">Sample Product</h3></a>
                                                        <div class="pro-rating">
                                                            <ul>
                                                                <li><i class="fa fa-star"></i></li>
                                                                <li><i class="fa fa-star"></i></li>
                                                                <li class="r-grey"><i class="fa fa-star"></i></li>
                                                                <li class="r-grey"><i class="fa fa-star"></i></li>
                                                                <li class="r-grey"><i class="fa fa-star-half-o"></i></li>
                                                            </ul>
                                                        </div>
                                                        <div class="pro-price">
                                                            <span class="price-text">Price:</span>
                                                            <span class="normal-price">150.00</span>
                                                            <span class="old-price"><del>$200.00</del></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End-single-product -->
                                    </div>
                                </div>
                                <!-- End-Shop-Product-->
                                <!-- Shop List -->
                                <div id="shop-list" class="tab-pane">
                                    <!-- start-Single-Shop-list-->
                                    <div class="single-shop">
                                        <div class="row">
                                            <!-- single-product-start -->
                                            <div class="single-product">
                                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                    <div class="product-img-wrap">
                                                        <a class="product-img" href="#"> <img src="images/product/14.jpg" alt="product-image" /></a>
                                                    </div>
                                                </div>
                                                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                                                    <div class="product-info text-left">
                                                        <div class="product-content shop">
                                                            <a href="#"><h3 class="pro-name">Sample Product</h3></a>
                                                            <div class="pro-rating">
                                                                <ul>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li class="r-grey"><i class="fa fa-star"></i></li>
                                                                    <li class="r-grey"><i class="fa fa-star-half-o"></i></li>
                                                                </ul>
                                                            </div>
                                                            <div class="pro-price">
                                                                <span class="price-text">Price:</span>
                                                                <span class="normal-price">150.00</span>
                                                                <span class="old-price"><del>$200.00</del></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="shop-article text-left">
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis laboriosam hic omnis, blanditiis nihil aliquam, dolores maxime eum et quidem ducimus nostrum adipisci culpa, delectus numquam repellendus minima deserunt iste similique nesciunt. Accusantium ipsam sed deleniti culpa necessitatibus optio sit fuga quis cumque itaque odit nihil non, officia, et sapiente.</p>
                                                    </div>
                                                    <div class="shop-button-area">
                                                        <div class="add-to-cartbest shop">
                                                            <a href="#" title="add to cart">
                                                                <div><span>Add to cart</span></div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="add-to-link shop">
                                                        <a href="#">
                                                            <div><i class="fa fa-heart"></i><span>Add to Wishlist</span></div>
                                                        </a>
                                                        <a href="#">
                                                            <div><i class="fa fa-random"></i><span>Add to compare</span></div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- single-product-end -->
                                        </div>
                                    </div>
                                    <!-- end-Single-Shop-list-->
                                    <!-- start-Single-Shop-list-->
                                    <div class="single-shop">
                                        <div class="row">
                                            <!-- single-product-start -->
                                            <div class="single-product">
                                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                    <div class="product-img-wrap">
                                                        <a class="product-img" href="#"> <img src="images/product/1.jpg" alt="product-image" /></a>
                                                    </div>
                                                </div>
                                                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                                                    <div class="product-info text-left">
                                                        <div class="product-content shop">
                                                            <a href="#"><h3 class="pro-name">Sample Product</h3></a>
                                                            <div class="pro-rating">
                                                                <ul>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li class="r-grey"><i class="fa fa-star-half-o"></i></li>
                                                                </ul>
                                                            </div>
                                                            <div class="pro-price">
                                                                <span class="price-text">Price:</span>
                                                                <span class="normal-price">200.00</span>
                                                                <span class="old-price"><del>$2050.00</del></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="shop-article text-left">
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis laboriosam hic omnis, blanditiis nihil aliquam, dolores maxime eum et quidem ducimus nostrum adipisci culpa, delectus numquam repellendus minima deserunt iste similique nesciunt. Accusantium ipsam sed deleniti culpa necessitatibus optio sit fuga quis cumque itaque odit nihil non, officia, et sapiente.</p>
                                                    </div>
                                                    <div class="shop-button-area">
                                                        <div class="add-to-cartbest shop">
                                                            <a href="#" title="add to cart">
                                                                <div><span>Add to cart</span></div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="add-to-link shop">
                                                        <a href="#">
                                                            <div><i class="fa fa-heart"></i><span>Add to Wishlist</span></div>
                                                        </a>
                                                        <a href="#">
                                                            <div><i class="fa fa-random"></i><span>Add to compare</span></div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- single-product-end -->
                                        </div>
                                    </div>
                                    <!-- end-Single-Shop-list-->
                                    <!-- start-Single-Shop-list-->
                                    <div class="single-shop">
                                        <div class="row">
                                            <!-- single-product-start -->
                                            <div class="single-product">
                                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                    <div class="product-img-wrap">
                                                        <a class="product-img" href="#"> <img src="images/product/8.jpg" alt="product-image" /></a>
                                                    </div>
                                                </div>
                                                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                                                    <div class="product-info text-left">
                                                        <div class="product-content shop">
                                                            <a href="#"><h3 class="pro-name">Sample Product</h3></a>
                                                            <div class="pro-rating">
                                                                <ul>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li class="r-grey"><i class="fa fa-star"></i></li>
                                                                    <li class="r-grey"><i class="fa fa-star"></i></li>
                                                                    <li class="r-grey"><i class="fa fa-star-half-o"></i></li>
                                                                </ul>
                                                            </div>
                                                            <div class="pro-price">
                                                                <span class="price-text">Price:</span>
                                                                <span class="normal-price">220.00</span>
                                                                <span class="old-price"><del>$240.00</del></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="shop-article text-left">
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis laboriosam hic omnis, blanditiis nihil aliquam, dolores maxime eum et quidem ducimus nostrum adipisci culpa, delectus numquam repellendus minima deserunt iste similique nesciunt. Accusantium ipsam sed deleniti culpa necessitatibus optio sit fuga quis cumque itaque odit nihil non, officia, et sapiente.</p>
                                                    </div>
                                                    <div class="shop-button-area">
                                                        <div class="add-to-cartbest shop">
                                                            <a href="#" title="add to cart">
                                                                <div><span>Add to cart</span></div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="add-to-link shop">
                                                        <a href="#">
                                                            <div><i class="fa fa-heart"></i><span>Add to Wishlist</span></div>
                                                        </a>
                                                        <a href="#">
                                                            <div><i class="fa fa-random"></i><span>Add to compare</span></div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- single-product-end -->
                                        </div>
                                    </div>
                                    <!-- end-Single-Shop-list-->
                                    <!-- start-Single-Shop-list-->
                                    <div class="single-shop">
                                        <div class="row">
                                            <!-- single-product-start -->
                                            <div class="single-product">
                                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                    <div class="product-img-wrap">
                                                        <a class="product-img" href="#"> <img src="images/product/7.jpg" alt="product-image" /></a>
                                                    </div>
                                                </div>
                                                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                                                    <div class="product-info text-left">
                                                        <div class="product-content shop">
                                                            <a href="#"><h3 class="pro-name">Sample Product</h3></a>
                                                            <div class="pro-rating">
                                                                <ul>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li class="r-grey"><i class="fa fa-star-half-o"></i></li>
                                                                </ul>
                                                            </div>
                                                            <div class="pro-price">
                                                                <span class="price-text">Price:</span>
                                                                <span class="normal-price">150.00</span>
                                                                <span class="old-price"><del>$200.00</del></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="shop-article text-left">
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis laboriosam hic omnis, blanditiis nihil aliquam, dolores maxime eum et quidem ducimus nostrum adipisci culpa, delectus numquam repellendus minima deserunt iste similique nesciunt. Accusantium ipsam sed deleniti culpa necessitatibus optio sit fuga quis cumque itaque odit nihil non, officia, et sapiente.</p>
                                                    </div>
                                                    <div class="shop-button-area">
                                                        <div class="add-to-cartbest shop">
                                                            <a href="#" title="add to cart">
                                                                <div><span>Add to cart</span></div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="add-to-link shop">
                                                        <a href="#">
                                                            <div><i class="fa fa-heart"></i><span>Add to Wishlist</span></div>
                                                        </a>
                                                        <a href="#">
                                                            <div><i class="fa fa-random"></i><span>Add to compare</span></div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- single-product-end -->
                                        </div>
                                    </div>
                                    <!-- end-Single-Shop-list-->
                                    <!-- start-Single-Shop-list-->
                                    <div class="single-shop">
                                        <div class="row">
                                            <!-- single-product-start -->
                                            <div class="single-product">
                                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                    <div class="product-img-wrap">
                                                        <a class="product-img" href="#"> <img src="images/product/4.jpg" alt="product-image" /></a>
                                                    </div>
                                                </div>
                                                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                                                    <div class="product-info text-left">
                                                        <div class="product-content shop">
                                                            <a href="#"><h3 class="pro-name">Sample Product</h3></a>
                                                            <div class="pro-rating">
                                                                <ul>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li class="r-grey"><i class="fa fa-star"></i></li>
                                                                    <li class="r-grey"><i class="fa fa-star-half-o"></i></li>
                                                                </ul>
                                                            </div>
                                                            <div class="pro-price">
                                                                <span class="price-text">Price:</span>
                                                                <span class="normal-price">180.00</span>
                                                                <span class="old-price"><del>$200.00</del></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="shop-article text-left">
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis laboriosam hic omnis, blanditiis nihil aliquam, dolores maxime eum et quidem ducimus nostrum adipisci culpa, delectus numquam repellendus minima deserunt iste similique nesciunt. Accusantium ipsam sed deleniti culpa necessitatibus optio sit fuga quis cumque itaque odit nihil non, officia, et sapiente.</p>
                                                    </div>
                                                    <div class="shop-button-area">
                                                        <div class="add-to-cartbest shop">
                                                            <a href="#" title="add to cart">
                                                                <div><span>Add to cart</span></div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="add-to-link shop">
                                                        <a href="#">
                                                            <div><i class="fa fa-heart"></i><span>Add to Wishlist</span></div>
                                                        </a>
                                                        <a href="#">
                                                            <div><i class="fa fa-random"></i><span>Add to compare</span></div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- single-product-end -->
                                        </div>
                                    </div>
                                    <!-- end-Single-Shop-list-->
                                </div>
                                <!-- End Shop List -->
                            </div>
                            <!-- End Tab Content -->
                            <!-- Tab Bar -->
                            <div class="tab-bar tab-bar-bottom">
                               <!-- <div class="tab-bar-inner">
                                    <ul role="tablist" class="nav nav-tabs">
                                        <li class="active"><a title="Grid" data-toggle="tab" href="#shop"><i class="fa fa-th-large"></i><span class="grid" title="Grid">Grid</span></a></li>
                                        <li><a title="List" data-toggle="tab" href="#shop-list"><i class="fa fa-list"></i><span class="list">List</span></a></li>
                                    </ul>
                                </div>-->
                                <div class="toolbar">
                                    <!--<div class="sorter">
                                        <div class="sort-by">
                                            <label class="sort-none">Sort By</label>
                                            <select>
                                                <option value="position">Position</option>
                                                <option value="name">Name</option>
                                                <option value="price">Price</option>
                                            </select>
                                            <a class="up-arrow" href="#"><i class="fa fa-long-arrow-up"></i></a>
                                        </div>
                                    </div>-->
                                    <div class="pages">
                                        <strong>Page:</strong>
                                        <ol>
                                            <li class="current">1</li>
                                            <li><a href="#">2</a></li>
                                            <li><a href="#" title="Next"><i class="fa fa-arrow-right"></i></a></li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                            <!-- End Tab Bar -->
                        </div>
                        <!-- End Shop Product Tab Area -->
                    </div>
                    <!-- End Shop Product View -->
                </div>
            </div>
        </div>
    </div>
    <!--shop-product-area-end-->
    <!--Start-newsletter-wrap-->
    <div class="news-letter-wrap shop-news text-center">
        <div class="container">
            <div class="row">
                <div class="news-subscribe">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="letter-text">
                            <h3><span class="h-color">Don't</span> Miss Out <br> <span><img src="images/newsletter/1.png" alt=""></span></h3>
                            <p>Subscribe for the latest styles and sales, plus get <span class="h-color">30%</span> offer <br> your first order.</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="email-area">
                            <form class="input-group" action="#" method="post">
                                        <span class="input-group-addon icon-envlop">
                                        <i class="fa fa-envelope-o"></i>
                                        </span>
                                <input type="email" class="form-control form_text" placeholder="Enter your email address">
                                <input type="submit" class="submit" value="Sign up">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End-newsletter-wrap-->
    <!--Start-footer-wrap-->
    <footer class="footer-area">
        <div class="footer-top-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-5 col-xs-12">
                        <div class="footer-logo">
                            <a href="index.html"><img src="images/logo/1.png" alt="Logo Demo"></a>
                        </div>
                        <!--footer-text-start-->
                        <div class="footer-top-content">
                            <p class="des">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it.</p>
                            <div class="footer-read-more">
                                <a href="#">read more</a>
                                <span><i class="fa fa-long-arrow-right"></i></span>
                            </div>
                        </div>
                        <!--footer-text-end-->
                        <!--footer-link-area-start-->
                        <div class="social-icon">
                            <h4>FOLLOW US ON</h4>
                            <a class="faceb" href="#" title="Facebook"><i class="fa fa-facebook"></i></a>
                            <a class="twitt" href="#" title="Twitter" ><i class="fa fa-twitter"></i></a>
                            <a class="tumb" href="#" title="Tumblr"><i class="fa fa-tumblr"></i></a>
                            <a class="google" href="#" title="Google-plus"><i class="fa fa-google-plus"></i></a>
                            <a class="dribb" href="#" title="Dribbble"><i class="fa fa-dribbble"></i></a>
                        </div>
                        <!--footer-link-area-end-->
                    </div>
                    <!--footer-tag-area-start-->
                    <div class="tag-area">
                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                            <h3 class="wedget-title">Related Tags</h3>
                            <div class="footer-top-content">
                                <ul>
                                    <li><a href="#">men</a></li>
                                    <li><a href="#">women</a></li>
                                    <li><a href="#">Clothing</a></li>
                                    <li><a href="#">accessories</a></li>
                                    <li><a href="#">fashion</a></li>
                                    <li><a href="#">top</a></li>
                                    <li><a href="#">Gallery</a></li>
                                    <li><a href="#">new</a></li>
                                    <li><a href="#">furniture</a></li>
                                    <li><a href="#">footwear</a></li>
                                    <li><a href="#">Jewellery</a></li>
                                    <li><a href="#">kid</a></li>
                                    <li><a href="#">sports</a></li>
                                    <li><a href="#">Electronics</a></li>
                                </ul>
                                <div class="view-all-tag">
                                    <ul>
                                        <li><a href="#">View All Tags</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--footer-tag-area-end-->
                    <!--footer-account-area-start-->
                    <div class="footer-account-area footer-none">
                        <div class="col-lg-2 col-md-2 col-sm-3 col-xs-12">
                            <h3 class="wedget-title">My account</h3>
                            <div class="footer-top-content">
                                <ul>
                                    <li><a href="my-account.html">My Account</a></li>
                                    <li><a href="#">Login</a></li>
                                    <li><a href="#">My Cart</a></li>
                                    <li><a href="#">Wishlist</a></li>
                                    <li><a href="#">Sitemap</a></li>
                                    <li><a href="#">Safe shopping</a></li>
                                    <li><a href="#">Privacy Policy</a></li>
                                    <li><a href="#">Discount</a></li>
                                    <li><a href="#">Advanced Search</a></li>
                                    <li><a href="#">Contact Us</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--footer-account-area-end-->
                    <!--footer-contact-info-start-->
                    <div class="footer-contact-info">
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <h3 class="wedget-title">Contact Us</h3>
                            <div class="footer-contact">
                                <p class="adress"><label>Head Office:</label><span class="ft-content">8901 Marmora Road, Glasgow,<br> D05 90GR.</span></p>
                                <p class="adress"><label>Head Office:</label><span class="ft-content">7601 Babla Road, Glasgow,<br> D08 80TR.</span></p>
                                <p class="phone"><label>phone:</label><span class="ft-content phone-num"><span class="phone1">(600) 0123 235 014</span><span class="phone2">(600) 0123 235 015</span></span></p>
                                <p class="web"><label>email:</label><span class="ft-content web-site"><a href="mailto:admin@infinitelayout.com">admin@infinitelayout.com</a></span></p>
                            </div>
                        </div>
                    </div>
                    <!--footer-contact-info-end-->
                </div>
            </div>
        </div>
        <!--footer-top-area-end-->
        <!--footer-bottom-area-start-->
        <div class="footer-bottom-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="copy-right">
                            <span> Copyright &copy; <a href="#">infinitelayout</a>. All Rights Reserved.</span>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="payment-area">
                            <ul>
                                <li><a title="Paypal" href="#"><img src="images/payment/1.png" alt="Paypal"></a></li>
                                <li><a title="Visa" href="#"><img src="images/payment/2.png" alt="Visa"></a></li>
                                <li><a title="Bank" href="#"><img src="images/payment/3.png" alt="Bank"></a></li>
                                <li class="hidden-xs"><a title="Mastercard" href="#"><img src="images/payment/4.png" alt="Mastercard"></a></li>
                                <li><a title="Discover" href="#"><img src="images/payment/5.png" alt="Discover"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--footer-bottom-area-end-->
    </footer>
    <!--End-footer-wrap-->

</div>
<!--End-main-wrapper-->
<!-- Quickview-product-strat -->
<div id="quickview-wrapper">
    <!-- Modal -->
    <div class="modal fade" id="productModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <!-- modal-content-start-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <div class="modal-product">
                        <!-- product-images -->
                        <div class="product-images">
                            <div class="main-image images">
                                <img alt="" src="images/single-p/m1.jpg">
                            </div>
                        </div>
                        <!-- product-images -->
                        <!-- product-info -->
                        <div class="product-info">
                            <h1>Sample Product</h1>
                            <div class="price-box-3">
                                <div class="s-price-box">
                                    <span class="normal-price">£333.00</span>
                                </div>
                            </div>
                            <a href="shop-grid.html" class="see-all">See all features</a>
                            <div class="quick-add-to-cart">
                                <form method="post" class="cart">
                                    <div class="numbers-row">
                                        <input type="number" id="french-hens" value="3">
                                    </div>
                                    <button class="single_add_to_cart_button" type="submit">Add to cart</button>
                                </form>
                            </div>
                            <div class="quick-desc">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Donec non est at libero.
                            </div>
                            <div class="social-sharing">
                                <div class="widget widget_socialsharing_widget">
                                    <h3 class="widget-title-modal">Share this product</h3>
                                    <ul class="social-icons">
                                        <li><a target="_blank" title="Facebook" href="#" class="facebook social-icon"><i class="fa fa-facebook"></i></a></li>
                                        <li><a target="_blank" title="Twitter" href="#" class="twitter social-icon"><i class="fa fa-twitter"></i></a></li>
                                        <li><a target="_blank" title="Pinterest" href="#" class="pinterest social-icon"><i class="fa fa-pinterest"></i></a></li>
                                        <li><a target="_blank" title="Google +" href="#" class="gplus social-icon"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a target="_blank" title="LinkedIn" href="#" class="linkedin social-icon"><i class="fa fa-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- product-info -->
                    </div>
                    <!-- modal-product -->
                </div>
                <!-- modal-body -->
            </div>
            <!-- modal-content -->
        </div>
        <!-- modal-dialog -->
    </div>
    <!-- END Modal -->
</div>
<!-- End quickview product -->

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
<!-- cascade-slider.js -->
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
