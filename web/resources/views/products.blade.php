@extends('layout.skeleton')

@section('products')

    @foreach($products as $product)
        <div id="produit">
            <div id="img-produit">
                <img src="{{ '/storage/img/'.$product->id.'.jpg' }}" alt="image du produit">
            </div>
            <div id="contenu-produit">
                <h1 id="titre-produit">{{ $product->nom }}</h1>
                <div id="desc">{!! $product->description !!}</div>
                <div id="prix">{{ $product->prix }} €</div>
                <form action="{{ route('product.add', ["id" => $product->id]) }}" method="post">
                    @csrf
                    <div id="quantiteEtAdd">
                        <div id="quantite">
                            <p>Quantité : </p>
                            <input type="number" id="quantity" name="quantity" min="1" max="5000" value="1">
                            <input type="hidden" name="product_id" value="{{$product->id}}">
                        </div>
                        <div id="add">
                            <input type="submit" id="btn-panier" value="Ajouter au panier">
                        </div>
                    </div>


                </form>
            </div>
        </div>
    @endforeach

@endsection
