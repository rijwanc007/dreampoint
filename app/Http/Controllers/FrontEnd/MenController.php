<?php

namespace App\Http\Controllers\FrontEnd;

use App\Category;
use App\Http\Controllers\Controller;
use App\Navoffer;
use App\Product;
use Illuminate\Http\Request;

class MenController extends Controller
{
    public function men_cloth(){
        $products = Product::where('category', 'men')->orderBy('id', 'DESC')->get();
        $sub_category = $products->pluck('sub_category')->toArray();
        $categories = Category::where('name', 'men')->whereIn('sub_category', $sub_category)->get();
        $navoffer = Navoffer::where('category', 'men')->orderBy('id', 'DESC')->first();
        return view('frontend.men.cloths', compact('products', 'categories', 'navoffer'));
    }
    public function men_search(Request $request){
        $input = $request->item;
        $products = Product::where('category', 'men')->where('sub_category', 'like', "%$input%")->orderBy('id', 'DESC')->get();
        $sub_category = $products->pluck('sub_category')->toArray();
        $categories = Category::where('name', 'men')->whereIn('sub_category', $sub_category)->get();
        $navoffer = Navoffer::where('category', 'men')->orderBy('id', 'DESC')->first();
        return view('frontend.men.cloths', compact('products', 'categories', 'navoffer'));
    }
    public function men_price_search(Request $request){
        $from = $request->from;
        $to = $request->to;
        $products = Product::where('category', 'men')->whereRaw('new_price BETWEEN ' . $from . ' AND ' . $to . '')->orderBy('id', 'DESC')->get();
        $sub_category = $products->pluck('sub_category')->toArray();
        $categories = Category::where('name', 'men')->whereIn('sub_category', $sub_category)->get();
        $navoffer = Navoffer::where('category', 'men')->orderBy('id', 'DESC')->first();
        return view('frontend.men.cloths', compact('products', 'categories', 'navoffer'));
    }
}
