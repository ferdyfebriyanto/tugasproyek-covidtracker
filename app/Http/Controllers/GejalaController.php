<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
class GejalaController extends Controller
{
    public function index()
    {   
        Session::put('active','gejala');
        return view('web.gejala');
    }
}
