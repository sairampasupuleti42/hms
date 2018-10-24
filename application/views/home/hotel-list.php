
<!--======================= PAGE-COVER ====================-->
<section class="page-cover back-size" id="cover-hotel-search">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h1 class="page-title">Hotel Search Result</h1>
                <ul class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li class="active">Hotel Search Result</li>
                </ul>
            </div><!-- end columns -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end page-cover -->
<!--===== INNERPAGE-WRAPPER ====-->
<section class="innerpage-wrapper">
    <div id="search-result-page" class="innerpage-section-padding">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 content-side">
                    <div class="row">
                        <?php
                        if(!empty($hotels)){
                            foreach ($hotels as $hotel) {

                                ?>
                                <div class="col-sm-6 col-md-4 col-lg-3">
                                    <div class="grid-block main-block h-grid-block">
                                        <div class="main-img h-grid-img">
                                            <a href="<?php echo base_url()?>hotel/<?php echo @$hotel['hotelPermaLink'];?>">
                                                <img src="<?php echo base_url() ?>front-ui/images/hotel-grid-1.jpg"
                                                     class="img-responsive" alt="hotel-img"/>
                                            </a>
                                            <div class="main-mask">
                                                <ul class="list-unstyled list-inline offer-price-1">
                                                    <li class="price"><i
                                                                class="fa fa-inr"></i> <?php echo !empty($hotel['hotelPrice']) ? number_format($hotel['hotelPrice'], 2) : ''; ?>
                                                        <span class="divider">|</span><span class="pkg">Avg/Night</span>
                                                    </li>
                                                </ul>
                                            </div><!-- end main-mask -->
                                        </div><!-- end h-grid-img -->
                                        <div class="block-info h-grid-info">
                                            <div class="rating">
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star lightgrey"></i></span>
                                            </div><!-- end rating -->
                                            <h3 class="block-title"><a href="<?php echo base_url()?>hotel/<?php echo @$hotel['hotelPermaLink'];?>"><?php echo $hotel['hotelName'] ?></a></h3>
                                            <p class="block-minor">From: <?php echo @$hotel['hotelCity'];?></p>
                                            <p><?php echo @$hotel['hotelType'];?> </p>
                                            <div class="grid-btn">
                                                <a href="<?php echo base_url()?>hotel/<?php echo @$hotel['hotelPermaLink'];?>/?checkIn=<?php echo @$_GET['checkIn'];?>&checkOut=<?php echo @$_GET['checkOut'];?>&rooms=<?php echo @$_GET['rooms'];?>&adults=<?php echo @$_GET['adults'];?>&child=<?php echo @$_GET['child'];?>"
                                                   class="btn btn-orange btn-block btn-lg">View More</a>
                                            </div><!-- end grid-btn -->
                                        </div><!-- end h-grid-info -->
                                    </div><!-- end h-grid-block -->
                                </div><!-- end columns -->
                                <?php
                            }
                        }
                        ?>
                    </div><!-- end row -->
                </div><!-- end columns -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end search-result-page -->
</section><!-- end innerpage-wrapper -->
        
