<?php
/**
 * Created by clack.
 * Filename: login.php
 * Date: 10/14/17
 * Time: 12:27 PM
 */
/*========================================*/
?>

<!DOCTYPE html>
<html>
<head>
    <title>Ecard Daflon Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="shortcut icon" href="/public/admin/img/logo1.ico"/>
    <!--Global styles -->
    <link type="text/css" rel="stylesheet" href="/public/admin/css/components.css" />
    <link type="text/css" rel="stylesheet" href="/public/admin/css/custom.css" />
    <!--End of Global styles -->
    <!--Plugin styles-->
    <link type="text/css" rel="stylesheet" href="/public/admin/vendors/bootstrapvalidator/css/bootstrapValidator.min.css"/>
    <link type="text/css" rel="stylesheet" href="/public/admin/vendors/wow/css/animate.css"/>
    <link type="text/css" rel="stylesheet" href="/public/admin/css/pages/login1.css"/>
</head>
<body>
<div class="preloader" style=" position: fixed;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  z-index: 100000;
  backface-visibility: hidden;
  background: #ffffff;">
    <div class="preloader_img" style="width: 200px;
  height: 200px;
  position: absolute;
  left: 48%;
  top: 48%;
  background-position: center;
z-index: 999999">
        <img src="/public/admin/img/loader.gif" style=" width: 40px;" alt="loading...">
    </div>
</div>
<div class="container wow fadeInDown" data-wow-delay="0.5s" data-wow-duration="2s">
    <div class="row">
        <div class="col-lg-8 push-lg-2 col-md-10 push-md-1 col-sm-10 push-sm-1 login_top_bottom">
            <div class="row">
                <div class="col-lg-8 push-lg-2 col-md-10 push-md-1 col-sm-12">
                    <div class="login_logo login_border_radius1">
                        <h3 class="text-center">
                            <img src="/public/admin/img/logo1.ico" alt="josh logo" class="admire_logo"><span class="text-white"> ADMIRE ADMIN<br/>
                                Log In</span>
                        </h3>
                    </div>
                    <div class="bg-white login_content login_border_radius">
                        <form action="index.html" id="login_validator" method="post" class="login_validator">
                            <div class="form-group">
                                <label for="email" class="col-form-label"> E-mail</label>
                                <div class="input-group">
                                    <span class="input-group-addon input_email"><i
                                            class="fa fa-envelope text-primary"></i></span>
                                    <input type="text" class="form-control  form-control-md" id="email" name="username" placeholder="E-mail">
                                </div>
                            </div>
                            <!--</h3>-->
                            <div class="form-group">
                                <label for="password" class="col-form-label">Password</label>
                                <div class="input-group">
                                    <span class="input-group-addon addon_password"><i
                                            class="fa fa-lock text-primary"></i></span>
                                    <input type="password" class="form-control form-control-md" id="password"   name="password" placeholder="Password">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <input type="submit" value="Log In" class="btn btn-primary btn-block login_button">
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-6">
                                    <label class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input form-control">
                                        <span class="custom-control-indicator"></span>
                                        <a class="custom-control-description">Keep me logged in</a>
                                    </label>
                                </div>
                                <div class="col-6 text-right forgot_pwd">
                                    <a href="forgot_password1.html" class="custom-control-description forgottxt_clr">Forgot password?</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- global js -->
<script type="text/javascript" src="/public/admin/js/jquery.min.js"></script>
<script type="text/javascript" src="/public/admin/js/tether.min.js"></script>
<script type="text/javascript" src="/public/admin/js/bootstrap.min.js"></script>
<!-- end of global js-->
<!--Plugin js-->
<script type="text/javascript" src="/public/admin/vendors/bootstrapvalidator/js/bootstrapValidator.min.js"></script>
<script type="text/javascript" src="/public/admin/vendors/wow/js/wow.min.js"></script>
<script type="text/javascript" src="/public/admin/js/pages/login1.js"></script>
</body>

</html>
