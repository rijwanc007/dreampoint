<?php

namespace App\Http\Controllers\FrontEnd;

use App\Category;
use App\Http\Controllers\Controller;
use App\Navoffer;
use App\Product;
use Illuminate\Http\Request;

class KidsController extends Controller
{
    public function kids_cloth(){
        $products = Product::where('category', 'kids')->orderBy('id', 'DESC')->get();
        $sub_category = $products->pluck('sub_category')->toArray();
        $categories = Category::where('name', 'kids')->whereIn('sub_category', $sub_category)->get();
        $navoffer = Navoffer::where('category', 'kids')->orderBy('id', 'DESC')->first();
        return view('frontend.kids.cloths', compact('products', 'categories', 'navoffer'));
    }
    public function kids_search(Request $request){
        $input = $request->item;
        $products = Product::where('category', 'kids')->where('sub_category', 'like', "%$input%")->orderBy('id', 'DESC')->get();
        $sub_category = $products->pluck('sub_category')->toArray();
        $categories = Category::where('name', 'kids')->whereIn('sub_category', $sub_category)->get();
        $navoffer = Navoffer::where('category', 'kids')->orderBy('id', 'DESC')->first();
        return view('frontend.kids.cloths', compact('products', 'categories', 'navoffer'));
    }
    public function kids_price_search(Request $request){
        $from = $request->from;
        $to = $request->to;
        $products = Product::where('category', 'kids')->whereRaw('new_price BETWEEN ' . $from . ' AND ' . $to . '')->orderBy('id', 'DESC')->get();
        $sub_category = $products->pluck('sub_category')->toArray();
        $categories = Category::where('name', 'kids')->whereIn('sub_category', $sub_category)->get();
        $navoffer = Navoffer::where('category', 'kids')->orderBy('id', 'DESC')->first();
        return view('frontend.kids.cloths', compact('products', 'categories', 'navoffer'));
    }
}
