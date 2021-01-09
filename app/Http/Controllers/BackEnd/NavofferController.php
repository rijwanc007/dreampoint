<?php

namespace App\Http\Controllers\BackEnd;

use App\Http\Controllers\Controller;
use App\Navoffer;
use App\Wishlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class NavofferController extends Controller
{

    public function index()
    {
        $navoffers = Navoffer::orderBy('id', 'DESC')->paginate(20);
        return view('backend.navoffer.index', compact('navoffers'));
    }

    public function create()
    {
        return view('backend.navoffer.create');
    }

    public function store(Request $request)
    {
        $document = $request->file('image');
        $document_name = rand().'.'.$document->getClientOriginalExtension();
        $document->move(public_path().'/assets/images/navoffer/',$document_name);

        Navoffer::create([
            'category'=>$request->category,
            'image'=>$document_name,
        ]);
        return redirect()->route('navoffer.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        $navoffer = Navoffer::find($id);
        unlink('assets/images/navoffer/'.$navoffer->image);
        $navoffer->delete();
        Session::flash('success', 'Nav Offer Deleted Successfully');
        return redirect()->back();
    }

    public function wishlist_index(){
        $wishlists = Wishlist::orderBy('id', 'DESC')->paginate(30);
        return view('backend.wishlist.index', compact('wishlists'));
    }
}
