<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
<<<<<<< HEAD
=======
use Session;
>>>>>>> 43b6dcd22a147ec3268950d8803c1fd0aefb8fab

class PencegahanController extends Controller
{
    public function index()
    {   
        Session::put('active','pencegahan');
        return view('web.pencegahan');
    }
<<<<<<< HEAD
=======

    public function protect(){
        Session::put('active','protect');
        return view('web.protect');
    }
>>>>>>> 43b6dcd22a147ec3268950d8803c1fd0aefb8fab
}
