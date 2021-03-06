$(document).ready(function () {

    fetch_data();
    $(document).on('blur', '.SubCategoryInput', function () {
        var id = $(this).data("subcategoryid");
        var  SubCategoryName= $(this).val();
        edit_data(id, SubCategoryName,"subcategories", "name");
    });



    function fetch_data(){
var CatID=$(".categorydropDown").val();
        $('#dataContent').empty();
        $.ajax({
            url: "subCategoriesFetch.php",
            dataType: "json",
            data:{CatID:CatID},
            method: "POST",
            success: function (data) {

                var values = data.response;
                for (i = 0; i < values.length; i++) {
                    var subCatID = values[i]['subCatID'];
                    var subCatName = values[i]['subCatName'];



                    $('#dataContent').append('<div class="row">' +
                        '<div class="col-md-4 form-group">' +
                        '<label>SubCategory</label>' +
                        '<input type="text" placeholder="Add New SubCategory" class="form-control SubCategoryInput"  data-subcategoryid="'+subCatID+'" value="'+subCatName+'" />' +
                        '</div>' +
                        '<div class="col-md-4 form-group" style="height: 40px;">' +
                        '<label>Items</label><br>' +
                        '<a style="width:100%;" href="Items.php?cat='+CatID+'&sub='+subCatID+'" data-id="'+subCatID +'" class="btn btn-sm btn-info btn-flat pull-left btn_Item">Items</a>' +
                        '</div>' +
                        '<div class="col-md-4 form-group" style="height: 40px;">' +
                        '<label>Delete</label><br>' +
                        '<a style="width:100%;" data-id="'+subCatID+'" class="btn btn-sm btn-danger btn-flat pull-left btn_delete">Delete</a>' +
                        '</div>' +
                        '</div>');

                }
            }
        });
    }
    $(document).on('click', '.btn_delete', function () {
        var id = $(this).data("id");

        if (confirm("Are you sure you want to delete this SubCategory?")) {
            start_loader();
            $.ajax({
                url: "SubCategory_delete.php",
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




    $(document).on("change",".categorydropDown",function(e) {
       var catID=$(this).val();
       if(catID > 0){
           fetch_data();
       }
    });
    $(document).on("click",".btnAdd",function(e) {
        var SubCategoryName=$("#SubCategoryNameNew").val();
        var catID=$(".categorydropDown").val();
        if(SubCategoryName.length <= 3){
            toast("subLength");
        }
        if(catID==0){
            toast("catNotChoosen");
        }
        if(SubCategoryName.length > 3 && catID > 0){

            start_loader();


            var formData = new FormData();
            formData.append('SubCategoryName', SubCategoryName);
            formData.append('catID', catID);

            $.ajax({
                url: "subcategoriesAdd.php", // Url to which the request is send
                type: "POST",             // Type of request to be send, called as method
                data: formData, // Data sent to server, a set of key/value pairs (i.e. form fields and values)
                dataType: "json",
                contentType: false,       // The content type used when sending data to the server.
                cache: false,             // To unable request pages to be cached
                processData:false,        // To send DOMDocument or non processed data file it is set to false
                success: function(data)   // A function to be called if request succeeds
                {


                    stop_loader();
                    if(data.response.status==true){
                      toast("insertDone");
$("#SubCategoryNameNew").val('');
                        fetch_data();
                    }else{
                        toast("insertFail");
                    }

                }
            })
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
                    toast("SubCategory");
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

        }else if(info == 'subLength'){
            $.toaster({ priority : 'danger', title : 'Error', message : 'Enter At least 4 character for SubCategory', settings : { timeout: 5000}});

        }else if(info == 'catNotChoosen'){
            $.toaster({ priority : 'danger', title : 'Error', message : 'Please select category from Drop Down', settings : { timeout: 5000}});

        }
        else{
            $.toaster({ priority : 'info', title : 'Success', message : info+ '  Updated Successfully', settings : { timeout: 5000}});
        }

    }

});

