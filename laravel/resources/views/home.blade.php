@extends('layouts.app')

@section('content')
    
    @if ((Auth::user()->Modif_password) == '0')
        <div class="catalogue">
            @foreach($product as $produit)
                <div class="produit">
                    <div class="line">
                        <img src="{{$produit->Picture}}">
                    </div>
                        <p>{{$produit->Title}}</p>
                        <p>{{$produit->Price}} €</p>
                    <p><a href="\produit?product={{$produit->ID}}"> <input class="button_product" type="submit" value="Product"></a></p>
                    <p><a onclick="product({{$produit->ID}})"> <input class="button_buy" type="submit" value="Insta-buy"></a></p>
                </div>
            @endforeach
        </div>
    @else 
        <div class="limite">
        <div class="page">
            <div class="content1">
            <center>
                <form action="{{('/home')}}" method="post" class="loginform">
                {{ csrf_field() }}
                <span class="title">
                    Create A New Password
                </span>
                <div class="info">
                    <input class="input" type="password" name="password" placeholder="Password">
                </div>
                <div class="info">
                    <input class="input" type="password" name="confirmpassword" placeholder="Confirm Password">
                </div>
                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <br><strong>{{ $errors->first('password') }}</strong></br>
                                    </span>
                @endif
                @if(session('Do_not_match'))
                    <div class="alert alert-success " >
                    <strong><span class="glyphicon glyphicon-ok">
                        </span>
                        {{session('Do_not_match')}}
                    </strong>
                    </div>
                @endif
                <div class="formbtn">
                    <button class="button">
                    Change Your Password
                    </button>
                </div>
                </form>
            </center>
            </div>
        </div>
        </div>
    @endif
@endsection
