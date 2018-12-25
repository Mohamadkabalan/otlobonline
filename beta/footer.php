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
                        <p class="des">Otlob Online  is an online retail service based in Lebanon </p>
                        <div class="footer-read-more">
                            <a href="#">read more</a>
                            <span><i class="fa fa-long-arrow-right"></i></span>
                        </div>
                    </div>
                    <!--footer-text-end-->
                    <!--footer-link-area-start-->
                    <div class="social-icon">
                        <h4>FOLLOW US ON</h4>
                        <a class="faceb" href="https://www.facebook.com/otlobb/" title="Facebook"><i class="fa fa-facebook"></i></a>
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
<?php
$result = $con->query("SELECT * FROM categories order by name asc");
while($row = $result->fetch_array()){
    list($catID,$catName,$catImage)=$row;
    ?>
                                <li><a data-catid="<?=$catID;?>" data-subcatid="0" class="handCursor getItems"><?=$catName;?></a></li>

                                <?php } ?>
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
                                <li><a href="my-account.php">My Account</a></li>
                                <li><a href="login.php">Login</a></li>
                                <li><a href="#">Sitemap</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="contact-us.php">Contact Us</a></li>
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
                            <p class="adress"><label>Head Office:</label><span class="ft-content">Beirut,<br> Salim Slem.</span></p>
                            <p class="adress"><label>Branch Office:</label><span class="ft-content">Beirut,<br> Verdun.</span></p>
                            <p class="phone"><label>phone:</label><span class="ft-content phone-num"><span class="phone1">(961) 03793477</span><span class="phone2"></span></span></p>
                            <p class="web"><label>email:</label><span class="ft-content web-site"><a href="mailto:info@otlobonline.co">info@otlobonline.co</a></span></p>
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
                        <span> Copyright &copy; <a href="http://otlobonline.co.com/">Otlob Online</a>. All Rights Reserved.</span>
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