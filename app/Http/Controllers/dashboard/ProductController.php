<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $products = Product::all();
        return view('dashboard.products.index' , compact('products'));
    }

    public function create(){
        return view('dashboard.products.create');
    }

    public function store(Request $request){
        Product::create([
            'name'          => $request->name,
            'description'   => $request->description,
            'price'         => $request->price,
        ]);
        return redirect()->route('products');
    }
}
