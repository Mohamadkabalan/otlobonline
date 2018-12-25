<?php session_start();
if(!empty($_SESSION['userID'])){
    $clientID=$_SESSION['userID'];
}else{
    ?>
    <script>
    alert("You have to login before making an order");
    </script>
<?php }
?>
<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Single Product || OurStore</title>
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
        <div class="single-page">
            <!--Start-Header-area-->
            <?php include("header.php"); ?>
            <?php if(isset($_GET['item'])){
                $itemID=mysqli_escape_string($con,trim($_GET['item']));
                $stmt = $con->prepare("SELECT * FROM `items` WHERE `id`='$itemID'");
                $stmt->bind_param("i",$itemID);
                $stmt->execute();
                $result = $stmt->get_result();
                $count=$result->num_rows;
                $row = $result->fetch_array();
                $name=$row['name'];
                $originItemPrice = $row['price'];
                $newItemPrice =$row['price'] - ($row['price'] * $row['discount']) / 100 ;
                $discount=$row['discount'];
                $desc=$row['text'];
                $OutOfStock=$row['OutOfStock'];
                $category_ID=$row['category_ID'];
                $subCategory_ID=$row['subCategory_ID'];
                $stmt->close();

            } ?>
            <!--End-Header-area-->
            <!--start-single-heading-banner-->
            <!--<div class="single-banner-top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                            <div class="single-ban-top-content">
                                <p>single product</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>-->
            <!--end-single-heading-banner-->
            <!--start-single-heading-->
            <div class="signle-heading">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <!--start-shop-head -->
                            <div class="shop-head-menu">
                                <ul>
                                    <li><i class="fa fa-home"></i><a class="shop-home" href="index.php"><span>Home</span></a><span><i class="fa fa-angle-right"></i></span></li>
                                    <li class="shop-pro">Single Product</li>
                                </ul>
                            </div>
                            <!--end-shop-head-->
                        </div>
                    </div>
                </div>
            </div>
            <!--end-single-heading-->
            <!--start-signle-page-->
            <div class="single-page-area padding-t">
                <!-- Single Product details Area -->
                <div class="single-product-details-area">
                    <!-- Single Product View Area -->
                    <div class="single-product-view-area">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-5 col-md-5 col-sm-6 col-xs-12">
                                    <!-- Single Product View -->
                                    <div class="single-procuct-view">
                                        <!-- Simple Lence Gallery Container -->
                                        <div class="simpleLens-gallery-container" id="p-view">
                                            <div class="simpleLens-container tab-content">
                                                <?php

                                                    $stmt2 = $con->prepare("SELECT * FROM `itemimages` WHERE `itemID`='$itemID' order by `main` desc");
                                                    $stmt2->bind_param("i",$itemID);
                                                    $stmt2->execute();
                                                    $result2 = $stmt2->get_result();
                                                    $count2=$result2->num_rows;
                                                    $i=0;
                                                $imageArray = array();
                                                    while($row2 = $result2->fetch_array()){
                                                        $imageArray[]=$row2;
                                                        $itemImage=$row2['link'];
                                                        ?>
                                                        <div class="tab-pane <?php if($i==0){ echo "active"; } ?>" id="p-view-<?=$i;?>">
                                                            <div class="simpleLens-big-image-container">
                                                              <!--  <a class="simpleLens-lens-image" data-lens-image="admin/<?/*=$itemImage;*/?>">-->
                                                                    <img src="admin/<?=$itemImage;?>" class="simpleLens-big-image" alt="product">
                                                                <!--</a>-->
                                                            </div>
                                                        </div>

                                                        <?php $i+=1;  }
                                                    $stmt2->close();
                                                    ?>
                                            </div>
                                            <!-- Simple Lence Thumbnail -->
                                            <div class="simpleLens-thumbnails-container text-center">
                                                <div id="single-product" class="owl-carousel custom-carousel">
                                                    <ul class="nav nav-tabs" role="tablist">
                                                        <?php
                                                        $i=0;
                                                        foreach($imageArray as $array) {
                                                        $itemImage=$array['link'];
                                                        ?>
                                                        <li style="padding-top: 3px;" class="<?php if($i==0){ echo "active";}elseif($i==1){ echo "last-li"; }else{echo "hidden-md hidden-xs hidden-sm";} ?>"><a href="#p-view-<?=$i;?>" role="tab" data-toggle="tab"><img src="admin/<?=$itemImage;?>" style="width:100px;height: 100px" alt="productd"></a></li>
                                                        <?php $i+=1; } ?>
                                                    </ul>


                                                </div>
                                            </div>
                                            <!-- End Simple Lence Thumbnail -->
                                        </div>
                                        <!-- End Simple Lence Gallery Container -->
                                    </div>
                                    <!-- End Single Product View -->
                                </div>
                                <div class="col-lg-7 col-md-7 col-sm-6 col-xs-12 single-product-details">
                                    <div class="single-pro">
                                        <div class="product-name">
                                            <h3><?=$name;?></h3>
                                        </div>
                                    </div>
                                    <div class="product-details">
                                        <div class="product-content">
                                            <div class="pro-rating single-p">
                                              <!--  <ul class="single-pro-rating">
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li class="r-grey"><i class="fa fa-star"></i></li>
                                                    <li class="r-grey"><i class="fa fa-star-half-o"></i></li>
                                                </ul>-->
                                              <!--  <div class="rating-links">
                                                    <a href="#">1 Review(s)</a>
                                                    <span class="separator">|</span>
                                                    <a href="#" class="add-to-review">Add Your Review</a>
                                                </div>-->
                                            </div><br>
                                            <div class="pro-price single-p">
                                                <span class="price-text">Price:</span>
                                                <span class="normal-price">$ <?=$newItemPrice;?></span>
                                        <?php   if($discount > 0){ ?>     <span class="old-price"><del>$ <?=$originItemPrice;?></del></span> <?php } ?>
                                            </div>
                                        </div>
                                        <p>Availability: <span class="signle-stock"><?php if($OutOfStock==0){ echo "In Stock";  }else{ echo "Out Of Stock";    } ?></span></p>
                                        <div class="product-reveiw">
                                            <p><?=$desc;?></p>
                                        </div>
                                        <div class="clear"></div>
                                        <!--start-size-area-->
                                        <!--<div class="skill-checklist">
                                            <label for="skillc"><span class="size-cho">Size:</span>
                                            </label>
                                            <br>
                                            <select id="skillc">
                                                <option value="">S</option>
                                                <option value="">M</option>
                                                <option value="">L</option>
                                                <option value="">XL</option>
                                                <option value="">XXL</option>
                                            </select>
                                        </div>-->
                                        <!--end-size-area-->
                                        <!--start-color-choice-->
                                        <div class="color-instock">
                                            <div class="skill-colors">
                                                <span class="color-cho">Color</span>
                                                <ul class="skill-ulli">
                                                    <?php

                                                    $stmt1 = $con->prepare("select * from itemscolor WHERE `itemID`='$itemID'");
                                                    $stmt1->bind_param("i",$itemID);
                                                    $stmt1->execute();
                                                    $result1 = $stmt1->get_result();
                                                    $count1=$result1->num_rows;
                                                    $i=0;
                                                    $color1='';
                                                    while($row1 = $result1->fetch_array()){
                                                   $color=$row1['color'];
                                                        if($i==0){
                                                            $color1=$color;
                                                     }
                                                        ?>
                                                        <li data-color="<?=$color;?>" class="liColor  skill-<?=$color;?> <?php if($i==0){ echo "active-skill"; } ?> ">
                                                            <a href="#"></a>
                                                        </li>

                                                   <?php $i+=1;  }
                                                    $stmt1->close();
                                                    ?>
                                                </ul>
                                            </div>
                                        </div>
                                        <!--end-color-choice-->
                                        <div class="">
                                            <div class="quick-add-to-cart">
                                                <form id="formAddToOrder"  method="post" class="cart">
                                                    <input type="hidden" id="itemID" value="<?=$itemID;?>" required/>
                                                    <input type="hidden" id="clientID" value="<?=$clientID;?>" required/>
                                                    <input type="hidden" id="itemColor" value="<?=$color1;?>"  required/>
                                                    <div class="qty-button">
                                                        <input type="number" required class="number_input form-control"  min="1" max="99" maxlength="2" id="itemQuantity">
                                                       <!-- <div class="box-icon button-plus">
                                                            <input type="button" class="qty-increase " onclick="var qty_el = document.getElementById('qty'); var qty = qty_el.value; if( !isNaN( qty )) qty_el.value++;return false;" value="+">
                                                        </div>
                                                        <div class="box-icon button-minus">
                                                            <input type="button" class="qty-decrease" onclick="var qty_el = document.getElementById('qty'); var qty = qty_el.value; if( !isNaN( qty ) &amp;&amp; qty &gt; 0 ) qty_el.value--;return false;" value="-">
                                                        </div>-->
                                                    </div>
                                                    <div class="add-to-cartbest single-add">
                                                        <a href="#" title="add to cart">
                                                            <button class="single_add_to_cart_button" type="submit">Add to order</button>

                                                        </a>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <!-- social-markting end -->
                                       <!-- <div class="clear"></div>
                                        <div class="single-pro-cart">
                                            <div class="add-to-link single-p">
                                                <a href="#" title="Wishlist">
                                                    <div><i class="fa fa-heart"></i></div>
                                                </a>
                                                <a href="#" title="Email">
                                                    <div><i class="fa fa-envelope"></i></div>
                                                </a>
                                                <a href="#" title="Compare">
                                                    <div><i class="fa fa-random"></i></div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="clear"></div>
                                        <div class="social-icon-img">
                                            <div class="sharethis-inline-share-buttons"></div>
                                        </div>-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Product View Area -->
                </div>
                        <!-- End Single details Area -->
            </div>
            <!--End-signle-page-->
            <!-- Single Description Tab -->

			<!-- End Single Description Tab -->
            <!--Start-upsell-products-wrap-->
            <div class="latest-products-wrap padding-t">
                <div class="container">
                    <div class="latest-content text-center">
                        <div class="section-heading">
                            <h3><span class="h-color">RELATED</span> Products</h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="featured-carousel indicator">
                            <!-- Start-single-product -->

                            <?php      $result1 = $con->query("SELECT items.id,items.name,items.price,items.discount,items.text,itemimages.link FROM `items` inner join `itemimages` on items.id = itemimages.itemID
 where category_ID='$category_ID' and main=1 order by name asc");

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
                                                <a  href="single-product.php?item=<?=$itemID;?>">
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


                            <!-- End-single-product -->




                        </div>
                    </div>
                </div>
            </div>
            <!--End-upsell-products-wrap-->
            <!--Start-brand-area-->
            <div class="brands-area">
                <div class="container">
                    <div class="single-pro-ban">
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
        <script type="text/javascript" src="http://platform-api.sharethis.com/js/sharethis.js#property=59cb402cfdc69400125961d2&product=inline-share-buttons"></script>
		<!-- main js -->
        <script src="js/main.js"></script>

    <script>
        $(document).ready(function () {

        $(document).on('keydown','.number_input',function(e){
            if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
                // Allow: Ctrl+A, Command+A
                (e.keyCode === 65 && (e.ctrlKey === true || e.metaKey === true)) ||
                // Allow: home, end, left, right, down, up
                (e.keyCode >= 35 && e.keyCode <= 40)) {
                // let it happen, don't do anything
                return;
            }
            if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
                e.preventDefault();
            }
        });
            $(document).on('submit','#formAddToOrder',function(e){
                e.preventDefault();

                var clientID=$("#clientID").val();
                var itemID=$("#itemID").val();
                var itemColor=$("#itemColor").val();
                var itemQuantity=$("#itemQuantity").val();
if(clientID > 0){
    addToOrder(itemID,clientID,itemQuantity,itemColor);
}else{
    alert("You have to login first");
}
            });

            $(document).on('click','.liColor',function(e){
                var itemColor=$(this).data("color");
                $("#itemColor").val(itemColor);
            });
            function addToOrder(ItemID,clientID,itemQunantity,itemColor){
                $.ajax({
                    url: "AddToOrder.php",
                    method: "POST",
                    dataType: "json",
                    data: {
                        itemColor:itemColor,
                        itemQunantity:itemQunantity,
                        clientID: clientID,
                        itemID: ItemID
                    },

                    success: function (data) {

                        var value = data.response["status"];
                        if(value == true){
                            alert("Item Added To Order , We will contact you soon");
                            $('.modal').modal('toggle');
                        }else{
                            alert("item not added to  order");
                        }
                    }
                });
            }
        });
    </script>
    </body>
</html>
