<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

class PencegahanController extends Controller
{
    public function index()
    {   
        Session::put('active','pencegahan');
        return view('web.pencegahan');
    }

    public function protect(){
        Session::put('active','protect');
        return view('web.protect');
    }
}
