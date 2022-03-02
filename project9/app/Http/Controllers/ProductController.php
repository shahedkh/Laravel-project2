<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function index (){
        $product = Product::all();
        $category = Category::all();
        return view('admin.product.index', compact('product','category'));
    }
    
    public function add (){
        $category = Category::all();
        return view('admin.product.add' ,compact('category'));
    }

    public function insert (Request $request ){
        $product = new Product();
        

        $product->cat_id = $request->input('cat_id');
        $product->name = $request->input('name');
        $product->brief = $request->input('brief');
        $product->price = $request->input('price');
        $product->description = $request->input('description');
        $product->stock = $request->input('stock');
        $product->image = $request->input('image');
        $product->save();
        return redirect('/products')->with('status' , "product Added Successfully!!!");
    }

    public function edit($id){
        $product = Product::find($id);
        $category = Category::all();
        return view('admin.product.edit', compact('product','category'));
    }

    public function update(Request $request ,$id){
        $product = Product::findOrFail($id);
        $product->cat_id = $request->input('cat_id');
        $product->name = $request->input('name');
        $product->brief = $request->input('brief');
        $product->price = $request->input('price');
        $product->description = $request->input('description');
        $product->stock = $request->input('stock');
        $product->image = $request->input('image');
        $product->update();
        return redirect('/products')->with('success', 'product Updated!');
    }

    public function destroy($id){
        $product = Product::find($id);
        $product->delete();
        return redirect('/products')->with('success', 'Deleted Successfully!');
    }
}
