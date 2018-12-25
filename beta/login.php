<?php
include("admin/config.php");
session_start();
	if(isset($_POST['submit'])){
		if($_POST['submit']=='Create Account'){
			$firstName=mysqli_escape_string($con,trim($_POST['firstName']));
			$lastName=mysqli_escape_string($con,trim($_POST['lastName']));
			$email=mysqli_escape_string($con,trim($_POST['email']));
			$phone=mysqli_escape_string($con,trim($_POST['phone']));
			$address=mysqli_escape_string($con,trim($_POST['address']));
			$password=mysqli_escape_string($con,trim($_POST['password']));
			$stmt = $con->prepare("INSERT INTO clients ( `first_name`, `last_name`, `email`, `phone`, `address`, `password`) VALUES (? , ?, ?, ?, ?, ?)");
			$stmt->bind_param("ssssss",$firstName,$lastName,$email,$phone,$address,$password);
			$stmt->execute();
			$count=$stmt->affected_rows;
			$inserted_id=$con->insert_id;
			if($count > 0){
				$_SESSION['userName'] = $firstName." ".$lastName;
				$_SESSION['userID'] = $inserted_id;

				header("Location:index.php");
			}
			$stmt->close();

		}
	if($_POST['submit']=='Login'){
	
			$email=mysqli_escape_string($con,trim($_POST['email']));
			$password=mysqli_escape_string($con,trim($_POST['password']));
		
			
			$result = $con->query("SELECT * FROM clients WHERE email = '$email' AND password = '$password'");
$count=$result->num_rows;
$row = $result->fetch_array();

			list($clientID,$firstName,$lastName)=$row;
			if($count ==1 ){

				$_SESSION['userName'] = $firstName." ".$lastName;
				$_SESSION['userID'] = $clientID;

				header("Location:index.php");
			}
		
	echo "hello";
	}
	}

?>
<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Login || OurStore</title>
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
        <div class="blog-page">
            <!--Start-Header-area-->
          <!--  --><?php include("header.php"); ?>
            <!--End-Header-area-->
            <!--start-single-heading-banner-->
            <div class="single-banner-top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12  text-center">
                            <div class="single-ban-top-content">
                                <p>Login</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end-single-heading-banner-->
            <!--start-single-heading-->
            <div class="signle-heading login-m">
                <div class="container">
                    <div class="row">
                        <!--start-shop-head -->
                        <div class="col-lg-12">
                            <div class="shop-head-menu">
                                <ul>
                                    <li><i class="fa fa-home"></i><a class="shop-home" href="index.php"><span>Home</span></a><span><i class="fa fa-angle-right"></i></span></li>
                                    <li class="shop-pro">Login</li>
                                </ul>
                            </div>
                        </div>
                        <!--end-shop-head-->
                    </div>
                </div>
            </div>
            <!--end-single-heading-->
            <!-- login-area start -->
            <div class="login-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="login-content banner-r-b">
                                <h2 class="login-title">Login</h2>
                                <p>Hello,Welcome to your account</p>
                               <!-- <div class="social-sign">
                                    <a class="banner-r-b" href="#"><i class="fa fa-facebook"></i> Sign in with facebook</a>
                                    <a class="twitter" href="#"><i class="fa fa-twitter"></i> Sign in with twitter</a>
                                </div>-->
                                <form action="#" method="post" id="FormLogin">
                                    <label>Email Address</label>
                                    <input type="email" name="email" placeholder="Email" />
                                    <label>Password</label>
                                    <input type="password" name="password" placeholder="Password" />
                                    <div class="login-lost">
                                        <span class="log-rem">
                                            <input type="checkbox" />
                                            <label>Remember me!</label>
                                        </span>
                                        <span class="forgot-login">
                                            <a href="#">Forgot your password?</a>
                                        </span>
                                    </div>
                                    <input class="login-sub" type="submit" value="Login" name="submit" />
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="login-content login-margin">
                                <h2 class="login-title">create a new account</h2>
                                <p>Create your own Unicase account.</p>
                                <form action="login.php" method="post" id="FormCreateAccount">
                                    <div style="width: 48%;float: left;" class="form-group">
                                        <label>First Name</label>

                                        <input minlength="3" class="form-control" type="text" name="firstName" placeholder="First Name" required />

                                    </div>
                                    <div style="width: 48%;float: left;margin-left: 4%;" class="form-group">
                                        <label>Last Name</label>

                                        <input minlength="3" class="form-control" type="text" name="lastName" placeholder="Last Name" required />

                                    </div>
                                    <div class="form-group">
                                        <label>Email Address</label>

                                        <input class="form-control NewAccountEmail" type="email" name="email" placeholder="Email" required />
                                        <div  class="alert alert-danger hidden NewAccountEmailAlert">The Entered Email Is Already Exist, Please Try another one</div>
                                    </div>
                                    <div class="form-group">
                                        <label>Password</label>

                                        <input minlength="6" class="form-control" type="password" name="password" placeholder="Password" required />
                                    </div>
                                    <div class="form-group">
                                        <label>Phone Number</label>

                                        <input minlength="8" class="form-control number_input" name="phone" type="text" placeholder="Phone Number" required />
                                    </div>
                                    <div class="form-group">
                                        <label>Address</label>

                                        <input minlength="20" class="form-control" type="text" name="address" placeholder="ex: City / Area/ Street / building / Floor " required />
                                    </div>
                                    <div class="form-group"> <input class="login-sub form-control" name="submit"  type="submit" value="Create Account" /></div>
                                </form>
                                <div class="sign-up-today">
                                    <h2 class="login-title">sign up today and you'll be able to:</h2>
                                    <ul>
                                        <li>
                                            <span>
                                                <i class="fa fa-check-square-o"></i>
                                                <span>speed your way through the checkout</span>
                                            </span>
                                        </li>
                                        <li>
                                            <span>
                                                <i class="fa fa-check-square-o"></i>
                                                <span>track your order easily</span>
                                            </span>
                                        </li>
                                        <li>
                                            <span>
                                                <i class="fa fa-check-square-o"></i>
                                                <span>keep a record of your all purchase</span>
                                            </span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- login-area end -->
            <!--Start-brand-area-->

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
        if ((e.shiftKey ||  (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
        e.preventDefault();
        }
        });
            $(document).on('blur','.NewAccountEmail',function(e){
              var email=$(this).val();
                $.ajax({
                    url: "CheckAccountExisit.php",
                    method: "POST",
                    dataType: "json",
                    data: {
                        username: email
                    },

                    success: function (data) {
                        var value = data.response["status"];
                        if(value == true){
$(".NewAccountEmailAlert").removeClass("hidden");
                            $(".NewAccountEmail").val(" ");
                        }else{
                            $(".NewAccountEmailAlert").addClass("hidden");
                        }
                    }
                });

            });
        });
</script>
    </body>
</html>
