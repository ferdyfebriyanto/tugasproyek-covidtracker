<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PencegahanController extends Controller
{
    public function index()
    {   
        Session::put('active','pencegahan');
        return view('web.pencegahan');
    }
}
