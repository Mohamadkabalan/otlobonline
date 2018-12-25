$(document).ready(function () {



    fetch_data();


    $(document).on('blur', '.brandInput', function () {
        var id = $(this).data("brandid");
        var  brandName= $(this).val();

        edit_data(id, brandName,"brands", "brand");
    });
    function edit_data(id, text,table,column_name) {

        $.ajax({
            url: "update_data.php",
            method: "POST",
            data: {
                id: id,
                text: text,
                table:table,
                column_name: column_name
            },
            dataType: "text",
            success: function (data) {
                console.log(data);
            }
        });
    }


    function fetch_data(){
        $('#dataContent').empty();
        $.ajax({
            url: "brandsFetch.php",
            dataType: "json",
            success: function (data) {

                var values = data.response;
                for (i = 0; i < values.length; i++) {
                    var brandID = values[i]['brandID'];
                    var brandName = values[i]['brandName'];
                    var brandImage = values[i]['brandImage'];


                    $('#dataContent').append('<div class="row">' +
                        '<div class="col-md-2 form-group">' +
                        '<label>Brand</label>' +
                        '<input type="text" placeholder="Add New Brand" class="form-control brandInput"  data-brandid="'+brandID+'" value="'+brandName+'" />' +
                        '</div>' +
                        '<div class="col-md-6 form-group">' +
                        '<label>Brand Image</label><br>' +
                        '<img id="brandImage'+brandID+'" style="width:150px;height: 115px;" class="brandImage"  src="'+brandImage+'" />' +
                        '<div class="form-group"> <br>' +
                        '<label>Dimension ( 150 x 115 )</label>'+
                        '<input type="file" class="form-control brandPhoto"  data-brandid="'+brandID+'"   placeholder="Brand Photo">' +
                        '</div>' +
                        '</div>' +
                        '<div class="col-md-2 form-group" style="height: 40px;">' +
                        '<a style="width: 100%;" href="items.php?brandID='+brandID+'" data-id="'+brandID +'" class="btn btn-sm btn-info btn-flat pull-left btn_Item">Items</a><br>' +

                        '</div>' +
                        '<div class="col-md-2 form-group" style="height: 40px;">' +
                        '<a style="width: 100%;"  data-id="'+brandID +'" class="btn btn-sm btn-danger btn-flat pull-left btn_delete">Delete</a>' +
                        '</div>' +
                        '</div>')

                }
            }
        });
    }
    $(document).on("change","#brandPhotoInput",function(e){
        selectedFileAdd=e.target.files[0];
    });
    $(document).on('click', '.btn_delete', function () {
        var id = $(this).data("id");

        if (confirm("Are you sure you want to delete this?")) {
            start_loader();
            $.ajax({
                url: "brand_delete.php",
                method: "POST",
                data: {id: id},
                dataType: "text",
                success: function (data) {
                    stop_loader();
                    fetch_data();
                }
            });
        }
    });



    $(document).on("change",".brandPhoto",function(e){
        selectedFile=e.target.files[0];
        if(typeof selectedFile != "undefined"){

            //replace the "Choose a file" label

            start_loader();
            var brandID = $(this).data("brandid");

            var formData = new FormData();
            formData.append('id', brandID);
            formData.append('table', 'brands');
            formData.append('path', 'images/brands/');
            formData.append('columnName', 'image');
            formData.append('file', $(this)[0].files[0]);
            $.ajax({
                url: "upload.php", // Url to which the request is send
                type: "POST",             // Type of request to be send, called as method
                data: formData, // Data sent to server, a set of key/value pairs (i.e. form fields and values)
                dataType: "json",
                contentType: false,       // The content type used when sending data to the server.
                cache: false,             // To unable request pages to be cached
                processData:false,        // To send DOMDocument or non processed data file it is set to false
                success: function(data)   // A function to be called if request succeeds
                { stop_loader();
                    if(data.response.status==true){
                        toast("photoUploaded");

                        fetch_data();                    }else{
                        toast("photoNotUploaded");
                    }
                }
            });

        }








    });

    $(document).on("click",".btnAdd",function(e) {
        var brandName=$("#brandNameNew").val();

        if(brandName.length > 3 && typeof selectedFileAdd != "undefined"){
            var filename = selectedFileAdd.name;
            start_loader();


            var formData = new FormData();
            formData.append('path', 'images/brands/');
            //formData.append('columns', 'brandName-image');
            formData.append('brandName', brandName);

            formData.append('file', $('#brandPhotoInput')[0].files[0]);
            $.ajax({
                url: "brandsAdd.php", // Url to which the request is send
                type: "POST",             // Type of request to be send, called as method
                data: formData, // Data sent to server, a set of key/value pairs (i.e. form fields and values)
                dataType: "json",
                contentType: false,       // The content type used when sending data to the server.
                cache: false,             // To unable request pages to be cached
                processData:false,        // To send DOMDocument or non processed data file it is set to false
                success: function(data)   // A function to be called if request succeeds
                {
                    console.log(data);

                    stop_loader();
                    if(data.response.status==true){
                        toast("insertDone");

                        fetch_data();                    }else{
                        toast("insertFail");
                    }

                }
            })
        }else{
            alert("Please Enter Requierd Details");
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
        }

    }


});

