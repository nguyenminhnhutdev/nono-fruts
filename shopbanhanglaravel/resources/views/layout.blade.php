<!DOCTYPE html>
<html lang="en">

<head>
    <title>Nono-Fruits</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('public/assets/css/open-iconic-bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/assets/css/animate.css')}}">

    <link rel="stylesheet" href="{{asset('public/assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/assets/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/assets/css/magnific-popup.css')}}">

    <link rel="stylesheet" href="{{asset('public/assets/css/aos.css')}}">

    <link rel="stylesheet" href="{{asset('public/assets/css/ionicons.min.css')}}">

    <link rel="stylesheet" href="{{asset('public/assets/css/bootstrap-datepicker.css')}}">
    <link rel="stylesheet" href="{{asset('public/assets/css/jquery.timepicker.css')}}">


    <link rel="stylesheet" href="{{asset('public/assets/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('public/assets/css/icomoon.css')}}">
    <link rel="stylesheet" href="{{asset('public/assets/css/style.css')}}">
</head>

<body class="goto-here">

    @include('partials.header')



    @yield('content')





    @include ('partials.footer')



    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
                stroke="#F96D00" />
        </svg></div>


    <script src="{{asset('public/assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('public/assets/js/jquery-migrate-3.0.1.min.js')}}"></script>
    <script src="{{asset('public/assets/js/popper.min.js')}}"></script>
    <script src="{{asset('public/assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('public/assets/js/jquery.easing.1.3.js')}}"></script>
    <script src="{{asset('public/assets/js/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('public/assets/js/jquery.stellar.min.js')}}"></script>
    <script src="{{asset('public/assets/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('public/assets/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('public/assets/js/aos.js')}}"></script>
    <script src="{{asset('public/assets/js/jquery.animateNumber.min.js')}}"></script>
    <script src="{{asset('public/assets/js/bootstrap-datepicker.js')}}"></script>
    <script src="{{asset('public/assets/js/scrollax.min.js')}}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false">
    </script>
    <script src="{{asset('public/assets/js/google-map.js')}}"></script>
    <script src="{{asset('public/assets/js/main.js')}}"></script>
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous"
        src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v13.0&appId=590050075396022&autoLogAppEvents=1"
        nonce="W0FULqvb"></script>
    <div class="fb-comments" data-href="https://www.facebook.com/profile.php?id=100006421546739" data-width=""
        data-numposts="5"></div>





    <div id="fb-root"></div>











    <div class="call-mobile">
        <a id="callnowbutton text-center" href="tel:0999999999">Gọi 0389672882</a>
    </div>

    <style>
    .success1.is-underline:hover,
    .success1.is-outline:hover,
    .success1 {
        background-color: #1E73BE;
        padding: 0 5px;
        color: white !important;
    }

    .success2.is-underline:hover,
    .success2.is-outline:hover,
    .success2 {
        background-color: #ff4800;
        padding: 0 5px;
        color: white !important;
    }

    .call-mobile {
        background: #00a63f;
        position: fixed;
        bottom: 10px;
        height: 40px;
        line-height: 40px;
        padding: 7px 0px 0 0px;
        border-radius: 40px;
        color: #fff;
        left: 20px;
        z-index: 99999;
    }

    .call-mobile1 {
        position: fixed;
        bottom: 55px;
        height: 40px;
        line-height: 40px;
        padding: 0 0px 0 0px;
        border-radius: 40px;
        color: #fff;
        left: 20px;
        z-index: 99999;
    }

    .call-mobile2 {
        position: fixed;
        bottom: 100px;
        height: 40px;
        line-height: 40px;
        padding: 0 0px 0 0px;
        border-radius: 40px;
        color: #fff;
        left: 20px;
        z-index: 99999;
    }

    .call-mobile i {
        font-size: 20px;
        line-height: 40px;
        background: #B52026;
        border-radius: 100%;
        width: 40px;
        height: 40px;
        text-align: center;
        float: right;
    }

    .call-mobile a {
        color: #fff;
        font-size: 15px;
        font-weight: bold;
        text-decoration: none;
        margin-right: 10px;
        padding-left: 10px;
    }

    .button span {
        text-transform: initial;
        font-weight: 400;
        font-family: poppins;
    }

    a#callnowbutton {
        font-family: poppins;
        font-weight: 400;
    }
    </style>
    <script src="https://sp.zalo.me/plugins/sdk.js"></script>
    <div class="zalo-chat-widget" data-oaid="1086421708065720085" data-welcome-message="R?t vui khi du?c h? tr? b?n!"
        data-autopopup="1000" data-width="350" data-height="420">
        <h1></h1>
    </div>
</body>

</html>