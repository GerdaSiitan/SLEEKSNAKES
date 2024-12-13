<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function index(){
        return view ('pages.index');
    }

    public function contact(){
        return view ('pages.contact');
    }

    public function merch(){
        $products = Product::all();
        return view ('pages.merch', compact('products'));
    }

    public function merchdetail(Product $product){
        return view ('pages.merchdetail', compact('product'));

    }
}
