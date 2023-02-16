<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="storage/{{ asset('css/app.css') }}">

    <title>court-circuit</title>
</head>
<body>
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
        <a href="{{ $products->previousPageUrl() }}">Page précédente</a>
    @endif
    @if ($products->hasMorePages())
        <a href="{{ $products->nextPageUrl() }}">Page suivante</a>
    @endif
    </div>
</div>

</body>
</html>





