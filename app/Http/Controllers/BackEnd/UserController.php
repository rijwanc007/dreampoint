<?php

namespace App\Http\Controllers\BackEnd;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{

    public function index()
    {
        $users = User::orderBy('id','DESC')->paginate(20);
        return view('backend.user.index',compact('users'));
    }

    public function create()
    {
        return view('backend.user.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'email' => 'unique:users',
            'password' => 'required|confirmed|',
        ]);
        $user = User::create([
            'name' => $request->name,
            'email'=>$request->email,
            'password' => bcrypt($request->password)
        ]);
        Session::flash('success','User Created Successfully');
        return redirect()->route('user.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $edit = User::find($id);
        return view('backend.user.edit', compact('edit'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'email' => 'unique:users,email,'.$id,
            'password' => 'confirmed'
        ]);
        $update = User::find($id);

            $update->update([
                'name' => $request->name,
                'email'=>$request->email,
            ]);
        if(!empty($request->password)){
            $update->update([
                'password' => bcrypt($request->password),
            ]);
        }
        Session::flash('success','User Updated Successfully');
        return redirect()->route('user.index');
    }

    public function destroy($id)
    {
        User::find($id)->delete();
        Session::flash('success','User Deleted Successfully');
        return redirect()->route('user.index');
    }
}
