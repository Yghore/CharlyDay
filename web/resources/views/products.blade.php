

@foreach($products as $product)

    <div id="img-produit">
        <img src="{{ '/storage/img/'.$product->product_id.'.jpg' }}" alt="image du produit">
    </div>
    <h1 id="titre-produit">{{ $product->nom }}</h1>
    <div id="desc">{!! $product->description !!}</div>
    <div id="prix">{{ $product->prix }} €</div>
    <form action="{{ route('product.add', ["id" => $product->product_id]) }}" method="post">
        @csrf
        <div id="quantite">
            <p>Quantité : </p>
            <input type="number" id="quantity" name="quantity" min="1" max="5000" value="1">
        </div>
        <input type="hidden" name="product_id" value="{{$product->product_id}}">
        <input type="submit" id="btn-panier" value="Ajouter au panier">
    </form>
@endforeach











