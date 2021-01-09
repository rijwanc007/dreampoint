<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use App\Wishlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class WishlistController extends Controller
{

    public function wishlist(Request $request, $pid){
        $wishlist = Wishlist::where('ip', $request->ip())->where('product_id', $pid)->where('liked', 'yes')->orderBy('id', 'DESC')->first();
        if(empty($wishlist)){
            Wishlist::create([
                'ip'=>$request->ip(),
                'product_id'=>$pid,
                'liked'=>'yes',
            ]);
            $response = 'yes';
        }
        else{
            $wishlist->delete();
            $response = 'no';
        }
        return response()->json($response);
    }
    public function remove($wid){
        Wishlist::find($wid)->delete();
        return response()->json();
    }
}
