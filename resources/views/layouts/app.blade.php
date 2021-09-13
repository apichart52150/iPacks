<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('public/assets/images/icon-nc-big.png') }}">
    
    <meta property="og:locale" content="en_US" />
	<meta property="og:type" content="website" />
	<meta property="og:title" content="iSAC Speaking" />
	<meta property="og:description" content="คอร์สเรียน IELTS รับรองผล 7.5 สอนสดทุกคลาส โดยเจ้าของภาษา ได้ผลจริง จากสถาบันภาษาคุณภาพ ระดับยอดเยี่ยม 4 ปีซ้อน  เน้นเทคนิคทำข้อสอบ หลักสูตรคุณภาพมาตรฐานสากล" />
	<meta property="og:url" content="https://newcambridgethailand.com/isac_speaking/" />
    <meta property="og:site_name" content="newcambridgethailand.com"/>
	<meta property="og:image:secure" content="{{ asset('public/assets/images/logo_nc.png') }}" />


    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>


    <!-- App css -->
    <link href="{{ asset('public/assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('public/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('public/assets/css/app.min.css') }}" rel="stylesheet" type="text/css" />

    <style>
        #overlay {
            position: fixed;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.6);
            z-index: 100;
            display: none;
        }
        .cv-spinner {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%;
        }
    </style>

</head>
<body class="authentication-bg">
    <div class="account-pages mt-5 mb-5">

        @yield('content')

    </div>

    <footer class="footer footer-alt">
        2021 © i.PACK by <a href="https://newcambridge.com" class="text-white">New Cambridge</a>
    </footer>

    <!-- Vendor js -->
    <script src="{{ asset('public/assets/js/vendor.min.js') }}"></script>
    <!-- App js -->
    <script src="{{ asset('public/assets/js/app.min.js') }}"></script>

    <script>
        var session_id = "{!! (session('ss_id'))?session('ss_id'):'' !!}";
        var user_id = "{!! (Auth::user())?Auth::user()->session_id:'' !!}";

        if(user_id != session_id) {
            alert('Your account login from another device!!', 'Warning Alert');
            window.location.href = "{{ route('logout')}}";
        } 
    </script>
</body>
</html>
