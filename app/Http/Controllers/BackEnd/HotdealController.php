<?php

namespace App\Http\Controllers\BackEnd;

use App\Hotdeal;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class HotdealController extends Controller
{

    public function index()
    {
        $hotdeals = Hotdeal::orderBy('id', 'DESC')->paginate(30);
        return view('backend.hotdeal.index', compact('hotdeals'));
    }

    public function create()
    {
        return view('backend.hotdeal.create');
    }

    public function store(Request $request)
    {
        $document = $request->file('image');
        $document_name = rand().'.'.$document->getClientOriginalExtension();
        $document->move(public_path().'/assets/images/hotdeals/',$document_name);

        Hotdeal::create([
            'name'=>$request->name,
            'image'=>$document_name,
        ]);
        return redirect()->route('hotdeal.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $hotdeal = Hotdeal::find($id);
        return view('backend.hotdeal.edit', compact('hotdeal'));
    }

    public function update(Request $request, $id)
    {
        $hotdeal = Hotdeal::find($id);
        $d = Hotdeal::find($id);
        if(!empty($request->file('image'))){
            $document = $request->file('image');
            $document_name = rand().'.'.$document->getClientOriginalExtension();
            $document->move(public_path().'/assets/images/hotdeals/',$document_name);

            $hotdeal->update([
                'name'=>$request->name,
                'image'=>$document_name,
            ]);
            unlink('assets/images/hotdeals/'.$d->image);
        }
        else{
            $hotdeal->update([
                'name'=>$request->name,
            ]);
        }
        Session::flash('success', 'Hotdeal Updated Successfully');
        return redirect()->route('hotdeal.index');
    }

    public function destroy($id)
    {
        $hotdeal = Hotdeal::find($id);
        unlink('assets/images/hotdeals/'.$hotdeal->image);
        $hotdeal->delete();
        Session::flash('success', 'Hotdeal Deleted Successfully');
        return redirect()->back();
    }
}
