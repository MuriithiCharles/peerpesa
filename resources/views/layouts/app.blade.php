<!DOCTYPE html>


<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>


    </script>


</head>
<style>

    .H {
        font-family: "Times New Roman", Georgia, Serif;
        font-size: 40px;
        position: absolute;
        color: #a8a22a;
        left: 200px;
        top: 0px;



    }

</style>

<div>
    <div style="color: #636b6f; text-transform: uppercase; background-color: #000039; width: 100%;top:0px ">

        {{ Html::image('images/PEERPESA11.png', 'alt', array( 'width' => 170, 'height' => 80 ,'paddling'=>100)) }}

        <h2 class="H"> {{ config('app.name', 'PeerPesa Official Website') }}</h2>
    </div>
<body style="background-image: url('images/hand_card_money_online_purchase_laptop_80035_1920x1080.jpg');">
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top" style=" width: 100%;top:0px; margin-top: 0px;">
            <div class="container" style="background-color: #00005d; width: 100%;">
                <div class="navbar-header">


                    <!-- Branding Image -->

                    <a class="navbar-brand" href="{{ url('/Home') }}">Home</a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->

                        @if (Auth::guest())
                            <li><a href="{{ url('/login') }}">Login</a></li>
                            <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Register</a>
                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <a href="{{ url('/register') }}">
                                        Investers registration
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ url('/lenders') }}">
                                       Lenders registration
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ url('staff') }}">
                                        Staff
                                    </a>
                                </li>
                                </ul>
                            </li>
                            @elseif (Auth::User()->roles==3)
                            <li><a href="{{ URL::to('/admin') }}">Admin</a></li>

                            <li><a href="{{ URL::to('/accountant') }}">Accountant</a></li>
                            <li><a href="{{ URL::to('/HR') }}">Human Resource Manager</a></li>                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ url('/logout') }}"
                                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>


                            @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ url('/logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>


        @yield('content')






    </div>

    <!-- Scripts -->
    <script src="/js/app.js"></script>
</body>
</html>
