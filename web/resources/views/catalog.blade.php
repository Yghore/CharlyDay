<div id="catalog">
    @foreach($products as $product)
    <div class="products">
        <a href=""><img src="{{ '/storage/img/'.$product->product_id.'.jpg' }}" alt="{{ $product->nom }}"></a>
        <h2>{{ $product->nom }}</h2>
        <p>Disponible à {{ $product->lieu }}</p>
        @if($product->poids == 0)
            <p>{{ $product->prix}}€/kg</p>
        @else
            <p>{{ $product->prix}}€</p>
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

