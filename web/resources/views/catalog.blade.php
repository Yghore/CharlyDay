@extends('layout.skeleton')

@section('app')


    <div class="cards">

        @foreach($products as $product)
            <div class="card">
                <div class="image">
                    <a href="{{ route('product', ['id' => $product->id]) }}">
                        <img src="{{ '/storage/img/'.$product->id.'.jpg' }}" alt="{{ $product->nom }}">
                    </a>
                </div>

                <h3 class="product_title">{{ $product->nom }}</h3>

                <p class="dispo">Disponible à {{ $product->lieu }}</p>
                @if($product->poids == 0)
                    <p id="price">{{ $product->prix}}€/kg</p>
                @else
                    <p id="price">{{ $product->prix}}€</p>
                @endif
            </div>
        @endforeach
        @if ($products->currentPage() > 1)
            <a href="{{ $products->previousPageUrl() }}">Page précédente</a>
        @endif
        @if ($products->hasMorePages())
            <a href="{{ $products->nextPageUrl() }}">Page suivante</a>
        @endif
    </div>


@endsection
