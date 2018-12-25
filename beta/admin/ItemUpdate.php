<?php
$ItemID=$_GET['id'];
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Beacons | Item Update</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
    <!-- Morris chart -->
    <link rel="stylesheet" href="bower_components/morris.js/morris.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href="bower_components/jvectormap/jquery-jvectormap.css">
    <!-- Date Picker -->
    <link rel="stylesheet" href="bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="bower_components/bootstrap-daterangepicker/daterangepicker.css">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    <script src="https://www.gstatic.com/firebasejs/5.4.2/firebase.js"></script>
    <script>
        // Initialize Firebase
        var config = {
            apiKey: "AIzaSyC_SHL_b26A2KrmcLsRo9d_nczMcKMvFo8",
            authDomain: "beeko-c3cac.firebaseapp.com",
            databaseURL: "https://beeko-c3cac.firebaseio.com",
            projectId: "beeko-c3cac",
            storageBucket: "beeko-c3cac.appspot.com",
            messagingSenderId: "109639893763"
        };
        firebase.initializeApp(config);
    </script>
    <style>
        .switch {
            position: relative;
            display: inline-block;
            width: 60px;
            height: 34px;
        }

        .switch input {display:none;}

        .slider {
            position: absolute;
            cursor: pointer;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: #ccc;
            -webkit-transition: .4s;
            transition: .4s;
        }

        .slider:before {
            position: absolute;
            content: "";
            height: 26px;
            width: 26px;
            left: 4px;
            bottom: 4px;
            background-color: white;
            -webkit-transition: .4s;
            transition: .4s;
        }

        input:checked + .slider {
            background-color: #2196F3;
        }

        input:focus + .slider {
            box-shadow: 0 0 1px #2196F3;
        }

        input:checked + .slider:before {
            -webkit-transform: translateX(26px);
            -ms-transform: translateX(26px);
            transform: translateX(26px);
        }

        /* Rounded sliders */
        .slider.round {
            border-radius: 34px;
        }

        .slider.round:before {
            border-radius: 50%;
        }
    </style>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

    <?php include("header.php"); ?>
    <!-- Left side column. contains the logo and sidebar -->
    <?php include("sidebar.php"); ?>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Dashboard
                <small>Control panel</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Dashboard</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-aqua">
                        <div class="inner">
                            <h3>150</h3>

                            <p>New Orders</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-bag"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-green">
                        <div class="inner">
                            <h3>53<sup style="font-size: 20px">%</sup></h3>

                            <p>Bounce Rate</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-stats-bars"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-yellow">
                        <div class="inner">
                            <h3>44</h3>

                            <p>User Registrations</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-person-add"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-red">
                        <div class="inner">
                            <h3>65</h3>

                            <p>Unique Visitors</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-pie-graph"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
            </div>
            <!-- /.row -->
            <!-- Main row -->
            <div class="row">
                <!-- TABLE: LATEST ORDERS -->
                <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title">Add New Item</h3>

                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                        </div>
                    </div>
                    <!-- /.box-header -->


                    <!-- /.box-header -->
                    <!-- form start -->
                    <form class="form-horizontal" id="ItemUpdateForm" >
                        <div class="box-body">
                            <div class="form-group">
                                <label for="ItemName" class="col-sm-2 control-label">Item Name</label>

                                <div class="col-sm-10">
                                    <input type="text" required="required" class="form-control" id="ItemName" placeholder="Item Name">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="itemDescription" class="col-sm-2 control-label">Item Description</label>

                                <div class="col-sm-10">
                                    <input type="text" required="required" class="form-control" id="itemDescription" placeholder="Item Description">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="itemPrice" class="col-sm-2 control-label">Price</label>

                                <div class="col-sm-10">
                                    <input type="text" required="required" class="form-control number_input" id="itemPrice" placeholder="Item Price">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="ItemPhotoInput" class="col-sm-2 control-label">Item Photo</label>

                                <div class="col-sm-10">
<div><img src="" id="ItemImage" style="width:120px;height:80px;"></div>

                                    <input style="margin-top: 10px;"  type="file" class="form-control" id="ItemPhotoInput" placeholder="Item Photo">


                                </div>
                            </div>

                            <div class="form-group">
                                <label for="CookingTime" class="col-sm-2 control-label">Cooking Time</label>

                                <div class="col-sm-10">
                                    <input type="text" required="required" class="form-control number_input" id="CookingTime" placeholder="Cooking Time">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="discount" class="col-sm-2 control-label">Discount</label>

                                <div class="col-sm-10">
                                    <input type="text" required="required" class="form-control number_input" id="discount" placeholder="Discount">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="rating" class="col-sm-2 control-label">Rating</label>

                                <div class="col-sm-10">
                                    <input type="text" required="required" class="form-control number_input" id="rating" placeholder="Rating">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="OutOfStock" class="col-sm-2 control-label">Out Of Stock</label>

                                <div class="col-sm-10">

                                    <label class="switch"><input class="outOfStockSwitch"  data-id="'+childData.name+'" type="checkbox" > <span class="slider round"></span> </label>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <!-- <div class="checkbox">
                                         <label>
                                             <input type="checkbox"> Remember me
                                         </label>
                                     </div>-->
                                </div>
                            </div>
                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer">
                            <a href="Items.php"> <button type="button" class="btn btn-default">Cancel</button></a>
                            <button type="submit" class="btn btn-info pull-right">Update</button>
                        </div>
                        <!-- /.box-footer -->
                    </form>

                    <!-- /.box-body -->

                    <!-- /.box-footer -->
                </div>
                <!-- /.box -->
            </div>


            <!-- /.row (main row) -->

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <?php include("footer.php"); ?>

    <!-- Control Sidebar -->
    <?php include("control.php"); ?>
    <!-- /.control-sidebar -->
    <!-- Add the sidebar's background. This div must be placed
         immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="bower_components/raphael/raphael.min.js"></script>
