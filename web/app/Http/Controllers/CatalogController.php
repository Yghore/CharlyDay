<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Product;
use Illuminate\Http\Request;

class CatalogController extends Controller
{
    public function index()
    {
        $productsList = Product::paginate(5);
        $productsList->appends(['page' => $productsList->currentPage()])->setPath(route('catalog'));
        return view("catalog", ['products' => $productsList]);
    }

    public function search(Request $request)
    {
        $query = $request->input('q');
        $products = Product::where('nom', 'LIKE', '%'.$query.'%')->paginate(5);
        $products->appends(['page' => $products->currentPage()])->setPath(route('catalog'));
        return view('catalog', ['products' => $products]);
    }
}
