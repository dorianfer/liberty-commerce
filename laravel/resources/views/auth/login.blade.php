@extends('layouts.app')

@section('content') 
<head>
    <title>Login</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="cookie_monster.png">
</head>
  @if(session('success'))
    <div class="alert alert-success " id="flash">
      <a href="login" id="croix" class="close" data-dismiss="alert">×</a>
      <strong><span class="glyphicon glyphicon-ok">
        </span>
        {{session('success')}}
      </strong>
    </div>
  @endif

    <div class="limite">
      <div class="page">
        <div class="content1">
          <center>
                    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}
                        
                        <span class="title">
                            Login
                        </span> 
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">

                            <div class="info">
                                <input id="email" type="email" class="input" name="email" value="{{ old('email') }}" placeholder="Email" required autofocus>

                                
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">

                            <div class="info">
                                <input id="password" type="password" class="input" name="password" placeholder="Password" required>

                                
                            </div>
                            
                        </div>
                        @if ($errors->has('email'))
                          <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                          </span>
                        @endif
                        @if ($errors->has('password'))
                          <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                          </span>
                        @endif
                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="button">
                                    Sign in
                                </button>

                                <div class="text-center">
                <span class="txt1">
                  Forgot
                </span>
                <a href="password/reset" class="txt2">
                  Password?
                </a>
              </div>

              <div class="text-center">
                <span class="txt1">
                  Create an account?
                </span>

                <a href="register" class="txt2 hov1">
                  Sign up
                </a>
              </div>
                            </div>
                        </div>
                    </form>
                    </center>
        </div>
      </div>
    </div>
@endsection
