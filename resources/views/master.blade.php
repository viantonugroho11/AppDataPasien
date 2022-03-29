<!DOCTYPE html>
<html lang="en">

<head>
    <title>APP Apotik</title>
    <!-- HTML5 Shim and Respond.js IE10 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 10]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="keywords" content="flat ui, admin Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
    <meta name="author" content="Codedthemes" />
    <!-- Favicon icon -->
    <link rel="icon" href="{{ asset('admin/images/favicon.ico" type="image/x-icon')}}">
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/bootstrap/css/bootstrap.min.css')}}">
    <!-- waves.css -->
    <link rel="stylesheet" href="{{ asset('admin/pages/waves/css/waves.min.css')}}" type="text/css" media="all">
    <!-- themify-icons line icon -->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/icon/themify-icons/themify-icons.css')}}">
    <!-- feather icon -->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/icon/feather/css/feather.css')}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/icon/font-awesome/css/font-awesome.min.css')}}">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/jquery.mCustomScrollbar.css')}}">
</head>

<body>
    <!-- Pre-loader start -->
    @include('tools.preloader')
    <!-- Pre-loader end -->
    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">
            @include('tools.header')

            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                    @include('tools.nav')
                    <div class="pcoded-content">
                        <!-- Page-header start -->
                        <div class="page-header">

                            @yield('header')
                        </div>
                        <!-- Page-header end -->
                        <div class="pcoded-inner-content">
                            <div class="main-body">
                                <div class="page-wrapper">
                                    <div class="page-body">
                                        @yield('konten')

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="styleSelector"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Warning Section Starts -->
    <!-- Older IE warning message -->
    <!--[if lt IE 10]>
        <div class="ie-warning">
            <h1>Warning!!</h1>
            <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers to access this website.</p>
            <div class="iew-container">
                <ul class="iew-download">
                    <li>
                        <a href="http://www.google.com/chrome/">
                            <img src="assets/images/browser/chrome.png" alt="Chrome">
                            <div>Chrome</div>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.mozilla.org/en-US/firefox/new/">
                            <img src="assets/images/browser/firefox.png" alt="Firefox">
                            <div>Firefox</div>
                        </a>
                    </li>
                    <li>
                        <a href="http://www.opera.com">
                            <img src="assets/images/browser/opera.png" alt="Opera">
                            <div>Opera</div>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.apple.com/safari/">
                            <img src="assets/images/browser/safari.png" alt="Safari">
                            <div>Safari</div>
                        </a>
                    </li>
                    <li>
                        <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                            <img src="assets/images/browser/ie.png" alt="">
                            <div>IE (9 & above)</div>
                        </a>
                    </li>
                </ul>
            </div>
            <p>Sorry for the inconvenience!</p>
        </div>
    <![endif]-->
    <!-- Warning Section Ends -->
    <!-- Required Jquery -->
    <script type="text/javascript" src="{{ asset('admin/js/jquery/jquery.min.js')}} "></script>
    <script type="text/javascript" src="{{ asset('admin/js/jquery-ui/jquery-ui.min.js')}} "></script>
    <script type="text/javascript" src="{{ asset('admin/js/popper.js/popper.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('admin/js/bootstrap/js/bootstrap.min.js')}} "></script>
    <!-- waves js -->
    <script src="{{ asset('admin/pages/waves/js/waves.min.js')}}"></script>
    <!-- jquery slimscroll js -->
    <script type="text/javascript" src="{{ asset('admin/js/jquery-slimscroll/jquery.slimscroll.js')}}"></script>
    <script src="{{ asset('admin/js/pcoded.min.js')}}"></script>
    <script src="{{ asset('admin/js/vertical/vertical-layout.min.js')}}"></script>
    <script src="{{ asset('admin/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
    <!-- Custom js -->
    <script type="text/javascript" src="{{ asset('admin/js/script.min.js')}}"></script>
</body> 

</html>
