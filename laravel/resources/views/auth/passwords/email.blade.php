@extends('layouts.app')

@section('content')
  <head>
    <title>Reset Password</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/foundation/public/css/main.css">
    <link rel="icon" type="image/png" href="cookie_monster.png">
  </head>
  <body>
    <div class="limite">
      <div class="page"> 
        <div class="content1">
          <center>
            <form action="{{('/password/reset')}}" method="POST" class="loginform">
              {{ csrf_field() }}
              <span class="title">
                Reset Password
              </span>
              <div class="info">
                <input class="input" type="text" name="email" placeholder="Email">
              </div>
              @if ($errors->has('email'))
                                    <span class="help-block">
                                        <br><strong>{{ $errors->first('email') }}</strong></br>
                                    </span>
              @endif
              <div class="formbtn">
                <button class="button">
                  Reset my password
                </button>
              </div>
              <div class="text-center">
                <span class="txt1">
                  Already have an account?
                </span>
                <a href="../login" class="txt2 hov1">
                  Sign in
                </a>
              </div>
            </form>
          </center>
        </div>
      </div>
    </div>
  </body>
</html>
@endsection