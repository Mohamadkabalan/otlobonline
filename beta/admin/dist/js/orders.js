$(document).ready(function(){
    fetch_data();
    function fetch_data(){
        $('#dataContent').empty();
        $.ajax({
            url: "OrdersFetch.php",
            method:"GET",
            dataType: "json",
            success: function (data) {


                var dataElement = '';
                var values = data.response;

                for (i = 0; i < values.length; i++) {
                    var OrderID = data.response[i]["OrderID"];
                    var OrderDateTime = data.response[i]["OrderDate"];
                    var dt=OrderDateTime.split(" ");
                    var OrderDate=dt[0];
                    var OrderTime=dt[1];
                    var status = data.response[i]["status"];
                    var totalPrice = data.response[i]["totalPrice"];
                    var clientFirstName = data.response[i]["clientFirstName"];
                    var clientLastName = data.response[i]["clientLastName"];
                    var items = data.response[i]["items"];
                    dataElement += '<div id="orderDiv' + OrderID + '" class="box box-info collapsed-box"><div class="box-header with-border"><label>Client Name: ' + clientFirstName + ' ' + clientLastName + '</label><div class="row"><div class="col-md-3 form-group"><label>Order Date</label><input disabled  data-orderid="' + OrderID + '" type="date" class="form-control orderName" value="' + OrderDate + '" /></div><div class="col-md-3 form-group"><label>Order Time</label><input disabled  data-orderid="' + OrderID + '" type="time" class="form-control orderName" value="' + OrderTime + '" /></div><div class="col-md-3"><label >Status</label><br><select class="form-control orderStatus"  data-orderid="' + OrderID + '"><option';
                    if(status=="Pending"){ dataElement +=' selected '; }
                    dataElement +=' value="Pending" >Pending</option><option ';
                    if(status=="Processing"){ dataElement +=' selected '; }
                    dataElement +=' value="Processing" >Processing</option><option ';
                    if(status=="Delivered"){ dataElement +=' selected '; }
                    dataElement +=' value="Delivered" >Delivered</option> ';
                    dataElement +='</select> </div><div class="col-md-3"><label>Order Total Price</label><br><input disabled type="text" value="' + totalPrice + '" class="form-control orderPrice" data-orderid="' + OrderID + '" placeholder="Order Price"></div></div>';
                    dataElement += '<div class="box-tools pull-right">' +
                        '<button type="button" class="btn btn-box-tool faMinusButton" data-widget="collapse"><i class="fa fa-plus faPlus"></i></button>' +
                        '<button type="button" class="btn btn-box-tool btnDelete" data-orderid="' + OrderID + '" data-widget="remove"><i class="fa fa-times"></i></button>' +
                        '</div>' +
                        '</div>' +
                        '<div class="box-footer clearfix">';

                    for (j = 0; j < items.length; j++) {
                        var orderItemID = items[j]["orderItemID"];
                        var itemID = items[j]["itemID"];
                        var ItemName = items[j]["ItemName"];
                        var ItemPrice = items[j]["ItemPrice"];
                        var ItemDiscount = items[j]["ItemDiscount"];
                        var ItemQuantity = items[j]["ItemQuantity"];
                        var ItemColor = items[j]["ItemColor"];
                        var ItemSize = items[j]["ItemSize"];
                        dataElement += '<br><div class="row"><div class="col-md-4"><label>Item Name</label><input disabled type="text" class="form-control ItemName" data-orderid="' + OrderID + '" value="' + ItemName + '" /></div><div class="col-md-4"><label>Quantity</label><input disabled type="text" class="form-control ItemCount" data-orderid="' + OrderID + '" value="' + ItemQuantity + '" /></div><div class="col-md-4"><label>Item Size</label><input disabled type="text" class="form-control ItemSize" data-orderid="' + OrderID + '" value="' + ItemSize + '"/></div></div>';
                        dataElement += '<div class="row"><div class="col-md-4"><label>Item Price</label><input disabled type="text" class="form-control ItemPrice" data-orderid="' + OrderID + '" value="' + ItemPrice + '"/></div><div class="col-md-4"><label>Item Discount</label><input disabled type="text" class="form-control ItemDiscount" data-orderid="' + OrderID + '" value="' + ItemDiscount + '"/></div><div class="col-md-4"><label>Item Color</label><input disabled type="text" class="form-control ItemColor" data-orderid="' + OrderID + '" value="' + ItemColor + '"/></div></div>';
                    }
                    dataElement += '</div>';
                }
                $('#dataContent').append(dataElement);
            }
            });


    }



    $(document).on("change",".orderStatus",function(e){
        var orderid=$(this).data("orderid");
        var status=$(this).val();
        edit_data(orderid, status,"orders","status");
        if(status=="Delivered"){

            edit_data(orderid, "Date","orders","DeliveryDate");
        }
    });
    $(document).on("click",".faMinus",function(e){
        $(this).removeClass("fa-minus");
        $(this).removeClass("faMinus");
        $(this).addClass("fa-plus");
        $(this).addClass("faPlus");
        $(this).parent().parent().parent().parent().addClass("collapsed-box");

        $(this).closest(".box-body").css({"overflow": "hidden","max-height":"0px","-moz-transition":"height 1s ease;","-webkit-transition":"height 1s ease;"," -o-transition":"height 1s ease;","transition":"height 1s ease"});

    });
    $(document).on("click",".faPlus",function(e){
        $(this).removeClass("faPlus");
        $(this).removeClass("fa-plus");
        $(this).addClass("fa-minus");
        $(this).addClass("faMinus");
        $(this).closest(".box-body").css({"overflow": "hidden","max-height":"300px","-moz-transition":"height 1s ease;","-webkit-transition":"height 1s ease;"," -o-transition":"height 1s ease;","transition":"height 1s ease"});
        $(this).parent().parent().parent().parent().removeClass("collapsed-box");

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


    $(document).on("click",".btnDelete",function(){
        var orderID=$(this).data("orderid");

        if(confirm("Are you sure you want to delete this item ?")){
            start_loader();
            $.ajax({
                url: "orderDelete.php",
                method: "POST",
                data: {id: orderID},
                dataType: "text",
                success: function (data) {
                    console.log(data);
                    stop_loader();
                    fetch_data();
                }
            });
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
    function edit_data(id, text,table,column_name) {

        $.ajax({
            url: "update_data.php",
            method: "POST",
            dataType: "json",
            data: {
                id: id,
                text: text,
                table:table,
                column_name: column_name
            },

            success: function (data) {
                var value = data.response["status"];
                if(value == true){
                    toast(column_name);
                }else{
                    toast("dataNotUpdated");
                }
            }
        });
    }

    function toast(info){

        if(info =='insertDone'){
            $.toaster({ priority : 'info', title : 'Success', message : 'Data Inserted Successfully', settings : { timeout: 5000}});
        }
        else if(info == 'insertFail'){
            $.toaster({ priority : 'danger', title : 'Error', message : 'Data Not inserted , Please Check your Administrator', settings : { timeout: 5000}});
        }else if(info == 'photoUploaded'){
            $.toaster({ priority : 'info', title : 'Success', message : 'Photo Uploaded Successfully', settings : { timeout: 5000}});
        }else if(info == 'photoNotUploaded'){
            $.toaster({ priority : 'danger', title : 'Error', message : 'Photo Not Uploaded , Please Check your Administrator', settings : { timeout: 5000}});
        }else if(info == 'dataUpdated'){
            $.toaster({ priority : 'info', title : 'Success', message : 'Data Updated Successfully', settings : { timeout: 5000}});
        }else if(info == 'dataNotUpdated'){
            $.toaster({ priority : 'danger', title : 'Error', message : 'Data Not Updated , Please Check your Administrator', settings : { timeout: 5000}});

        }else{
            $.toaster({ priority : 'info', title : 'Success', message : info+ '  Updated Successfully', settings : { timeout: 5000}});
        }

    }
});




