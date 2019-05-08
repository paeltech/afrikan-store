<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductsController extends Controller
{
    public function index() 
    {
        $products = Product::inRandomOrder()->take(8)->get();
        
        return view('home')->with('products', $products);
    }
}
