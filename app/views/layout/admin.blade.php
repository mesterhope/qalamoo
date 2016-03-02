<!DOCTYPE html>
<!-- Template Name: Clip-One - Responsive Admin Template build with Twitter Bootstrap 3.x Version: 1.4 Author: ClipTheme -->
<!--[if IE 8]><html class="ie8 no-js" lang="en"><![endif]-->
<!--[if IE 9]><html class="ie9 no-js" lang="en"><![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->
<!-- start: HEAD -->
<head>
	<title>admin</title>
	<!-- start: META -->
	<meta charset="utf-8" />
	<!--[if IE]><meta http-equiv='X-UA-Compatible' content="IE=edge,IE=9,IE=8,chrome=1" /><![endif]-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<meta content="" name="description" />
	<meta content="" name="author" />
	<meta content="" name="author" />
	<!-- end: META -->
	<!-- start: MAIN CSS -->
	@section('style')
        {{HTML::style('admin_assets/plugins/bootstrap/css/bootstrap.min.css')}}
        {{HTML::style('admin_assets/plugins/font-awesome/css/font-awesome.min.css')}}
        {{HTML::style('admin_assets/fonts/style.css')}}
        {{HTML::style('admin_assets/css/main.css')}}
        {{HTML::style('admin_assets/css/main-responsive.css')}}
        {{HTML::style('admin_assets/plugins/iCheck/skins/all.css')}}
        {{HTML::style('admin_assets/plugins/bootstrap-colorpalette/css/bootstrap-colorpalette.css')}}
        {{HTML::style('admin_assets/plugins/perfect-scrollbar/src/perfect-scrollbar-rtl.css')}}
        {{HTML::style('admin_assets/css/theme_light.css',array('type'=>'text/css','id'=>'skin-color'))}}
        {{HTML::style('admin_assets/css/print.css',array('type'=>'text/css','media'=>'print'))}}
        {{HTML::style('admin_assets/css/rtl-version.css')}}
        <!--[if IE 7]>
	{{HTML::style('admin_assets/plugins/font-awesome/css/font-awesome-ie7.min.css')}}
	<!-- <link rel="stylesheet" href="assets/plugins/font-awesome/css/font-awesome-ie7.min.css">
     <![endif]-->
	<!-- end: MAIN CSS -->
	@show()
	<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
	<link rel="icon" href="favicon.ico" type="image/x-icon">
</head>
<!-- end: HEAD -->
<!-- start: BODY -->
<body class="rtl">
<!-- start: HEADER -->
<div class="navbar navbar-inverse navbar-fixed-top">
	<!-- start: TOP NAVIGATION CONTAINER -->
	<div class="container">
		<div class="navbar-header">
			<!-- start: RESPONSIVE MENU TOGGLER -->
			<button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle" type="button">
				<span class="clip-list-2"></span>
			</button>
			<!-- end: RESPONSIVE MENU TOGGLER -->
			<!-- start: LOGO -->
			<a class="navbar-brand" href="{{URL::to('admin/dashboard')}}">
				{{HTML::image('admin_assets/images/logo.png',null,array('width'=>120,'height'=>40))}}
			</a>
			<!-- end: LOGO -->
		</div>
		<div class="navbar-tools">
			<!-- start: TOP NAVIGATION MENU -->
			<ul class="nav navbar-right">
				<li class="dropdown current-user">
					<a data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle" data-close-others="true" href="#">
						<img src="assets/images/avatar-1-small.jpg" class="circle-img" alt="">
						<span class="username">Peter Clark</span>
						<i class="clip-chevron-down"></i>
					</a>
					<ul class="dropdown-menu">
						<li>
							<a href="pages_user_profile.html">
								<i class="clip-user-2"></i>
								&nbsp;My Profile
							</a>
						</li>
						<li>
							<a href="pages_calendar.html">
								<i class="clip-calendar"></i>
								&nbsp;My Calendar
							</a>
						<li>
							<a href="pages_messages.html">
								<i class="clip-bubble-4"></i>
								&nbsp;My Messages (3)
							</a>
						</li>
						<li class="divider"></li>
						<li>
							<a href="utility_lock_screen.html"><i class="clip-locked"></i>
								&nbsp;Lock Screen </a>
						</li>
						<li>
							<a href="{{URL::route('logout')}}">
								<i class="clip-exit"></i>
								&nbsp;خروج
							</a>
						</li>
					</ul>
				</li>
				<!-- end: USER DROPDOWN -->
				<!-- start: PAGE SIDEBAR TOGGLE -->
				<!-- end: PAGE SIDEBAR TOGGLE -->
			</ul>
			<!-- end: TOP NAVIGATION MENU -->
		</div>
	</div>
	<!-- end: TOP NAVIGATION CONTAINER -->
</div>
<!-- end: HEADER -->
<!-- start: MAIN CONTAINER -->
<div class="main-container">
	<div class="navbar-content">
		<!-- start: SIDEBAR -->
		<div class="main-navigation navbar-collapse collapse">
			<!-- start: MAIN MENU TOGGLER BUTTON -->
			<div class="navigation-toggler">
				<i class="clip-chevron-left"></i>
				<i class="clip-chevron-right"></i>
			</div>
			<!-- end: MAIN MENU TOGGLER BUTTON -->
			<!-- start: MAIN NAVIGATION MENU -->
			<ul class="main-navigation-menu">
                <li>
                    <a href="javascript:void(0)"><i class="clip-screen"></i>
                        <span class="title"> گالری </span><i class="icon-arrow"></i>
                        <span class="selected"></span>
                    </a>
                    <ul class="sub-menu">
                        <li>
                            <a href="{{URL::route('admin.galleries.create')}}">
                                <span class="title">ایجاد</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{URL::route('admin.galleries.index')}}">
                                <span class="title">لیست</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0)"><i class="clip-screen"></i>
                        <span class="title"> اسلایدر </span><i class="icon-arrow"></i>
                        <span class="selected"></span>
                    </a>
                    <ul class="sub-menu">
                        <li>
                            <a href="{{URL::route('admin.sliders.create')}}">
                                <span class="title">ایجاد</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{URL::route('admin.sliders.index')}}">
                                <span class="title">لیست</span>
                            </a>
                        </li>
                    </ul>
                </li>
			</ul>
			<!-- end: MAIN NAVIGATION MENU -->
		</div>
		<!-- end: SIDEBAR -->
	</div>
	<!-- start: PAGE -->
	<div class="main-content">
		<!-- start: PANEL CONFIGURATION MODAL FORM -->
		<div class="modal fade" id="panel-config" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
							&times;
						</button>
						<h4 class="modal-title">Panel Configuration</h4>
					</div>
					<div class="modal-body">
						Here will be a configuration form
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">
							Close
						</button>
						<button type="button" class="btn btn-primary">
							Save changes
						</button>
					</div>
				</div>
				<!-- /.modal-content -->
			</div>
			<!-- /.modal-dialog -->
		</div>
		<!-- /.modal -->
		<!-- end: SPANEL CONFIGURATION MODAL FORM -->
		<div class="container">
			<!-- start: PAGE HEADER -->
			<div class="row">
				<div class="col-sm-12">
					<!-- start: PAGE TITLE & BREADCRUMB -->
					<div class="page-header">
						<h1>{{$title or "داشبورد"}} <small>Qalamoo</small></h1>
                        @if($page)
                        <h2>{{$page}}</h2>
                        @endif
                    </div>
					<!-- end: PAGE TITLE & BREADCRUMB -->
				</div>
			</div>
			<!-- end: PAGE HEADER -->
			<!-- start: PAGE CONTENT -->
			@yield('content')
					<!-- end: PAGE CONTENT-->
		</div>
	</div>
	<!-- end: PAGE -->
