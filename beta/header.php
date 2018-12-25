<?php

include("admin/config.php"); ?>

<header>
    <div class="header-top-wrap">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="header-top-left">
                        <!--Start-Header-language-->
                     <!--   <div class="dropdown top-language-wrap"> <a role="button" data-toggle="dropdown" data-target="#" class="top-language dropdown-toggle" href="#"> <img src="images/flag/e.png" alt="language"> English <span class="caret"></span> </a>
                            <ul class="dropdown-menu" role="menu">
                                <li role="presentation"><a role="menuitem" href="#"><img src="images/flag/e.png" alt="language"> English </a></li>
                                <li role="presentation"><a role="menuitem" href="#"><img src="images/flag/f.png" alt="language"> French </a></li>
                                <li role="presentation"><a role="menuitem" href="#"><img src="images/flag/g.png" alt="language"> German </a></li>
                            </ul>
                        </div>-->
                        <!--End-Header-language-->
                        <!--Start-Header-currency-->
                      <!--  <div class="dropdown top-currency-wrap"> <a role="button" data-toggle="dropdown" data-target="#" class="top-currency dropdown-toggle" href="#"><span class="usd-icon"><i class="fa fa-usd"></i></span> USD <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li role="presentation"><a role="menuitem" href="#"> $ - Dollar </a></li>
                                <li role="presentation"><a role="menuitem" href="#"> £ - Pound </a></li>
                                <li role="presentation"><a role="menuitem" href="#"> € - Euro </a></li>
                            </ul>
                        </div>-->
                        <!--End-Header-currency-->
                        <!--Start-welcome-message-->
                        <div class="welcome-mg hidden-xs"><span><?php if(!empty($_SESSION['userName'])){ echo "Welcome ".  $_SESSION['userName']; } ?> </span></div>
                        <!--End-welcome-message-->
                    </div>
                </div>
                <!-- Start-Header-links -->
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="header-top-right">
                        <div class="top-link-wrap">
                            <div class="single-link">
                                <!--<div class="my-account"><a href="my-account.php"><span class="">My Account</span></a></div>-->
                                <!--<div class="wishlist"><a href="wishlist.html"><span class="">Wishlist</span></a></div>-->
                                <div class="check"><a href="myorders.php"><span class="">Checkout</span></a></div>
                         <?php if(!empty($_SESSION['userName'])){ ?>       <div class="logout"><a href="logout.php"><span class="">Log Out</span></a></div><?php }else{ ?> <div class="login"><a href="login.php"><span class="">Log In</span></a></div>  <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End-Header-links -->
            </div>
        </div>
    </div>
    <!--Start-header-mid-area-->
    <div class="header-mid-wrap">
        <div class="container">
            <div class="header-mid-content">
                <div class="row">
                    <!--Start-logo-area-->
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <div class="header-logo">
                            <a href="index.php"><img src="images/logo/1.png" alt="OurStore"></a>
                        </div>
                    </div>
                    <!--End-logo-area-->
                    <!--Start-gategory-searchbox-->
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div id="search-category-wrap">
                            <form class="header-search-box" id="formHeader" action="#" method="post">
                                <div class="search-cat">
                                    <select id="category" class="category-items" name="category">
                                        <option value="0">All Categories</option>
                                        <?php
                                        $result = $con->query("SELECT * FROM `categories` order by name asc");
                                        $j=1;
                                        while($row = $result->fetch_array()) {
                                            $catID = $row['id'];
                                            $catName = $row['name'];
                                        ?>
                                            <option value="<?php echo $catID; ?>"><?php echo $catName ?></option>
                                            <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                                <input type="search" placeholder="Search here..." id="text-search" name="search">
                                <button id="btn-search-category" type="submit">
                                    <i class="fa fa-search"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                    <!--End-gategory-searchbox-->
                    <!--Start-cart-wrap-->
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 headerOrderDiv" >

                    </div>
                    <!--End-cart-wrap-->
                </div>
            </div>
        </div>
    </div>
    <!--End-header-mid-area-->
    <!--Start-Mainmenu-area -->
    <div class="mainmenu-area hidden-sm hidden-xs">
        <div id="sticker">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 hidden-sm hidden-xs">
                        <div class="log-small"><a class="logo" href="index.php"><img alt="OurStore" src="images/logo/s.png"></a></div>
                        <div class="mainmenu">
                            <nav>
                                <ul id="nav">
<?php
$result = $con->query("SELECT * FROM categories order by name asc");
while($row = $result->fetch_array()){
    list($catID,$catName,$catImage)=$row;
    $result1 = $con->query("SELECT * FROM subcategories WHERE  category_ID='$catID' order by name asc");
    $count1=$result1->num_rows;
?>
                                    <li <?php if($count1 > 0){ ?>class="angle-down"<?php } ?> ><a data-catid="<?=$catID;?>" data-subcatid="0" class="handCursor getItems"><?=$catName;?></a>
                                        <?php if($count1 > 0){ ?>
                                        <div class="megamenu">
                                            <div class="megamenu-list">
                                                        <span class="mega-single">
                                                <?php } ?>
                                                <?php while($row1 = $result1->fetch_array()){  list($subCatID,$subCatName)=$row1; ?>
                                                    <a class="handCursor getItems" data-catid="<?=$catID;?>" data-subcatid="<?=$subCatID;?>" ><?=$subCatName;?></a>
                                                <?php }?>
                                                            <?php if($count1 > 0){ ?>
                                                        </span>
                                                        <span class="mega-single">
                                                                 <a class="handCursor" class="mega-banner">
                                                                    <img src="admin/<?=$catImage;?>" style="width:150px;height: 150px;" alt="Hi">
                                                                </a>
                                                        </span>
                                                    </div>
                                                 </div>
                                    <?php } ?>

                                    </li>
<?php }?>


                                    <li><a href="contact-us.php">Contact Us</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End-Mainmenu-area-->
    <!--Start-Mobile-Menu-Area -->
    <div class="mobile-menu-area visible-sm visible-xs">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="mobile-menu">
                        <nav id="dropdown">
                            <ul>
                                <li><a href="index.php">Home</a>
                                    <ul>
                                        <li><a href="index-2.html">Home 2</a></li>
                                        <li><a href="index-3.html">Home 3</a></li>
                                        <li><a href="index-4.html">Home 4</a></li>
                                        <li><a href="index-5.html">Home 5</a></li>
                                        <li><a href="index-6.html">Home 6</a></li>
                                        <li><a href="index-7.html">Home 7</a></li>
                                    </ul>
                                </li>
                                <li><a href="shop-grid.php">Men</a>
                                    <ul>
                                        <li><a href="shop-grid.php">Clothing</a>
                                            <ul>
                                                <li><a href="shop-grid.php">Jackets</a></li>
                                                <li><a href="shop-grid.php">Blazers</a></li>
                                                <li><a href="shop-grid.php">T-Shirts</a></li>
                                                <li><a href="shop-grid.php">Collections</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="shop-grid.php">Dresses</a>
                                            <ul>
                                                <li><a href="shop-grid.php">Evening</a></li>
                                                <li><a href="shop-grid.php">Cocktail</a></li>
                                                <li><a href="shop-grid.php">Footwear</a></li>
                                                <li><a href="shop-grid.php">Sunglass</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="shop-grid.php">Handbags</a>
                                            <ul>
                                                <li><a href="shop-grid.php">Bootees Bags</a></li>
                                                <li><a href="shop-grid.php">Exclusive</a></li>
                                                <li><a href="shop-grid.php">Jackets</a></li>
                                                <li><a href="shop-grid.php">Furniture</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="shop-grid.php">Jewellery</a>
                                            <ul>
                                                <li><a href="shop-grid.php">Earrings</a></li>
                                                <li><a href="shop-grid.php">Braclets
                                                    </a></li>
                                                <li><a href="shop-grid.php">Nosepins</a></li>
                                                <li><a href="shop-grid.php">SweaBangelsters</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="shop-grid.php">Women</a>
                                    <ul>
                                        <li><a href="shop-grid.php">Clothing</a>
                                            <ul>
                                                <li><a href="shop-grid.php">Jackets</a></li>
                                                <li><a href="shop-grid.php">Blazers</a></li>
                                                <li><a href="shop-grid.php">T-Shirts</a></li>
                                                <li><a href="shop-grid.php">Collections</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="shop-grid.php">Dresses</a>
                                            <ul>
                                                <li><a href="shop-grid.php">Evening</a></li>
                                                <li><a href="shop-grid.php">Cocktail</a></li>
                                                <li><a href="shop-grid.php">Footwear</a></li>
                                                <li><a href="shop-grid.php">Sunglass</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="shop-grid.php">Handbags</a>
                                            <ul>
                                                <li><a href="shop-grid.php">Bootees Bags</a></li>
                                                <li><a href="shop-grid.php">Exclusive</a></li>
                                                <li><a href="shop-grid.php">Jackets</a></li>
                                                <li><a href="shop-grid.php">Furniture</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="shop-grid.php">Jewellery</a>
                                            <ul>
                                                <li><a href="shop-grid.php">Earrings</a></li>
                                                <li><a href="shop-grid.php">Braclets
                                                    </a></li>
                                                <li><a href="shop-grid.php">Nosepins</a></li>
                                                <li><a href="shop-grid.php">SweaBangelsters</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="shop-grid.php">Pages</a>
                                    <ul>
                                        <li><a href="about-us.php">About Us</a></li>
                                        <li><a href="myorders.php">Checkout</a></li>
                                        <li><a href="wishlist.html">Wishlist</a></li>
                                        <li><a href="shopping-cart.php">Shopping Cart</a></li>
                                        <li><a href="my-account.php">My Account</a></li>
                                        <li><a href="login.php">Login</a></li>
                                        <li><a href="single-product.php">Single Product</a></li>
                                        <li><a href="blog.php">Blog</a></li>
                                        <li><a href="blog-details.html">Blog Details</a></li>
                                        <li><a href="blog-right-sidebar.html">Blog Right Sidebar</a></li>
                                        <li><a href="shop-grid.php">Shop Grid</a></li>
                                        <li><a href="shop-list.html">Shop List</a></li>
                                        <li><a href="shop-right-sidebar.html">Shop Right Sidbar</a></li>
                                        <li><a href="404.html">404</a></li>
                                    </ul>
                                </li>
                                <li><a href="contact-us.php">Contact Us</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End-Mobile-Menu-Area -->
</header>
