<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
class ContactController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {   
        Session::put('active','contact');
        return view('web.contact');
    }
}
