<div class="brands-area brand-dis1">
    <div class="container">
        <!--barand-heading-->
        <div class="brand-heading text-center">
            <h2>Our brands</h2>
        </div>
        <!--brand-heading-end-->
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="brands-carousel">
<?php

$result = $con->query("SELECT * FROM brands order by brand asc");
while($row = $result->fetch_array()){
    list($brandID,$brand,$brandImage)=$row;
    ?>
    <!--start-single-brand-->
    <div class="single-brand">
        <a href="brands.php?brand=<?=$brandID;?>"><img src="admin/<?=$brandImage;?>" alt=""></a>
    </div>
    <!--end-single-brand-->
<?php }
?>
                </div>
            </div>
        </div>
    </div>
</div>

