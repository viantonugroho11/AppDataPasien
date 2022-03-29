<html>
    <head>
        <title></title>
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
    {{-- <meta name="keywords" content="flat ui, admin Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app"> --}}
    {{-- <meta name="author" content="Codedthemes" /> --}}
    <!-- Favicon icon -->
    {{-- <link rel="icon" href="{{ asset('admin/images/favicon.ico" type="image/x-icon')}}"> --}}
    <!-- Google font-->
    {{-- <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet"> --}}
    <!-- Required Fremwork -->
    {{-- <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/bootstrap/css/bootstrap.min.css')}}"> --}}
    <!-- waves.css -->
    {{-- <link rel="stylesheet" href="{{ asset('admin/pages/waves/css/waves.min.css')}}" type="text/css" media="all"> --}}
    <!-- themify-icons line icon -->
    {{-- <link rel="stylesheet" type="text/css" href="{{ asset('admin/icon/themify-icons/themify-icons.css')}}"> --}}
    <!-- feather icon -->
    {{-- <link rel="stylesheet" type="text/css" href="{{ asset('admin/icon/feather/css/feather.css')}}"> --}}
    <!-- Font Awesome -->
    {{-- <link rel="stylesheet" type="text/css" href="{{ asset('admin/icon/font-awesome/css/font-awesome.min.css')}}"> --}}
    <!-- Style.css -->
    {{-- <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/style.css')}}"> --}}
    {{-- <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/jquery.mCustomScrollbar.css')}}"> --}}
<style>
    @page { margin: 0px; }
body { margin: 0px; }
</style>
</head>
    <body style="background-color: #e9e9e9">
        <h2 align="center"><b>Alif Medika</b></h2>
        <center style="margin-top: -20px">Kartu Klinik</center>
        <hr>
        <div style="margin-left: 20px">
        ID: {{$pasien->id}}<br>
                                        {{$pasien->nama}}<br>
                                        {{$pasien->tanggal_lahir}}<br>
                                        {{$pasien->alamat}}
        </div>
    {{-- <script type="text/javascript" src="{{ asset('admin/js/jquery/jquery.min.js')}} "></script>
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
    <script type="text/javascript" src="{{ asset('admin/js/script.min.js')}}"></script> --}}
    </body>
</html>
