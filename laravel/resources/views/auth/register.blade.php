@extends('layouts.app')

@section('content')
<head>
    <title>Create Account</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="icon" type="image/png" href="cookie_monster.png">
  </head>
<body>
  @if(session('mauvais_email'))
        <div class="alert alert-success " id="flash">
            <a href="register" id="croix" class="close" data-dismiss="alert">×</a>
            <strong><span class="glyphicon glyphicon-ok">
                    </span>
                    {{session('mauvais_email')}}
           </strong>
        </div>
   @endif
    <div class="limite">
      <div class="page">
        <div class="bigcontent">
          <center>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}
                        <span class="title">
                            Create a New Account
                        </span>
                        <div class="form-group{{ $errors->has('Firstame') ? ' has-error' : '' }}">

                            <div class="info">
                                <input id="name" type="text" class="input" name="Firstname" placeholder="First Name" value="{{ old('Firstname') }}" required autofocus>

                                
                            </div>
                            
                        </div>
                        <div class="form-group{{ $errors->has('Lastname') ? ' has-error' : '' }}">

                            <div class="info">
                                <input id="name" type="text" class="input" name="Lastname" placeholder="Last Name" value="{{ old('Lastname') }}" required autofocus>

                                
                            </div>
                            
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">

                            <div class="info">
                                <input id="email" type="email" class="input" name="email" placeholder="Email" value="{{ old('email') }}" required>

                                
                            </div>
                            
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">

                            <div class="info">
                                <input id="password" type="password" class="input" name="password" placeholder="Password" required>
                                
                            </div>
                            
                        </div> 

                        <div class="info">

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="input" name="password_confirmation"  placeholder="Confirm Password" required>
                            </div>
                            
                        </div>
                        @if ($errors->has('Firstname'))
                                    <span class="help-block">
                                        <br><strong>{{ $errors->first('Firstname') }}</strong></br>
                                    </span>
                                @endif
                        @if ($errors->has('Lastname'))
                                    <span class="help-block">
                                        <br><strong>{{ $errors->first('Lastname') }}</strong></br>
                                    </span>
                                @endif
                        @if ($errors->has('email'))
                                    <span class="help-block">
                                        <br><strong>{{ $errors->first('email') }}</strong></br>
                                    </span>
                                @endif
                        @if ($errors->has('password'))
                                    <span class="help-block">
                                        <br><strong>{{ $errors->first('password') }}</strong></br>
                                    </span>
                                @endif 

                        <div class="form-group">
                            <div class="formbtn">
                                <button type="submit" class="button">
                                    Sign up
                                </button>
                            </div>
                        </div>
                        <div class="text-center">
                    <span class="txt1">
                      Already have an account?
                    </span>
                <a href="login" class="txt2 hov1">
                  Sign in 
                </a>
            </div>
              <div class="text-center">
                <span class="txt1">
                  Forgot
                </span>

                <a href="password/reset" class="txt2">
                  Password?
                </a>
              </div>
                    </form>
                </div>
        </div>
      </div>
    </div>
  </body>
</html>
@endsection
