<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    private static $product;
    public function index(){
        return view('front-end.home.home',[
            'products'=>Product::where('status', 1)->get()
        ]);
    }

    public function singleProduct($id){
        self::$product = Product::find($id);
       return view('front-end.product.single-product',[
           'product'=>self::$product
       ]);
    }

}
