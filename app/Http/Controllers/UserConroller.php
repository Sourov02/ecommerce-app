<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserConroller extends Controller
{
    public function addUser(){
        return view('admin.user.add-user');
    }

    public function saveUser(Request $request){
        User::saveUser($request);
        return back()->with('message','User info saved');
    }

    public function manageUser(){
        return view('admin.user.manage-user',[
            'users'=>User::all()
        ]);
    }

    public function editUser($id){
        return view('admin.user.edit-user',[
            'user'=>User::find($id)
        ]);
    }

//    public function updateUser(Request $request){
//        User::updateUser($request);
//        return back()->with('message','User info updated');
//    }

    public function updateUser(Request $request){
        User::saveUser($request);
        return back()->with('message','User info updated');
    }


    public function deleteUser(Request $request){
        User::deleteUser($request);
        return back()->with('message','User info deleted');
    }

}
