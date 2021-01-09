<?php

namespace App\Http\Controllers\BackEnd;

use App\Http\Controllers\Controller;
use App\Subscriber;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SubscriberController extends Controller
{

    public function index()
    {
        $subscribers = Subscriber::orderBy('id', 'DESC')->paginate(30);
        return view('backend.subscriber.index', compact('subscribers'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $subscriber = Subscriber::where('email', $request->email)->orderBy('id', 'DESC')->first();
        if(empty($subscriber)){
            Subscriber::create([
                'email'=>$request->email,
            ]);
            Session::flash('success', 'Congratulations! You are a subscriber now.');
        }
        else{
            Session::flash('error', 'You already subscribed with this email');
        }
        return redirect()->back();
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
        Subscriber::find($id)->delete();
        Session::flash('success', 'Subscriber is deleted successfully');
        return redirect()->back();
    }
}
