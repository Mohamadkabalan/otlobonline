$(document).ready(function(){
    fetch_data();
    function fetch_data(){
    var CategoryID=$("#categorydropDown").val();
    var SubCategoryID=$("#subcategorydropDown").val();

        $('#dataContent').empty();
        if(CategoryID > 0){
        $.ajax({
            url: "ItemsFetch.php",
            method:"GET",
            data:{CategoryID:CategoryID,SubCategoryID:SubCategoryID},
            dataType: "json",
            success: function (data) {

                var values = data.response;
                if(values.length > 0){


                for (i = 0; i < values.length; i++) {
                    var ItemID =values[i]['itemID'];
                    var ItemName =values[i]['ItemName'];
                    var ItemPrice =values[i]['originItemPrice'];
                    var ItemDiscount =values[i]['ItemDiscount'];
                    var ItemDesc =values[i]['ItemDesc'];
                    var OutOfStock=values[i]['OutOfStock'];
                    var ItemImage =values[i]['ItemImage'];
                    var NewArrival =values[i]['NewArrival'];
                    var NewArrivalStopDate =values[i]['NewArrivalStopDate'];
                    var discountStopDate =values[i]['discountStopDate'];
                    var mainImageID=values[i]['mainImageID'];
                    var imagesArray=values[i]['images'];
                    var brandID=values[i]['brandID'];
                    var generalBrandsArray=values[i]['generalBrands'];
                    var BrandElement='<select class="form-control brandSelect" id="brandSelect'+ItemID+'"  data-itemid="'+ItemID+'">';

                    for (j = 0; j < generalBrandsArray.length; j++) {
                        var  generalBrandID=generalBrandsArray[j]["generalBrandID"];
                        var  generalBrand=generalBrandsArray[j]["generalBrand"];
                        var brandChecked='';
                        if(generalBrandID==brandID){brandChecked='selected';}
                        BrandElement+='<option '+brandChecked+' data-itemid="'+ItemID+'" data-brandid="'+generalBrandID+'" value="'+generalBrandID+'">'+generalBrand+'</option>';
                    }
                    BrandElement+='</select>';
                    var colorElement;
                    var generalColorsArray=values[i]['generalColors'];
                    var availableItemsColorsArray=values[i]['itemColors'];
                    for (k = 0; k < generalColorsArray.length; k++) {
                        var generalColorID=generalColorsArray[k]["generalColorID"];
                        var generalColor=generalColorsArray[k]["generalColor"];
                        var colorStatus='';
                        for (j = 0; j < availableItemsColorsArray.length; j++) {
                            var availableItemColor=availableItemsColorsArray[j]["color"];
                            if(generalColor==availableItemColor){colorStatus='selected';}
                        }
                        colorElement+='<option '+colorStatus+' data-itemid="'+ItemID+'" data-colorid="'+generalColorID+'" value="'+generalColor+'">'+generalColor+'</option>';
                    }



                    var checkedValue;
                    if(OutOfStock==1){
                        checkedValue='checked';

                    }else{
                        checkedValue='';
                    }
                    var arrivalCheckedValue;
                    if(NewArrival==1){
                        arrivalCheckedValue='checked';

                    }else{
                        arrivalCheckedValue='';
                    }
                    var imagesElement='';
                    for (j = 0; j < imagesArray.length; j++) {
                        var imageID=imagesArray[j]["imageID"];
                        var image = imagesArray[j]["image"];
                        imagesElement+='<div class="col-md-4"><label>Item Image</label><br><img id="itemImage'+imageID+'" src="' + image + '" style="width:240px;height:180px;"/><br><input data-imageid="'+imageID+'" style="margin-top: 10px;max-width: 240px;" required="required" type="file" data-main="0" class="form-control ItemImage" data-itemid="' + ItemID + '" placeholder="Item Photo"></div>';
                    }


                    $('#dataContent').append('<div id="ItemDiv' + ItemID + '" class="box box-info collapsed-box">' +
                        '<div class="box-header with-border"><div class="row"><div class="col-sm-3 form-group"><label>Item Name</label><input  data-itemid="' + ItemID + '" type="text" class="form-control itemName" value="' + ItemName + '" /></div><div class="col-md-3"><label>Item Image</label><br><img id="itemImage' + mainImageID + '" src="' + ItemImage + '" style="width:240px;height:180px;"/><br><input style="margin-top: 10px;" required="required" type="file" data-main="1" class="form-control ItemImage" data-imageid="'+mainImageID+'" data-itemid="' + ItemID + '" placeholder="Item Photo"></div><div class="col-md-2"><label for="OutOfStock" class="control-label">Out Of Stock</label><br><label class="switch"><input ' + checkedValue + ' data-itemid="' + ItemID + '"  class="outOfStockSwitch"  data-id="' + ItemID + '" type="checkbox" > <span class="slider round"></span> </label></div><div class="col-md-3"><label>Item Price $</label><input type="text" class="form-control ItemPrice number_input" data-itemid="' + ItemID + '" value="' + ItemPrice + '" /></div></div>' +
                        '<div class="box-tools pull-right">' +
                        '<button type="button" class="btn btn-box-tool faMinusButton" data-widget="collapse"><i class="fa fa-plus faPlus"></i></button>' +
                        '<button type="button" class="btn btn-box-tool btnDelete" data-itemid="' + ItemID + '" data-widget="remove"><i class="fa fa-times"></i></button>' +
                        '</div>' +
                        '</div>' +
                        '<div class="box-footer clearfix" >' +
                        '<div class="row"><div class="col-md-3"><label>Item Discount<strong>%</strong></label><input type="text" class="form-control ItemDiscount" data-itemid="' + ItemID + '" value="' + ItemDiscount + '" /></div><div class="col-sm-3"><label>Discount stop Date</label><input type="Date" value="'+discountStopDate+'" class="form-control discountStopDate" data-itemid="'+ItemID+'" id="discountStopDate' + ItemID +'" placeholder="Discount Stop Date" /></div><div class="col-md-2"><label for="NewArrivalSwitch" class="control-label">New Arrival</label><br><label class="switch"><input ' + arrivalCheckedValue +' data-itemid="' + ItemID + '"  class="NewArrivalSwitch"  data-id="' + ItemID + '" type="checkbox" > <span class="slider round"></span> </label></div><div class="col-md-3"><label>New Arrival Stop Date</label><input type="date" class="form-control NewArrivalStopDate" data-itemid="' + ItemID + '" value="' + NewArrivalStopDate + '" /></div></div>' +
                        '<div class="row" style="padding-top: 10px"><div class="col-sm-4 form-group"><label>Item Description</label><textarea style="height:100px;" data-itemid="' + ItemID + '"  class="form-control itemDescription" > ' + ItemDesc + '</textarea></div><div class="col-md-4 form-group"><label>Available Color</label><br><select style="height: 100px;" class="form-control colorSelect" data-itemid="'+ItemID+'" multiple>'+colorElement+'</select></div><div class="col-md-3 form-group"><label>Item Brand</label><br>'+BrandElement+'</div></div>' +
                        '<div class="row" style="padding-top: 10px">'+
                        imagesElement+
                        '</div>'+



                        '<div class="row" style="padding-top: 10px">'+
                        '<div class="col-md-12 form-group">'+
                        '<label class="addImageLink addImage" data-itemid="'+ItemID+'" >Add New Image</label>'+
                        '</div>'+
                        '</div>'+
                        '<div class="row" id="addImagesDiv'+ItemID+'"></div>'+
                        '</div>' +
                        '</div>');
                }
            }
            }
        });
        }
                }

    $(document).on("change","#subcategorydropDown",function(e) {
        var catID=$("#categorydropDown").val();
        var subcatID = $(this).val();
        if(subcatID){
            fetch_data();
        }
    });
    $(document).on("change","#categorydropDown",function(e){
    var catID=$(this).val();
    if(catID > 0){


        var x =  document.getElementById("subcategorydropDown");
        $('#subcategorydropDown')
            .find('option')
            .remove()
            .end()
            .append('<option value="0">Select</option>');
        $.ajax({
            url: "subCategoriesFetch.php",
            dataType: "json",
            data:{CatID:catID},
            method: "POST",
            success: function (data) {

                var values = data.response;
                if (values != null) {
                    for (i = 0; i < values.length; i++) {
                        var subCatID = values[i]['subCatID'];
                        var subCatName = values[i]['subCatName'];

                        var option = document.createElement("option");
                        option.text = subCatName;
                        option.setAttribute("value", subCatID);
                        x.add(option);
                    }
                    fetch_data();
                }
            }
        });
    }
    });

    $(document).on('click','.addImage',function(e){
        var itemID=$(this).data("itemid");
        var numItems = $('.divNewImage'+itemID).length;//count number of divs with a "divNewImage" class?
            if(numItems < 3){
                $("#addImagesDiv"+itemID).append("<div class='col-sm-4 divNewImage"+itemID+"'><input data-itemid='"+itemID+"' data-main='0'  type='file' class='form-control ItemImage' ></div>");
            }

    });
    var imageCounter=1;
    $(document).on('click','.addImageLast',function(e){
        if(imageCounter < 7){
            $("#addImageDiv").append("<div class='col-sm-4'><input data-imagenumber='"+imageCounter+"' id='inputImage"+imageCounter+"'   type='file' class='form-control' ></div>");
            imageCounter+=1;
        }
    });
    $(document).on("change","#ItemPhotoInput",function(e){
        selectedFile=e.target.files[0];
    });
    $(document).on("submit","#ItemAddForm",function(e){
        e.preventDefault();
        var CategoryID=$("#categorydropDown").val();
        var SubCategoryID=$("#subcategorydropDown").val();
        var description =$("#itemDescription").val();
        var discount =$("#discount").val();
        var name =$("#ItemName").val();
        var NewArrivalStopDate=$("#NewArrivalStopDateLast").val();
        var discountStopDate=$("#discountStopDateLast").val();
        var checkedValue='';
        var brandID=$(".brandSelectLast").val();
        var colors=new Array();
        $('.colorSelectLast > option:selected').each(function(){
        if($(this).val() != 0){
            colors.push( $(this).val() );
        }
    });
        if($(".outOfStockSwitchItem").prop('checked')){
            var outOfStock =  1;
            checkedValue= 'checked';
        }else{
            var outOfStock = 0;
        }
        if($(".NewArrivalSwitchItemLast").prop('checked')){
            var NewArrival =  1;
            checkedValue= 'checked';
        }else{
            var NewArrival = 0;
        }
        var price = $("#itemPrice").val();
        if(CategoryID==0){
            toast("catNotChoosen");
        }
        if(typeof selectedFile == "undefined"){
            toast("imageNotChoosen");
        }
        if(!isBetween(discount, 0, 100)){
            toast("discountNotApproved");
        }
        if(typeof selectedFile != "undefined" && CategoryID > 0 && isBetween(discount, 0, 100)){
            start_loader();
            var filename = selectedFile.name;
            var formData = new FormData();
            formData.append('path', 'images/items/');
            formData.append('NumberOfImages', imageCounter - 1);
            for (i = 1; i < imageCounter; i++) {
                formData.append('file'+i , $('#inputImage'+i)[0].files[0]);
            }
            formData.append('colors',colors);
            formData.append('brandID',brandID);
            formData.append('CategoryID',CategoryID);
            formData.append('SubCategoryID',SubCategoryID);
            formData.append('description',description);
            formData.append('discount',discount);
            formData.append('outOfStock',outOfStock);
            formData.append('NewArrival',NewArrival);
            formData.append('NewArrivalStopDate',NewArrivalStopDate);
            formData.append('discountStopDate',discountStopDate);
            formData.append('price',price);
            formData.append('name',name);
            formData.append('CategoryID',CategoryID);
            formData.append('file', $('#ItemPhotoInput')[0].files[0]);
            $.ajax({
                url: "ItemAdd.php",
                method:"POST",
                data:formData,
                processData: false,
                contentType: false,
                dataType: "json",
                success: function (data) {

                   if(data.response.status==true){
                       fetch_data();
                    }else{
                        toast("insertFail");
                    }

                    $('#ItemAddForm')[0].reset();
                    stop_loader();
                }
            });
        }

    });
$(document).on('change','.brandSelect',function(e){
    var brandID=$(this).find('option:selected').data("brandid");
    var itemID=$(this).data("itemid");
    edit_data(itemID, brandID,"items","brandID");
});

    $(document).on('change','.colorSelect',function(e){
        var itemID=$(this).data("itemid");
        var colors=new Array();
        $('.colorSelect > option:selected').each(function(){
            if($(this).val() != 0){
                colors.push($(this).val());
            }
        });
        var formData = new FormData();
        formData.append('colors',colors);
        formData.append('itemID',itemID);
        $.ajax({
            url: "updateItemColor.php",
            data:formData,
            processData: false,
            contentType: false,
            dataType: "json",
            data: formData,
            method: "POST",

            success: function (data) {
console.log(data);

            }

        });
    });

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
                  //  toast("dataNotUpdated");
                }
            }
        });
    }

    $(document).on("blur",".itemName",function(e){
        var id=$(this).data("itemid");
        var itemName=$(this).val();
        edit_data(id, itemName,"items", "name");
    });
    $(document).on("blur",".ItemPrice",function(e){
        var id=$(this).data("itemid");
        var itemPrice=$(this).val();
        edit_data(id, itemPrice,"items", "price");
    });
    $(document).on("blur",".ItemDiscount",function(e){
        var id=$(this).data("itemid");
        var itemDiscount=$(this).val();
        edit_data(id, itemDiscount,"items", "discount");
    });

    $(document).on("blur",".itemDescription",function(e){
        var id=$(this).data("itemid");
        var description=$(this).val();
        edit_data(id, description,"items", "text");
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

    function reload_page(){
        window.location.reload();
    }

    $(document).on("change",".outOfStockSwitch",function(){
        var id =$(this).data("id");

var checked;
        if($(this).prop('checked')){
checked=1;
        }else{
        checked=0;
        }
        edit_data(id, checked,"items", "OutOfStock");
    });

    $(document).on("change",".NewArrivalSwitch",function(){
        var id =$(this).data("id");

        var checked;
        if($(this).prop('checked')){
            checked=1;
        }else{
            checked=0;
        }
        edit_data(id, checked,"items", "NewArrival");
    });
    $(document).on("blur",".discountStopDate",function(){
        var id =$(this).data("itemid");

       var discountStopDate=$(this).val();
        edit_data(id, discountStopDate,"items", "discountStopDate");
    });


    $(document).on("blur",".NewArrivalStopDate",function(){
        var id =$(this).data("itemid");

        var arrivalStopDate=$(this).val();
        edit_data(id, arrivalStopDate,"items", "NewArrivalStopDate");
    });




        $(document).on("change",".ItemImage",function(e){
            selectedFileChange=e.target.files[0];
var main =$(this).data("main");
            e.preventDefault();
            var checked;
            var ItemID=$(this).data("itemid");
            var imageID=$(this).data("imageid");
            var checkedValue='';
            if(typeof selectedFileChange != "undefined"){
                start_loader();
                var filename = selectedFileChange.name;
                var formData = new FormData();
                formData.append('main', main);
                formData.append('imageID',imageID);
                formData.append('path', 'images/items/');
                formData.append('table','itemimages');
                formData.append('itemID',ItemID);
                formData.append('columnName','link');
                formData.append('file', $(this)[0].files[0]);
                $.ajax({
                    url: "uploadItemImages.php",
                    method:"POST",
                    data:formData,
                    processData: false,
                    contentType: false,
                    dataType: "json",
                    success: function (data) {

                        if(data.response.status==true){
                            var ImagePath=data.response.ImagePath;
                            $("#itemImage"+imageID).attr("src",ImagePath);
alert("success");
                        }else{
                            alert("Image not uploaded");
                        }


                        $('#ItemAddForm')[0].reset();
                        stop_loader();
                    }
                });




            }else{
                alert("Please Enter Requierd Details");
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
        $(document).on("click",".btnDelete",function(){
           var ItemID=$(this).data("itemid");

           if(confirm("Are you sure you want to delete this item ?")){
               start_loader();
               $.ajax({
                   url: "ItemsDelete.php",
                   method: "POST",
                   data: {id: ItemID},
                   dataType: "text",
                   success: function (data) {
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

        }else if(info == 'catNotChoosen'){
            $.toaster({ priority : 'danger', title : 'Error', message : 'Please select Category from The Drop Down', settings : { timeout: 5000}});

        }else if(info == 'imageNotChoosen'){
            $.toaster({ priority : 'danger', title : 'Error', message : 'Please choose an image for the item', settings : { timeout: 5000}});

        }else if(info == 'discountNotApproved'){
            $.toaster({ priority : 'danger', title : 'Error', message : 'Discount should be between 0 and 100', settings : { timeout: 5000}});

        }
        else{
            $.toaster({ priority : 'info', title : 'Success', message : info+ '  Updated Successfully', settings : { timeout: 5000}});
        }

    }
    function isBetween(n, a, b) {
        return (n - a) * (n - b) <= 0
    }
    });



