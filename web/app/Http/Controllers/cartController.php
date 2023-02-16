<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function validateCart(Request $request)
    {
        $carts = $request->session()->get('carts');
        $products = Product::whereIn('id', $carts);
        $total = 0;
        foreach ($products as $product) {
            $total += $product->price;
        }
        return view('validate_cart', ['products', 'total']);
    }

    public function confirmOrder(Request $request)
    {

        // Get the products in the carts
        $carts = session('carts', []);


        // Clear the carts$carts
        $request->session()->put('carts', collect([]));

        // Redirect to confirmation page
        return view('order_confirmation');
    }
}
