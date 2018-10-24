
<!--============= PAGE-COVER =============-->
<section class="page-cover" id="cover-login">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h1 class="page-title">Sign In</h1>
                <ul class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li class="active">Sign In</li>
                </ul>
            </div><!-- end columns -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end page-cover -->
<!--===== INNERPAGE-WRAPPER ====-->
<section class="innerpage-wrapper">
    <div id="login" class="innerpage-section-padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="flex-content">
                        <div class="custom-form custom-form-fields">
                            <h3>Sign In</h3>
                            <p><?php echo getMessage();?></p>
                            <form method="post" action="<?php echo base_url('signin'); ?>">
                                <input type="hidden" name="LOGIN" value="true"/>
                                <div class="form-group">
                                    <input type="email" class="form-control required" name="email" placeholder="Email" />
                                    <span><i class="fa fa-user"></i></span>
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control required" name="password" placeholder="Password" />
                                    <span><i class="fa fa-lock"></i></span>
                                </div>
                                <button type="submit" class="btn btn-orange btn-block">Login</button>
                            </form>
                            <div class="other-links">
                                <p class="link-line">New Here ? <a href="<?php echo base_url('signup'); ?>">Signup</a>
                                </p>
                                <a class="simple-link" href="#">Forgot Password ?</a>
                            </div><!-- end other-links -->
                        </div><!-- end custom-form -->
                        <div class="flex-content-img custom-form-img">
                            <img src="<?php echo base_url(); ?>front-ui/images/hotel-2.jpg" class="img-responsive"
                                 alt="registration-img"/>
                        </div><!-- end custom-form-img -->
                    </div><!-- end form-content -->
                </div><!-- end columns -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end login -->
</section><!-- end innerpage-wrapper -->
        
