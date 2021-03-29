@extends('layouts.app')

@section('content')
<head>
    <title>Admin</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="cookie_monster.png">
  </head>
  <body>
    <div class="limite">
      <div class="page">
        <div class="bigcontent">
          <center>
            <form action="{{('/admin')}}" method="post" class="adminform">
              {{ csrf_field() }}
              <span class="title">
                Add a product
              </span>
              <div class="info">
                <input class="input" type="text" name="itemname" placeholder="Name of product">
              </div>
              <div class="info">
                <input class="input" type="textarea" name="description" placeholder="Description of product">
              </div>
              <div class="info">
                <input class="input" type="text" name="category" placeholder="Category of product">
              </div>
              <div class="info">
                <input class="input" type="text" name="price" placeholder="Enter price">
              </div>
              <div class="info">
                <input class="input" type="text" name="stock" placeholder="Enter stock">
              </div>
              <div class="info">
                <input class="input" type="text" name="image" placeholder="Enter image url">
              </div>
              <div class="formbtn">
                <button class="button">
                  Add product
                </button>
              </div>
            </form>
          </center>
        </div>
      </div>
    </div>
  </body>
@endsection