<!--================ PAGE-COVER =================-->
<section class="page-cover" id="cover-registration">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h1 class="page-title">Sign Up </h1>
                <ul class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li class="active">Sign Up </li>
                </ul>
            </div><!-- end columns -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end page-cover -->


<!--===== INNERPAGE-WRAPPER ====-->
<section class="innerpage-wrapper">
    <div id="registration" class="innerpage-section-padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">

                    <div class="flex-content">
                        <div class="custom-form custom-form-fields">
                            <h3>Sign Up</h3>
                            <p><?php echo getMessage();?></p>
                            <form method="POST" action="<?php echo base_url('signup');?>">
                                <input type="hidden" name="REG" value="true"/>
                                <div class="form-group">
                                    <input type="text" class="form-control required" name="username" placeholder="Username"  />
                                    <span><i class="fa fa-user"></i></span>
                                </div>

                                <div class="form-group">
                                    <input type="email" class="form-control required" name="email" placeholder="Email"  />
                                    <span><i class="fa fa-envelope"></i></span>
                                </div>

                                <div class="form-group">
                                    <input type="password" class="form-control required" name="password" placeholder="Password"  />
                                    <span><i class="fa fa-lock"></i></span>
                                </div>

                                <div class="form-group">
                                    <input type="password" class="form-control required" name="cpassword" placeholder="Confirm Password"  />
                                    <span><i class="fa fa-lock"></i></span>
                                </div>

                                <button type="submit" class="btn btn-orange btn-block">Register</button>
                            </form>

                            <div class="other-links">
                                <p class="link-line">Already Have An Account ? <a href="#">Login Here</a></p>
                            </div><!-- end other-links -->
                        </div><!-- end custom-form -->

                        <div class="flex-content-img custom-form-img">
                            <img src="https://tse2.mm.bing.net/th?id=OIP.-PU9yGtgqMIA02IbiI1CHQHaHg&pid=15.1&P=0&w=300&h=300" class="img-responsive" alt="registration-img" />
                        </div><!-- end custom-form-img -->
                    </div><!-- end form-content -->

                </div><!-- end columns -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end registration -->
</section><!-- end innerpage-wrapper -->
        
