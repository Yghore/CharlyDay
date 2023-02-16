<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Product;
use Illuminate\Http\Request;

class CatalogController extends Controller
{
    public function index($page = 1){
        $productsList = Product::paginate(5);
        return view("catalog", ['products' => $productsList]);

    }
}
