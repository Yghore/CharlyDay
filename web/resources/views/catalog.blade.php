<div id="catalog">
    @foreach($products as $product)
    <div class="products">
        <img src="{{ '/storage/img/'.$product->product_id.'.jpg' }}" alt="{{ $product->nom }}">
        <h2>{{ $product->nom }}</h2>
        <p>Disponible à {{ $product->lieu }}</p>
        @if($product->poids == 0)
            <p>{{ $product->prix}}€/kg</p>
        @else
            <p>{{ $product->prix}}€</p>
        @endif
    </div>
    @endforeach
</div>

