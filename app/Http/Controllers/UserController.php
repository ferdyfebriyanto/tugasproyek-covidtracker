<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class UserController extends Controller
{ 
    public function index()
    {
        $data = User::all();
        return view('admin.users',compact('data'));
    }
    public function delete($id)
    {
        User::where('id',$id)->delete();
        return redirect ('admin/users');
    }

}
