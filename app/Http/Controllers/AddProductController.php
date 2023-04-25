<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\AddProduct;

class AddProductController extends Controller
{
    public function products(){
        return view('Products');
    }

    public function addproducts(Request $request){
        $request->validate([    
        'product_name' => 'required',
        'product_description'=> 'required',
        'product_price'=> 'required',
        'product_img'=> 'required',
        ]);

        $product = new Products();
        $product->product_name = $request ->product_name;
        $product->product_description = $request ->product_description;
        $product->product_price = $request ->product_price;
        $product->product_img = $request ->product_img;

        $product->save();

        return redirect()->route('addproduct')->with('success', 'sent successfully');
    }
}
