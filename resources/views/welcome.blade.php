<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link href="{{{url('/')}}}/css/style-rtl.css" rel="stylesheet" type="text/css">
    <link href="{{{url('/')}}}/assets/css/bootstrap.css" rel="stylesheet" type="text/css">


    <!-- Styles -->
    <style>
        html, body {
            color: #636b6f;
            font-family: 'Raleway', sans-serif;
            font-weight: 100;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
    </style>
</head>
<body class="handshake">
<div class="contaier-fluid">

    <div class="col-sm-12">
        <h5 class="text-center">
            سامانه مدیریت مشتری باران
        </h5>
    </div>
    <div class="row back-bar">
        <div class="col-sm-12 text-center">
            <h4 class="text-center">
                @if (Route::has('login'))

                    @auth
                        <div class="col-xs-12 links">
                            <a class="nav-link text-success btn btn-outline-success" href="{{ route('logout') }}"
                               onclick="event.preventDefault();                                                 document.getElementById('logout-form').submit();">
                                خروج از سیستم
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: one;">
                                {{ csrf_field() }}
                            </form>

                            <a href="{{ url('/admin') }}">ورود به داشبورد مدیریت</a>
                        </div>
                    @else
                        <div class="col-xs-12 links">
                            <a class="text-center" href="{{ route('login') }}">ورود به سامانه</a>
                            <a class="text-center" href="{{ route('register') }}">
                                اضافه کردن کارشناس</a>
                        </div>
            @endauth
        </div>
        @endif
    </div>
    <div class="row">
        <div class="col-sm-12 text-center">
            <h4 class="text-center">
                @if (Route::has('login'))

                    @auth

                    @else
                        <div class="col-xs-12 links">
                            <a class="text-center" href="{{ route('sms-admin') }}">مانیتورینگ پیامک ها</a>
                            <a class="text-center" href="{{ route('sms-admin') }}">
                                ورود به پنل ادمین</a>
                        </div>
            @endauth
        </div>
        @endif
    </div>
        </h4>

    </div>

</div>
</body>
</html>
