@extends('layouts.app')

@section('content')
<html lang="en">
    <head>
        <title>Cart</title>
    </head>
    <body>
        <script src="{{ asset('js/main.js') }}"></script>
        <div class="tableau">
            <table>
                <thead>
                    <tr>
                        <th colspan="1">Item name</th>
                        <th colspan="1">Unit price</th>
                        <th colsapan="1">Quantity</th>
                    </tr>
                </thead>
                <tbody id="tableau">
                    @foreach($cart as $produit)
                        <script>cart({{$produit->ID}},"{{$produit->Title}}",{{$produit->Price}})</script>
                    @endforeach
                </tbody>
            </table>
            <button type="submit" class="button">
                Validation du panier
            </button>
        </div>
    </body>
</html>
@endsection
