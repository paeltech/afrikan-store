<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Subcategory;

class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (request()->subcategory) {
            $products = Product::with('subcategories')->whereHas('subcategories', function ($query) {
                $query->where('slug', request()->subcategory);
            })->get();
            $subcategories = Subcategory::all();
        } else {
            $products = Product::inRandomOrder()->take(8)->get();
            $subcategories = Subcategory::all();
        }

        return view('products.shop')->with([
            'products' => $products,
            'subcategories'=> $subcategories
        ]);
    }



    /**
     * Display the specified resource.
     *
     * @param  int  $slug
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $product = Product::where('slug', $slug)->firstOrFail();
        $mightAlsoLike = Product::where('slug', '!=', $slug)->mightAlsoLike()->get();

        return view('products.product')->with([
            'product' => $product,
            'mightAlsoLike' => $mightAlsoLike,
        ]);
    }
}
