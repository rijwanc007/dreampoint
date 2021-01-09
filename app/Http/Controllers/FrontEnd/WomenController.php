<?php

namespace App\Http\Controllers\FrontEnd;

use App\Category;
use App\Http\Controllers\Controller;
use App\Navoffer;
use App\Product;
use Illuminate\Http\Request;

class WomenController extends Controller
{
    public function women_cloth(){
        $products = Product::where('category', 'women')->orderBy('id', 'DESC')->get();
        $sub_category = $products->pluck('sub_category')->toArray();
        $categories = Category::where('name', 'women')->whereIn('sub_category', $sub_category)->get();
        $navoffer = Navoffer::where('category', 'women')->orderBy('id', 'DESC')->first();
        return view('frontend.women.cloths', compact('products', 'categories', 'navoffer'));
    }
    public function women_search(Request $request){
        $input = $request->item;
        $products = Product::where('category', 'women')->where('sub_category', 'like', "%$input%")->orderBy('id', 'DESC')->get();
        $sub_category = $products->pluck('sub_category')->toArray();
        $categories = Category::where('name', 'women')->whereIn('sub_category', $sub_category)->get();
        $navoffer = Navoffer::where('category', 'women')->orderBy('id', 'DESC')->first();
        return view('frontend.women.cloths', compact('products', 'categories', 'navoffer'));
    }
    public function women_price_search(Request $request){
        $from = $request->from;
        $to = $request->to;
        $products = Product::where('category', 'women')->whereRaw('new_price BETWEEN ' . $from . ' AND ' . $to . '')->orderBy('id', 'DESC')->get();
        $sub_category = $products->pluck('sub_category')->toArray();
        $categories = Category::where('name', 'women')->whereIn('sub_category', $sub_category)->get();
        $navoffer = Navoffer::where('category', 'women')->orderBy('id', 'DESC')->first();
        return view('frontend.women.cloths', compact('products', 'categories', 'navoffer'));
    }
}
