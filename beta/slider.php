
<div id="myCarousel" class="carousel slide sliderDiv" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
        <?php

        $result = $con->query("SELECT * FROM `banners` order by id desc");
        $i=1;
        while($row = $result->fetch_array()){
            $sliderID=$row['id'];
            $sliderTitle=$row['Title'];
            $sliderDescription=$row['Description'];
            $sliderImage=$row['Image'];
            ?>
            <div class="item <?php if($i==1){ echo ' active'; } ?>">
                <img src="admin/<?php echo $sliderImage; ?>" alt="<?php echo $sliderTitle; ?>">
                <div class="carousel-caption">
                    <h1><?php echo $sliderTitle; ?></h1>
                    <h3><?php echo $sliderDescription; ?></h3>
                </div>
            </div>

        <?php        $i+=1;  }
        ?>



    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Next</span>
    </a>
</div>