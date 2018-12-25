<?php
$categoryID=$_GET['cat'];
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Beacons | Dashboard</title>
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
<input type="hidden" value="<?php echo $categoryID; ?>" id="CategoryID"/>
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
            <h3 class="box-title">Latest Items</h3>

            <div class="box-tools pull-right">
              <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
              </button>
              <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
            </div>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <div class="table-responsive">
              <table class="table no-margin" id="tbl_users_list">
                <thead>
                <tr>

                  <th>Items</th>
                  <th>Out Of Stock</th>
                  <th>View</th>
                  <th>Delete</th>
                </tr>
                </thead>
                <tbody id="tbodyid">
                <tr>

                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>

                </tbody>
                <tfoot>


                </tfoot>
              </table>
            </div>
            <!-- /.table-responsive -->
          </div>
          <!-- /.box-body -->
          <div class="box-footer clearfix">
            <a href="ItemAdd.php" class="btn btn-sm btn-info btn-flat pull-left">Add New Item</a>

          </div>
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
    var restaurantKey;
    firebase.auth().onAuthStateChanged(function(user) {
        if (user) {
            // User is signed in.
            var displayName = user.displayName;
            var email = user.email;
            var emailVerified = user.emailVerified;
            var photoURL = user.photoURL;
            var isAnonymous = user.isAnonymous;
            var uid = user.uid;
            var providerData = user.providerData;
            var databaseRef = firebase.database().ref('waiters/');
            var rowIndex = 1;

            databaseRef.once('value', function(snapshot) {
                snapshot.forEach(function(childSnapshot) {
                    var childKey = childSnapshot.key;
                    var childData = childSnapshot.val();

                    if(childData.email=email){
                        restaurantKey=childData.restaurantKey
                        fetch_data(restaurantKey);
                    }
                });
            });
        } else {
            // User is signed out.
            window.location="login.php";
        }
    });


    fetch_data();
    function fetch_data(){
        var CategoryID=$("#CategoryID").val();
        var tblUsers = document.getElementById('tbl_users_list');
        var databaseRef = firebase.database().ref('menus/'+restaurantKey+'/categories/'+CategoryID+'/items/');
        var rowIndex = 1;

        databaseRef.once('value', function(snapshot) {
            snapshot.forEach(function(childSnapshot) {
                var childKey = childSnapshot.key;
                var childData = childSnapshot.val();

                var row = tblUsers.insertRow(rowIndex);

                var cellName = row.insertCell(0);
                cellName.appendChild(document.createTextNode(childData.name));
                var cellOutOfStock = row.insertCell(1);
                cellOutOfStock.appendChild(document.createTextNode(childData.outOfStock));
                if(childData.outOfStock){
                    $(cellOutOfStock).html('<label class="switch"><input class="outOfStockSwitch"  data-id="'+childKey+'" type="checkbox" > <span class="slider round"></span> </label>');
                }else{
                    $(cellOutOfStock).html('<label class="switch"><input class="outOfStockSwitch"  data-id="'+childKey+'" type="checkbox" checked> <span class="slider round"></span> </label>');
                }
                var cellViewItem=row.insertCell(2);
                $(cellViewItem).html("<a href='ItemUpdate.php?id="+childKey+"' id="+childKey +" class='btn btn-sm btn-info btn-flat pull-left'>View</a>");
                var cellDeleteItem=row.insertCell(3);
                $(cellDeleteItem).html("<a data-id="+childKey +" class='btn btn-sm btn-danger btn-flat pull-left btn_delete'>Delete</a>");
                rowIndex = rowIndex + 1;
            });
        });
    }






    function reload_page(){
        window.location.reload();
    }

    $(document).on("change",".outOfStockSwitch",function(){
        var Itemid =$(this).data("id");

        if($(this).prop('checked')){
            //checked item available
            var updates = {};
            // Get a key for a new Post.
            updates['/menus/LbFF8Mh9aygW9JoFH8pfGadZr0g1/categories/03yMsOjlwVbNUfpfHz2rpi489ig1/items/'+Itemid+'/outOfStock'] = false;
            firebase.database().ref().update(updates);
        }else{
            //checked item not available

            var updates = {};
            updates['/menus/LbFF8Mh9aygW9JoFH8pfGadZr0g1/categories/03yMsOjlwVbNUfpfHz2rpi489ig1/items/'+Itemid+'/outOfStock'] = true;
            firebase.database().ref().update(updates);
        }
    });
    $(document).on("click",".btn_delete",function(e){
       var ItemID=$(this).data("id");
       if(confirm("Are You Sure You Want To Delete This Item ?")){
           firebase.database().ref().child('/menus/LbFF8Mh9aygW9JoFH8pfGadZr0g1/categories/03yMsOjlwVbNUfpfHz2rpi489ig1/items/' + ItemID).remove();
           $("#tbodyid").empty();
           fetch_data();
       }
    });
});

</script>
</body>
</html>
