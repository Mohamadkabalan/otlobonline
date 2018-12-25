<?php session_start(); ?>
<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Home || Online Store</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500,700" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,600,700,800i" rel="stylesheet">

        <!-- favicon icon -->
        <link rel="shortcut icon" type="images/png" href="images/favicon.ico">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
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
        <!--<div class="preloader">
            <div class="loading-center">
                <div class="loading-center-absolute">
                    <div class="object object_one"></div>
                    <div class="object object_two"></div>
                    <div class="object object_three"></div>
                </div>
            </div>
        </div>-->
        <!--end-Preloader-area-->
        <!--header-area-start-->
        <!--Start-main-wrapper-->
        <div class="page-1">
            <!--Start-Header-area-->
            <?php include("header.php"); ?>
            <!--End-Header-area-->
            <!-- Start-slider-->
            <?php include("slider.php"); ?>
            <!-- End-slider-->
            <!-- Start-banner-area-->
            <div class="container" style="margin-top: 50px;">
                <div class="row">
                    <div  id="searchData">
                    </div>
                </div>
                    <!--Start-pagination-area-->
          <!--      <div class="pagination-wrap">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="blog-pagination">
                                    <div class="shop-breadcrumb">
                                        <ul>
                                            <li class="active"><a href="#">1</a></li>
                                            <li><a href="#">2</a></li>
                                            <li><a href="#">3</a></li>
                                            <li><a href="#">4</a></li>
                                            <li><a href="#">5</a></li>
                                            <li><a href="#">6</a></li>
                                            <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>-->
                <!--End-pagination-area-->

            </div>
            <input type="hidden" id="clientID" value="<?php if(!empty($_SESSION['userID'])){ echo $_SESSION['userID'];}?>" />
            <div class="banner-area padding-t banner-dis1">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="single-banner banner-r-b">
                                <a href="#"><img alt="Hi Guys" src="images/banner/1.jpg" /></a>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                            <div class="single-banner banner-m-b">
                                <a href="#"><img alt="Hi Guys" src="images/banner/2.jpg" /></a>
                            </div>
                            <div class="single-banner banner-r-b">
                                <a href="#"><img alt="Hi Guys" src="images/banner/3.jpg" /></a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                            <div class="single-banner banner-4">
                                <a href="#"><img alt="Hi Guys" src="images/banner/4.jpg" /></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End-banner-area-->
            <!-- Start-featured-area-->
            <div class="featured-product-wrap padding-t padding-dis">
                <div class="container">
                    <!-- section-heading start -->
                    <div class="section-heading">
                        <h3><span class="h-color">FEATURED</span> PRODUCTS</h3>
                    </div>
                    <!-- section-heading end -->
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="features-tab">
                              <!-- Nav tabs -->
                                <ul class="nav nav-tabs" role="tablist">
<?php
                                    $result = $con->query("SELECT * FROM `categories` order by name asc");
                                    $j=1;
                                    while($row = $result->fetch_array()){
                                    $catID=$row['id'];
                                    $catName=$row['name'];

                                    ?>
                                        <li role="presentation" class="<?php if($j==1){ echo 'active'; }  ?>"><a href="#<?php echo $catName; ?>" aria-controls="home" role="tab" data-toggle="tab"><?php echo $catName; ?></a></li>

                                    <?php        $j+=1;  }
                                    ?>
                              
                                </ul>
                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <!--start-home-section-->
