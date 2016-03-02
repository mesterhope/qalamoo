<HTML prefix="og: http://ogp.me/ns#">
<!--[if IE 8 ]>    <html lang="fa" class="ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="fa" class="ie"> <![endif]-->
<!--[if !IE]><!--> <html lang="fa"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <title>قلمو طراحی گرافیکی</title>
        <meta name="description" content="طراحی کارت ویزیت, زیباسازی استان قزوین, عکاسی,"/>
        <meta name="keywords" content=""/>
        <meta property="og:title" content="قلمو">
        <meta property="og:site_name" content="qalamoo">
        <meta property="og:url" content="qalamoo.com">
        <meta property="og:description" content="طراحی کارت ویزیت, زیباسازی استان قزوین, عکاسی,">
        <meta property="fb:app_id" content="">
        <meta property="og:type" content="business.business">
@section("style")
    <!-- CSS -->
    {{HTML::style("public_assets/js/vegas/jquery.vegas.css")}}
    {{HTML::style("public_assets/js/tipsy/tipsy-rtl.css")}}
    {{HTML::style("public_assets/js/prettyPhoto/css/prettyPhoto-rtl.css",['media'=>'all'])}}
    {{HTML::style("public_assets/js/prettyPhoto/css/prettyPhoto-rtl.css",['media'=>'all'])}}
    {{HTML::style("public_assets/js/superfish/superfish-rtl.css",['media'=>'screen'])}}
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Lato:300,300italic,400,400italic,700,700italic" />
    {{HTML::style("public_assets/css/styles-rtl.css")}}
    <!-- SCRIPTS -->
    {{HTML::script("public_assets/js/jquery/jquery-1.9.1.min.js")}}
    {{HTML::script("public_assets/js/jquery/jquery-migrate-1.2.1.js")}}
    {{HTML::script("public_assets/js/jquery/jquery.easing.1.3.js")}}
    {{HTML::script("public_assets/js/vegas/jquery.vegas.js")}}
    {{HTML::script("public_assets/js/vegas/vegas.home.config.js")}}
    {{HTML::script("public_assets/js/tipsy/jquery.tipsy.js")}}
    {{HTML::script("public_assets/js/prettyPhoto/js/jquery.prettyPhoto.js")}}
    {{HTML::script("public_assets/js/superfish/hoverIntent.js")}}
    {{HTML::script("public_assets/js/superfish/superfish.js")}}
    {{HTML::script("public_assets/js/mdetect/mdetect.js")}}
    {{HTML::script("public_assets/js/global.js")}}
    <!-- CUSTOM SCRIPTS FOR THIS PAGE -->
    <!-- FOR CUSTOM SCRIPT CHECK ALSO js/vegas/vegas.home.config.js -->
    <script type="text/javascript">
        $(document).ready(function() {
            //ENTRY ANIMATION
            var quoted = $('#home .quoted');
            var thumbs = $('#home .thumbs');
            var paragraph = $('#home .paragraph');
            quoted.delay(1000).animate({ opacity: 1 }, 1500, 'linear');
            thumbs.delay(1400).animate({ opacity: 1 }, 1500, 'linear');
            paragraph.delay(1800).animate({ opacity: 1 }, 1500, 'linear');
        });
    </script>
@show()
    </head>
<body>
<!-- GLOBAL BORDER -->
<div id="left"></div>
<div id="right"></div>
<div id="top"></div>
<div id="bottom"></div>
<!-- HEADER -->
<div id="header">{{HTML::image("public_assets/images/logo.png",'alt')}}</div>
<!-- HOME -->
<div id="home">
    @yield("content")
</div>
<!-- MENU -->
    <div id="menu">
        <ul id="sample-menu-3" class="sf-menu sf-vertical">
            <li>
                <a href="#a">About Us</a>
                <ul class="second_level">
                    <li><a href="about_company.html">Company</a></li>
                </ul>
            </li>
            <li>
                <a href="#">Collections</a>
            </li>
            <li><a href="location.html">Location</a></li>
        </ul>
    </div>
    <!-- FOOTER - COPYRIGHT & SOCIAL NETWORKS -->
    <div id="footer">
        <ul>
            <li class="copyright">Copyright © 2016 - <a href="mailto:zarinpy@gmail.com">zarinpy@gmail.com</a></li>
            <li><a href="http://www.facebook.com/pezflash" target="_blank" title="Facebook">{{HTML::image("public_assets/images/icon_facebook.png",'facebook')}}</a></li>
            <li><a href="http://www.twitter.com/pezflash" target="_blank" title="Twitter">{{HTML::image("public_assets/images/icon_twitter.png",'twitter')}}</a></li>
        </ul>
    </div>
</body>
</html>