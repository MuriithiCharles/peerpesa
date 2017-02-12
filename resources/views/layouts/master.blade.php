<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Villa Property Agency</title>
     

        <link href="{{ asset('css/Charles.css') }}" rel="stylesheet" type="text/css" >

        
    </head>

    <style>
    body{
        background: ;
    }

    .H {
    position: absolute;
    left: 100px;
    top: 0px;
}
        


    </style>


    <body>

     <div style="color: #636b6f; text-transform: uppercase;">
     

     {{ Html::image('uploads/house-mail-12198654.jpg', 'alt', array( 'width' => 70, 'height' => 70 ,'paddling'=>100)) }}
    
    <h2 class="H">Villa Property Agency</h2>
    </div>

<div class="container">
<ul class="nav nav-pills">
<li>
        {{ link_to_route('Home', 'Home')}}
    </li>
    @if(\Auth::check())
    <li>
        {{link_to_route('logout', 'Logout')}}
    </li>
    @else
    <li>
        {{ link_to_route('login', 'Login')}}
    </li>
    @endif

    <li>
        {{ link_to_route('users.create', 'New User')}}
    </li>

</ul>

@yield('content')

   

</div>

    
</div>

</body>
</html>
