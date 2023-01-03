<section id="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-12">
                <h2>Fence Supply Guys </h2>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since ... </p>
            </div>
            <div class="col-lg-3 col-12">
                <h2>Products</h2>
                <ul>
                    <li> <a href="#"> Warranty Registration </a></li>
                    <li><a href="#"> Find a Master Halco Branch </a> </li>
                    <li><a href="#"> Contact Us </a> </li>
                    <li> <a href="#">Terms of Sale</a> </li>
                </ul>
            </div>
            <div class="col-lg-3 col-12">
                <h2>Company</h2>
                <ul>
                    <li> <a href="#">Become A Customer </a></li>
                    <li><a href="#">Contractor </a> </li>
                    <li><a href="#">QuoteMaster </a></li>
                    <li><a href="#">Careers</a> </li>
                </ul>
            </div>
            <div class="col-lg-3 col-12">
                <h2>Let's connect</h2>
                <ul>
                    <li> Corporate Office: 123-456-7890 </li>
                    <li> Branch Locations: 123-456-7890 </li>
                    <li> Mail: <a href="mailto:contact@fencesupplyguys.com">contact@fencesupplyguys.com </a> </li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-12 text-center" style="border-top:solid 1px #ccc; padding-top: 10px; margin-top: 15px;">
                <p>All rights reserved@ Fence Supply Guys</p>
            </div>
        </div>
    </div>
</section>

<div class="modal fade" id="signin-modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><i class="icon-close"></i></span>
                </button>

                <div class="form-box">
                    <div class="form-tab">
                        <ul class="nav nav-pills nav-fill" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="signin-tab" data-toggle="tab" href="#signin" role="tab" aria-controls="signin" aria-selected="true">Sign In</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="register-tab" data-toggle="tab" href="#register" role="tab" aria-controls="register" aria-selected="false">Register</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="tab-content-5">
                            <div id="lerror"></div>
                            <div class="tab-pane fade show active" id="signin" role="tabpanel" aria-labelledby="signin-tab">
                                <form action="#" id="login" method="post">
                                    <div class="form-group">
                                        <label for="singin-email">Username or email address *</label>
                                        <input type="text" class="form-control" id="singin-email" name="email" required>
                                    </div><!-- End .form-group -->

                                    <div class="form-group">
                                        <label for="singin-password">Password *</label>
                                        <input type="password" class="form-control" id="singin-password" name="pass" required>
                                    </div><!-- End .form-group -->

                                    <div class="form-footer">
                                        <button type="submit" class="btn btn-outline-primary-2">
                                            <span>LOG IN</span>
                                            <i class="icon-long-arrow-right"></i>
                                        </button>

                                        <!-- <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="signin-remember">
                                                <label class="custom-control-label" for="signin-remember">Remember Me</label>
                                            </div> -->

                                        <a href="#" class="forgot-link">Forgot Your Password?</a>
                                    </div><!-- End .form-footer -->
                                </form>
                                <!-- <div class="form-choice">
                                        <p class="text-center">or sign in with</p>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <a href="#" class="btn btn-login btn-g">
                                                    <i class="icon-google"></i>
                                                    Login With Google
                                                </a>
                                            </div>
                                            <div class="col-sm-6">
                                                <a href="#" class="btn btn-login btn-f">
                                                    <i class="icon-facebook-f"></i>
                                                    Login With Facebook
                                                </a>
                                            </div>
                                        </div>
                                    </div> -->
                            </div><!-- .End .tab-pane -->
                            <div class="tab-pane fade" id="register" role="tabpanel" aria-labelledby="register-tab">
                                <form action="#" method="post" id="register">
                                    <div class="form-group">
                                        <label for="register-email">Your email address *</label>
                                        <input type="email" class="form-control" id="register-email" name="email" required>
                                    </div><!-- End .form-group -->

                                    <div class="form-group">
                                        <label for="register-password">Password *</label>
                                        <input type="password" class="form-control" id="register-password" name="cpass" required>
                                    </div><!-- End .form-group -->

                                    <div class="form-footer">
                                        <button type="submit" class="btn btn-outline-primary-2">
                                            <span>SIGN UP</span>
                                            <i class="icon-long-arrow-right"></i>
                                        </button>

                                        <!-- <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="register-policy" required>
                                                <label class="custom-control-label" for="register-policy">I agree to the <a href="#">privacy policy</a> *</label>
                                            </div> -->
                                    </div><!-- End .form-footer -->
                                </form>
                                <!-- <div class="form-choice">
                                        <p class="text-center">or sign in with</p>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <a href="#" class="btn btn-login btn-g">
                                                    <i class="icon-google"></i>
                                                    Login With Google
                                                </a>
                                            </div>
                                            <div class="col-sm-6">
                                                <a href="#" class="btn btn-login  btn-f">
                                                    <i class="icon-facebook-f"></i>
                                                    Login With Facebook
                                                </a>
                                            </div>
                                        </div>
                                    </div> -->
                            </div><!-- .End .tab-pane -->
                        </div><!-- End .tab-content -->
                    </div><!-- End .form-tab -->
                </div><!-- End .form-box -->
            </div><!-- End .modal-body -->
        </div><!-- End .modal-content -->
    </div><!-- End .modal-dialog -->
</div>


<script src="<? echo base_url('assets/front/') ?>assets/js/jquery.min.js"></script>
<script src="<? echo base_url('assets/front/') ?>assets/js/bootstrap.bundle.min.js"></script>
<script src="<? echo base_url('assets/front/') ?>assets/js/main.js"></script>
</body>

</html>

<script type="text/javascript">
    $(document).on("submit", "#register", function(e) {

        e.preventDefault();
        var fdata = $(this).serialize();

        $.ajax({

            type: 'post',
            url: '<? echo base_url('customers') ?>',
            data: fdata,
            dataType: 'json',
            success: function(data) {

                if (data.status == 'success') {
                    $("#lerror").html('<div class="alert alert-success">' + data.msg + '</div>');
                    location.reload();
                } else {
                    $("#error").html('<div class="alert alert-danger">' + data.msg + '</div>');
                }

            },
            error: function(data) {

            }

        });

    });

    $(document).on("submit", "#login", function(e) {

        e.preventDefault();
        var fdata = $(this).serialize();

        $.ajax({

            type: 'post',
            url: '<? echo base_url('customers/do_login') ?>',
            data: fdata,
            dataType: 'json',
            success: function(data) {

                if (data.status == 'success') {

                    $("#lerror").html('<div class="alert alert-success">' + data.msg + '<a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a></div>');
                    location.reload();

                } else {
                    $("#lerror").html('<div class="alert alert-danger">' + data.msg + '<a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a></div>');
                }

            },
            error: function(data) {

                console.log(data);
            }

        });

    });
</script>