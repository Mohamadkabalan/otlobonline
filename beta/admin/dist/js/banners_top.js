$(document).ready(function () {

    function fetch_data() {

        $.ajax({
            url: "banners_display.php",
            success: function (data) {
                $('#livedata').html(data);
            }
        });
    }

    fetch_data();

    $(document).on('change', '.banner_image_last', function () {
        var fileName = $(this).val();
        var trimmedString = fileName.substring(12);

        //replace the "Choose a file" label
        $("#custom-file-label").html(trimmedString);
    });
    $(document).on('change', '.banner_image', function () {
        var fileName = $(this).val();
        var trimmedString = fileName.substring(12);
        var imageID=$(this).data("id");
        //replace the "Choose a file" label
        $("#custom-file-label"+imageID).html(trimmedString);
     start_loader();
        var id = $(this).data("id");

        var formData = new FormData();
        formData.append('id', id);
        formData.append('table', 'banners');
        formData.append('path', 'images/slider/');
        formData.append('columnName', 'Image');
        formData.append('file', $(this)[0].files[0]);
        $.ajax({
            url: "upload.php", // Url to which the request is send
            type: "POST",             // Type of request to be send, called as method
            data: formData, // Data sent to server, a set of key/value pairs (i.e. form fields and values)
            contentType: false,       // The content type used when sending data to the server.
            cache: false,             // To unable request pages to be cached
            processData:false,        // To send DOMDocument or non processed data file it is set to false
            success: function(data)   // A function to be called if request succeeds
            {
stop_loader();
                fetch_data();
            }
        });
    });
    $(document).on('blur', '.banner_description', function () {
        var id = $(this).data("id");
        var text = $(this).val();
        var table='banners';
        edit_data(id, text,table, "Description");
    });

    $(document).on('blur', '.banner_title', function () {
        var id = $(this).data("id");
        var text = $(this).val();
        var table='banners';
        edit_data(id, text,table, "Title");
    });
    $(document).on('click', '#btn_add', function () {

        var title=$(".banner_title_last").val();
        var Description=$(".banner_description_last").val();
        var x= $('#banner_image_last')[0].files[0];
        var count=1;
        if(!x){
            var count=0;
            $(".bannerImageError").removeClass("hidden");
            setTimeout(function(){ $(".bannerImageError").addClass("hidden"); }, 3000);
        }
        if(!title){
            var count=0;
            $(".bannerTitleError").removeClass("hidden");
            setTimeout(function(){ $(".bannerTitleError").addClass("hidden"); }, 3000);
        }
        if(!Description){
            var count=0;
            $(".bannerDescError").removeClass("hidden");
            setTimeout(function(){ $(".bannerDescError").addClass("hidden"); }, 3000);
        }


        if(count==1) {
            start_loader();
            var formData = new FormData();
            formData.append('path', 'images/slider/');
            formData.append('title', title);
            formData.append('Description', Description);
            formData.append('file', $("#banner_image_last")[0].files[0]);
            $.ajax({
                url: "banners_insert.php",
                method: "POST",
                data:formData,
                processData: false,
                contentType: false,
                success: function (data) {
console.log(data);
stop_loader();
                    fetch_data();
                }
            });

        }
    });
    $(document).on('click', '.btn_delete', function () {
        var id = $(this).data("id");

        if (confirm("Are you sure you want to delete this?")) {
          start_loader();
            $.ajax({
                url: "banners_delete.php",
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