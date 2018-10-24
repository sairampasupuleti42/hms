<div class="flexslider slider" id="slider-3">
    <ul class="slides">
        <li class="item-1 back-size" style="background:linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.3)),url(
        <?php echo base_url() ?>front-ui/images/hotel-slider-1.jpg) 50% 65%;
            background-size:cover;
            height:100%;">
        </li><!-- end item-1 -->
        <li class="item-2 back-size" style="background:linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.3)),url(
        <?php echo base_url() ?>front-ui/images/hotel-slider-1.jpg) 50% 65%;
            background-size:cover;
            height:100%;">
        </li><!-- end item-2 -->
    </ul>
</div><!-- end slider -->
<div class="search-tabs" id="search-tabs-3">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 no-pd-r">
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#hotels" data-toggle="tab"><span><i
                                    class="fa fa-building"></i></span><span class="st-text">Hotels</span></a>
                    </li>
                </ul>
                <div class="tab-content">

                    <div id="hotels" class="tab-pane in active">
                        <form method="GET" action="<?php echo base_url('search/?');?>">
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-6">
                                            <div class="form-group left-icon">
                                                <label>Check In</label>
                                                <input type="text" name="checkIn" class="form-control dpd1 required" placeholder="Check In">
                                                <i class="fa fa-calendar"></i>
                                            </div>
                                        </div><!-- end columns -->
                                        <div class="col-xs-12 col-sm-6">
                                            <div class="form-group left-icon">
                                                <label>Check Out</label>
                                                <input type="text" name="checkOut" class="form-control dpd2 required"
                                                       placeholder="Check Out">
                                                <i class="fa fa-calendar"></i>
                                            </div>
                                        </div><!-- end columns -->
                                    </div><!-- end row -->
                                </div><!-- end columns -->
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-12 col-md-12">
                                            <div class="form-group right-icon">
                                                <label>Rooms</label>
                                                <select class="form-control required" name="rooms">
                                                    <option selected>01</option>
                                                    <option>02</option>
                                                    <option>03</option>
                                                    <option>04</option>
                                                </select>
                                                <i class="fa fa-angle-down"></i>
                                            </div>
                                        </div><!-- end columns -->
                                        <div class="col-xs-6 col-sm-6 col-md-6">
                                            <div class="form-group right-icon">
                                                <label>Adults</label>
                                                <select class="form-control" name="adults">
                                                    <option selected>01</option>
                                                    <option>02</option>
                                                    <option>03</option>
                                                    <option>04</option>
                                                </select>
                                                <i class="fa fa-angle-down"></i>
                                            </div>
                                        </div><!-- end columns -->
                                        <div class="col-xs-6 col-sm-6 col-md-6">
                                            <div class="form-group right-icon">
                                                <label>Child</label>
                                                <select class="form-control" name="child">
                                                    <option selected>01</option>
                                                    <option>02</option>
                                                    <option>03</option>
                                                    <option>04</option>
                                                </select>
                                                <i class="fa fa-angle-down"></i>
                                            </div>
                                        </div><!-- end columns -->
                                    </div><!-- end row -->
                                </div><!-- end columns -->
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 search-btn">
                                    <button type="submit" class="btn btn-orange">Search</button>
                                </div><!-- end columns -->
                            </div><!-- end row -->
                        </form>
                    </div><!-- end hotels -->
                </div><!-- end tab-content -->
            </div><!-- end columns -->
            <div class="hidden-xs hidden-sm col-md-6 no-pd-l">
                <div class="welcome-message">
                    <h2>Find Your Perfect Plan</h2>
                    <p>Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, in lucilius prodesset pri. Veniam
                        delectus ei vis. Est atqui timeam mnesarchum at, pro an eros perpetua ullamcorper, imeam
                        mnesarchum at, pro an eros perpetua ullamcorper.</p>
                    <p>Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, in lucilius prodesset pri. Veniam
                        delectus ei vis.</p>
                    <a href="#" class="btn btn-w-border">Explore More</a>
                </div>
            </div>
        </div><!-- end row -->
    </div><!-- end container -->
