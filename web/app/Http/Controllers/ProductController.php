<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index($id)
    {
        $product = Product::where('id', $id)->get();

        return view('product', ['products' => $product]);
    }


    public function addProductToCart(Request $request, $id, $nombreDarticles = 1)
    {
        $product = Product::find($id);
        if (!$product) {
            url()->previous();
        } else {
            if ($request->session()->has('carts')) {
                //add the id to the table carts exist in session
                $carts = $request->session()->get('carts');
            } else {
                //create the table carts in session
                $carts = collect([]);
            }

            $carts->push($id);
            $request->session()->put('carts', $carts);
            return redirect()->route('cart');

        }


    }

}
