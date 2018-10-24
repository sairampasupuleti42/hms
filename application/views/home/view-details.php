<!--================= PAGE-COVER ================-->
<section class="page-cover" id="cover-hotel-detail">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h1 class="page-title">
                    <a href="<?php echo base_url(); ?>"><?php echo @$hotel['hotelName']; ?>
                    </a>
                </h1>
                <ul class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li class="active"><?php echo @$hotel['hotelName']; ?></li>
                </ul>
            </div><!-- end columns -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end page-cover -->


<!--===== INNERPAGE-WRAPPER ====-->
<section class="innerpage-wrapper">
    <div id="hotel-details" class="innerpage-section-padding">
        <div class="container">
            <div class="row">

                <div class="col-xs-12 col-sm-12 col-md-4 side-bar left-side-bar">

                    <div class="side-bar-block booking-form-block">
                        <h2 class="selected-price"><i
                                    class="fa fa-inr"></i><?php echo number_format(@$hotel['hotelRoomPrice']) ?> <span>each room</span>
                        </h2>

                        <div class="booking-form">
                            <h3>Book Hotel</h3>
                            <p>Find your dream hotel today</p>

                            <form method="post">
                                <input type="hidden" name="hotelId" value="<?php echo @$hotel['hotelId']; ?>"/>
                                <div class="form-group">
                                    <input type="text" class="form-control required"
                                           value="<?php echo @$_SESSION['CUSTOMER_NAME'] ?>" name="bookFname"
                                           placeholder="First Name"/>
                                </div>

                                <div class="form-group">
                                    <input type="text" class="form-control " name="bookLname" placeholder="Last Name"/>
                                </div>

                                <div class="form-group">
                                    <input type="email" name="bookEmail"
                                           value="<?php echo @$_SESSION['CUSTOMER_EMAIL']; ?>"
                                           class="form-control required" placeholder="Email"/>
                                </div>

                                <div class="form-group">
                                    <input type="text" class="form-control " placeholder="Phone" name="bookPhone"/>
                                </div>


                                <div class="form-group">
                                    <input type="text" class="form-control dpd1"
                                           value="<?php echo @$_GET['checkIn']; ?>" name="bookCheckIn"
                                           placeholder="Arrival Date"
                                           required/>
                                    <i class="fa fa-calendar"></i>
                                </div>

                                <div class="form-group">
                                    <input type="text" name="bookCheckOut" class="form-control dpd2"
                                           value="<?php echo @$_GET['checkOut']; ?>" placeholder="Departure Date"
                                           required/>
                                    <i class="fa fa-calendar"></i>
                                </div>

                                <div class="row">
                                    <div class="col-sm-6 col-md-12 col-lg-6 no-sp-r">
                                        <div class="form-group right-icon">
                                            <select class="form-control" name="bookRooms">
                                                <option selected>Rooms</option>
                                                <option value="1" <?php echo ($_GET['rooms'] == 1) ? 'selected' : ''; ?>>
                                                    1
                                                </option>
                                                <option value="2" <?php echo ($_GET['rooms'] == 2) ? 'selected' : ''; ?>>
                                                    2
                                                </option>
                                                <option value="3" <?php echo ($_GET['rooms'] == 3) ? 'selected' : ''; ?>>
                                                    3
                                                </option>
                                            </select>
                                            <i class="fa fa-angle-down"></i>
                                        </div>
                                    </div>

                                    <div class="col-sm-6 col-md-12 col-lg-6 no-sp-l">
                                        <div class="form-group right-icon">
                                            <select class="form-control" name="bookBeds">
                                                <option selected>Beds</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                            </select>
                                            <i class="fa fa-angle-down"></i>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-6 col-md-12 col-lg-6 no-sp-r">
                                        <div class="form-group right-icon">
                                            <select class="form-control" name="bookAdults">
                                                <option selected>Adults</option>
                                                <option value="1" <?php echo ($_GET['adults'] == 1) ? 'selected' : ''; ?>>
                                                    1
                                                </option>
                                                <option value="2" <?php echo ($_GET['adults'] == 2) ? 'selected' : ''; ?>>
                                                    2
                                                </option>
                                                <option value="3" <?php echo ($_GET['adults'] == 3) ? 'selected' : ''; ?>>
                                                    3
                                                </option>
                                            </select>
                                            <i class="fa fa-angle-down"></i>
                                        </div>
                                    </div>

                                    <div class="col-sm-6 col-md-12 col-lg-6 no-sp-l">
                                        <div class="form-group right-icon">
                                            <select class="form-control" name="bookChild">
                                                <option selected>Childs</option>
                                                <option value="1" <?php echo ($_GET['child'] == 1) ? 'selected' : ''; ?>>
                                                    1
                                                </option>
                                                <option value="2" <?php echo ($_GET['child'] == 2) ? 'selected' : ''; ?>>
                                                    2
                                                </option>
                                                <option value="3" <?php echo ($_GET['child'] == 3) ? 'selected' : ''; ?>>
                                                    3
                                                </option>
                                            </select>
                                            <i class="fa fa-angle-down"></i>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group right-icon">
                                    <select class="form-control">
                                        <option selected>Payment Method</option>
                                        <!--                                        <option >Credit Card</option>-->
                                        <option value="CASH" selected>Cash</option>
                                    </select>
                                    <i class="fa fa-angle-down"></i>
                                </div>

                                <div class="checkbox custom-check">
                                    <input type="checkbox" id="check01" name="checkbox"/>
                                    <label for="check01"><span><i class="fa fa-check"></i></span>By continuing, you are
                                        agree to the <a href="#">Terms & Conditions.</a></label>
                                </div>
                                <?php
                                if (!empty($_SESSION) && !empty($_SESSION['CUSTOMER_ID'])) {
                                    ?>
                                    <button type="submit" class="btn btn-block btn-orange">Confirm Booking</button>
                                    <?php
                                } else {
                                    ?>
                                    <a href="<?php echo base_url('signin/') ?>?checkIn=<?php echo $_GET['checkIn']; ?>&checkOut=<?php echo $_GET['checkOut']; ?>&rooms=<?php echo $_GET['rooms']; ?>&adults=<?php echo $_GET['adults']; ?>&child=<?php echo $_GET['child']; ?>&payMode=CASH"
                                       class="btn btn-block btn-orange">Please login to Confirm</a>
                                    <?php
                                }
                                ?>
                            </form>

                        </div><!-- end booking-form -->
                    </div><!-- end side-bar-block -->


                </div><!-- end columns -->

                <div class="col-xs-12 col-sm-12 col-md-6 side-bar riht-side-bar">
                    <h2><?php echo @$hotel['hotelName']; ?></h2>
                    <ul class="list-unstyled">
                        <li>
                            Rooms Available :<?php echo @$hotel['hotelRooms']; ?>
                        </li>
                        <li>
                            Address :<?php echo @$hotel['hotelAddress1']; ?>,<?php echo @$hotel['hotelAddress2']; ?>
                        </li>
                        <li>
                            City :<?php echo @$hotel['hotelCity']; ?>,<?php echo @$hotel['hotelPinCodes']; ?>
                        </li>
                        <li>
                            Mobile :<?php echo
                            @$hotel['hotelMobile'];
                            ?>
                        </li>
                    </ul>

                </div>

            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end hotel-details -->
</section><!-- end innerpage-wrapper -->
        
