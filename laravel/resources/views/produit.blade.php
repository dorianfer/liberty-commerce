@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html>
  <head>
    <link href="style.css" rel="stylesheet" type="text/css">
    <meta charset="UTF-8">
    <title>Product</title>
    <link rel="icon" type="image/png" href="cookie_monster.png">
  </head>
  <body class="product">
    @foreach($product as $produit)
    <div class="line">
      <div class="column">
        <div class="line">
          <img src="cookie.png">
        </div>
      </div>
      <div class="column_g">
        <div class="picture_product">
          <img src="{{$produit->Picture}}">
        </div>
      </div>
      <div class="column_g">
        <div class="line_g" id="title">
          <h2>{{$produit->Title}}</h2>
        </div>
        <div class="line" id="price">
          <div class="price_text">
            Price
          </div>
          : {{$produit->Price}}€ TTC
        </div>
        <div class="line" id="cate">
          <div class="category">
            <p>{{$produit->Category}}</p> 
            </div>
            
        </div>
              @if ((Auth::user()->Admin) == '1')
                <form action="{{('/produit')}}" class="bouton_admin" method="post" class="stockform">
                  {{ csrf_field() }}
                  <div class="line" id="cate">
                    <br>
                      <input type="number" id="tentacles" name="stock" value="{{$produit->Stock}}" min="0" max="10000">
                      <input name="id" type="hidden" value="{{$produit->ID}}">
                    </br>
                  </div>  
                  <div class=line>
                      <button class="button">
                            Update
                      </button>
                    </div> 
                </from>
              @else
                <div class="line" id="cate">
                 <p>Il reste {{$produit->Stock}} {{$produit->Title}}.</p>
                </div>
              @endif
        <div class="line"  id="button_product">
        <p><a href="\cart" onclick="product({{$produit->ID}})"><input class="button_buy_product" type="submit" value="Buy"></a></p>
        </div>
      </div>
      <div class="column">
        <div class="line">
          <img src="cookie.png">
        </div>
      </div>
    </div>
    <div class="line">
      <div class="column">
        <div class="line">
          <img src="cookie.png">
        </div>
      </div>
      <div class="column_d">
        <div class="description">
          <p>{{$produit->Description}}</p>
        </div>
      </div>
      <div class="column">
        <div class="line">
          <img src="cookie.png">
        </div>
      </div>
    </div>
    @endforeach
  </body>
</html>
@endsection