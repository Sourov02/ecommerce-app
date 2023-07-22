<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;

class ProductConroller extends Controller
{
    public function addProduct(){
        return view('admin.product.add-product');
    }

    public function saveProduct(Request $request){
//        return $request;
        Product::saveProduct($request);
        return back()->with('message','Product Saved');
    }


    public function manageProduct(){
        return view('admin.product.manage-product',[
            'products'=>Product::all()
        ]);
    }

    public function editProduct($id){
        return view('admin.product.edit-product',[
            'product'=>Product::find($id)
        ]);
    }


    public function updateProduct(Request $request){
        Product::updateProduct($request);
        return back()->with('message','Product is updated');
    }

    public function statusProduct($id){
        Product::statusProduct($id);
        return back()->with('message','Product status updated');
    }


    public function deleteProduct(Request $request){
        Product::deleteProduct($request);
        return back()->with('message','Product is deleted');
    }
}
