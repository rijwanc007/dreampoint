<?php

namespace App\Http\Controllers\BackEnd;

use App\Http\Controllers\Controller;
use App\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ReviewController extends Controller
{
    public function index()
    {
        $reviews = Review::orderBy('id', 'DESC')->paginate(30);
        return view('backend.review.index', compact('reviews'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $document = $request->file('image');
        $document_name = rand().'.'.$document->getClientOriginalExtension();
        $document->move(public_path().'/assets/images/reviews/',$document_name);

        Review::create([
           'name'=>$request->name,
           'email'=>$request->email,
           'image'=>$document_name,
           'message'=>$request->message,
            'status'=>'pending',
        ]);
        Session::flash('success', 'Your Review is pending for approval');
        return redirect()->back();
    }

    public function show($id)
    {
        $review = Review::find($id);
        $review->update([
            'status'=>'pending',
        ]);
        return redirect()->back();
    }

    public function edit($id)
    {
        $review = Review::find($id);
        $review->update([
           'status'=>'approved',
        ]);
        return redirect()->back();
    }


    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        $review = Review::find($id);
        unlink('assets/images/reviews/'.$review->image);
        $review->delete();
        return redirect()->back();
    }
}
