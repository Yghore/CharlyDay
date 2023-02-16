@extends('layout.skeleton')

@section('catalog')
<div class="cards">
    @foreach($products as $product)
        <div class="card">
            <div class="image">
                <img src="{{ '/storage/img/'.$product->product_id.'.jpg' }}" alt="{{ $product->nom }}">
            </div>

            <div class="infos">
                <h3 class="product_title">{{ $product->nom }}</h3>
                <span class="dispo">Disponible à {{ $product->lieu }}</span>
                @if($product->poids == 0)
                    <p id="price">{{ $product->prix}}€/kg</p>
                @else
                    <p id="price">{{ $product->prix}}€</p>
                @endif
            </div>
        </div>
    @endforeach

    <div class="pagination">
    @if ($products->currentPage() > 1)
        <a href="{{ $products->previousPageUrl() }}"><</a>
    @endif
        <p> {{ $products->currentPage() }} </p>
    @if ($products->hasMorePages())
        <a href="{{ $products->nextPageUrl() }}">></a>
    @endif
    </div>
</div>


@endsection





