<?php include('include/header.php'); ?>
<!-- main header end -->

<!-- Banner start -->
<div class="banner banner-bg" id="particles-banner-wrapper">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item item-bg active">
                <img class="text-p" src="assets/images/3.jpg" class="d-block w-100" alt="...">

                <div class="carousel-caption banner-slider-inner d-flex h-100 text-left">
                    <div class="carousel-content container">
                        <div class="t-center">
                            <h2 data-animation="animated fadeInDown delay-05s">Best Place For Sell Properties</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item item-bg">
                <img class="text-p" src="assets/images/2.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption banner-slider-inner d-flex h-100 text-left">
                    <div class="carousel-content container">
                        <div class="t-right">
                            <h2 data-animation="animated fadeInDown delay-05s">Find Your Dream Properties</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item item-bg">
                <img class="text-p" src="assets/images/6.jpg" class="d-block w-100" alt="...">

                <div class="carousel-caption banner-slider-inner d-flex h-100 text-left">
                    <div class="carousel-content container">
                        <div class="t-left">
                            <h2 data-animation="animated fadeInUp delay-05s">Best Place For Sell Properties</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- banner end -->




<!-- Recent Properties start -->
<div class="recent-properties content-area-2">
    <div class="container">
        <div class="main-title">
            <h1>List Of Properties</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>







        <div class="row boxes">

            <?php
            $query = "SELECT * FROM properties";
            $selec_all_posts = mysqli_query($conn, $query);

            while ($row = mysqli_fetch_assoc($selec_all_posts)) {

                $post_id = $row['prop_id'];
                $prop_title =  $row['prop_title'];
                $prop_owner =  $row['prop_owner'];
                $prop_type =  $row['prop_type'];
                $address =  $row['address'];
                $post_img = $row['prop_img'];
                $sold =  $row['sold'];
                $bedroom =  $row['bedroom'];
                $kitchen =  $row['kitchen'];
                $balcony =  $row['balcony'];
                $swimming_pool =  $row['swimming_pool'];
                $bathroom =  $row['bathroom'];
                $price =  $row['price'];
                $date =  $row['date'];






            ?>
                <div class="col-lg-3 col-md-6 col-sm-6 wow  ">
                    <div class="property-box-8">
                        <div class="property-photo">
                            <img src="admin/img/<?php echo $post_img; ?>" alt="property-6" class="img-fluid">
                            <div class="date-box"> Sold : <?php echo $sold; ?></div>
                        </div>
                        <div class="detail">
                            <div class="heading">
                                <h3>
                                    <a href="#"><?php echo $prop_title; ?></a>
                                </h3>
                                <div class="location">
                                    <a href="#">
                                        <i class="flaticon-facebook-placeholder-for-locate-places-on-maps"></i><?php echo $address; ?>
                                    </a>
                                </div>
                            </div>
                            <div class="properties-listing spans">
                                <span>beds <?php echo $bedroom; ?></span>
                                <span>Baths <?php echo $bathroom; ?></span>
                                <span>Balc <?php echo $balcony; ?></span>

                            </div>
                        </div>
                    </div>
                </div>
            <?php  }



            ?>
        </div>
    </div>




</div>
<!-- Recent Properties end -->







<!-- Footer start -->
<?php include('include/footer.php'); ?>