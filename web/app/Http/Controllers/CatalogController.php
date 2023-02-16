<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Product;
use Illuminate\Http\Request;

class CatalogController extends Controller
{
    public function index($page = 1){
        $productsList = Product::paginate($perPage = 5, $columns = ['*'], $pageName = 'page', $page);
        return view("catalog", ['products' => $productsList]);

    }
}
