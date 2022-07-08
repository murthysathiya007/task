<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
     /**
     * Display a listing of the products.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('product.index',compact('products'));
    }

     /**
     * Display a one of the product with details.
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id){
    	$product = Product::find($id);
    	return view('product.show', compact('product'));
    }
}
