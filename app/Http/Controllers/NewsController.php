<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
class NewsController extends Controller
{
    public function index()
    {   
        Session::put('active','news');
        return view('web.news');
    }
}
