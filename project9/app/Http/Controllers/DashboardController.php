<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index (){
        $user = User::all();
        $product = Product::all();
        $category = Category::all();
        return view('admin.index',compact('user','product','category'));
    }
}
