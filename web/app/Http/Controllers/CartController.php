<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CartController extends Controller
{

    public function index(Request $request)
    {
        $arrayId = $request->session()->get("carts");
        $productsinCart = Product::get()->whereIn('id', $arrayId);
        $total = Product::get()->whereIn('id', $arrayId)->sum('prix');
        return view('cart', ['products' => $productsinCart, 'total' => $total]);

    }
    public function validateCart(Request $request)
    {
        $carts = $request->session()->get('carts');
        $products = Product::whereIn('id', $carts);
        $total = 0;
        foreach ($products as $product) {
            $total += $product->price;
        }
        return view('cart.confirm', ['products', 'total']);

    }

    public function confirmOrder(Request $request)
    {

        // Get the products in the carts
        $carts = $request->session()->get('carts');

        $order = Order::make();


        $order->fill([
            'suiviCommande' => Str::random(12),
        ]);

        $order->save();



        // Clear the carts$carts
        $request->session()->put('carts', collect([]));


        // Redirect to confirmation page
        return view('cart.validate');
    }
}

