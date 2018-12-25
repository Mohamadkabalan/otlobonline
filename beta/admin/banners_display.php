<style>
    td,th{text-align: center;}
</style>
<table class="table no-margin" >
    <tr style="text-align: center;"><th style="width:30%;">Image</th><th>Title</th><th>Description</th><th></th></tr>
    <?php
    include("config.php");
    $result = $con->query("SELECT * FROM `banners` order by id asc;");
    $count=$result->num_rows;
    while($row = $result->fetch_array()){
        list($id,$Title,$Description,$Image)=$row;
        ?>
        <tr><td><img class="slider_img" src="<?php echo $Image; ?>" style="width:100%;max-width:150px;height:100px;"/>
                <div >
                    <label>(1200 x 700)</label>


                    <div class="custom-file">
                        <input class="banner_image" data-id="<?php echo $id; ?>" type="file"  name="file" style="display: block;margin:0 auto;padding-top: 5px;width:96px;">

                        <label class="custom-file-label" id="custom-file-label<?php echo $id; ?>" for="image1">Choose file</label>
                    </div>
                </div>
            </td>
            <td><textarea class="banner_title" data-id="<?php echo $id;  ?>" style="width:100%;height:100px;"><?php echo $Title; ?></textarea></td>
            <td>
                <textarea class="banner_description" data-id="<?php echo $id; ?>" style="width:100%;height: 100px;"><?php echo $Description; ?></textarea>
            </td>
            <td><button type="button" class="btn btn-danger btn_delete" data-id="<?php echo $id; ?>">x</button></td>
        </tr>
    <?php } ?>
    <tr><td> <div ><label>(1200 x 700)</label>

                <div class="custom-file">
                    <input id="banner_image_last" class="banner_image_last" type="file"  name="file" style="display: block;margin:0 auto;padding-top: 5px;width:96px;">

                    <label class="custom-file-label" id="custom-file-label" for="image1">Choose file</label>
                </div>
            </div>
        </td>
        <td>     <textarea class="banner_title_last" style="width:100%;height: 100px;"></textarea></td>
        <td>     <textarea class="banner_description_last" style="width:100%;height: 100px;"></textarea></td>
        <td><button type="button" class="btn btn-success" id="btn_add">+</button></td>
    </tr>
    <tr>
        <td>
            <div class="alert alert-danger bannerImageError hidden" role="alert">
                Please Select Slider Image
            </div>
        </td>
        <td>
            <div class="alert alert-danger bannerTitleError hidden" role="alert">
                Please Enter Slider Title
            </div>
        </td>
        <td>
            <div class="alert alert-danger bannerDescError hidden" role="alert">
                Please select Slider Description
            </div>
        </td>
        <td>

        </td>
        <td></td>
    </tr>
</table>