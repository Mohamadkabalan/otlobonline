<?php
include("config.php");
session_start();
if($_SESSION['webappusername']=="")
{
header("Location:login.php");
}
if (isset($_GET['cat']) & isset($_GET['cat'])) {
$catID=mysqli_escape_string($con,trim($_GET['cat']));
$subCatID=mysqli_escape_string($con,trim($_GET['sub']));

}/*else{
header("Location:login.php");
}*/
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Otlob Online | Items</title>
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
    .addImageLink{
        cursor: pointer;color: #3c8dbc;}
    .addImageLink:hover{
        color:lightblue;}
</style>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<input type="hidden" value="<?php echo $catID; ?>" id="CategoryID"/>
<input type="hidden" value="<?php echo $subCatID; ?>" id="SubCategoryID"/>
<div class="wrapper">

  <?php include("header.php"); ?>
  <!-- Left side column. contains the logo and sidebar -->
<?php include("sidebar.php"); ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Items
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Items</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Main row -->
        <div class="box box-info">

            <div class="box-header with-border">
            <div style="margin-top: 20px;" class="row">
                <div class="col-sm-2 form-group"><Label >Category</Label></div>
                <div class="col-sm-2 form-group">

                    <select class="form-control categorydropDown"  id="categorydropDown" >
                        <option value="0" <?php if($catID ==0){ echo 'selected'; } ?> >select</option>
                        <?php
                        $result = $con->query("SELECT * FROM categories order by  name asc");
                        while($row = $result->fetch_array()){
                            list($categoryID,$categoryName)=$row;
                            ?>
                            <option <?php if($catID==$categoryID){ echo 'selected'; } ?>  value="<?=$categoryID;?>" ><?=$categoryName;?></option>
                            <?php
                        }

                        ?>
                    </select>

                </div>
                <div class="col-md-2"></div>
                <div class="col-sm-2 form-group"><label >SubCategory</label></div>
                <div class="col-sm-2 form-group">
                    <select class="form-control subcategorydropDown" id="subcategorydropDown"  >
                        <option value="0" <?php if($subCatID==0){ echo 'selected'; } ?> >select</option>
                        <?php
                        $result = $con->query("SELECT * FROM  subcategories where category_ID='$catID' order by  name asc");
                        while($row = $result->fetch_array()){
                            list($subcategoryID,$subategoryName)=$row;
                            ?>
                            <option <?php if($subCatID==$subcategoryID){ echo 'selected'; } ?>  value="<?=$subcategoryID;?>" ><?=$subategoryName;?></option>
                            <?php
                        }

                        ?>
                    </select>

                </div>
            </div>
        </div>
        </div>

        <div class="" id="dataContent">

        </div>

        <div class="box box-info">
            <form  id="ItemAddForm" method="post">
            <div class="box-header with-border">
                <label style="font-size: 20px;">Add New Item</label>

                <div style="margin-top: 20px;" class="row">

                    <div class="col-sm-3 form-group">
                        <label>Item Name</label>
                        <input type="text" class="form-control" placeholder="Item Name" required="required" id="ItemName"/>
                    </div>
                    <div class="col-sm-3">
                        <label>Item Image</label>

                        <input  required="required" type="file" class="form-control" id="ItemPhotoInput" placeholder="Item Photo">
                    </div>
                    <div class="col-sm-2">
                        <label for="OutOfStock" class="control-label">Out Of Stock</label>
                        <br>
                        <label class="switch">
                            <input class="outOfStockSwitchItem"   type="checkbox">
                            <span class="slider round"></span>
                        </label>
                    </div>

                    <div class="col-sm-3">
                        <label>Item Price $</label>
                        <input type="text" class="form-control number_input" placeholder="Item Price" required="required" id="itemPrice"/>
                    </div>

                </div>
                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                 </div>
                </div>

            <div class="box-footer clearfix">
                <div class="row">

                    <div class="col-sm-3">
                        <label>Item Discount <strong>%</strong></label>
                        <input type="text" min="0" max="100" maxlength="2" class="form-control number_input" placeholder="Item Discount" required="required" id="discount"/>
                    </div>
                    <div class="col-sm-3">
                        <label>Discount stop Date</label>
                        <input type="Date" class="form-control" placeholder="Discount Stop Date" id="discountStopDateLast"/>
                    </div>

                    <div class="col-sm-2">
                        <label for="NewArrivalSwitchItemLast" class="control-label">New Arrival</label>
                        <br>
                        <label class="switch">
                            <input class="NewArrivalSwitchItemLast"   type="checkbox">
                            <span class="slider round"></span>
                        </label>
                    </div>
                    <div class="col-sm-3 form-group">
                        <label>New Arrival Stop Date</label>
                        <br>
                        <input  type="Date" id="NewArrivalStopDateLast" class="form-control"  />
                    </div>
                </div>
            <div class="row" style="padding-top: 10px">
                <div class="col-md-4 form-group">
                    <label>Item Description</label>
                    <textarea style="height: 100px;"  class="form-control" required="required" id="itemDescription"></textarea>
                </div>
                <div class="col-md-4 form-group">
                    <label>Available Color</label>
                    <br>
                    <select style="height: 100px;" class="form-control colorSelectLast" multiple>
                        <option value="0">Select</option>
                        <?php
                        $result = $con->query("SELECT * FROM colors order by color asc");
                        while($row = $result->fetch_array()){
                            list($colorID,$color)=$row;
                            ?>
                            <option id="liColor<?=$colorID;?>" value="<?=$color;?>"><?=$color;?></option>
                        <?php  } ?>
                    </select>
                </div>
                <div class="col-md-3 form-group">
                    <label>Item Brand</label>
                    <br>
                    <select class="form-control brandSelectLast">
                        <option value="0">Select</option>
                        <?php
                        $result = $con->query("SELECT * FROM brands order by brand asc");
                        while($row = $result->fetch_array()){
                            list($barndID,$brand)=$row;
                            ?>
                            <option value="<?=$barndID;?>"><?=$brand;?></option>
                        <?php  } ?>
                    </select>
                </div>



            </div>
                <div class="row" style="padding-top: 10px">
                    <div class="col-md-12 form-group">
                        <label class="addImageLink addImageLast" >Add New Image</label>
                     </div>

                </div>
                <div class="row" id="addImageDiv"></div>
                <div class="row" style="padding-top: 50px;">
                    <div class="col-md-12"><button type="submit" style="color: white;" class="btn btn-default btn-info">Save</button></div>
                </div>
            </div>
            </form>
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
<script src="dist/js/items.js"></script>

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
<script src="js/toast/jquery.toaster.js"></script>
</body>
</html>
