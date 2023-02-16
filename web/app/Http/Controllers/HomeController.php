<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $test = Categorie::all();
        return view('test', ['test' => $test]);
    }
}
