<!--======================= FOOTER =======================-->
<section id="footer" class="ftr-heading-w ftr-heading-mgn-2">
    <div id="footer-top" class="banner-padding ftr-top-grey ftr-text-grey">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 footer-widget ftr-about ftr-our-company">
                    <h3 class="footer-heading">OUR COMPANY</h3>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt
                        ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci
                        tation ullamcorper suscipit.</p>
                    <ul class="social-links list-inline list-unstyled">
                        <li><a href="#"><span><i class="fa fa-facebook"></i></span></a></li>
                        <li><a href="#"><span><i class="fa fa-twitter"></i></span></a></li>
                        <li><a href="#"><span><i class="fa fa-google-plus"></i></span></a></li>
                        <li><a href="#"><span><i class="fa fa-pinterest-p"></i></span></a></li>
                        <li><a href="#"><span><i class="fa fa-instagram"></i></span></a></li>
                        <li><a href="#"><span><i class="fa fa-linkedin"></i></span></a></li>
                        <li><a href="#"><span><i class="fa fa-youtube-play"></i></span></a></li>
                    </ul>
                </div><!-- end columns -->
                <div class="col-xs-12 col-sm-12 col-md-7 col-lg-7 footer-widget ftr-map">
                    <div class="map">

                    </div>
                </div><!-- end columns -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end footer-top -->
    <div id="footer-bottom" class="ftr-bot-black">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6" id="copyright">
                    <p>© 2018 <a href="#">HMS</a>. All rights reserved.</p>
                </div><!-- end columns -->
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6" id="terms">
                    <ul class="list-unstyled list-inline">
                        <li><a href="#">Terms & Condition</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                    </ul>
                </div><!-- end columns -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end footer-bottom -->
</section><!-- end footer -->
<!-- Page Scripts Starts -->
<script src="<?php echo base_url() ?>front-ui/js/jquery.min.js"></script>
<script src="<?php echo base_url() ?>front-ui/js/jquery.colorpanel.js"></script>
<script src="<?php echo base_url() ?>front-ui/js/jquery.magnific-popup.min.js"></script>
<script src="<?php echo base_url() ?>front-ui/js/bootstrap.min.js"></script>
<script src="<?php echo base_url() ?>front-ui/js/jquery.flexslider.js"></script>
<script src="<?php echo base_url() ?>front-ui/js/bootstrap-datepicker.js"></script>
<script src="<?php echo base_url() ?>front-ui/js/owl.carousel.min.js"></script>
<script src="<?php echo base_url() ?>front-ui/js/custom-navigation.js"></script>
<script src="<?php echo base_url() ?>front-ui/js/custom-flex.js"></script>
<script src="<?php echo base_url() ?>front-ui/js/custom-owl.js"></script>
<script src="<?php echo base_url() ?>front-ui/js/custom-date-picker.js"></script>
<script src="<?php echo base_url() ?>front-ui/js/custom-gallery.js"></script>
<!-- Page Scripts Ends -->
<script src="<?php echo base_url();?>bower_components/jquery.validate.min.js"></script>
<script>
    $(function () {
        $('form').validate({
            errorElement: 'div',
            errorClass: 'help-block',
            focusInvalid: false,
            ignore: "",
            rules: {
                email: {email: true, required: true},
                password: {required: true},

            },
            messages: {
                email:'Please enter valid email',
                password:'Please enter valid password'
            },
            highlight: function (e) {
                $(e).closest('.form-group').removeClass('has-info').addClass('has-error');
            },
            success: function (e) {
                $(e).closest('.form-group').removeClass('has-error');//.addClass('has-info');
                $(e).remove();
            }
        });
    });
</script>
</body>
</html>