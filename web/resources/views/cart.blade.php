@extends('layouts.skeleton')

@section('cart')

<div class="products">

@foreach($products as $product)
    <div class="product">
        <h1>{{ $product->nom }}</h1>
        <p>{{ $product->description }}</p>
        <p>Poids : {{ $product->poids }}</p>
        <p>Detail : {{ $product->detail }}</p>
        <p>Distance : {{ $product->distance }}</p>
        <p><span>Latitude : {{ $product->lattitude }}</span> <span>Longitude : {{ $product->longitude }}</span></p>
        <p>Prix : {{ $product->prix }}</p>
    </div>


@endforeach

    <h3>Prix total du panier : {{ $total }}</h3>

    <a href="index.php">Confirmer le panier</a>

</div>

@endsection
