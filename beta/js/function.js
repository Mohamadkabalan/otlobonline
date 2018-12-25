$(document).ready(function () {

    $(document).on('change', '#category', function () {
        var catID = $(this).val();
        fetch_data(catID,0);
    });




    function fetch_data(catID,subID,brandID,key){

        $('#searchData').empty();
        $.ajax({
            url: "admin/ItemsFetch.php",
            dataType: "json",
            data:{CategoryID:catID,SubCategoryID:subID,brandID:brandID,key:key},
            method: "GET",
            success: function (data) {

                var values = data.response;
                $(".sliderDiv").addClass("hidden");
                for (i = 0; i < values.length; i++) {
                    var ItemID =values[i]['itemID'];
                    var ItemName =values[i]['ItemName'];

                    var originItemPrice=values[i]['originItemPrice'];
                    var newItemPrice=values[i]['NewItemPrice'];
                    var ItemDiscount =values[i]['ItemDiscount'];
                    var ItemDesc =values[i]['ItemDesc'];
                    var OutOfStock=values[i]['OutOfStock'];
                    var ItemImage =values[i]['ItemImage'];
                    var colorsArray =values[i]['itemColors'];
                    var ItemColors='';
                    for (j = 0; j < colorsArray.length; j++){
                         ItemColors += colorsArray[j]["color"];
                         if(j!= colorsArray.length - 1){
                             ItemColors +=',';
                         }
                    }
                        if(OutOfStock==0){

    if(ItemDiscount > 0){

        var priceEelement='<span class="normal-price"><del>$ '+originItemPrice+'</del></span>'+
            '<br>'+
            '<span class="normal-price">$ '+newItemPrice+'</span>';
    }else{

        var priceEelement='<span class="normal-price">$ '+originItemPrice+'</span>';

    }

                    $('#searchData').append('<!-- Start-single-product -->'
                        +'<div class="col-lg-3">'
                        +'<div class="single-product">'

                        +'<div class="product-img-wrap">'
                        +'<a class="product-img" href="#"> <img src="admin/'+ItemImage+'" alt="product-image" /></a>'
                        +'<div class="add-to-link">'
                        +'<a class="quickView" data-colors="'+ItemColors+'" data-toggle="modal" data-target="#productModal" href="#" data-itemid="'+ItemID+'" data-itemname="'+ItemName+'" data-originitemprice="'+originItemPrice+'" data-newitemprice="'+newItemPrice+'" data-itemdiscount="'+ItemDiscount+'" data-itemdesc="'+ItemDesc+'" data-itemimage="'+ItemImage+'" data-discountstopdate="">'
                        +'<div><i class="fa fa-eye"></i><span>view</span></div>'
                        +'</a>'

                        +'</div>'

                        +'</div>'
                        +'<div class="product-info text-center"\'>'
                        +'<div class="product-content">'
                        +'<a href="#"><h3 class="pro-name">'+ItemName+'</h3></a>'
                        +'<div class="pro-rating">'
                        +'<ul>'
                        +'<li><i class="fa fa-star"></i></li>'
                        +'<li><i class="fa fa-star"></i></li>'
                        +'<li><i class="fa fa-star"></i></li>'
                        +'<li class="r-grey"><i class="fa fa-star"></i></li>'
                        +'<li class="r-grey"><i class="fa fa-star-half-o"></i></li>'
                        +'</ul>'
                        +'</div>'
                        +'<div class="pro-price">'
                        +'<span class="price-text">Price:</span>'
                        +priceEelement
                        +'</div>'
                        +'</div>'
                        +'</div>'
                        +'</div>'
                        +'</div>'
                        +'<!-- End-single-product -->');
}
                }
            }
        });
    }



    $(document).on('submit', '#formHeader', function (e) {
        e.preventDefault();
        var categoryID=$('#category').val();
        var key=$('#text-search').val();
        fetch_data(categoryID,0,0,key);
    });

    $(document).on('click', '.getItems', function (e) {
        var categoryID=$(this).data("catid");
        var subCategoryID=$(this).data("subcatid");
        fetch_data(categoryID,subCategoryID,0,0);
    });
    fetchMyOrder();
    $(document).on('click', '.removeItem', function (e) {
     if(confirm("Are You Sure You Want To remove This Item ?")) {
         var itemID = $(this).data("itemid");
         var orderID = $(this).data("orderid");
         $.ajax({
             url: "deleteItemFromOrder.php",
             method: "POST",
             data: {itemID: itemID, orderID: orderID},
             success: function (data) {
fetchMyOrder();
             }
         });
     }
    });
    function fetchMyOrder(){
        $.ajax({
            url: "fetchMyOrder.php",
            method: "POST",
            success: function (data) {
                $(".headerOrderDiv").html(data);
            }
        });
    }
    $(document).on('click', '.quickView', function () {
        var itemid=$(this).data("itemid");
        var itemname=$(this).data("itemname");
        var originitemprice=$(this).data("originitemprice");
        var newitemprice=$(this).data("newitemprice");
        var itemdiscount=$(this).data("itemdiscount");
        var itemdesc=$(this).data("itemdesc");
        var itemimage=$(this).data("itemimage");
        var discountitemimagestopdate=$(this).data("discountstopdate");
        var itemsColors=$(this).data("colors");
        var colorsArray=itemsColors.split(",");
        var arrayLength = colorsArray.length;

        $('.ItemModelData').empty();
        var colorsul= '';
        if(itemdiscount > 0){

            var priceEelement='<span class="normal-price"><del>$ '+originitemprice+'</del></span>'+
                '<br>'+
                '<span class="normal-price">$ '+newitemprice+'</span>';
        }else{

            var priceEelement='<span class="normal-price">$ '+originitemprice+'</span>';

        }
        for (var i = 0; i < arrayLength; i++) {
            var color=colorsArray[i];
            var ActiveStatus='';
            if(i==0){ActiveStatus='active-skill'; $("#selectedItemColor").val(color);}
            colorsul+='<li data-color="'+color+'" class="skill-'+color+' '+ActiveStatus+' skillColor"><a href="#"></a></li>';
        }
                        $('.ItemModelData').html('<div class="modal-product">'+
                            '<div class="product-images">'+
        '<div class="main-image images">'+
        '<img alt="" src="admin/'+itemimage+'">'+
        '</div>'+
        '</div>'+
        '<div class="product-info">'+
        '<h1>'+itemname+'</h1>'+
        '<div class="price-box-3">'+

        '<div class="s-price-box">'+
                            priceEelement+
        '</div>'+

        '</div>'+
                            '<div class="color-instock">'+
                            '<div class="skill-colors">'+
                            '<span class="color-cho">Color</span>'+
                            '<ul class="skill-ulli">'+
                            colorsul+
                            '</ul>'+
                            '</div>'+
                            '</div>'+

        '<div class="quick-add-to-cart">'+
        '<form method="post" id="FormModal" class="cart">'+
        '<div class="numbers-row">'+
        '<input type="hidden"  id="ItemID" value="'+itemid+'">'+
        '<input type="number" min="1" max="99" id="ItemQunantity" required>'+
        '</div>'+
        '<button class="single_add_to_cart_button" type="submit">Add to order</button>'+
        '</form>'+
        '</div>'+
                            '<a href="single-product.php?item='+itemid+'" class="see-all">See all features</a>'+
        '<div class="quick-desc">'+ itemdesc+ '</div>'+
        '<div class="social-sharing">'+
        '<div class="widget widget_socialsharing_widget">'+
        '</div>'+
        '</div>'+
        '</div>'+
        '</div>');

    });

    $(document).on('submit', '#FormModal', function (e) {
        e.preventDefault();
    var ItemID=$("#ItemID").val();
    var clientID=$("#clientID").val();
    var itemColor=$("#selectedItemColor").val();
    var itemQunantity=$("#ItemQunantity").val();
        if(clientID > 0){
            addToOrder(ItemID,clientID,itemQunantity,itemColor);

        }else{
            alert("Please Login To Your Account First");
        }
    });
    function addToOrder(ItemID,clientID,itemQunantity,itemColor){
        $.ajax({
            url: "AddToOrder.php",
            method: "POST",
            dataType: "json",
            data: {
                itemColor:itemColor,
                itemQunantity:itemQunantity,
                clientID: clientID,
                itemID: ItemID
            },

            success: function (data) {

                var value = data.response["status"];
                if(value == true){
                    alert("Item Added To Order , We will contact you soon");
                    $('.modal').modal('toggle');
                }else{
                    alert("not insert");
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


    $(document).on("click",".skillColor",function(e) {
        $("#selectedItemColor").val($(this).data("color"));
        $(".skill-ulli li").removeClass("active-skill");
        $(this).addClass("active-skill");
    });
    $(document).on("click",".btnAdd",function(e) {
        var SubCategoryName=$("#SubCategoryNameNew").val();
        var catID=$("#CatID").val();
        if(SubCategoryName){

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
                    console.log(data);

                    stop_loader();
                    if(data.response.status==true){
                        alert("data inserted successfully");

                        fetch_data();                    }else{
                        alert("data not inserted successfully");
                    }

                }
            })
        }else{
            alert("Please Enter Requierd Details");
        }

    });
/*    $(document).on("click",".AddToOrder",function(e) {
       var clientID=$("#clientID").val();
       var itemID=$(this).data("itemid");
       if(clientID > 0){

           $.ajax({
               url: "AddToOrder.php",
               method: "POST",
               dataType: "json",
               data: {
                   clientID: clientID,
                   itemID: itemID
               },

               success: function (data) {
                   var value = data.response["status"];
                   if(value == true){

                   }else{

                   }
               }
           });
       }else{
           alert("Please Login To Your Account First");
       }
    });*/



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

