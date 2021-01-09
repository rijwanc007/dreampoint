<?php

namespace App\Http\Controllers\FrontEnd;

use App\Category;
use App\Http\Controllers\Controller;
use App\Navoffer;
use App\Product;
use Illuminate\Http\Request;

class AccessoriesController extends Controller
{
    public function accessories(){
        $products = Product::where('category', 'accessories')->orderBy('id', 'DESC')->get();
        $sub_category = $products->pluck('sub_category')->toArray();
        $categories = Category::where('name', 'accessories')->whereIn('sub_category', $sub_category)->get();
        $navoffer = Navoffer::where('category', 'accessories')->orderBy('id', 'DESC')->first();
        return view('frontend.accesorries.accesorries', compact('products', 'categories', 'navoffer'));
    }
    public function accessories_search(Request $request){
        $input = $request->item;
        $products = Product::where('category', 'accessories')->where('title', 'like', "%$input%")->orderBy('id', 'DESC')->get();
        $sub_category = $products->pluck('sub_category')->toArray();
        $categories = Category::where('name', 'accessories')->whereIn('sub_category', $sub_category)->get();
        $navoffer = Navoffer::where('category', 'accessories')->orderBy('id', 'DESC')->first();
        return view('frontend.accesorries.accesorries', compact('products', 'categories', 'navoffer'));
    }
    public function accessories_price_search(Request $request){
        $from = $request->from;
        $to = $request->to;
        $products = Product::where('category', 'accessories')->whereRaw('new_price BETWEEN ' . $from . ' AND ' . $to . '') ->orderBy('id', 'DESC')->get();
        $sub_category = $products->pluck('sub_category')->toArray();
        $categories = Category::where('name', 'accessories')->whereIn('sub_category', $sub_category)->get();
        $navoffer = Navoffer::where('category', 'accessories')->orderBy('id', 'DESC')->first();
        return view('frontend.accesorries.accesorries', compact('products', 'categories', 'navoffer'));
    }
}