<script src="bower_components/morris.js/morris.min.js"></script>
<!-- Sparkline -->
<script src="bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="bower_components/moment/min/moment.min.js"></script>
<script src="bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<script src="assets/js/jquery.loading.block.js"></script>
<script>
    $(document).ready(function(){
        var databaseRef = firebase.database().ref('menus/LbFF8Mh9aygW9JoFH8pfGadZr0g1/categories/03yMsOjlwVbNUfpfHz2rpi489ig1/items/<?php echo $ItemID; ?>/');
        var rowIndex = 1;
        var photoURL;
        databaseRef.once('value', function(snapshot) {
            var childKey = snapshot.key;
            var childData = snapshot.val();
            var cookingTime = childData.cookingTime;
            var description = childData.description;
            var discount = childData.discount;
            var name = childData.name;
            var outOfStock = childData.outOfStock;
             photoURL = childData.photoURL;
            var price = childData.price;
            var rating = childData.rating;
            $("#ItemImage").attr("src",photoURL);
            $("#ItemName").val(name);
            $("#itemDescription").val(description);
            $("#itemPrice").val(price);
            $("#itemPhoto").val(photoURL);
            $("#CookingTime").val(cookingTime);
            $("#discount").val(discount);
            if(outOfStock == "true"){
                $(".outOfStockSwitch").attr('checked', false );
            }else{
                $(".outOfStockSwitch").attr('checked', true );
            }

            $("#rating").val(rating);
        });











        $(document).on("change","#ItemPhotoInput",function(e){
            selectedFile=e.target.files[0];
        });
        $(document).on("submit","#ItemUpdateForm",function(e){
            e.preventDefault();

            var cookingTime = $("#CookingTime").val();
            var description =$("#itemDescription").val();
            var discount =$("#discount").val();
            var name =$("#ItemName").val();
            if($(".outOfStockSwitch").prop('checked')){
                var outOfStock =  false;
            }else{
                var outOfStock = true;
            }


            var price = $("#itemPrice").val();
            var rating = $("#rating").val();
start_loader();
            if(typeof selectedFile != "undefined"){
                var ItemID = firebase.database().ref().child('items').push().key;

                var filename = selectedFile.name;
                // Create a root reference
                var storageRef = firebase.storage().ref('restaurants/LbFF8Mh9aygW9JoFH8pfGadZr0g1/categories/03yMsOjlwVbNUfpfHz2rpi489ig1/items/<?php echo $ItemID; ?>/'+filename);
// Upload the file and metadata
                var uploadTask = storageRef.put(selectedFile);

// Register three observers:
// 1. 'state_changed' observer, called any time the state changes
// 2. Error observer, called on failure
// 3. Completion observer, called on successful completion
                uploadTask.on('state_changed', function(snapshot){
                    // Observe state change events such as progress, pause, and resume
                    // Get task progress, including the number of bytes uploaded and the total number of bytes to be uploaded
                    var progress = (snapshot.bytesTransferred / snapshot.totalBytes) * 100;
                    console.log('Upload is ' + progress + '% done');
                    switch (snapshot.state) {
                        case firebase.storage.TaskState.PAUSED: // or 'paused'
                            console.log('Upload is paused');
                            break;
                        case firebase.storage.TaskState.RUNNING: // or 'running'
                            console.log('Upload is running');
                            break;
                    }
                }, function(error) {
                    // Handle unsuccessful uploads
                }, function() {
                    // Handle successful uploads on complete
                    // For instance, get the download URL: https://firebasestorage.googleapis.com/...
                    uploadTask.snapshot.ref.getDownloadURL().then(function(downloadURL) {
                        console.log('File available at', downloadURL);
                        var data = {
                            cookingTime: cookingTime,
                            description: description,
                            discount: discount,
                            name: name,
                            outOfStock: outOfStock,
                            photoURL: downloadURL,
                            price: price,
                            rating: rating}
                        var updates = {};
                        updates['/menus/LbFF8Mh9aygW9JoFH8pfGadZr0g1/categories/03yMsOjlwVbNUfpfHz2rpi489ig1/items/<?php echo $ItemID; ?>/'] = data;
                        firebase.database().ref().update(updates);
                        stop_loader();
                        window.location="Items.php";
                    });
                });
            }else{
                var data = {
                    cookingTime: cookingTime,
                    description: description,
                    discount: discount,
                    name: name,
                    outOfStock: outOfStock,
                    photoURL: photoURL,
                    price: price,
                    rating: rating}
                var updates = {};
                updates['/menus/LbFF8Mh9aygW9JoFH8pfGadZr0g1/categories/03yMsOjlwVbNUfpfHz2rpi489ig1/items/<?php echo $ItemID; ?>/'] = data;
                firebase.database().ref().update(updates);
                stop_loader();
                window.location="Items.php";
            }

        });





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
        function start_loader(){

            $.loadingBlockShow({
                imgPath: 'assets/img/default.svg',
                text: 'Loading ...',
                style: {
                    position: 'fixed',
                    width: '100%',
                    height: '100%',
                    background: 'rgba(0, 0, 0, .8)',
                    left: 0,
                    top: 0,
                    zIndex: 10000
                }
            });



        }
        function stop_loader(){
            $.loadingBlockHide();
        }
    });
</script>
</body>
</html>
