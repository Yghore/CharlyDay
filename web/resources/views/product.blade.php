
@foreach($products as $product)
     <div id="img-produit">
            <img src="{{ '/storage/img/'.$product->id.'.jpg' }}" alt="image du produit">
        <h1 id="titre-produit">{{ $product->nom }}</h1>
        <div id="desc">{!! $product->description !!}</div>
        <div id="prix">{{ $product->prix }} €</div>
        <form action="{{ route('product.add', ["id" => $product->id]) }}" method="post">
            @csrf
            <input type="hidden" name="product_id" value="{{$product->product_id}}">
            <input type="hidden" name="quantity" value="1">
            <input type="submit" id="btn-panier" value="Ajouter au panier">
        </form>




@endforeach








