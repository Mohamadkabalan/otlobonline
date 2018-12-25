<?php
session_start();
?>
<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>My Order || Otlob Online</title>
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
        <!--Start-Header-area-->
        <?php include("header.php"); ?>
            <!--End-Header-area-->
            <!--start-single-heading-banner-->
            <div class="single-banner-top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                            <div class="single-ban-top-content">
                                <p>My Orders</p>
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
                                    <li><i class="fa fa-home"></i><a class="shop-home" href="index.php"><span>Home</span></a><span><i class="fa fa-angle-right"></i></span></li>
                                    <li class="shop-pro">My orders</li>
                                </ul>
                            </div>
                        </div>
                        <!--end-shop-head-->
                    </div>
                </div>
            </div>
            <!--end-single-heading-->
            <!-- checkout-area start -->
            <div class="checkout-area">
                <div class="container-fluid">
                    <div class="row" style="">
                        <form action="#">
                            <div style="max-width: 600px;margin: 0 auto;">
                                <div class="your-order">
                                    <h3>My order</h3>
                                    <div class="your-order-table table-responsive">
                                        <table>
                                            <thead>
                                                <tr>
                                                    <th class="product-name">Product</th>
                                                    <th class="product-total">Total</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php if(!empty($_SESSION['userName'])){
                                            $clientID=$_SESSION['userID'];
                                            $stmt = $con->prepare("SELECT * FROM orders WHERE ClientID = ? AND Status ='Pending'");
                                            $stmt->bind_param("i",$clientID);
                                            $stmt->execute();
                                            $result = $stmt->get_result();
                                            $count=$result->num_rows;
                                            $row = $result->fetch_array();
                                            $orderID=$row['ID'];

                                            $result = $con->query("SELECT items.id,items.name,items.price,items.discount,items.discountStopDate,order_item.quantity,order_item.color,itemimages.link FROM `order_item` 
inner join items on order_item.item_ID=items.id
inner join itemimages on items.id=itemimages.itemID
WHERE `order_ID`='$orderID' and itemimages.main=1");
                                            $countItems=$result->num_rows;
                                            $currentDate=date("Y-m-d");
                                                $subTotal=0;
                                                while( $row = $result->fetch_array()){
                                                    list($itemsID,$name,$price,$discount,$discountStopDate,$quantity,$color,$link)=$row;
                                                    if($currentDate > $discountStopDate){
                                                        $discount=0;
                                                    }
                                                    $finalItemPrice=$price - ($price * $discount/100);
                                                    $subTotal+=$finalItemPrice *$quantity;
                                                    ?>
                                                    <tr class="cart_item">
                                                        <td class="product-name">
                                                            <?=$name;?> <strong class="product-quantity"> × <?=$quantity;?></strong>
                                                        </td>
                                                        <td class="product-total">
                                                            <span class="amount">$ <?=$finalItemPrice;?></span>
                                                        </td>
                                                    </tr>
                                           <?php }
                                            } else{
                                                header("Location:index.php");
                                            }
                                            ?>


                                            </tbody>
                                            <tfoot>

                                                <tr class="order-total">
                                                    <th>Order Total</th>
                                                    <td><strong><span class="amount">$ <?=$subTotal;?></span></strong>
                                                    </td>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>

                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- checkout-area end -->
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
