<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use App\Offer;
use App\Product;
use App\Review;
use App\Wishlist;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        $products = Product::orderBy('id', 'DESC')->get();
        $products_f = Product::where('pf', 'featured')->orderBy('id', 'DESC')->skip(8)->take(16)->get();
        $reviews = Review::where('status', 'approved')->orderBy('id', 'DESC')->get();
        $offer = Offer::where('display', 'yes')->orderBy('id', 'DESC')->first();
        $n=0;$f=0;$b=0;
        return view('frontend.index', compact('products', 'products_f', 'reviews', 'offer', 'n','f','b'));
    }
    public function cloth(){
        $men_products = Product::where('category', 'men')->where('pf', 'new')->orderBy('id', 'DESC')->get();
        $women_products = Product::where('category', 'women')->where('pf', 'new')->orderBy('id', 'DESC')->get();
        $kid_products = Product::where('category', 'kids')->where('pf', 'new')->orderBy('id', 'DESC')->get();
        return view('frontend.cloth', compact('men_products', 'women_products', 'kid_products'));
    }


}