</div>
<!-- end: MAIN CONTAINER -->
<!-- start: FOOTER -->
<div class="footer clearfix">
	<div class="footer-inner">
		2016 &copy; Omid Zarinmahd.
	</div>
	<div class="footer-items">
		<span class="go-top"><i class="clip-chevron-up"></i></span>
	</div>
</div>
<!-- end: FOOTER -->
<!-- start: LEFT SIDEBAR -->

<!-- end: LEFT SIDEBAR -->
<div id="event-management" class="modal fade" tabindex="-1" data-width="760" style="display: none;">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
					&times;
				</button>
				<h4 class="modal-title">Event Management</h4>
			</div>
			<div class="modal-body"></div>
			<div class="modal-footer">
				<button type="button" data-dismiss="modal" class="btn btn-light-grey">
					Close
				</button>
				<button type="button" class="btn btn-danger remove-event no-display">
					<i class='fa fa-trash-o'></i> Delete Event
				</button>
				<button type='submit' class='btn btn-success save-event'>
					<i class='fa fa-check'></i> Save
				</button>
			</div>
		</div>
	</div>
</div>
@section('script')
		<!-- start: MAIN JAVASCRIPTS
     <script src="assets/plugins/respond.min.js"></script>
     <script src="assets/plugins/excanvas.min.js"></script>
     <script type="text/javascript" src="assets/plugins/jQuery-lib/1.10.2/jquery.min.js"></script>
    -->
<!--[if lt IE 9]>
{{HTML::script('admin_assets/plugins/respond.min.js')}}
{{HTML::script('admin_assets/plugins/jQuery-lib/1.10.2/jquery.min.js')}}
<![endif]--
    <!--[if gte IE 9]><!-->
{{HTML::script('admin_assets/plugins/jQuery-lib/2.0.3/jquery.min.js')}}
		<!--<![endif]-->
{{HTML::script('admin_assets/plugins/jquery-ui/jquery-ui-1.10.2.custom.min.js')}}
{{HTML::script('admin_assets/plugins/jquery-inputlimiter/jquery.inputlimiter.1.3.1.min.js')}}
{{HTML::script('admin_assets/plugins/autosize/jquery.autosize.min.js')}}
{{HTML::script('admin_assets/plugins/bootstrap/js/bootstrap.min.js')}}
{{HTML::script('admin_assets/plugins/blockUI/jquery.blockUI.js')}}
{{HTML::script('admin_assets/plugins/iCheck/jquery.icheck.min.js')}}
{{HTML::script('admin_assets/plugins/perfect-scrollbar/src/jquery.mousewheel.js')}}
{{HTML::script('admin_assets/plugins/perfect-scrollbar/src/perfect-scrollbar-rtl.js')}}
{{HTML::script('admin_assets/plugins/less/less-1.5.0.min.js')}}
{{HTML::script('admin_assets/plugins/jquery-cookie/jquery.cookie.js')}}
{{HTML::script('admin_assets/js/main.js')}}
{{HTML::script('admin_assets/js/form-elements.js')}}
		<!-- end: MAIN JAVASCRIPTS -->
@show()
@section('index_script')
		<!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
{{HTML::script('admin_assets/plugins/flot/jquery.flot.js')}}
{{HTML::script('admin_assets/plugins/flot/jquery.flot.pie.js')}}
{{HTML::script('admin_assets/plugins/flot/jquery.flot.resize.min.js')}}
{{HTML::script('admin_assets/js/index.js')}}
{{HTML::script('admin_assets/js/form-elements.js')}}
		<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
<script>
	jQuery(document).ready(function() {
		Main.init();
		Index.init();
		FormElements.init();
		TableExport.init();
		Dropzone.init();
	});
</script>
@show()
</body>
<!-- end: BODY -->
</html>