<!DOCTYPE html>
<!-- Template Name: Clip-One - Responsive Admin Template build with Twitter Bootstrap 3.x Version: 1.4 Author: ClipTheme -->
<!--[if IE 8]><html class="ie8 no-js" lang="en"><![endif]-->
<!--[if IE 9]><html class="ie9 no-js" lang="en"><![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->
<!-- start: HEAD -->
<head>
    <title></title>
    <!-- start: META -->
    <meta charset="utf-8" />
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content="IE=edge,IE=9,IE=8,chrome=1" /><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta content="" name="description" />
    <meta content="" name="author" />
    <!-- end: META -->
    <!-- start: MAIN CSS -->
    {{HTML::style("admin_assets/plugins/bootstrap/css/bootstrap.min.css")}}
    {{HTML::style("admin_assets/plugins/font-awesome/css/font-awesome.min.css")}}
    {{HTML::style("admin_assets/fonts/style.css")}}
    {{HTML::style("admin_assets/css/main.css")}}
    {{HTML::style("admin_assets/css/main-responsive.css")}}
    {{HTML::style("admin_assets/plugins/iCheck/skins/all.css")}}
    {{HTML::style("admin_assets/plugins/perfect-scrollbar/src/perfect-scrollbar-rtl.css")}}
    {{HTML::style("admin_assets/css/rtl-version.css")}}
    {{HTML::style("admin_assets/css/theme_light.css",array('id'=>'skin_color'))}}
    {{HTML::style("admin_assets/css/print.css",array('media'=>'print'))}}
    <!--[if IE 7]>
    {{HTML::style("admin_assets/plugins/font-awesome/css/font-awesome-ie7.min.css")}}
    <![endif]-->
    <!-- end: MAIN CSS -->
    <!-- start: CSS REQUIRED FOR THIS PAGE ONLY -->
    <!-- end: CSS REQUIRED FOR THIS PAGE ONLY -->
</head>
<!-- end: HEAD -->
<!-- start: BODY -->
<body class="login example2 rtl">
<div class="main-login col-sm-4 col-sm-offset-4">
    <div class="logo">QALAMOO
    </div>
    <!-- start: LOGIN BOX -->
    <div class="box-login">
        <h3>وارد حساب کاربری خود شوید</h3>
        <p>لطفا پست الکترونیکی خود را وارد کنید</p>

        {{Form::open(array('route'=>'login','method'=>'POST','class'=>'login-form'))}}
        @if($errors->has())
            <div class="errorHandler alert alert-danger">
                <button data-dismiss="alert" class="close">×</button>
                @foreach($errors->all() as $errors)
                    <i class="fa fa-bug"></i>
                    {{$errors}}<br/>
                @endforeach()
            </div>
        @endif()

        @if(Session::has('message'))
            <div class="errorHandler alert alert-danger">
                <button data-dismiss="alert" class="close">×</button>
                <i class="fa fa-bug"></i>
                {{Session::get('message')}}<br/>
            </div>
        @endif()

        <fieldset>
            <div class="form-group">
                    <span class="input-icon input-icon-right">
                        {{Form::email('email','',array('class'=>'form-control','placeholder'=>'پست الکترونیکی'))}}
                        <i class="fa fa-user"></i>
                    </span>
            </div>
            <div class="form-group form-actions">
                    <span class="input-icon input-icon-right">
                        {{Form::password('password',array('class'=>'form-control password','placeholder'=>'رمز عبور'))}}
                        <i class="fa fa-lock"></i>
                        <a class="forgot" href="#">رمز عبور خود را فراموش کرده ام</a>
                    </span>
            </div>
            <!-- <div class="form-actions">
                 <label for="remember" class="checkbox-inline">
                     <input type="checkbox" class="grey remember" id="remember" name="remember">
                     Keep me signed in
                 </label>-->
            <button type="submit" class="btn btn-bricky pull-left">
                ورود <i class="fa fa-arrow-circle-right"></i>
            </button>
            <!--</div>
            <div class="new-account">Don't have an account yet?
                <a href="#" class="register">Create an account</a>
            </div>-->
        </fieldset>
        </form>
    </div>
    <!-- end: LOGIN BOX -->
    <!-- start: FORGOT BOX -->
    <div class="box-forgot">
        <h3>Forget Password?</h3>
        <p>Enter your e-mail address below to reset your password.</p>
        <form class="form-forgot">
            <div class="errorHandler alert alert-danger no-display">
                <i class="fa fa-remove-sign"></i> You have some form errors. Please check below.
            </div>
            <fieldset>
                <div class="form-group">
							<span class="input-icon">
								<input type="email" class="form-control" name="email" placeholder="Email">
								<i class="fa fa-envelope"></i> </span>
                </div>
                <div class="form-actions">
                    <a class="btn btn-light-grey go-back">
                        <i class="fa fa-circle-arrow-left"></i> Back
                    </a>
                    <button type="submit" class="btn btn-bricky pull-left">
                        Submit <i class="fa fa-arrow-circle-right"></i>
                    </button>
                </div>
            </fieldset>
        </form>
    </div>
    <!-- end: FORGOT BOX -->
    <!-- start: REGISTER BOX -->
    <div class="box-register">
        <h3>Sign Up</h3>
        <p>
            Enter your personal details below:
        </p>
        <form class="form-register">
            <div class="errorHandler alert alert-danger no-display">
                <i class="fa fa-remove-sign"></i> You have some form errors. Please check below.
            </div>
            <fieldset>
                <div class="form-group">
                    <input type="text" class="form-control" name="full_name" placeholder="Full Name">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="address" placeholder="Address">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="city" placeholder="City">
                </div>
                <div class="form-group">
                    <div>
                        <label class="radio-inline">
                            <input type="radio" class="grey" value="F" name="gender">
                            Female
                        </label>
                        <label class="radio-inline">
                            <input type="radio" class="grey" value="M" name="gender">
                            Male
                        </label>
                    </div>
                </div>
                <p>
                    Enter your account details below:
                </p>
                <div class="form-group">
							<span class="input-icon">
								<input type="email" class="form-control" name="email" placeholder="Email">
								<i class="fa fa-envelope"></i> </span>
                </div>
                <div class="form-group">
							<span class="input-icon">
								<input type="password" class="form-control" id="password" name="password" placeholder="Password">
								<i class="fa fa-lock"></i> </span>
                </div>
                <div class="form-group">
							<span class="input-icon">
								<input type="password" class="form-control" name="password_again" placeholder="Password Again">
								<i class="fa fa-lock"></i> </span>
                </div>
                <div class="form-group">
                    <div>
                        <label for="agree" class="checkbox-inline">
                            <input type="checkbox" class="grey agree" id="agree" name="agree">
                            I agree to the Terms of Service and Privacy Policy
                        </label>
                    </div>
                </div>
                <div class="form-actions">
                    <a class="btn btn-light-grey go-back">
                        <i class="fa fa-circle-arrow-left"></i> Back
                    </a>
                    <button type="submit" class="btn btn-bricky pull-left">
                        Submit <i class="fa fa-arrow-circle-right"></i>
                    </button>
                </div>
            </fieldset>
        </form>
    </div>
    <!-- end: REGISTER BOX -->
    <!-- start: COPYRIGHT -->
    <div class="copyright">
        وستاتوان فرتاک   2015 &copy;
    </div>
    <!-- end: COPYRIGHT -->
</div>
<!-- start: MAIN JAVASCRIPTS -->
<!--[if lt IE 9]>
{{HTML::script("admin_assets/plugins/respond.min.js")}}
{{HTML::script("admin_assets/plugins/excanvas.min.js")}}
{{HTML::script("admin_assets/plugins/jQuery-lib/1.10.2/jquery.min.js")}}

<![endif]-->
<!--[if gte IE 9]><!-->
{{HTML::script("admin_assets/plugins/jQuery-lib/2.0.3/jquery.min.js")}}
        <!--<![endif]-->
{{HTML::script("admin_assets/plugins/jquery-ui/jquery-ui-1.10.2.custom.min.js")}}
{{HTML::script("admin_assets/plugins/bootstrap/js/bootstrap.min.js")}}
{{HTML::script("admin_assets/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js")}}
{{HTML::script("admin_assets/plugins/blockUI/jquery.blockUI.js")}}
{{HTML::script("admin_assets/plugins/iCheck/jquery.icheck.min.js")}}
{{HTML::script("admin_assets/plugins/perfect-scrollbar/src/jquery.mousewheel.js")}}
{{HTML::script("admin_assets/plugins/less/less-1.5.0.min.js")}}
{{HTML::script("admin_assets/plugins/bootstrap-colorpalette/js/bootstrap-colorpalette.js")}}
{{HTML::script("admin_assets/js/main.js")}}
        <!-- end: MAIN JAVASCRIPTS -->
<!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
{{HTML::script("admin_assets/plugins/jquery-validation/dist/jquery.validate.min.js")}}
{{HTML::script("admin_assets/js/login.js")}}
        <!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
<script>
    jQuery(document).ready(function() {

        Login.init();
    });
</script>
</body>
<!-- end: BODY -->
</html>