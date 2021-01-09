<?php

namespace App\Http\Controllers\BackEnd;

use App\Hotdeal;
use App\Http\Controllers\Controller;
use App\Offer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class OfferController extends Controller
{

    public function index()
    {
        $offers = Offer::orderBy('id', 'DESC')->paginate(20);
        return view('backend.offer.index', compact('offers'));
    }

    public function create()
    {
        return view('backend.offer.create');
    }

    public function store(Request $request)
    {
        $document = $request->file('image');
        $document_name = rand().'.'.$document->getClientOriginalExtension();
        $document->move(public_path().'/assets/images/offers/',$document_name);

        Offer::create([
            'name'=>$request->name,
            'duration'=>$request->duration,
            'image'=>$document_name,
        ]);
        return redirect()->route('offer.index');
    }

    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $offer = Offer::find($id);
        return view('backend.offer.edit', compact('offer'));
    }

    public function update(Request $request, $id)
    {
        $offer = Offer::find($id);
        $d = Offer::find($id);
        if(!empty($request->file('image'))){
            $document = $request->file('image');
            $document_name = rand().'.'.$document->getClientOriginalExtension();
            $document->move(public_path().'/assets/images/offers/',$document_name);

            $offer->update([
                'name'=>$request->name,
                'duration'=>$request->duration,
                'image'=>$document_name,
            ]);
            unlink('assets/images/offers/'.$d->image);
        }
        else{
            $offer->update([
                'name'=>$request->name,
                'duration'=>$request->duration,
            ]);
        }
        Session::flash('success', 'Offer Updated Successfully');
        return redirect()->route('offer.index');
    }

    public function destroy($id)
    {
        $offer = Offer::find($id);
        unlink('assets/images/offers/'.$offer->image);
        $offer->delete();
        Session::flash('success', 'Offer Deleted Successfully');
        return redirect()->back();
    }
    public function display($id){
        $offer = Offer::find($id);
        if($offer->display == 'yes'){
            $offer->update(['display'=>'no']);
        }
        else{
            $display = Offer::where('display', 'yes')->orderBy('id', 'DESC')->first();
            if(!empty($display)){
                $display->update(['display'=>'no']);
            }
            $offer->update(['display'=>'yes']);
        }
        Session::flash('success', 'You have set this offer for display in home page');
        return redirect()->back();
    }
}
