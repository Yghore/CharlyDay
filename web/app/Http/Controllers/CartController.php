<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index(Request $request)
    {
        $arrayId = collect([1,8]);
        $productsinCart = Product::get()->whereIn('product_id', $arrayId);
        $total = Product::get()->whereIn('product_id', $arrayId)->sum('prix');
        return view('cart', ['products' => $productsinCart, 'total' => $total]);

    }
}