</div><!-- end search-tabs -->
</section><!-- end flexslider-container -->
<!--======================= BEST FEATURES ======================-->
<section id="best-features" class="banner-padding orange-features">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-3">
                <div class="b-feature-block">
                    <span><i class="fa fa-dollar"></i></span>
                    <h3>Best Price Guarantee</h3>
                    <p>Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, in lucilius prodesset pri. Veniam
                        delectus ei vis.</p>
                </div><!-- end b-feature-block -->
            </div><!-- end columns -->
            <div class="col-sm-6 col-md-3">
                <div class="b-feature-block">
                    <span><i class="fa fa-lock"></i></span>
                    <h3>Safe and Secure</h3>
                    <p>Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, in lucilius prodesset pri. Veniam
                        delectus ei vis.</p>
                </div><!-- end b-feature-block -->
            </div><!-- end columns -->
            <div class="col-sm-6 col-md-3">
                <div class="b-feature-block">
                    <span><i class="fa fa-thumbs-up"></i></span>
                    <h3>Best Travel Agents</h3>
                    <p>Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, in lucilius prodesset pri. Veniam
                        delectus ei vis.</p>
                </div><!-- end b-feature-block -->
            </div><!-- end columns -->
            <div class="col-sm-6 col-md-3">
                <div class="b-feature-block">
                    <span><i class="fa fa-bars"></i></span>
                    <h3>Travel Guidelines</h3>
                    <p>Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, in lucilius prodesset pri. Veniam
                        delectus ei vis.</p>
                </div><!-- end b-feature-block -->
            </div><!-- end columns -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end best-features -->
<!--=============== HOTEL OFFERS ===============-->
<section id="hotel-offers" class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="page-heading white-heading">
                    <h2>Hotels Offers</h2>
                    <hr class="heading-line"/>
                </div><!-- end page-heading -->
                <div class="owl-carousel owl-theme owl-custom-arrow" id="owl-hotel-offers">
                    <?php
                    if (!empty($hotels)) {
                        foreach ($hotels as $hotel) {
                            ?>
                            <div class="item">
                                <div class="main-block hotel-block">
                                    <div class="main-img">
                                        <a href="#hotel-detail-right-sidebar.html">
                                            <img src="<?php echo base_url() ?>front-ui/images/hotel-1.jpg"
                                                 class="img-responsive" alt="hotel-img"/>
                                        </a>
                                        <div class="main-mask">
                                            <ul class="list-unstyled list-inline offer-price-1">
                                                <li class="price"><?php echo !empty($hotel['hotelRoomPrice'])? number_format($hotel['hotelRoomPrice'],2):'';?><span class="divider">|</span><span
                                                        class="pkg">Avg/Night</span>
                                                </li>
                                                <li class="rating">
                                                    <span><i class="fa fa-star orange"></i></span>
                                                    <span><i class="fa fa-star orange"></i></span>
                                                    <span><i class="fa fa-star orange"></i></span>
                                                    <span><i class="fa fa-star orange"></i></span>
                                                    <span><i class="fa fa-star lightgrey"></i></span>
                                                </li>
                                            </ul>
                                        </div><!-- end main-mask -->
                                    </div><!-- end offer-img -->
                                    <div class="main-info hotel-info">
                                        <div class="arrow">
                                            <a href="#hotel-detail-right-sidebar.html"><span><i
                                                        class="fa fa-angle-right"></i></span></a>
                                        </div><!-- end arrow -->
                                        <div class="main-title hotel-title">
                                            <a href="#hotel-detail-right-sidebar.html"><?php
                                                echo !empty($hotel['hotelName']) ? $hotel['hotelName']:'';
                                                ?></a>
                                            <p>From: <?php
                                                echo !empty($hotel['hotelCity']) ? $hotel['hotelCity']:'';
                                                ?></p>
                                        </div><!-- end hotel-title -->
                                    </div><!-- end hotel-info -->
                                </div><!-- end hotel-block -->
                            </div><!-- end item -->


                            <?php
                        }
                    }
                    ?>
                    <div class="view-all text-center">
                        <a href="<?php echo base_url('hotels');?>" class="btn btn-orange">View All</a>
                    </div><!-- end view-all -->
                </div><!-- end columns -->
            </div><!-- end row -->
        </div><!-- end container -->
</section><!-- end hotel-offers -->
