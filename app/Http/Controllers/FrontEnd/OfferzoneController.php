<?php

namespace App\Http\Controllers\FrontEnd;

use App\Hotdeal;
use App\Http\Controllers\Controller;
use App\Offer;
use App\Product;
use Illuminate\Http\Request;

class OfferzoneController extends Controller
{
    public function offer_zone(){
        $latest_offer = Offer::where('display', 'yes')->orderBy('id', 'DESC')->first();
        $offers = Offer::where('display', '!=', 'yes')->orWhere('display', null)->orderBy('id', 'DESC')->get();
        $hotdeals = Hotdeal::orderBy('id', 'DESC')->get();
        $products = Product::orderBy('id', 'DESC')->get();
        $f= 1;
        return view('frontend.offer_zone', compact('offers', 'hotdeals', 'products', 'latest_offer', 'f'));
    }
}
