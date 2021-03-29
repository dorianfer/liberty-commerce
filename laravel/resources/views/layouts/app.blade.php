<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <!--<title>{{ config('app.name', 'Laravel') }}</title>-->
    <link rel="icon" type="image/png" href="{{asset('cookie monster.png')}}">
    <!-- Styles -->
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    
</head>
<body>
    <div id="app">
    <header class="head">
    <div class="logo_name">
      <img src="cookie monster.png" width="100px" height="100px">
      <h1>Cookie Monster</h1>
      @if(auth()->check())
      <script src="{{ asset('js/main.js') }}"></script>
      <script>panier()</script>
      <ul id="menu-demo2">
        <li><a>Menu</a>
          <ul>
          @if ((Auth::user()->Admin) == '1')
            <li><a href="admin">Admin</a></li>
          @endif
            <li><a href="/home">Catalog</a></li>
            <li><a id="lien_panier" href="/cart">Cart : 0</a></li>
          </ul>
        </li>
      </ul>

      
    </div>
    <div class="name">
     <h2>Hello {{Auth::user()->Firstname}} {{Auth::user()->Lastname}}</h2>
     <a class="button2" href="{{ route('logout') }}" 
        onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
        Logout
      </a>


      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        {{ csrf_field() }}
      </form>
    </div>
    
    @endif
  </header>
  
        @yield('content')
        
        

       
        <footer class="end">
             <div class="text">© Copyright 2020 All Rights Reserved</div>
            <div id="media">
                <a href="https://fr-fr.facebook.com/" target="_blank"><img src="https://www.facebook.com/images/fb_icon_325x325.png" width="50px" height="50px"></a>
                <a href="https://twitter.com/?lang=fr" target="_blank"><img src="https://upload.wikimedia.org/wikipedia/fr/thumb/c/c8/Twitter_Bird.svg/944px-Twitter_Bird.svg.png" width="50px" height="50px"></a>
            </div>
            <script src="{{ asset('js/main.js') }}"></script>
        <script>cookie()</script>
            <div id="cookie" class="cookie-containe">
                <h3>Ce site web utilise des cookies</h3>
              
                Nous utilisons des cookies pour personnaliser votre expérience sur notre site et le rendre plus agréable, mais aussi pour mieux adapter les contenus publicitaires à votre profil. En cliquant sur « Okay » vous acceptez l'utilisation de ces cookies.
                <!--<a href="#">privacy policy</a> and <a href="#">cookie policy</a>. -->
              
        
              <button id="bouton_cookie" onclick="test() " class="cookie-bt">
                Okay
              </button>
            </div>
        </footer>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
