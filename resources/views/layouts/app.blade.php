<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('/vendor/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
    <style type="text/css">
    /*card-header*/
    .card-header:first-child {
        color:#fefefe;
        background-color: #3F51B5;
        border-color: #3F51B5;
    }
    /*navbar-laravel*/
    .navbar-laravel{
        background-color: #3F51B5;
        border-color: #3F51B5;
    }
    /*tex navbar*/
    .navbar-light .navbar-brand, .navbar-light .navbar-brand:focus, .navbar-light .navbar-brand:hover{
        color:#fefefe;
    }
    /*login-register*/
    .navbar-light .navbar-nav .nav-link {
        color: rgba(0,0,0,.5);
        color: #fefefe;
    }
a:hover {
    color: #A0DFFF !important;
}
#icon{
    padding-right: 3px;
}
</style>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <div><img src="https://regis.rmutl.ac.th/student/assets/image/logo/rmutl-logo.png" height="40px" style="padding-right: 5px;"></div>
                <a class="navbar-brand" href="{{ url('/') }}">{{ __('ระบบบริหารจัดการข้อมูลสหกิจศึกษาออนไลน์ มหาวิทยาลัยเทคโนโลยีราชมงคลล้านนา ตาก') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}"><i class="fa fa-download" aria-hidden="true" id="icon"></i>{{ __('ดาวน์โหลด') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="{{ route('login') }}"><i class="fa fa-sign-in" aria-hidden="true" id="icon"></i>{{ __('เข้าสู่ระบบ') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}"><i class="fa fa-user-plus" aria-hidden="true" id="icon"></i>{{ __('ลงทะเบียนใช้งาน') }}</a>
                        </li>
                        @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                {{ __('ออกจากระบบ') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>

    <main class="py-4">
        @yield('content')
    </main>
</div>
</body>
</html>