<?php
                                    $result = $con->query("SELECT * FROM `categories` order by name asc");
                                    $counter=1;
                                    while($row = $result->fetch_array()){
                                    $catID=$row['id'];
                                    $catName=$row['name'];

                                    ?>
                                        <div role="tabpanel" class="tab-pane <?php if($counter==1){ echo 'active';} ?>" id="<?php echo $catName; ?>">
                                            <div class="row">
                                                <div class="featured-carousel indicator">
                                              <?php      $result1 = $con->query("SELECT items.id,items.name,items.price,items.discount,items.text,itemimages.link FROM `items` inner join `itemimages` on items.id = itemimages.itemID
 where category_ID='$catID' and main=1 order by name asc");

                                                    while($row1 = $result1->fetch_array()){
                                                        $itemID=$row1['id'];
                                                        $itemName=$row1['name'];
                                                        $originItemPrice = $row1['price'];
                                                        $NewItemPrice =$row1['price']- ($row1['price'] * $row1['discount']) / 100 ;

                                                        $itemDiscount=$row1['discount'];
                                                        $itemDesc=$row1['text'];
                                                        $itemImage=$row1['link'];
                                                        $query2="Select * from itemscolor where itemID=".$itemID;
                                                        $result2 = $con->query($query2);
                                                        $colors="";
                                                        $itemsArray=array();
                                                        while($row2 = $result2->fetch_array()) {
                                                            array_push($itemsArray,$row2['color']);
                                                        }
                                                        $colors=implode(",",$itemsArray);

                                                    ?>
                                                    <!-- Start-single-product -->

                                                    <div class="col-lg-3">
                                                        <div class="single-product">
                                                         <!--   <div class="sale">Sale</div>
                                                            <div class="new">new</div>-->
                                                            <!--<div class="sale-border"></div>-->
                                                            <div class="product-img-wrap">
                                                                <a class="product-img" href="single-product.php?item=<?=$itemID;?>"> <img src="admin/<?php echo $itemImage; ?>" alt="product-image" /></a>
                                                                <div class="add-to-link">
                                                                  <!--  <a href="#">
                                                                        <div><i class="fa fa-heart"></i><span>Add to Wishlist</span></div>
                                                                    </a>-->
                                                                    <a class="quickView" data-colors="<?=$colors;?>" data-toggle="modal" data-target="#productModal" href="#" data-itemid="<?=$itemID; ?>" data-itemname="<?=$itemName;?>" data-originitemprice="<?=$originItemPrice;?>" data-newitemprice="<?=$NewItemPrice?>" data-itemdiscount="<?=$itemDiscount;?>" data-itemdesc="<?=$itemDesc;?>" data-itemimage="<?=$itemImage;?>" data-discountstopdate="<?=$discountStopDate;?>">
                                                                        <div><i class="fa fa-eye"></i><span>view</span></div>
                                                                    </a>

                                                                </div>

                                                            </div>
                                                            <div class="product-info text-center">
                                                                <div class="product-content">
                                                                    <a href="#"><h3 class="pro-name"><?php echo $itemName; ?></h3></a>
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
                                                                        <?php if($itemDiscount > 0){ ?>
                                                                            <span class="normal-price">$ <?php echo $NewItemPrice; ?></span>
                                                                            <span class="old-price"><del>$ <?php echo $originItemPrice; ?></del></span>
                                                                        <?php
                                                                        }else{
                                                                            ?>
                                                                            <span class="normal-price">$ <?php echo $originItemPrice; ?></span>
                                                            <?php            } ?>


                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- End-single-product -->
                                                    <?php } ?>
                                                </div>
                                            </div>
                                        </div>


                                        <?php        $counter+=1;  }
                                    ?>
                                    <!--end-home-section-->

                                    <!--Start-latest-products-wrap-->
                                    <div class="latest-products-wrap padding-t">
                                        <div class="container">
                                            <div class="latest-content text-center">
                                                <div class="section-heading">
                                                    <h3><span class="h-color">New</span> Arrivals</h3>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="featured-carousel indicator">
                                                    <?php
                                                    $currentDate=Date("Y-m-d");
                                                    $result1 = $con->query("SELECT items.id,items.name,items.price,items.discount,items.text,items.NewArrival,items.NewArrivalStopDate,itemimages.link FROM `items` inner join `itemimages` on items.id = itemimages.itemID
                            where  main=1 and items.NewArrival=1 and items.NewArrivalStopDate > '$currentDate'  order by name asc");

                                                    while($row1 = $result1->fetch_array()) {
                                                        $itemID = $row1['id'];
                                                        $itemName = $row1['name'];

                                                        $originItemPrice = $row1['price'];
                                                        $NewItemPrice =$row1['price'] - ($row1['price'] * $row1['discount']) / 100 ;
                                                        $itemDiscount = $row1['discount'];
                                                        $itemDesc = $row1['text'];
                                                        $itemImage = $row1['link'];
                                                        $query2="Select * from itemscolor where itemID=".$itemID;
                                                        $result2 = $con->query($query2);
                                                        $colors="";
                                                        $itemsArray=array();
                                                        while($row2 = $result2->fetch_array()) {
                                                            array_push($itemsArray,$row2['color']);
                                                        }
                                                        $colors=implode(",",$itemsArray);
                                                        ?>
                                                        <!-- Start-single-product -->
                                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                            <div class="single-product">
                                                                <div class="sale"></div>
                                                                <div class="sale-border"></div>
                                                                <div class="product-img-wrap">
                                                                    <a class="product-img" href="single-product.php?item=<?=$itemID;?>"> <img src="admin/<?php echo $itemImage; ?>" alt="product-image" /></a>
                                                                    <div class="add-to-link">
<!--                                                                        <a href="#">
                                                                            <div><i class="fa fa-heart"></i><span>Add to Wishlist</span></div>
                                                                        </a>
-->                                                                        <a class="quickView" data-colors="<?=$colors;?>" data-toggle="modal" data-target="#productModal" href="#" data-itemid="<?=$itemID; ?>" data-itemname="<?=$itemName;?>" data-originitemprice="<?=$originItemPrice;?>" data-newitemprice="<?=$NewItemPrice?>" data-itemdiscount="<?=$itemDiscount;?>" data-itemdesc="<?=$itemDesc;?>" data-itemimage="<?=$itemImage;?>" data-discountstopdate="<?=$discountStopDate;?>">
                                                                            <div><i class="fa fa-eye"></i><span>view</span></div>
                                                                        </a>

                                                                    </div>
                                                                   <!-- <div class="sold-text">
                                                                        <span>Sold <br> Out</span>
                                                                    </div>-->
                                                                </div>
                                                                <div class="product-info text-center">
                                                                    <div class="product-content">
                                                                        <a href="#"><h3 class="pro-name"><?php echo $itemName; ?></a>
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
                                                                            <?php if($itemDiscount > 0){ ?>  <span class="normal-price"><del>$ <?php echo $originItemPrice; ?></del></span><span class="normal-price">$ <?php echo $NewItemPrice; ?></span>  <?php }else{ ?> <span class="normal-price">$ <?php echo $originItemPrice; ?></span> <?php } ?>

                                                                            <!--<span class="old-price"><del>$220.00</del></span>-->
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- End-single-product -->
                                                    <?php } ?>


                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--End-latest-products-wrap-->

                                    <!--Start-Best Deals-wrap-->
                                    <div class="latest-products-wrap padding-t">
                                        <div class="container">
                                            <div class="latest-content text-center">
                                                <div class="section-heading">
                                                    <h3><span class="h-color">Best</span> Deals</h3>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="featured-carousel indicator">
                                                    <?php
                                                    $currentDate=Date("Y-m-d");

                                                    $result1 = $con->query("SELECT items.id,items.name,items.price,items.discount,items.text,items.discountStopDate,itemimages.link FROM `items` inner join `itemimages` on items.id = itemimages.itemID
                            where  main=1 and items.discount > 0 and items.discountStopDate > '$currentDate'  order by name asc");

                                                    while($row1 = $result1->fetch_array()) {
                                                        $itemID = $row1['id'];
                                                        $itemName = $row1['name'];
                                                        $originItemPrice = $row1['price'];
                                                        $NewItemPrice =$row1['price'] - ($row1['price'] * $row1['discount']) / 100 ;
                                                        $itemDiscount = $row1['discount'];
                                                        $itemDesc = $row1['text'];
                                                        $itemImage = $row1['link'];
                                                        $discountStopDate=$row1['discountStopDate'];
                                                        $query2="Select * from itemscolor where itemID=".$itemID;
                                                        $result2 = $con->query($query2);
                                                        $colors="";
                                                        $itemsArray=array();
                                                        while($row2 = $result2->fetch_array()) {
                                                            array_push($itemsArray,$row2['color']);
                                                         }
                                                         $colors=implode(",",$itemsArray);
                                                        ?>
                                                        <!-- Start-single-product -->
                                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                            <div class="single-product">
                                                                <div class="sale">Sale</div>
                                                                <div class="sale-border"></div>
                                                                <div class="product-img-wrap">
                                                                    <a class="product-img" href="single-product.php?item=<?=$itemID;?>"> <img src="admin/<?php echo $itemImage; ?>" alt="product-image" /></a>
                                                                    <div class="add-to-link">
                                                                       <!-- <a href="#">
                                                                            <div><i class="fa fa-heart"></i><span>Add to Wishlist</span></div>
                                                                        </a>-->
                                                                        <a class="quickView" data-colors="<?=$colors;?>" data-toggle="modal" data-target="#productModal" href="#" data-itemid="<?=$itemID; ?>" data-itemname="<?=$itemName;?>" data-originitemprice="<?=$originItemPrice;?>" data-newitemprice="<?=$NewItemPrice?>" data-itemdiscount="<?=$itemDiscount;?>" data-itemdesc="<?=$itemDesc;?>" data-itemimage="<?=$itemImage;?>" data-discountstopdate="<?=$discountStopDate;?>">
                                                                            <div><i class="fa fa-eye"></i><span>view</span></div>
                                                                        </a>
                                                                     <!--   <a href="#">
                                                                            <div><i class="fa fa-random"></i><span>Order Now</span></div>
                                                                        </a>-->
                                                                    </div>
                                                                    <div class="sold-text" style="background-color: transparent;">
                                                                        <span>Discount <br> <?php echo $itemDiscount; ?> %</span>
                                                                    </div>
                                                                </div>
                                                                <div class="product-info text-center">
                                                                    <div class="product-content">
                                                                        <a href="#"><h3 class="pro-name"><?php echo $itemName; ?></a>
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
                                                                            <span class="old-price"><del>$ <?php echo $originItemPrice?></del></span>
                                                                            <span class="normal-price">$ <?php echo $NewItemPrice; ?></span>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- End-single-product -->
                                                    <?php } ?>


                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--End-Best Deals-wrap-->
                                    <!--Start-brand-area-->
<?php include("brandsCaresoul.php");?>
                                    <!--End-brand-area-->


















                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End-featured-area-->


            <!--Satar-business-policy-wrap-->
            <div class="business-policy-wrap padding-t">
                <div class="container">
                    <div class="row">
                       <!--Satar-single-p-wrap-->
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                            <div class="single-p-wrap banner-r-b text-center">
                                <span><i class="fa fa-plane"></i></span>
                                <h4>FREE SHIPPING .</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, veniam.</p>
                            </div>
                        </div>
                        <!--end-single-p-wrap-->
                        <!--Satar-single-p-wrap-->
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                            <div class="single-p-wrap banner-r-b text-center">
                                <span><i class="fa fa-life-ring"></i></span>
                                <h4>24/7 CUSTOMER SERVICE.</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, veniam.</p>
                            </div>
                        </div>
                        <!--end-single-p-wrap-->
                        <!--Satar-single-p-wrap-->
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                            <div class="single-p-wrap banner-r-b text-center">
                                <span><i class="fa fa-money"></i></span>
                                <h4>100% MONEY BACK</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, veniam.</p>
                            </div>
                        </div>
                        <!--end-single-p-wrap-->
                        <!--Satar-single-p-wrap-->
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                            <div class="single-p-wrap text-center">
                                <span><i class="fa fa-clock-o"></i></span>
                                <h4>OPEN: 8:00AM - CLOSE: 20:00PM.</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, veniam.</p>
                            </div>
                        </div>
                        <!--end-single-p-wrap-->
                    </div>
                </div>
            </div>
            <!--End-business-policy-wrap-->

            <!--Start-variety-products-wrap-->
            <div class="variety-products-wrap padding-t hidden">
                <div class="container">
                    <div class="row">
                        <!--start-best-seller-product-->
                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                            <div class="best-heading">
                                <div class="section-heading best-h">
                                    <h3><span class="h-color">Best</span> Seller</h3>
                                </div>
                            </div>
                            <div class="best-carousel">
                                <!--start-double-best-product-->
                                <div class="best-double-product">
                                    <!-- Start-single-product -->
                                    <div class="single-product margin-b">
                                        <div class="product-img-wrap best-s-w">
                                            <a class="product-img" href="#"> <img src="images/product/3.jpg" alt="product-image" /></a>
                                        </div>
                                        <div class="product-info best-s text-center">
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
                                                    <span class="normal-price">$140.00</span>
                                                    <span class="old-price"><del>$170.00</del></span>
                                                </div>
                                                <div class="add-to-cartbest">
                                                    <a href="#" title="add to cart">
                                                        <div><span>Add to cart</span></div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End-single-product -->
                                    <!-- Start-single-product -->
                                    <div class="single-product">
                                        <div class="product-img-wrap best-s-w">
                                            <a class="product-img" href="#"> <img src="images/product/1.jpg" alt="product-image" /></a>
                                        </div>
                                        <div class="product-info best-s text-center">
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
                                                    <span class="normal-price">$140.00</span>
                                                    <span class="old-price"><del>$170.00</del></span>
                                                </div>
                                                <div class="add-to-cartbest">
                                                    <a href="#" title="add to cart">
                                                        <div><span>Add to cart</span></div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End-single-product -->
                                </div>
                                <!--end-double-best-product-->
                                <!--start-double-best-product-->
                                <div class="best-double-product">
                                    <!-- Start-single-product -->
                                    <div class="single-product margin-b">
                                        <div class="product-img-wrap best-s-w">
                                            <a class="product-img" href="#"> <img src="images/product/2.jpg" alt="product-image" /></a>
                                        </div>
                                        <div class="product-info best-s text-center">
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
                                                    <span class="normal-price">$140.00</span>
                                                    <span class="old-price"><del>$170.00</del></span>
                                                </div>
                                                <div class="add-to-cartbest">
                                                    <a href="#" title="add to cart">
                                                        <div><span>Add to cart</span></div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End-single-product -->
                                    <!-- Start-single-product -->
                                    <div class="single-product">
                                        <div class="product-img-wrap best-s-w">
                                            <a class="product-img" href="#"> <img src="images/product/6.jpg" alt="product-image" /></a>
                                        </div>
                                        <div class="product-info best-s text-center">
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
                                                    <span class="normal-price">$140.00</span>
                                                    <span class="old-price"><del>$170.00</del></span>
                                                </div>
                                                <div class="add-to-cartbest">
                                                    <a href="#" title="add to cart">
                                                        <div><span>Add to cart</span></div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End-single-product -->
                                </div>
                                <!--end-double-best-product-->
                            </div>
                        </div>
                        <!--end-best-seller-product-->
                        <!--start-Top-rated-product-->
                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 top-rated">
                            <div class="best-heading">
                                <div class="section-heading best-h">
                                    <h3><span class="h-color">Top</span> Rated</h3>
                                </div>
                            </div>
                            <div class="best-carousel">
                                <!--start-double-best-product-->
                                <div class="best-double-product">
                                    <!-- Start-single-product -->
                                    <div class="single-product margin-b">
                                        <div class="product-img-wrap best-s-w">
                                            <a class="product-img" href="#"> <img src="images/product/4.jpg" alt="product-image" /></a>
                                        </div>
                                        <div class="product-info best-s text-center">
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
                                                    <span class="normal-price">$140.00</span>
                                                    <span class="old-price"><del>$170.00</del></span>
                                                </div>
                                                <div class="add-to-cartbest">
                                                    <a href="#" title="add to cart">
                                                        <div><span>Add to cart</span></div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End-single-product -->
                                    <!-- Start-single-product -->
                                    <div class="single-product">
                                        <div class="product-img-wrap best-s-w">
                                            <a class="product-img" href="#"> <img src="images/product/5.jpg" alt="product-image" /></a>
                                        </div>
                                        <div class="product-info best-s text-center">
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
                                                    <span class="normal-price">$140.00</span>
                                                    <span class="old-price"><del>$170.00</del></span>
                                                </div>
                                                <div class="add-to-cartbest">
                                                    <a href="#" title="add to cart">
                                                        <div><span>Add to cart</span></div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End-single-product -->
                                </div>
                                <!--end-double-best-product-->
                                <!--start-double-best-product-->
                                <div class="best-double-product">
                                    <!-- Start-single-product -->
                                    <div class="single-product margin-b">
                                        <div class="product-img-wrap best-s-w">
                                            <a class="product-img" href="#"> <img src="images/product/6.jpg" alt="product-image" /></a>
                                        </div>
                                        <div class="product-info best-s text-center">
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
                                                    <span class="normal-price">$140.00</span>
                                                    <span class="old-price"><del>$170.00</del></span>
                                                </div>
                                                <div class="add-to-cartbest">
                                                    <a href="#" title="add to cart">
                                                        <div><span>Add to cart</span></div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End-single-product -->
                                    <!-- Start-single-product -->
                                    <div class="single-product">
                                        <div class="product-img-wrap best-s-w">
                                            <a class="product-img" href="#"> <img src="images/product/10.jpg" alt="product-image" /></a>
                                        </div>
                                        <div class="product-info best-s text-center">
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
                                                    <span class="normal-price">$140.00</span>
                                                    <span class="old-price"><del>$170.00</del></span>
                                                </div>
                                                <div class="add-to-cartbest">
                                                    <a href="#" title="add to cart">
                                                        <div><span>Add to cart</span></div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End-single-product -->
                                </div>
                                <!--end-double-best-product-->
                            </div>
                        </div>
                        <!--end-Top-rated-product-->
                        <!--start-best-offer-product-->
                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 best-off">
                            <div class="best-heading">
                                <div class="section-heading best-h">
                                    <h3><span class="h-color">Best</span> Offer</h3>
                                </div>
                            </div>
                            <div class="best-carousel">
                                <!--start-double-best-product-->
                                <div class="best-double-product">
                                    <!-- Start-single-product -->
                                    <div class="single-product margin-b">
                                        <div class="product-img-wrap best-s-w">
                                            <a class="product-img" href="#"> <img src="images/product/10.jpg" alt="product-image" /></a>
                                        </div>
                                        <div class="product-info best-s text-center">
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
                                                    <span class="normal-price">$140.00</span>
                                                    <span class="old-price"><del>$170.00</del></span>
                                                </div>
                                                <div class="add-to-cartbest">
                                                    <a href="#" title="add to cart">
                                                        <div><span>Add to cart</span></div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End-single-product -->
                                    <!-- Start-single-product -->
                                    <div class="single-product">
                                        <div class="product-img-wrap best-s-w">
                                            <a class="product-img" href="#"> <img src="images/product/9.jpg" alt="product-image" /></a>
                                        </div>
                                        <div class="product-info best-s text-center">
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
                                                    <span class="normal-price">$141.00</span>
                                                    <span class="old-price"><del>$170.00</del></span>
                                                </div>
                                                <div class="add-to-cartbest">
                                                    <a href="#" title="add to cart">
                                                        <div><span>Add to cart</span></div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End-single-product -->
                                    <!-- Start-single-product -->
                                    <div class="single-product">
                                        <div class="product-img-wrap best-s-w">
                                            <a class="product-img" href="#"> <img src="images/product/9.jpg" alt="product-image" /></a>
                                        </div>
                                        <div class="product-info best-s text-center">
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
                                                    <span class="normal-price">$142.00</span>
                                                    <span class="old-price"><del>$170.00</del></span>
                                                </div>
                                                <div class="add-to-cartbest">
                                                    <a href="#" title="add to cart">
                                                        <div><span>Add to cart</span></div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End-single-product -->
                                    <!-- Start-single-product -->
                                    <div class="single-product">
                                        <div class="product-img-wrap best-s-w">
                                            <a class="product-img" href="#"> <img src="images/product/9.jpg" alt="product-image" /></a>
                                        </div>
                                        <div class="product-info best-s text-center">
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
                                                    <span class="normal-price">$143.00</span>
                                                    <span class="old-price"><del>$170.00</del></span>
                                                </div>
                                                <div class="add-to-cartbest">
                                                    <a href="#" title="add to cart">
                                                        <div><span>Add to cart</span></div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End-single-product -->
                                </div>
                                <!--end-double-best-product-->
                                <!--start-double-best-product-->
                                <div class="best-double-product">
                                    <!-- Start-single-product -->
                                    <div class="single-product margin-b">
                                        <div class="product-img-wrap best-s-w">
                                            <a class="product-img" href="#"> <img src="images/product/8.jpg" alt="product-image" /></a>
                                        </div>
                                        <div class="product-info best-s text-center">
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
                                                    <span class="normal-price">$150.00</span>
                                                    <span class="old-price"><del>$170.00</del></span>
                                                </div>
                                                <div class="add-to-cartbest">
                                                    <a href="#" title="add to cart">
                                                        <div><span>Add to cart</span></div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End-single-product -->
                                    <!-- Start-single-product -->
                                    <div class="single-product">
                                        <div class="product-img-wrap best-s-w">
                                            <a class="product-img" href="#"> <img src="images/product/7.jpg" alt="product-image" /></a>
                                        </div>
                                        <div class="product-info best-s text-center">
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
                                                    <span class="normal-price">$151.00</span>
                                                    <span class="old-price"><del>$170.00</del></span>
                                                </div>
                                                <div class="add-to-cartbest">
                                                    <a href="#" title="add to cart">
                                                        <div><span>Add to cart</span></div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End-single-product -->
                                </div>
                                <!--end-double-best-product-->
                            </div>
                        </div>
                        <!--end-best-offer-product-->
                    </div>
                </div>
            </div>
            <!--End-variety-products-wrap-->
            <!--Start-newsletter-wrap-->
           <!-- <div class="news-letter-wrap">
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
            </div>-->
            <!--End-newsletter-wrap-->
            <!--Start-footer-wrap-->
            <?php include("footer.php"); ?>
            <!--End-footer-wrap-->

        </div>
        <!--End-main-wrapper-->
        <!--strat-Quickview-product -->
        <div id="quickview-wrapper">
            <!-- Modal -->
            <div class="modal fade" id="productModal" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <!-- modal-content-start-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        </div>
                        <input type="hidden" id="selectedItemColor" />
                        <div class="modal-body ItemModelData" >

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
        <!-- End-quickview-product -->
        <!--Start-Newsletter-Popup-->
   <!--     <div id="newsletter-popup-conatiner">
            <div id="newsletter-popup">
                <span class="hide-popup">Close</span>
                <div class="subscribe-popup">
                    <div class="title-subscribe">
                        <h1>NEWSLETTER</h1>
                    </div>
                    <form id="newsletter-form" method="post" action="#">
                        <div class="content-subscribe">
                            <div class="form-subscribe-header">
                                <label>Subcribe to the Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat..</label>
                            </div>
                            <div class="input-box">
                               <input type="text" class="input-text newsletter-subscribe" title="Sign up for our newsletter" name="email">
                            </div>
                            <div class="actions">
                                <button class="button-subscribe" title="Subscribe" type="submit">Subscribe</button>
                            </div>
                        </div>
                    </form>
                    <div class="subscribe-bottom">
                        <input type="checkbox" id="dont_show">
                        <label for="dont_show">Don't show this popup again</label>
                    </div>
                </div>
            </div>
        </div>-->
        <!--End-Newsletter-Popup-->


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

        <script src="js/function.js"></script>

    </body>
</html>