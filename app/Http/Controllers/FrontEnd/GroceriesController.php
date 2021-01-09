<?php

namespace App\Http\Controllers\FrontEnd;

use App\Category;
use App\Http\Controllers\Controller;
use App\Product;
use Illuminate\Http\Request;

class GroceriesController extends Controller
{
    public function groceries(){
        $products = Product::where('category', 'groceries')->orderBy('id', 'DESC')->get();
        $sub_category = $products->pluck('sub_category')->toArray();
        $categories = Category::where('name', 'groceries')->whereIn('sub_category', $sub_category)->get();
        return view('frontend.groceries.groceries', compact('products', 'categories'));
    }
    public function groceries_search(Request $request){
        $input = $request->item;
        $products = Product::where('category', 'groceries')->where('title', 'like', "%$input%")->orderBy('id', 'DESC')->get();
        $sub_category = $products->pluck('sub_category')->toArray();
        $categories = Category::where('name', 'groceries')->whereIn('sub_category', $sub_category)->get();
        return view('frontend.groceries.groceries', compact('products', 'categories'));
    }
    public function groceries_price_search(Request $request){
        $from = $request->from;
        $to = $request->to;
        $products = Product::where('category', 'groceries')->whereRaw('new_price BETWEEN ' . $from . ' AND ' . $to . '')->orderBy('id', 'DESC')->get();
        $sub_category = $products->pluck('sub_category')->toArray();
        $categories = Category::where('name', 'groceries')->whereIn('sub_category', $sub_category)->get();
        return view('frontend.groceries.groceries', compact('products', 'categories'));
    }
}
