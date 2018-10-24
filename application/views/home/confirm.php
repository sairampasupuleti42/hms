<!--================= PAGE-COVER ================-->
<section class="page-cover" id="cover-thank-you">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h1 class="page-title">Thank You</h1>
                <ul class="breadcrumb">
                    <li><a href="<?php echo base_url();?>">Home</a></li>
                    <li class="active">Thank You</li>
                </ul>
            </div><!-- end columns -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end page-cover -->
<!--==== INNERPAGE-WRAPPER =====-->
<section class="innerpage-wrapper">
    <div id="thank-you" class="innerpage-section-padding">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 content-side">
                    <div class="space-right">
                        <div class="thank-you-note">
                            <h3>Your Booking is confirmed now. Thank You!</h3>
                            <p></p>
                            <a href="javascript:window.print();" class="btn btn-orange">Print Details</a>
                        </div><!-- end thank-you-note -->
                        <div class="traveler-info">
                            <h3 class="t-info-heading"><span><i class="fa fa-info-circle"></i></span>Traveler Information</h3>
                            <div class="table-responsive">
                                <table class="table">
                                    <tbody>
                                    <tr>
                                        <td>Booking Number:</td>
                                        <td><?php echo @$bookingInfo['bookingId'];?></td>
                                    </tr>
                                    <tr>
                                        <td>Customer Name:</td>
                                        <td><?php echo @$bookingInfo['bookedCustomer'];?></td>
                                    </tr>

                                    <tr>
                                        <td>Email Address:</td>
                                        <td><?php echo @$bookingInfo['bookedEmail'];?></td>
                                    </tr>
                                    <tr>
                                        <td>Hotel Name:</td>
                                        <td><?php echo @$bookingInfo['hotelId'];?></td>
                                    </tr>
                                    <tr>
                                        <td>Rooms:</td>
                                        <td><?php echo @$bookingInfo['bookedRooms'];?></td>
                                    </tr>
                                    <tr>
                                        <td>Adults:</td>
                                        <td><?php echo @$bookingInfo['bookedAdultsNo'];?></td>
                                    </tr>
                                    <tr>
                                        <td>Child:</td>
                                        <td><?php echo @$bookingInfo['bookedChildNo'];?></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div><!-- end table-responsive -->
                        </div><!-- end traveler-info -->
                    </div><!-- end space-right -->
                </div><!-- end columns -->
                
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end thank-you -->
</section><!-- end innerpage-wrapper -->
