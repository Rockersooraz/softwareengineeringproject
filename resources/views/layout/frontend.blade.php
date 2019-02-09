<!doctype html>
<html lang="en">
<head>
<!-- Start of  Zendesk Widget script -->
<script id="ze-snippet" src="https://static.zdassets.com/ekr/snippet.js?key=f55f0417-58d2-48f2-9544-b6413f844528"> </script>
<!-- End of  Zendesk Widget script -->
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="author" content="ThemeStarz">
  

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700|Varela+Round" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('assets/bootstrap/css/bootstrap.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/fonts/font-awesome.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/css/selectize.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/user.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/overide.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.min.css')}}" type="text/css">
	<title>software engineering project</title>
    <script src="{{asset('assets/slider/js/jquery-1.11.3.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/slider/js/jssor.slider-27.5.0.min.js')}}"
            type="text/javascript"></script>
    <!--welcome slider starts -->
    <style>
        /*jssor slider loading skin spin css*/
        .jssorl-009-spin img {
            animation-name: jssorl-009-spin;
            animation-duration: 1.6s;
            animation-iteration-count: infinite;
            animation-timing-function: linear;
        }

        @keyframes jssorl-009-spin {
            from {
                transform: rotate(0deg);
            }
            to {
                transform: rotate(360deg);
            }
        }

        /*jssor slider bullet skin 057 css*/
        .jssorb057 .i {
            position: absolute;
            cursor: pointer;
        }

        .jssorb057 .i .b {
            fill: none;
            stroke: #fff;
            stroke-width: 2000;
            stroke-miterlimit: 10;
            stroke-opacity: 0.4;
        }

        .jssorb057 .i:hover .b {
            stroke-opacity: .7;
        }

        .jssorb057 .iav .b {
            stroke-opacity: 1;
        }

        .jssorb057 .i.idn {
            opacity: .3;
        }

        /*jssor slider arrow skin 073 css*/
        .jssora073 {
            display: block;
            position: absolute;
            cursor: pointer;
        }

        .jssora073 .a {
            fill: #ddd;
            fill-opacity: .7;
            stroke: #000;
            stroke-width: 160;
            stroke-miterlimit: 10;
            stroke-opacity: .7;
        }

        .jssora073:hover {
            opacity: .8;
        }

        .jssora073.jssora073dn {
            opacity: .4;
        }

        .jssora073.jssora073ds {
            opacity: .3;
            pointer-events: none;
        }
    </style>
    <!--welcome slider ends -->

</head>
<body>
    <div class="page home-page">
        <!--*********************************************************************************************************-->
        <!--************ HERO ***************************************************************************************-->
        <!--*********************************************************************************************************-->
        <header class="hero">
            <div class="hero-wrapper">
                <!--============ Secondary Navigation ===============================================================-->
                <div class="secondary-navigation">
                <!--end container-->
                @yield('secondary-navigation')
                </div>
                <!--============ End Secondary Navigation ===========================================================-->
                <!--============ Main Navigation ====================================================================-->
               @yield('main-navigation')
                <!--============ End Main Navigation ================================================================-->
                <!--============ Page Title =========================================================================-->
                @yield('advertisement-slider')
                <!--============ End Page Title =====================================================================-->
                <!--============ Hero Form ==========================================================================-->
                @yield('hero-form')
                <!--============ End Hero Form ======================================================================-->
                @yield('background')
                <!--end background-->
            </div>
            <!--end hero-wrapper-->
        </header>
        <!--end hero-->
             @yield('items')
        <!--*********************************************************************************************************-->
        <!--************ CONTENT ************************************************************************************-->
        <!--*********************************************************************************************************-->
           @yield('footer')
    </div>
    <!--end page-->
    <!--welcome slider starts -->
    <script type="text/javascript">
        jQuery(document).ready(function ($) {

            var jssor_1_options = {
                $AutoPlay: 1,
                $AutoPlaySteps: 5,
                $SlideDuration: 160,
                $SlideWidth: 200,
                $SlideSpacing: 3,
                $ArrowNavigatorOptions: {
                    $Class: $JssorArrowNavigator$,
                    $Steps: 5
                },
                $BulletNavigatorOptions: {
                    $Class: $JssorBulletNavigator$
                }
            };

            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

            /*#region responsive code begin*/

            var MAX_WIDTH = 980;

            function ScaleSlider() {
                var containerElement = jssor_1_slider.$Elmt.parentNode;
                var containerWidth = containerElement.clientWidth;

                if (containerWidth) {

                    var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

                    jssor_1_slider.$ScaleWidth(expectedWidth);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }

            ScaleSlider();

            $(window).bind("load", ScaleSlider);
            $(window).bind("resize", ScaleSlider);
            $(window).bind("orientationchange", ScaleSlider);
            /*#endregion responsive code end*/
        });
    </script>
    <!--welcome slider ends -->

	<script src="{{asset('assets/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('assets/js/jQuery.MultiFile.min.js')}}"></script>
	<script src="{{asset('assets/js/jquery.validate.min.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.17.0/dist/jquery.validate.min.js"></script>

    <script type="text/javascript" src="{{asset('assets/js/popper.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('assets/bootstrap/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('assets/js/selectize.min.js')}}"></script>
	<script src="{{asset('assets/js/masonry.pkgd.min.js')}}"></script>
	<script src="{{asset('assets/js/icheck.min.js')}}"></script>
	<script src="{{asset('assets/js/custom.js')}}"></script>
    <script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('assets/js/readmore.min.js')}}"></script>
</body>
</html>
